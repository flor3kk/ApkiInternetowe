<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Schema::withoutForeignKeyConstraints(function () {
        //Trip::truncate();
        Product::truncate();
    });

    Product::insert(
        [
            [
                'nazwa' => 'zelki',
                'cena_za_kg' => 3,
                'dostepna_ilosc_kg' => 200,
                'img' => 'zelki.jpg',
                'ID_kategorii' => 5
            ],
            [
                'nazwa' => 'cuierki slodkie',
                'cena_za_kg' => 2,
                'dostepna_ilosc_kg' => 200,
                'img' => 'zelki.jpg',
                'ID_kategorii' => 4
            ],
            [
                'nazwa' => 'cukierki kwasne',
                'cena_za_kg' => 25,
                'dostepna_ilosc_kg' => 200,
                'img' => 'zelki.jpg',
                'ID_kategorii' => 4
            ],
            [
                'nazwa' => 'czekolada',
                'cena_za_kg' => 15,
                'dostepna_ilosc_kg' => 25,
                'img' => 'zelki.jpg',
                'ID_kategorii' => 3
            ],
            [
                'nazwa' => 'lody',
                'cena_za_kg' => 25,
                'dostepna_ilosc_kg' => 200,
                'img' => 'lody.png',
                'ID_kategorii' => 2
            ]
        ]
    );
}
}
