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
            [
                'company_name' => 'PT Teknologi Nusantara',
                'email' => 'hrd@teknologinusantara.com',
                'password' => Hash::make('company123'),
                'admin_id' => 1, // Pastikan admin dengan ID 1 sudah ada
                'phone' => '0211234567',
                'company_description' => 'Perusahaan IT yang bergerak di bidang pengembangan software.',
                'website' => 'https://teknologinusantara.com',
                'address' => 'Jl. Gatot Subroto No. 12, Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_name' => 'CV Kreatif Mandiri',
                'email' => 'admin@kreatifmandiri.co.id',
                'password' => Hash::make('kreatif123'),
                'admin_id' => 1,
                'phone' => '0227654321',
                'company_description' => 'CV yang bergerak di bidang desain grafis dan branding.',
                'website' => 'https://kreatifmandiri.co.id',
                'address' => 'Jl. Dago No. 77, Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
