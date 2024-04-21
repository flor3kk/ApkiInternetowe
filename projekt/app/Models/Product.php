<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID_produktu';

    protected $fillable = [
        'nazwa', 'cena_za_kg', 'dostepna_ilosc_kg', // Add any other columns you want to be mass assignable
    ];
}
