<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'username' => 'kevinhanjayadi',
            'password' => Hash::make('12345'),
            'role' => 'Admin',
        ]);

        user::create([
            'username' => 'kevin',
            'password' => Hash::make('12345'),
            'role' => 'Customer',
        ]);
    }
}
