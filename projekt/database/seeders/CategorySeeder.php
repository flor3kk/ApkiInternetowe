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
        //Trip::truncate();
        Category::truncate();
    });

    Category::insert(
        [
            ['nazwa' => 'batony',],
            ['nazwa' => 'lody',],
            ['nazwa' => 'czekolady',],
            ['nazwa' => 'cukierki',],
            ['nazwa' => 'zelki',],
        ]
    );
}
}
