<?php

    $a = readline("Digite sua primeira nota: ");
    $b = readline("Digite sua segunda nota: ");

    $calcMedia = ($a + $b) / 2;

    echo "A media de suas notas é: $calcMedia \n";

    if($calcMedia > 6){
        echo "Você está aprovado!";
    } else {
        echo "Você está reprovado!";
    }