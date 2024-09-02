<?php

    $a = 10;

    while($a > 0){
        if($a == 5 || $a == 7){
            echo "Pulou a execucao $a <br>";
            $a--;
            continue;
        }

        if($a == 2){
            echo "Terminando o loop $a break <br>";
            $a--;
            break;
        }

        echo "executanto o meu loop $a <br>";
        $a--;
    }