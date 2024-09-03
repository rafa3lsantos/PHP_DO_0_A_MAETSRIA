<?php

    $soma = 0;
    $quantidade = 0;

    for($num = 50; $num > 49 and $num < 71; $num += 2){
        echo "$num \n";
        $soma += $num;
        $quantidade++;
    }
    $media = $soma / $quantidade;

    echo "A soma dos numeros fornecidos é: $soma \n";
    echo "A media dos numeros fornecidos é de: $media";