<?php

    $arr = ["Maca", "Pera", "Mamao", "Batata"];

    $str = implode(", ", $arr);

    echo $arr[2] . "<br>";
    echo $str . "<br>";

    $arr2 = ["Aviao", "Tanque", "Jipe", "Metralhadora"];

    $str2 = implode(" -> ", $arr2);
    echo $str2 . "<br>";