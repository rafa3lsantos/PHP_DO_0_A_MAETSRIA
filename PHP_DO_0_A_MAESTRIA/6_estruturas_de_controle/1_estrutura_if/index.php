<?php
    // condicao verdadeira
    if(5 > 2){
        echo "e maior, entrou no if <br>";
    }

    //condicao falsa
    if(5 < 2){
        echo "nao vai entrar no if <br>";
    }

    //utilizar op.logico
    if(10 === 10 and 9 > 3){
        echo "verdade! entrou no if <br>";
    }

    //variaveis
    $a = 10;
    $b = 5;
    $c = "Deu certo, entrou no if <br>";

    if($a > $b){
        echo $c;
    }