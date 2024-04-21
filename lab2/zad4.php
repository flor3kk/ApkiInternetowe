<?php
$text1 = "   Programuję dobrze  ";
$text2 = "dobrze w PHP.  ";

print strlen($text1).PHP_EOL;

print strrev($text2).PHP_EOL;

$dlugosc = (strlen($text1) > strlen($text2)) ? "$text1 jest dluzszy" : "$text2 jest dluzszy";
print $dlugosc.PHP_EOL;

if (str_contains($text1, "Programuję")){
    echo "zawiera slowo Programuję".PHP_EOL;
}

if (str_starts_with($text2, "dobrze")){
    echo "tak jest".PHP_EOL;
}

print trim($text1)." ".trim($text2).PHP_EOL;

$text3 =  trim($text1)." ".trim($text2);
$elem = explode(' ', $text3);
print_r($elem);


print str_replace('dobrze', 'zle', $text1).PHP_EOL;

$pos = mb_stripos($text2, 'PHP');
print $pos.PHP_EOL;


print mb_strtoupper($text1).PHP_EOL;

print ucfirst($text2).PHP_EOL;

print mb_substr($text2, 9, 11).PHP_EOL;