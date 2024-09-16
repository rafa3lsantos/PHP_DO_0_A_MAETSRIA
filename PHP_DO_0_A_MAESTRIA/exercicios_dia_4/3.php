<?php

    $numMaior = 0;

    for($i = 0; $i < 10; $i++) {
        $arr[$i] = readline("Digite um numero para ser armazenado no array: ");

        if($arr[$i] < 0){
            echo "Erro! escolha outro numero";  
            break;  
        }

        if($arr[$i]> $numMaior){
            $numMaior = $arr[$i];
        } 

        $verificaPos = array_search($numMaior, $arr);
    }

    print_r($arr);
    echo "O numero maior é: $numMaior e a sua posição no array é: $verificaPos";