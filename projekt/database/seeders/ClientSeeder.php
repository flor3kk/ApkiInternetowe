<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Schema::withoutForeignKeyConstraints(function () {
        //Trip::truncate();
        Client::truncate();
    });

    Client::insert(
        [
            [
                'adres_mail' => 'jan.kowalski@example.com',
                'password' => 1234,
                'nazwisko' => 'Kowalski',
                'numer_telefonu' => '123456789'
            ],
            [
                'adres_mail' => 'ann.nmowak@example.com',
                'password' => 1234,
                'nazwisko' => 'Nowak',
                'numer_telefonu' => '123456789'
            ],
            [
                'adres_mail' => 'bangbang@example.com',
                'password' => 1234,
                'nazwisko' => 'Bang',
                'numer_telefonu' => '123456789',
            ]
        ]
    );
}
}
