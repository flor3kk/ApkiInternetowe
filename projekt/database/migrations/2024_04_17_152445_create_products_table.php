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
        Schema::create('products', function (Blueprint $table) {
            $table->id('ID_produktu');
            $table->string('nazwa');
            $table->float('cena_za_kg');
            $table->float('dostepna_ilosc_kg');
            $table->string('img', 25);
            $table->foreignId('ID_kategorii')->references('ID_kategorii')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
