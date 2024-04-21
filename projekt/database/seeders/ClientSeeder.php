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
                'imie' => 'Jan',
                'nazwisko' => 'Kowalski',
                'adres_mail' => 'jan.kowalski@example.com',
                'numer_telefonu' => '123456789',
            ],
            [
                'imie' => 'Anna',
                'nazwisko' => 'Nowak',
                'adres_mail' => 'ann.nmowak@example.com',
                'numer_telefonu' => '123456789',
            ],
            [
                'imie' => 'Karol',
                'nazwisko' => 'Bang',
                'adres_mail' => 'bangbang@example.com',
                'numer_telefonu' => '123456789',
            ]
        ]
    );
}
}
