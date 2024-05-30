<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Order;
use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([

            UserSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            OrderSeeder::class,

        ]);
    }
}
