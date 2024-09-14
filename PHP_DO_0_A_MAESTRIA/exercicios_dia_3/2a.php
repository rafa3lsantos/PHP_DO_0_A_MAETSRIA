<?php

    function mult4($a) {
        if($a % 4 == 0){
            echo "é multiplo de 4";
        } else {
            echo "não é multiplo de 4";
        }
    }

    $a = readline("Digite um numero: ");

    mult4($a);