<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Log;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $purchases = Purchase::all();
        return view('purchases.index', compact('purchases'));
    }

    public function new()
    {
        $categories = Category::with('products')->get();
        $users = User::all();

        $data = compact('categories', 'users');
        return view('purchases.new', $data);
    } //end of new

    public function create(Request $request)
    {
        $request->validate([
            'products' => 'required|array',
        ]);

        $this->attach_purchase($request);

        return redirect('/purchases')->with('success', "Purchase Order created successfully");
    } //end of create

    public function edit($id)
    {
        $purchase = Purchase::findOrFail($id);
        $categories = Category::with('products')->get();
        $users = User::all();

        $data = compact('categories', 'purchase', 'users');
        return view('purchases.edit', $data);
    } //end of edit

    public function update(Request $request, $id)
    {
        $request->validate([
            'products' => 'required|array',
        ]);

        $purchase = Purchase::findOrFail($id);

        $this->detach_purchase($purchase);

        $this->attach_purchase($request);

        session()->flash('success', "Purchase Order updated successfully");
        return redirect('/purchases');
    } //end of update

    public function show($id)
    {
        $purchase = Purchase::findOrFail($id);
        return view('purchases.show', compact('purchase'));
    }

    public function destroy($id)
    {
        $purchase = Purchase::findOrFail($id);

        $text = $purchase->user->name . " deleted Purchase Order " . $purchase->id . ", datetime: " . now();
        Log::create(['text' => $text]);

        $purchase->delete();
        session()->flash('success', "Purchase Order successfully deleted!");
        return redirect('/purchases');
    } //end of purchase

    public function complete($id)
    {
        $purchase = Purchase::findOrFail($id);
        $purchase->update([
            'status' => 'completed'
        ]);
        return redirect()->back()->with('success', 'Purchase Order successfully completed!');
    }

    // Private 

    private function attach_purchase($request)
    {
        $user = User::findOrFail($request->user_id);
        $purchase = $user->purchases()->create([]);

        $text = "Purchase Order " . $purchase->id . " : ";
        $total_price = 0;

        foreach ($request->products as $id => $item) {
            if ($item['quantity'] <= 0) {
                return redirect()->back()->with('danger', 'Negative Values...');
            }

            $product = Product::FindOrFail($id);
            $text .= $product->name . " : " . $item['quantity'] . " , ";

            $total_price += $product->buy_price * $item['quantity'];
            $purchase->products()->attach([
                $id => [
                    'quantity' => $item['quantity'],
                ]
            ]);

            $product->update([
                'quantity' => $product->quantity + $item['quantity']
            ]);
        } //end of foreach

        $purchase->update([
            'delivery_date' => $request->delivery_date,
            'total_price' => $request->total_price
        ]);
        $text .= " total price : " . $request->total_price;

        $text .= ", datetime: " . now();
        Log::create(['text' => $text]);
    } //end of attach purchase

    private function detach_purchase($purchase)
    {
        foreach ($purchase->products as $product) {

            $product->update([
                'quantity' => $product->quantity - $product->pivot->quantity
            ]);
        } //end of for each

        $purchase->delete();
    } //end of detach purchase

}
