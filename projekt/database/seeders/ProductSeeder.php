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
                'calories' => '456kcal / 100g',
                'description' => 'firma xdxdd',
                'img' => 'zelki.jpg',
                'category_id' => 5
            ],
            [
                'name' => 'Cukierki mleczne',
                'price' => 2,
                'available' => 200,
                'calories' => '456kcal / 100g ',
                'description' => 'firma ROSHEN',
                'img' => 'cukierki_slodkie.jpg',
                'category_id' => 4
            ],
            [
                'name' => 'cukierki kwaśne shock',
                'price' => 1.1,
                'available' => 200,
                'calories' => '456kcal / 100g',
                'description' => 'firma aaaaa',
                'img' => 'cukierki_kwasne.jpg',
                'category_id' => 4
            ],
            [
                'name' => 'Czekolada milka malinowa',
                'price' => 4,
                'available' => 25,
                'calories' => '456kcal / 100g',
                'description' => 'firma mmmmm',
                'img' => 'czekolada_prod.png',
                'category_id' => 3
            ],
            [
                'name' => 'Lody',
                'price' => 5,
                'available' => 200,
                'calories' => '456kcal / 100g',
                'description' => 'firma qqqq',
                'img' => 'lody.png',
                'category_id' => 2
            ],
            [
                'name' => 'Batonik papita',
                'price' => 2,
                'available' => 24,
                'calories' => '421kcal / 100g',
                'description' => 'firma wwwww',
                'img' => 'batonik_prod.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Kitkat',
                'price' => 1,
                'available' => 22,
                'calories' => '456kcal / 100g',
                'description' => 'firma qqqq',
                'img' => 'kitkat.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Czekolada goplana',
                'price' => 23,
                'available' => 12,
                'calories' => '456kcal / 100g',
                'description' => 'firma qqqq',
                'img' => 'czekolada_gop.jpg',
                'category_id' => 2
            ],
            [
                'name' => 'Czekolada milka orzechowa',
                'price' => 2.3,
                'available' => 24,
                'calories' => '456kcal / 100g',
                'description' => 'firma qqqq',
                'img' => 'milka.jpg',
                'category_id' => 2
            ],
        ]
    );
}
}
