<?php

    $valorEtiqueta = readline("Informe o valor do produto: ");
    echo "1 - Á vista em dinheiro com 10% de desconto \n";
    echo "2 - Á vista no cartão com 5% de desconto \n";
    echo "3 - Em 2 vezes, preço normal \n";
    echo "4 - Em 3 vezes, preço normal com juros de 10% \n";
    $opcao = readline("Escolha uma das opções \n");

    switch($opcao) {
        case "1":
            $calc = $valorEtiqueta * 0.9;
            echo "O valor a ser pago será de: R$$calc";
            break;
        case "2":
            $calc = $valorEtiqueta * 0.95;
            echo "O valor a ser pago será de: R$$calc";
            break;
        case "3":
            $calc = $valorEtiqueta;
            echo "O valor a ser pago será de: R$$calc";
            break;
        case "4":
            $calc = $valorEtiqueta * 1.1;
            echo "O valor a ser pago será de: R$$calc";
            break;
        default:
            echo "Opção Inválida!";
    }