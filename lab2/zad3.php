<?php
$a = 4;
define('b', 10);

print "a ma wartosc: ".$a.PHP_EOL;
print "b ma wartosc: ".b.PHP_EOL;

$a = 7;
define('b', 22);

print "a ma wartosc: ".$a.PHP_EOL;
print "b ma wartosc: ".b.PHP_EOL;

//zmienna b jest ustawiona na zmienna stała ktorej nie da sie zmienc
//a jak dobrze wiemy nie mozemy zmieniac wartosci stałych