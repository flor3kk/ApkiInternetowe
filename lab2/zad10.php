<?php
$osoby = [
    'Jan' => 45,
    'Bartosz' => 38,
    'Piotr' => 40
];

//dodawanie
$osoby['Witold'] = 28;

//usuwanie
unset($osoby['Piotr']);

//wyswietlanie
foreach($osoby as $klucz=>$wartosc){
    print $klucz." ma ".$wartosc." lat, ";
}
print PHP_EOL;

print "ilosc osob: ".count($osoby).PHP_EOL;

print "wiek bartosza:".$osoby['Bartosz'];

arsort($osoby);
print_r($osoby);

