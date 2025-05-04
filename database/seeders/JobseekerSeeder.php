<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class JobseekerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('jobseekers')->insert([
            'name' => 'Habib Ramadhan',
            'email' => 'habib@example.com',
            'password' => Hash::make('password123'),
            'phone' => '081234567890',
            'address' => 'Jl. Merdeka No. 45',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
