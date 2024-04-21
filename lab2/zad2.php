<?php
$a = 4;
define('b', 10);
$c = 4.0;
$d = 5.667;

print "dodawanie: ".$a." + ".+b." = ".$a+b.PHP_EOL;
print "dzielenie: ".$a." / ".+b." = ".$a/b.PHP_EOL;
print "potega: ".$a." ** ".+b." = ".$a**b.PHP_EOL;
print "modulo: ".b." % ".+$a." = ".b%$a.PHP_EOL;

if ($a == b){
    print "taka sama".PHP_EOL;;
}
else{
    print "nie taka sama".PHP_EOL;;
}
PHP_EOL;

if ($a > b){
    print "a jest wieksze".PHP_EOL;;
}
else{
    print "a jest mniejsze".PHP_EOL;;
}

$xd = ($a > b ) ? 'jest wieksze' : 'jest mniejsze';
print "uzywajac trojargumentowego operatora: $xd".PHP_EOL;;

$ac = ($a == $c) ? 'maja taka sama wartosc' : 'nie maja takiej samej wartosci';
print "$a i $c: $ac".PHP_EOL;

$ac2 = ($a === $c) ? 'maja taka sama wartosc (typ)' : 'nie maja takiej samej wartosci (typ)';
print "$a i $c: $ac2".PHP_EOL;

echo "wartosc $d bez czesci po przecinku to: ".floor($d).PHP_EOL;

$x = round($d, 2);
print "$x".PHP_EOL;