<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'test',
            'role' => 'admin',
            'email' => 'test@test.com',
            'phone' => '96170285659',
            'address' => 'test address',
            'agreed' => true,
            'password' => Hash::make('qwe123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}