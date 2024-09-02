<?php

    $a = readline("Informe o preço do produto: ");

    if($a < 21) {
        $calc = $a * 0.45;
        echo "O lucro do produto foi de R$$calc";
    } else {
        $calc = $a * 0.3;
        echo "O lucro do produto foi de R$$calc";
    }