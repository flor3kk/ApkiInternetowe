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
                'category_id' => 3
            ],
            [
                'name' => 'Czekolada milka orzechowa',
                'price' => 2.3,
                'available' => 24,
                'calories' => '456kcal / 100g',
                'description' => 'firma qqqq',
                'img' => 'milka.jpg',
                'category_id' => 3
            ],
            [
                'name' => 'Czekolada Milka Orzechowa',
                'price' => 2.3,
                'available' => 24,
                'calories' => '456kcal / 100g',
                'description' => 'Delikatna czekolada mleczna z chrupiącymi kawałkami orzechów. Firma Milka, uznawana za najlepszą w swojej klasie.',
                'img' => 'milka_orzechowa.jpg',
                'category_id' => 3
            ],
            [
                'name' => 'Baton Mars',
                'price' => 1.2,
                'available' => 50,
                'calories' => '448kcal / 100g',
                'description' => 'Klasyczny baton z mlecznej czekolady, nugatu i karmelu. Idealny na szybką przekąskę. Producent: Mars.',
                'img' => 'mars.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Ciastka Oreo',
                'price' => 1.5,
                'available' => 35,
                'calories' => '470kcal / 100g',
                'description' => 'Popularne ciastka z kremowym nadzieniem. Idealne do mleka lub jako dodatek do deserów. Producent: Oreo.',
                'img' => 'oreo.jpg',
                'category_id' => 6
            ],
            [
                'name' => 'Czekolada Lindt Excellence 70%',
                'price' => 3.0,
                'available' => 20,
                'calories' => '540kcal / 100g',
                'description' => 'Wykwintna gorzka czekolada o zawartości kakao 70%. Gwarantuje intensywne doznania smakowe. Producent: Lindt.',
                'img' => 'lindt_70.jpg',
                'category_id' => 3
            ],
            [
                'name' => 'Żelki Haribo Złote Misie',
                'price' => 1.8,
                'available' => 40,
                'calories' => '340kcal / 100g',
                'description' => 'Kolorowe żelki o różnych smakach owocowych. Idealne dla dzieci i dorosłych. Producent: Haribo.',
                'img' => 'haribo_misie.jpg',
                'category_id' => 5
            ],
            [
                'name' => 'M&M\'s Czekoladowe',
                'price' => 2.0,
                'available' => 60,
                'calories' => '500kcal / 100g',
                'description' => 'Chrupiące drażetki z mleczną czekoladą w kolorowych skorupkach. Doskonałe na każdą okazję. Producent: Mars.',
                'img' => 'mms.jpg',
                'category_id' => 6
            ],
            [
                'name' => 'Ciastka Milka Choco Cookies',
                'price' => 2.5,
                'available' => 30,
                'calories' => '480kcal / 100g',
                'description' => 'Kruche ciastka z kawałkami czekolady. Idealne na przekąskę do kawy. Producent: Milka.',
                'img' => 'milka_cookies.jpg',
                'category_id' => 6
            ],
            [
                'name' => 'Czekolada Wedel Gorzkie 64%',
                'price' => 2.2,
                'available' => 25,
                'calories' => '540kcal / 100g',
                'description' => 'Polska czekolada gorzka o zawartości kakao 64%. Intensywny smak dla prawdziwych koneserów. Producent: Wedel.',
                'img' => 'wedel_gorzka.jpg',
                'category_id' => 3
            ],
            [
                'name' => 'Baton KitKat',
                'price' => 1.0,
                'available' => 55,
                'calories' => '518kcal / 100g',
                'description' => 'Wafelki pokryte mleczną czekoladą, idealne na przerwę. Producent: Nestlé.',
                'img' => 'kitkat.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Czekolada Ritter Sport Marcepan',
                'price' => 2.7,
                'available' => 22,
                'calories' => '530kcal / 100g',
                'description' => 'Czekolada mleczna z nadzieniem marcepanowym. Wyjątkowe połączenie smaków. Producent: Ritter Sport.',
                'img' => 'ritter_marcepan.jpg',
                'category_id' => 3
            ],

        ]
    );
}
}
