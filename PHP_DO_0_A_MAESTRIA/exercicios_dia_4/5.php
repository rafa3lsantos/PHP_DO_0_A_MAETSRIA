<?php

    for($i = 0; $i < 10; $i++) {
        $arr[] = readline("Digite um numero para ser armazenado no array: ");
    }

    $arrRev = array_reverse($arr);
    print_r($arrRev);