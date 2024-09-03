<?php

    $soma = 0;
    $quantidade = 0;

    for($i = 0; $i < 999; $i++){
        $num = readline("Informe um numero: ");
        $soma += $num;
        $quantidade++;

        if($num == 0){
            break;

        }
    }

    $quantidade--;
    $media = $soma / $quantidade;
    echo "A soma dos numeros inseridos é: $soma \n";
    echo "A media dos numeros inseridos é: $media \n";
    echo "A quantia de valores lidos foram: $quantidade";

    
    //for($i = readline("Informe um numero: "); $i == 0; $i = readline("Informe um numero: ")){
    //    $soma += $i ;
    //}