<?php

    $a = readline("Informe um numero: ");
    $b = readline("Informe outro numero: ");

    if($a > $b){
        echo "$a é maior que $b";
    } else if ($a == $b) {
        echo "Ambos são iguais!";
    } else {
        echo "$b é maior que $a";
    }