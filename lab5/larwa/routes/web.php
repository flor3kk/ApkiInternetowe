<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemperatureController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/greeting', function (){
    return view('stronka');
});


Route::get('/greetings/{NAME?}', function(?string $name = null){
    if($name == NULL){
        return 'siema ziomo nieznajomy';
    }
    else{
        return 'siema ziomo o imieniu: '.$name;
    }
});


Route::get('/ctf/{c?}', [TemperatureController::class, 'ctf']);


Route::get('/zad9', function (Request $request) {
    $br = "<br>";
    $r = $request->path() . $br .
    $request->url() . $br .
    $request->fullUrl() . $br .
    $request->method(). $br .
    $request->isMethod('post'). $br .
    $request->header('User-Agent'). $br .
    $request->ip();
    return $r;
});

Route::get('/zad10', function (Request $request) {
    $br = "<br>";
    $r = print_r($request->all(), true) . $br .
    $request->query('a') . $br .
    $request->query('b', 'brak b') . $br .
    print_r($request->query(), true) . $br .
    $request->a . $br .
    $request->has(['a', 'b']) . $br .
    $request->filled(['a']) . $br;
    return $r;
});


Route::get('/zad13', function (Request $request) {
    $name = $request->name;
    $arr = ['a', 'b', 'c', 'd', 'e'];
    return view('zad13', ['name' => $name, 'arr' => $arr]);
});

Route::get('/trips', function(){
    return view('index');
});
