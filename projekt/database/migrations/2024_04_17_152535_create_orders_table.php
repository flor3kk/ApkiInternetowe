<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('ID_zamowienia');
            $table->foreignId('ID_produktu')->references('ID_produktu')->on('products');
            $table->foreignId('ID_klienta')->references('ID_klienta')->on('clients');
            $table->date('data_zamowienia');
            $table->float('ilosc_kg');
            $table->float('cena');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
