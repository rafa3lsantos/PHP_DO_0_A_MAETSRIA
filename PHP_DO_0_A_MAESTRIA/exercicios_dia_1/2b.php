<?php

    $a = readline("Digite o primeiro valor: ");
    $b = readline("Digite o segundo valor: ");
    $c = readline("Digite o terceiro valor: ");
    $d = readline("Digite o quarto valor: ");

    $mediaPonderada =  (($a * 1) + ($b * 2) + ($c * 3) + ($d * 4))  / (1 + 2 + 3 + 4);

    echo "A media ponderada é: $mediaPonderada";
