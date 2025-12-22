<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Create default admin account
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@sekolah.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        // Create staff account
        User::create([
            'name' => 'Staff PPDB',
            'email' => 'staff@sekolah.com',
            'password' => Hash::make('staff123'),
            'role' => 'staff',
        ]);
    }
}
