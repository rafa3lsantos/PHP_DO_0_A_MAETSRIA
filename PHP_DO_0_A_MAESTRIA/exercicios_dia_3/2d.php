<?php


function numeros($a, $b, $c){
    $soma= 0;
    
    if($a == 1 or $a == 0){
        echo "Erro! escolha outro numero";    
    }

    for($i = $b; $i <= $c; $i++){
        if($i % $a == 0) {
            $soma += $i;
        }
    }
    echo " O valor da soma entre os numeros é: $soma";
    
}

    $a = readline("Digite um numero: ");
    $b = readline("Digite um numero: ");
    $c = readline("Digite um numero: ");

    numeros($a, $b, $c);
