<?php

    if(is_int(5)) { //true
        echo "É um inteiro \n";
    }

    if(is_int("inteiro")) { //true
        echo "É um inteiro \n";
    }

    $a = 10;

    if(is_int($a)) { //true
        echo "É um inteiro \n";
    }
    
    