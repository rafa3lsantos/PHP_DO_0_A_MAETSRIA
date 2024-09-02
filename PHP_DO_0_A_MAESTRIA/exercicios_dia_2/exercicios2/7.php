<?php

    $idade = readline("Quantos anos você tem?");

    if($idade > 5 and $idade < 8) {
        echo "Você está na categoria Infatil A";
    } else if($idade > 8 and $idade < 11) {
        echo "Você está na categoria Infantil B";
    } else if($idade > 11 and $idade < 13) {
        echo "Você está na categoria Juvenil A";
    } else if($idade > 13 and $idade < 18) {
        echo "Você está na categoria Juvenil B";
    }else{
        echo "Você está na categoria Sênior";
    }