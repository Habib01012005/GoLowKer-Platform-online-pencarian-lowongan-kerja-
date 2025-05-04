<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('companies')->insert([
            'company_name' => 'PT Teknologi Hebat',
            'email' => 'hrd@teknologihebat.com',
            'password' => Hash::make('company123'),
            'phone' => '0217896543',
            'address' => 'Jl. Industri No. 99',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
