<?php

    $macasCompradas = readline("Quantas maçãs você comprou? ");
    
    if($macasCompradas < 11){
        $calc = $macasCompradas * 13;
        echo "Você pagará R$$calc nas maçãs";
    } else {
        $calc = $macasCompradas * 10;
        echo "Você pagará R$$calc nas maçãs";
    }