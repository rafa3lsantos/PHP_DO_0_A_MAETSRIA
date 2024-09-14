<?php

    $rafael = [
        'nome' => 'Rafael',
        'idade' => 29,
        'profissao' => 'Programador'
    ];

    $joao = [
        'nome' => 'Joao',
        'idade' => 25,
        'profissao' => 'Eng. Civil'
    ];

    foreach($rafael as $carac => $value) {
        echo "$carac => $value <br>";
    }

    foreach($joao as $carac => $value) {
        echo "$carac => $value <br>";
    }

