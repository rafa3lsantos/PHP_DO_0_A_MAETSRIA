<?php

    echo 5 / 2;
    echo "<br>";

    if(is_float(5/2)){
        echo "e float <br>";
    }

    echo 2 . 3;
    echo "<br>";

    if(is_string(2 . 3)){
        echo "e string <br>";
    }

    $nome = "rafael";
    $sobrenome = "amaral";
    $nomeCompleto = $nome . " " . $sobrenome;

    echo $nomeCompleto;
    echo "<br>";
