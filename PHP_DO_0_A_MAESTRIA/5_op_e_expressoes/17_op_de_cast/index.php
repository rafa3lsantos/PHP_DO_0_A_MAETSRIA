<?php

    $a = (int) "12";
    echo $a;
    echo "<br>";
    echo $a + 10;
    echo "<br>";

    if(is_int($a)) { //true
        echo "É um inteiro <br>";
    }

    if($a === 12){
        echo "A é identico a 12 <br>";
    }

    $b = (float) "3.148484";

    if($b === 3.148484){
        echo "B e identico a 3.14 <br>";
    }

    $c = (string) 34;

    echo $c;
    echo "<br>";

    if($c === "34"){
        echo "C e identico a 34 <br>";
    }