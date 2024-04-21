<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**

    *Run the migrations.
     */

  public function up(): void{
    Schema::create('trips', function (Blueprint $table) {
        $table->id('id');
        $table->string('name', length: 25);
        $table->string('continent');
        $table->tinyInteger('period');
        $table->text('description');
        $table->decimal('price', total:7, places:2);
        $table->string('img');
        $table->foreignId('country_id')->references('id')->on('countries');
    }
    );
}

    /**
     * Reverse the migrations.
     */

  public function down(): void{
    Schema::dropIfExists('trips');
}
};
