<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Promo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['order', 'checkout']);
    }

    public function cart()
    {
        $sub_total = 0;
        try {
            $cart_items = json_decode($_COOKIE['cart'], true);
        } catch (\Throwable $th) {
            $cart_items = [];
        }

        if ($cart_items != []) {
            foreach ($cart_items as $productID => $cart_item) {
                $item = Product::find($productID);
                if ($cart_item['type'] == 'buy') {
                    $sub_total += $item->sell_price * $cart_item['quantity'];
                } else if ($cart_item['type'] == 'rent') {
                    $sub_total += $item->rent_price * $cart_item['quantity'] * $cart_item['months'];
                }
            }
        }

        $data = compact('cart_items', 'sub_total');
        return view('cart', $data);
    }

    public function checkout()
    {
        $sub_total = 0;
        $total = 0;

        try {
            $cart_items = json_decode($_COOKIE['cart'], true);
        } catch (\Throwable $th) {
            $cart_items = [];
        }

        if ($cart_items != []) {
            foreach ($cart_items as $productID => $cart_item) {
                $item = Product::find($productID);
                if ($cart_item['type'] == 'buy') {
                    $sub_total += $item->sell_price * $cart_item['quantity'];
                } else if ($cart_item['type'] == 'rent') {
                    $sub_total += $item->rent_price * $cart_item['quantity'] * $cart_item['months'];
                }
            }
        }

        $total = $sub_total;
        $data = compact('cart_items', 'sub_total', 'total');
        return view('checkout', $data);
    }

    public function order(Request $request)
    {
        $discount = 0;
        $total_price = 0;

        try {
            $cart_items = json_decode($_COOKIE['cart'], true) ?? [];
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'No Items in your Cart!');
        }

        if ($request->promo != null) {
            $promo = Promo::where('name', 'LIKE', $request->promo)->firstOrFail();
            $discount = $promo->value;
        }

        $order = new Order();
        $order->user_id = auth()->user()->id;
        $order->status = 'new';
        $order->save();

        foreach ($cart_items as $productID => $cart_item) {
            $product = Product::find($productID);

            if ($product->quantity - $cart_item['quantity'] < 0 || $cart_item['quantity'] < 0) {
                return redirect()->back()->with('danger', 'Product not available...');
            }

            if ($cart_item['type'] == 'buy') {
                $order->products()->attach($product, ['quantity' => $cart_item['quantity'], 'type' => 'buy', 'months' => $cart_item['months']]);
                $total_price += $product->sell_price * $cart_item['quantity'];
            } else if ($cart_item['type'] == 'rent') {
                $order->products()->attach($product, ['quantity' => $cart_item['quantity'], 'type' => 'rent', 'months' => $cart_item['months'], 'rented_at' => Carbon::now(), 'rented_untill' => Carbon::now()->addMonth($cart_item['months'] ?? 1)]);
                $total_price += $product->rent_price * $cart_item['quantity'] * ($cart_item['months'] ?? 1);
            }

            $product->update([
                'quantity' => $product->quantity - $cart_item['quantity']
            ]);
        }

        if ($discount != 0) {
            $total_price -= ($total_price * $discount);
        }

        $order->total_price = $total_price;

        $order->save();
        $cookie = cookie()->forget('cart');

        return redirect()->back()->with('success', 'Order Submitted, Thank You For Choosing Us!')->cookie($cookie);
    }
}
