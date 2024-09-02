<?php

    $salarioMinimo = 1412; // 1412 / 7 = 201,71
    $quantiaKw = readline("Quantos Kw foi gasto em sua casa? ");

    $reaisParaKw = 201.71 / 100;
    $valorPago = $quantiaKw * $reaisParaKw;
    $desconto = $valorPago * 0.9;

    echo "O valor de cada Kw é: $reaisParaKw \n";
    echo "O valor a ser pago sera de: R$$valorPago \n";
    echo "O valor a ser pago com 10% de desconto sera de: R$$desconto";
