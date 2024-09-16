<?php

    for($i = 0; $i < 10; $i++) {
        $a[] = readline("Digite um numero para ser armazenado no array A: ");
    }

    for($i = 0; $i < 10; $i++) {
        $b[] = readline("Digite um numero para ser armazenado no array B: ");
    }

    for($i = 0; $i < 10; $i++) {
        $c = $a[$i] * $b[$i];
        echo "$a[$i] x $b[$i] = $c \n";
    }
