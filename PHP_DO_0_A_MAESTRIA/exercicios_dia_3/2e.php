<?php

    function pesoIdeal($altura, $sexo) {
        switch($sexo) {
            case 1:
                $calcPeso = 72.7 * $altura - 58;
                echo "O seu peso ideal masculino é $calcPeso <br>";
                break;
            case 2:
                $calcPeso = 62.1 * $altura - 44.7;
                echo "O seu peso ideal feminino é $calcPeso <br>";
                break;
            default:
                echo "Opcao invalida! Tente novamente <br>";
        }
    }

    $altura = readline("Digite a sua altura:\n");
    echo "1 - Masculino\n";
    echo "2 - Feminino\n";
    $sexo = readline("Escolha o seu sexo: \n");

    pesoIdeal($altura, $sexo);