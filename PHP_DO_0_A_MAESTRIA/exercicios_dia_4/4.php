<?php

    $c = [];

    for($i = 0; $i <= 10; $i++) {
        $a[] = readline("Digite um numero para ser armazenado no array: ");
    }
    
    $b = $a[10];

    foreach($a as $item) {
        $calc = $item * $b;
        $c[] = $calc;
    }

    print_r($c);
