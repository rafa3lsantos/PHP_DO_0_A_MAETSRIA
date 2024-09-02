<?php

    $soma = 0;

    for($i = 0; $i < 999; $i++){
        $num = readline("Informe um numero: ");
        $soma += $num ;

        if($num == 0){
            break;

        }
    }


    for($i = readline("Informe um numero: "); $i == 0; $i = readline("Informe um numero: ")){
        $soma += $i ;
    }



    echo "$soma";