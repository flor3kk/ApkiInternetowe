<?php
//Zad 2.12

setlocale(LC_TIME, 'pl_PL');
date_default_timezone_set("Europe/Warsaw");

//D dzien, d-m-Y dzien misiac rok
print date("D, d-m-Y").PHP_EOL;;

//Y-M-d rok miesiac dzien, G:i godzina:minuta
print date("Y-M-d G:i").PHP_EOL;

$data = new DateTime();
$data2 = new DateTime("2021-03-12");
$roznica =  date_diff($data, $data2);
print $roznica -> format('%a tyle dni minelo').PHP_EOL;

$godzina = new DateTime();
$godzina_7 = new DateTime('07:00:00');
$godziny = date_diff( $godzina_7, $godzina);
print $godziny -> format('%h godzin i %i minut').PHP_EOL;

$dzisiaj = new DateTime();
$sprawdzenia = new DateTime('2023-04-01');
print ($dzisiaj > $sprawdzenia) ? "dzisiejsza data jest pozniejsza" : "data 1 kwietnia 2023 pozniejsza";

