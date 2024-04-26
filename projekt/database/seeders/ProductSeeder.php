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
                'name' => 'żelki',
                'price' => 3.2,
                'available' => 23,
                'description' => '456kcal / 100g',
                'img' => 'zelki.jpg',
                'category_id' => 5
            ],
            [
                'name' => 'Cukierki mleczne',
                'price' => 2,
                'available' => 200,
                'description' => '456kcal / 100g, firma ROSHEN',
                'img' => 'cukierki_slodkie.jpg',
                'category_id' => 4
            ],
            [
                'name' => 'cukierki kwaśne shock',
                'price' => 1.1,
                'available' => 200,
                'description' => '456kcal / 100g',
                'img' => 'cukierki_kwasne.jpg',
                'category_id' => 4
            ],
            [
                'name' => 'Czekolada milka malinowa',
                'price' => 4,
                'available' => 25,
                'description' => '456kcal / 100g',
                'img' => 'czekolada_prod.png',
                'category_id' => 3
            ],
            [
                'name' => 'Lody',
                'price' => 5,
                'available' => 200,
                'description' => '456kcal / 100g',
                'img' => 'lody.png',
                'category_id' => 2
            ],
            [
                'name' => 'Batonik papita',
                'price' => 2,
                'available' => 24,
                'description' => '421kcal / 100g',
                'img' => 'batonik_prod.jpg',
                'category_id' => 1
            ]
        ]
    );
}
}
