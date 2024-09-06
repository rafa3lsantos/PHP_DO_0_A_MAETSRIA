<?php

    $str = "Esta é a minha string";
    $minha = substr($str, 10, 5); //STRING PAI, INDICE INICIAL, COMPRIMENRO DA PALAVRA
    echo $str . "<br>";
    echo $minha . "<br>";

    $STR2 = "Testando esta string abc";
    $novaString = substr($STR2, 8 ); // OMITIR COMPRIMENTO
    echo $novaString . "<br>";

    $novaString2 = substr($STR2, 8, -3); // COMPRIMENTO NEGATIVO PEGAR ATE O FIM
    echo $novaString2 . "<br>";
