<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Trip extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $atributes = ['period' => 7];

    protected $fillable = ['name', 'continent', 'period', 'description', 'price', 'img', 'country_id'];


}
