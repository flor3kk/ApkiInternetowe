<?php
$fruits = [
    1 => "banan",
    4 => "apple",
    5 => "strawberry",
    2 => "grape",
    3 => "oragne",
    7 => "watermelon",
    6 => "blueberry" 
];


print "liczba elemetnow w liscie ".count($fruits).PHP_EOL;

print_r($fruits);

array_push($fruits, "cytryna");
print "dodaje cytryne:".PHP_EOL;
print_r($fruits);

print "usuwam ostatni element tablicy";
array_pop($fruits);
print_r($fruits);

sort($fruits);
print_r($fruits);
