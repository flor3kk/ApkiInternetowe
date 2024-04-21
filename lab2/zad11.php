<?php

use function PHPSTORM_META\type;

function division($a, $b) : float{
    if($b == 0){
        throw new Exception("dzielenie przez 0 niedozwolone");
    }
    if (is_int($a) != true || is_int($b) != true){
        throw new Exception("jedna z liczb nie jest typu INT");
    }
    return $a / $b;
}

try{
    print division(1, 2.5);
}catch(Exception $e){
    print "blad, ".$e -> getMessage();
}