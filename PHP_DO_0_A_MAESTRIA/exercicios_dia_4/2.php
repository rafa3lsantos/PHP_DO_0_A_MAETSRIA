<?php

    $guardaNum = []; 
    $contNeg = 0;
    $contPosi = 0;
    $contPar = 0;
    $contImpar = 0;

    for($i = 0; $i < 10; $i++) {
        $arr = readline("Digite um numero para ser armazenado no array: ");
        $guardaNum[] = $arr;

        if ($arr > 0) {
            $contPosi++;
        } elseif ($arr < 0) {
            $contNeg++;
        }
        
        if ($arr % 2 == 0) {
            $contPar++;
        } else {
            $contImpar++;
        }
    }

    echo "Positivos: $contPosi \n";
    echo "Negativos: $contNeg \n";
    echo "Pares: $contPar \n";
    echo "Ímpares: $contImpar \n";