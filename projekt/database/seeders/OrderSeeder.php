<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
    Schema::withoutForeignKeyConstraints(function () {
        Order::truncate();
    });

    Order::insert([
        [
            'product_id' => 1,
            'user_id' => 2,
            'order_date' => Carbon::now(),
            'order_kg' => 5,
            'order_price' => 27.12,
        ],
        [
            'product_id' => 2,
            'user_id' => 2,
            'order_date' => Carbon::now(),
            'order_kg' => 3,
            'order_price' => 20.50,
        ],
        [
            'product_id' => 3,
            'user_id' => 2,
            'order_date' => Carbon::now(),
            'order_kg' => 2,
            'order_price' => 15.75,
        ],
        [
            'product_id' => 1,
            'user_id' => 1,
            'order_date' => Carbon::now(),
            'order_kg' => 5,
            'order_price' => 27.12,
        ],
        [
            'product_id' => 3,
            'user_id' => 1,
            'order_date' => Carbon::now(),
            'order_kg' => 3,
            'order_price' => 20.50,
        ],
        [
            'product_id' => 4,
            'user_id' => 3,
            'order_date' => Carbon::now(),
            'order_kg' => 2,
            'order_price' => 7.77,
        ],
        [
            'product_id' => 5,
            'user_id' => 4,
            'order_date' => Carbon::now(),
            'order_kg' => 3,
            'order_price' => 123,
        ],
        [
            'product_id' => 2,
            'user_id' => 4,
            'order_date' => Carbon::now(),
            'order_kg' => 1,
            'order_price' => 21.12,
        ],
        [
            'product_id' => 2,
            'user_id' => 3,
            'order_date' => Carbon::now(),
            'order_kg' => 3,
            'order_price' => 5,
        ],
    ]);

}
}
