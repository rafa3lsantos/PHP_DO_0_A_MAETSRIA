<?php

    $a = true;
    if(is_bool($a)){
        echo"é um booelano 1<br>";
    }

    if(is_bool(0)){
        echo"é um booelano 2 <br>";
    }

    if(is_bool(false)){
        echo"é um booelano 3 <br>";
    }

    if(0 == false) {
        echo"0 e falso <br>";
    }

