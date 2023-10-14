<?php

namespace App\Helpers;

use App\Models\Currency;
use App\Models\Product;

class Helper
{
    public static function is_active($currency_name)
    {
        try {
            $currency = Currency::where('name', $currency_name)->firstOrFail();
            return $currency->active;
        } catch (\Throwable $th) {
            session()->flash('error', 'No such currency in our database!');
        }
    }

    public static function convert($curerncy_name, $number)
    {
        try {
            $currency = Currency::where('name', $curerncy_name)->firstOrFail();
            return $currency->rate * $number;
        } catch (\Throwable $th) {
            session()->flash('error', 'No such currency in our database!');
        }
    }

    public static function get_rate($curerncy_name)
    {
        try {
            $currency = Currency::select('rate')->where('name', $curerncy_name)->firstOrFail();
            return $currency->rate;
        } catch (\Throwable $th) {
            session()->flash('error', 'No such currency in our database!');
        }
    }

    public static function cart_count()
    {
        try {
            $cartItems = json_decode($_COOKIE['cart'], true) ?? [];
            return count($cartItems);
        } catch (\Throwable $th) {
            return 0;
        }
    }

    public static function get_product($id)
    {
        return Product::find($id);
    }
}