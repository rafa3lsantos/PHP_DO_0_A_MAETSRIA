<?php

    $a = readline("Informe seu ano de nascimento: ");

    if($a < 2006){
        echo "Voce pode votar e tirar a carteira";
    } else if($a < 2006 or $a < 2008) {
        echo "Voce pode votar apenas";
    } else {
        echo "Você não pode votar e nem tirar a carteira";
    }