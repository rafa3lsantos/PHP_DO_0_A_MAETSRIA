<?php

    $arr = [2, 4, 6, 8, 10, 12, 14, 16, 18];

    $slice1 = array_slice($arr, 1, 3);
    
    echo "<br>";
    print_r($slice1);

    $slice2 = array_slice($arr, 4, 4);
    
    echo "<br>";
    print_r($slice2);

    $slice3 = array_slice($arr, 4);
    
    echo "<br>";
    print_r($slice3);

    $slice4 = array_slice($arr, 4, -3);
    
    echo "<br>";
    print_r($slice4);