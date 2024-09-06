<?php

    $str = "Estamos testando o metodo strpos, com o strpos podemos encontrar strings";

    $testeEncontrar = strpos($str, "strpos");

    echo $testeEncontrar . "<br>";

    $testeEncontrar2 = strpos($str, "Java");

    echo $testeEncontrar2 . "<br>";

    if($testeEncontrar2 === false){
        echo "nao encontrou <br>";
    }

    $palavra = "com";

    $testeEncontrar3 = strpos($str, $palavra);

    echo $testeEncontrar3 . "<br>";
