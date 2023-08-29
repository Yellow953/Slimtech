<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    public function run()
    {
        DB::table('currencies')->insert([
            'name' => 'LBP',
            'rate' => 95000,
            'active' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}