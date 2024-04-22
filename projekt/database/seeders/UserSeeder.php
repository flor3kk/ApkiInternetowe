<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::insert(
            [
                [
                    'name' => 'Jan', 'email' => 'jan@email.com', 'password' => Hash::make('1234')
                ],
                [
                    'name' => 'Siu Hun', 'email' => 'siuhun@email.com', 'password' => Hash::make('1234')
                ],
                [
                    'name' => 'Helmut', 'email' => 'helmut@email.com', 'password' => Hash::make('1234')
                ],
                [
                    'name' => 'Marta', 'email' => 'marta@email.com', 'password' => Hash::make('1234')
                ],
                [
                    'name' => 'Bill', 'email' => 'bill@email.com', 'password' => Hash::make('1234')
                ],
                [
                    'name' => 'Lilly', 'email' => 'lilly@email.com', 'password' => Hash::make('1234')
                ]
            ]
        );
    }
}
