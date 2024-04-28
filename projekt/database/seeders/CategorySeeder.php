<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;


class CategorySeeder extends Seeder
{
    public function run(): void
    {
    Schema::withoutForeignKeyConstraints(function () {
        Category::truncate();
    });

    Category::insert(
        [
            ['name' => 'batony',],
            ['name' => 'lody',],
            ['name' => 'czekolady',],
            ['name' => 'cukierki',],
            ['name' => 'zelki',],
        ]
    );
}
}
