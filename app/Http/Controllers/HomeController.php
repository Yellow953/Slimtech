<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->except('index', 'about', 'contact');
    }

    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function custom_logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

    public function shop()
    {
        $ems = Product::where('category_id', 1)->get();
        $products = Product::where('category_id', 2)->get();
        $services = Product::where('category_id', 3)->get();

        $data = compact('ems', 'products', 'services');
        return view('shop', $data);
    }

    public function cart()
    {
        $sub_total = 0;
        $total = 0;
        $cart_items = Cart::where('user_id', auth()->user()->id)->get();

        foreach ($cart_items as $cart_item) {
            $sub_total += $cart_item->product->sell_price * $cart_item->quantity;
        }
        $total = $sub_total;

        $data = compact('cart_items', 'sub_total', 'total');
        return view('cart', $data);
    }

    public function checkout(Request $request)
    {
        $discount = 0;
        $total_price = 0;

        $cart_items = Cart::where('user_id', auth()->user()->id)->get();

        if ($cart_items->count() == 0) {
            return redirect()->back()->with('danger', 'Cart empty...');
        }

        if ($request->promo != null) {
            $promo = Promo::where('name', 'LIKE', $request->promo)->firstOrFail();
            $discount = $promo->value;
        }

        $order = auth()->user()->orders()->create([]);

        foreach ($cart_items as $cart_item) {
            $product = Product::FindOrFail($cart_item->product_id);

            if (($product->quantity - $cart_item->quantity) < 0 || $cart_item->quantity < 0) {
                return redirect()->back()->with('danger', 'Product not available...');
            }

            $order->products()->attach($product, ['quantity' => $cart_item->quantity]);
            $total_price += $product->sell_price * $cart_item->quantity;

            $product->update([
                'quantity' => $product->quantity - $cart_item->quantity
            ]);

            if ($discount != 0) {
                $total_price -= ($total_price * $discount);
            }

            $order->update([
                'total_price' => $total_price
            ]);

            $cart_item->delete();
        }

        return redirect()->back()->with('success', 'Order submitted, thank you for choosing us!');
    }

    public function profile()
    {
        return view('profile');
    }

    public function save_profile(Request $request)
    {
        $user = Auth()->user();

        $user->update(
            $request->all()
        );
        $user->address = $request->address;
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully...');
    }

    public function EditPassword()
    {
        return view('edit_password');
    }

    public function UpdatePassword(Request $request)
    {
        $user = auth()->user();
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with("danger", "Old Password Doesn't match!");
        }

        if ($request->new_password == $request->confirm_password) {
            $user->password = Hash::make($request->new_password);
            $user->save();
            return redirect()->back()->with('success', "Your password has been changed");
        } else {
            return redirect()->back()->with('danger', "Passwords do not match!");
        }
    }

}