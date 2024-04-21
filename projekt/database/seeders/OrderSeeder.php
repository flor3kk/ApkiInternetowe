<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {}
    //     Schema::disableForeignKeyConstraints(); // Wyłączamy sprawdzanie kluczy obcych na czas dodawania danych

    //     Order::truncate(); // Usuwamy istniejące dane z tabeli zamówień

    //     $clients = Client::pluck('ID_klienta'); // Pobieramy identyfikatory wszystkich klientów
    //     $products = Product::pluck('ID_produktu'); // Pobieramy identyfikatory wszystkich produktów

    //     // Tworzymy losowe zamówienia
    //     for ($i = 0; $i < 20; $i++) { // Tworzymy 20 losowych zamówień
    //         $clientID = $clients->random(); // Losujemy ID klienta
    //         $productID = $products->random(); // Losujemy ID produktu

    //         // Tworzymy losową datę
    //         $date = now()->subDays(rand(0, 365)); // Losujemy liczbę dni wstecz od dzisiaj

    //         // Losujemy ilość kg oraz cenę
    //         $quantity = rand(1, 10);
    //         $price = rand(10, 100) + (rand(0, 99) / 100); // Losujemy cenę z dokładnością do groszy

    //         // Dodajemy zamówienie do bazy danych
    //         Order::create([
    //             'ID_produktu' => $productID,
    //             'ID_klienta' => $clientID,
    //             'data_zamowienia' => $date,
    //             'ilosc_kg' => $quantity,
    //             'cena' => $price,
    //         ]);
    //     }

    //     Schema::enableForeignKeyConstraints(); // Ponownie włączamy sprawdzanie kluczy obcych
    // }
}
