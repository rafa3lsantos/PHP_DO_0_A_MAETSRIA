<?php

    $arr = ['banana', 'maca', 'batata', 'pera', 'mamao'];

    if(in_array('batata', $arr)) {
        echo "Ha batata no array <br>";
    } else {
        echo "Nao ha batata no array <br>";
    }

    $b = "banana";

    if(in_array($b, $arr)) {
        echo "Ha batata no array <br>";
    } else {
        echo "Nao ha batata no array <br>";
    }

    if(in_array('teste', $arr)) {
        echo "Ha teste no array <br>";
    } else {
        echo "Nao ha teste no array <br>";
    }