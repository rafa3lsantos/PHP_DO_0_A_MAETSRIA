<?php

    $j = 0;
    $nome = "rafael";

    // CONTADOR; CONDICAO; INCREMENTO/DECREMENTO
    for($i = 0; $i < 10; $i++){
        if($i == 4){
            echo "$nome <br>";
        }
        
        if($i == 8){
            break;
        }

        echo "testando for $i <br>";
    }