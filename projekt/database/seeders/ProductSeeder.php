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
                'name' => 'zelki',
                'price' => 3,
                'available' => 200,
                'description' => '456kcal / 100g',
                'img' => 'zelki.jpg',
                'category_id' => 5
            ],
            [
                'name' => 'cuierki slodkie',
                'price' => 2,
                'available' => 200,
                'description' => '456kcal / 100g',
                'img' => 'zelki.jpg',
                'category_id' => 4
            ],
            [
                'name' => 'cukierki kwasne',
                'price' => 25,
                'available' => 200,
                'description' => '456kcal / 100g',
                'img' => 'zelki.jpg',
                'category_id' => 4
            ],
            [
                'name' => 'czekolada',
                'price' => 15,
                'available' => 25,
                'description' => '456kcal / 100g',
                'img' => 'zelki.jpg',
                'category_id' => 3
            ],
            [
                'name' => 'lody',
                'price' => 25,
                'available' => 200,
                'description' => '456kcal / 100g',
                'img' => 'lody.png',
                'category_id' => 2
            ]
        ]
    );
}
}
