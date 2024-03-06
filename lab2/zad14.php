<?php
//Zad 2.12

require_once __DIR__ . "/vendor/autoload.php";
use Ramsey\Uuid\Uuid;

class Dog
{
    public int $ID;
    public string $nazwa;
    public int $wiek;
    public DateTime $data;

    public function __construct(int $ID, string $nazwa, int $wiek, DateTime $data)
    {
        $this -> ID = $ID;
        $this -> nazwa = $nazwa;
        $this -> wiek = $wiek;
        $this -> data = $data;
    }

    function __toString() {
        return $this->nazwa . " (" . $this->wiek . " l.) przyjety w dn. ".$this -> data -> format('d-m-Y').PHP_EOL;
    }

}

$pies1 = new Dog(1, "burek", 9, new DateTime("10-03-2024"));
$pies2 = new Dog(2, "azor", 12, new DateTime("15-02-2024"));
$pies3 = new Dog(3, "szarik", 8, new DateTime("22-02-2024"));
$pies4 = new Dog(4, "idefix", 15, new DateTime("26-01-2024"));
print $pies1;
print $pies2;
print $pies3;
print $pies4;