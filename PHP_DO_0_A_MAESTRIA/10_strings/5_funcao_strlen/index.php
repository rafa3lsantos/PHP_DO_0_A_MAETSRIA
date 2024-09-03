<?php

    $str1 = "Esta string é muito grande";
    $str2 = "Esta nao";

    echo strlen($str1) . "<br>";
    echo strlen($str2) . "<br>";

    $len1 = strlen($str1);
    $len2 = strlen($str2);

    if ($len1 > $len2) {
        echo "A string 1 e maior que a 2";
    } else {
        echo "A string 2 e maior que a 1";
    }