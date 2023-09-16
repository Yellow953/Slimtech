<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Log;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function edit()
    {
        if (Currency::count() == 0) {
            $currency = new Currency();
            $currency->name = "LBP";
            $currency->rate = 90000;
            $currency->active = false;
            $currency->save();
        }

        $currency = Currency::firstOrFail();
        return view('currencies.edit', compact('currency'));
    }

    public function update(Request $request)
    {
        if ($request->rate <= 0) {
            return redirect()->back()->with('danger', 'Negative Values...');
        }

        $currency = Currency::firstOrFail();
        $currency->rate = $request->rate;
        $text = "Currency changed to " . $currency->rate . ", datetime: " . now();
        $currency->save();

        Log::create(['text' => $text]);
        return redirect('/app')->with('success', 'Currency successfully changed');
    }

    public function active(Request $request)
    {
        if (Currency::count() == 0) {
            $currency = new Currency();
            $currency->name = "LBP";
            $currency->rate = 90000;
            $currency->active = false;
            $currency->save();
        } else {
            $currency = Currency::firstOrFail();
        }

        if ($currency->active == true) {
            $currency->active = false;
        } else {
            $currency->active = true;
        }

        $currency->save();
        return redirect()->back()->with('success', 'Currency successfully switched');
    }

}