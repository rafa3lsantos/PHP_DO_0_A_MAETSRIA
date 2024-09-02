<?php

    if(5 > 2 || 3 < 4){
        echo "a operacao 1 é verdadeira <br>";
    }

    if(5 > 2 or 30 < 4){
        echo "a operacao 2 é verdadeira <br>";
    }

    if(5 > 20 or 3 < 4){
        echo "a operacao 3 é verdadeira <br>";
    }

    if(5 > 20 || 30 < 4){
        echo "a operacao 4 é verdadeira <br>";
    }

    $a = 10;
    $b = 20;
    $c = 30;
    $d = 40;

    if($a > $b || $d > $c){
        echo "a operacao 5 é verdadeira <br>";
    }

    if(($a > $b || $d > $c) && $c < $d ){
        echo "a operacao 6 é verdadeira <br>";
    }

    if(($a > $b || $d < $c) || $c < $d ){
        echo "a operacao 7 é verdadeira <br>";
    }