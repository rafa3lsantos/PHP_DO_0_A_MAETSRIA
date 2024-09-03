<?php

    $maior = 0;
    $menor = 0;

    for($i = 0; $i < 99999; $i++){
        $num = readline("Informe um numero: ");

        if($num > $maior){
            $maior = $num;
        } else if($num < $menor){
            $menor = $num;
        } else if($num == 0){
            break;
        }
    }

    echo "O maior é: $maior \n";
    echo "O menor é: $menor";