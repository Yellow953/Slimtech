<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class VatSeeder extends Seeder
{
    public function run()
    {
        DB::table('vats')->insert([
            'value' => '11',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}