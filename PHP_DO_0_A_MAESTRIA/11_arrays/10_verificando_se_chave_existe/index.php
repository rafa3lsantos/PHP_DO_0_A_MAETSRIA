<?php

    $arr = [
        "nome" => "Rafael",
        "idade" => 29
    ];

    if(array_key_exists("nome", $arr)) {
        echo "A chave existe <br>";
    } else {
        echo "A chave nao existe <br>";
    }

    if(array_key_exists("nom", $arr)) {
        echo "A chave existe <br>";
    } else {
        echo "A chave nao existe <br>";
    }

    if(isset($arr["nome"])) {
        echo "A chave existe ISSET <br>";
    } else {
        echo "A chave nao existe ISSET <br>";
    }

    if(isset($arr["teste"])) {
        echo "A chave existe ISSET <br>";
    } else {
        echo "A chave nao existe ISSET <br>";
    }

    $x = 10;

    if(isset($x)) {
        echo "A var existe ISSET <br>";
    } else {
        echo "A var nao existe ISSET <br>";
    }