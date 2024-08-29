<?php

    $a = "teste";
    $b = 12.8;

    if(is_float($a)) {
        echo "é float 1 \n";
    }

    if(is_float($b)) {
        echo "é float 2 \n";
    }

    if(is_float(6565.434)) {
        echo "é float 3 \n";
    }

    if(is_float("teste")) {
        echo "é float 4 \n";
    }