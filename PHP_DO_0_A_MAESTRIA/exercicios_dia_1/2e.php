<?php

    $base = readline("Digite o valor da base: ");
    $altura = readline("Digite o valor da altura: ");

    $perimetro = ($base * 2) + ($altura * 2);
    $area = $base * $altura;
    $diagonal = sqrt(($base * $base) + ($altura * $altura));

    echo "O perimetro do retangulo é: $perimetro \n";
    echo "A area do retangulo é: $area \n";
    echo "A diagonal do retangulo é: $diagonal";