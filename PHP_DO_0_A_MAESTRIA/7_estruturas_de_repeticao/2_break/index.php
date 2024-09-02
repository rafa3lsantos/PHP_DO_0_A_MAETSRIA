<?php

    $x = 0;
    while($x < 10){
        echo "O X e $x <br>";
        if($x === 5){
            echo "Terminando o loop... <br>";
            break;
        }
        $x++;
    }

    echo "Saiu do loop";