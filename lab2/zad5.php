<?php
//Zad 2.5

$n = 1;
$note;

switch ($n){
    case 2.0:
        $note = "dwa";
        print $note; 
        break;
    case 2.5:
        $note = "dwa i pół";
        print $note; 
        break;
    case 3:
        $note = "trzy";
        print $note; 
        break;
    case 3.5:
        $note = "trzy i pół";
        print $note; 
        break;
    case 4:
        $note = "cztery";
        print $note; 
        break;
    case 4.5:
        $note = "cztery i pół";
        print $note; 
        break;
    case 5:
        $note = "piec";
        print $note; 
        break;
    default:
        $note = "";
}

$slowo = match ($n){
    2 => "dwa",
    2.5 => "dwa i pół",
    3 => "trzy",
    3.5 => "trzy i pół",
    4 => "cztery",
    4.5 => "cztery i pol",
    5 => "piec",
    default => ""
};

print $slowo;