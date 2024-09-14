<?php

    $arr = [1, 2, 3];
    $arr2 = [10, 40, 90];
    $arr3 = [2.1, 44.5, 43.3];
    $arr4 = ["asd", "as", "a"]
;
    $arrMerge = array_merge($arr, $arr2, $arr3, $arr4);

    print_r($arrMerge);

    echo "<br>";