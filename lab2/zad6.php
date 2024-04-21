<?php
function ctf(float $c = null) : float{
    if ($c == null){
        print "nie podano wartosci!";
        return 0.0;
    }
    else{
        $wartosc = ($c * 9/5) + 32;
        return $wartosc;
    }
}

print ctf().PHP_EOL;
print ctf(20).PHP_EOL;
print ctf(2000);
