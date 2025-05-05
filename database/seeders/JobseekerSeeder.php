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
            [
                'name' => 'Habib Putra',
                'email' => 'habib@example.com',
                'password' => Hash::make('password123'),
                'admin_id' => 1, // Pastikan admin dengan ID 1 ada
                'phone' => '081234567890',
                'address' => 'Jl. Merdeka No. 123, Jakarta',
                'resume' => 'resume_habib.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Siti Nurhaliza',
                'email' => 'siti@example.com',
                'password' => Hash::make('siti12345'),
                'admin_id' => 1,
                'phone' => '082112345678',
                'address' => 'Jl. Pelangi No. 45, Bandung',
                'resume' => 'resume_siti.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
