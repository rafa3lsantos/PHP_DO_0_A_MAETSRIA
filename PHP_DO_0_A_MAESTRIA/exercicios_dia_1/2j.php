<?php

    $horas = readline("Informe que horas são: ");
    $minutos = readline("Agora, informe os minutos, por gentileza: ");

    $horasParaMinutos = ($horas * 60) + $minutos;

    echo "Se passaram $horasParaMinutos minutos desde o inicio do dia";