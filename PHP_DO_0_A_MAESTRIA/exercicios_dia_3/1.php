<?php

    function soma($a, $b){
        $soma = $a + $b;
        echo "O resultado da soma é: $soma";
    }

    function subtracao($a, $b){
        $sub = $a - $b;
        echo "O resultado da subtracao é: $sub";
    }

    function mult($a, $b){
        $mult = $a * $b;
        echo "O resultado da multiplicacao é: $mult";
    }
    
    function div($a, $b){
        if($b == 0){
            echo "Erro!";
        }

        $div = $a / $b;
        echo "O resultado da divisao é: $div";
    }

    $num1 = readline("Digite um numero: ");
    $num2 = readline("Digite outro numero: ");

    echo "1 - Adição:";
    echo "2 - Subtração:";
    echo "3 - Multiplicação:";
    echo "4 - Divisão";
    $opcao = readline("Escolha uma das opções acima:");

    switch($opcao){
        case "1":
            soma($num1, $num2);
            break;
        case "2":
            subtracao($num1, $num2);
            break;
        case "3":
            mult($num1, $num2);
            break;
        case "4":
            div($num1, $num2);
            break; 
    }

