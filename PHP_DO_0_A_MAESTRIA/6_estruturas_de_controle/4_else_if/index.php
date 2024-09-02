<?php

    if(10 > 5){
        echo "Entrou no if <br>";
    } else if(10 > 6) {
        echo "Entrou no else if <br>";
    }

    if(10 < 5){
        echo "Entrou no if 2 <br>";
    } else if(10 > 6) {
        echo "Entrou no else if 2 <br>";
    }

    if(10 < 5){
        echo "Entrou no if 3 <br>";
    } else if(10 < 6) {
        echo "Entrou no else if 3 <br>";
    } else {
        echo "Entrou no else 3 <br>";
    }

    if(10 < 5){
        echo "Entrou no if 4 <br>";
    } else if(10 < 6) {
        echo "Entrou no else if 4 <br>";
    } else if(11 > 1) {
        echo "Entrou no else if 2 4 <br>";
    } else {
        echo "Entrou no else 4 <br>";
    }

    //variaveis
    $a = 10;
    $b = 5;
    $msg = "Entrou no if 5<br>";

    if($a > $b){
        echo "Entrou no else if 5 <br>";
    } else if(10 < 6) {
        echo $msg;
        echo "<br>";
    } else if(11 > 1) {
        echo "Entrou no else if 2 5";
    } else {
        echo "Entrou no else 5 <br>";
    }