<?php
//Zad 2.13

class Point
{
    private float $x;
    private float $y;

    public function __construct(float $x, float $y)
    {
        $this -> x = $x;
        $this -> y = $y;
    }
    
    function setX($x){
        $this->x = $x;
    }

    function setY($y){
        $this->y = $y;
    }

    function przesunX($dystans){
        $this -> x += $dystans;
    }

    function przesunY($dystans){
        $this -> y += $dystans;
    }

    function __toString() {
        return "Point(" . $this->x . ", " . $this->y . ")".PHP_EOL;
    }

}


$pkt = new Point(1,2);
print $pkt;
$pkt -> setX(3);
$pkt -> setY(12);
print $pkt;

$pkt -> przesunX(7);
$pkt -> przesunY(8);

print $pkt;