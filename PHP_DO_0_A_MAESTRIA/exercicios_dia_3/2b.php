<?php

    function par($a) {
        if($a % 2 == 0){
            echo "é par";
        } else {
            echo "é impar";
        }
    }

    $a = readline("Digite um numero: ");

    par($a);