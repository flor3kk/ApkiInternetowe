<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemperatureController extends Controller
{
    public function ctf(?float $c = null) {
        $fahr = ($c*(9/5))+32;
        if ($c == null){
            return "<h2>".'nie podano wartosci'."</h2>";
        }
        else{
            return dump($fahr)."<h2>".$c.'C to: '.$fahr.'F'."</h2>";
        }
    }
}
