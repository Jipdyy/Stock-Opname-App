<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Administrator Sarpras',
                'password' => Hash::make('password123'),
                'role' => 'admin',
            ]
        );

        User::updateOrCreate(
            ['email' => 'staff@gmail.com'],
            [
                'name' => 'Staff Sarpras',
                'password' => Hash::make('password123'),
                'role' => 'staff',
            ]
        );
        
        User::updateOrCreate(
            ['email' => 'headmaster@gmail.com'],
            [
                'name' => 'Kepala Sekolah',
                'password' => Hash::make('password123'),
                'role' => 'headmaster',
            ]
        );
    }
}
