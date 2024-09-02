<?php

    $numeroCarrosVendidos = readline("Informe o numero de carros vendidos: ");
    $totalVendas = readline("Insira o valor total das vendas: ");
    $salario = readline("Informe o salario: ");
    $comissao = readline("Informe o valor da comissao por carro vendido: ");

    $comissaoFinal = $comissao * $numeroCarrosVendidos;
    $salarioFinal = $salario + $comissaoFinal + ($totalVendas * 0.05);

    echo "O salario final do vendedor sera de: R$$salarioFinal";