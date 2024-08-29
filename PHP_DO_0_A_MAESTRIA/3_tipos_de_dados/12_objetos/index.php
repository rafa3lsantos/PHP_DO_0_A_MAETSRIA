<?php

    class Pessoa {

        function falar(){
            echo "Ola pessoal";
        }

    }

    $Rafael = new Pessoa();
    $Rafael -> nome = "Rafael";
    echo $Rafael->nome;
    echo "<br>";
    $Rafael->falar();
