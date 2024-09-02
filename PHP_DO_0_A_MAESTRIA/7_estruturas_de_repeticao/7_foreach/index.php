<?php

    $nomes = ["Matheus", "Joao", "Pedro", "Rafael"];
    $a = 10;

    foreach($nomes as $nome){
        echo "O nome o indice atual e $nome \n";
        if($nome == "Rafael"){
            echo "Opa $a \n";
        }
    }