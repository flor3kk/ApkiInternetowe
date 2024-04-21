<?php
$fruits = ["banana", "apple", "strawberry", "grape", "orange", "watermelon", "blueberry"];

//Wyświetlenie owoców z pętlą foreach z { }

foreach ($fruits as $d){
    print $d.PHP_EOL;
}


//Wyświetlenie owoców z pętlą foreach z endforeach

foreach ($fruits as $x):
    print $x.PHP_EOL;
endforeach;


?>