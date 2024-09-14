<?php

    $soma = 0;

    function entre($a, $b) {
        global $soma;

        for($i = $a; $i <= $b; $i++ ){
            $soma += $i;
            $res = $soma - ($a + $b);
        }
        echo "A soma entre os numeros entre $a e $b é igual a $res <br>";
    }

    $a = readline("Digite um numero: ");
    $b = readline("Digite outro numero: ");

    entre($a, $b);