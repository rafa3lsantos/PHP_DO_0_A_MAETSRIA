<?php

$a = readline("Digite um numero: ");

if($a > 29 and $a < 91) {
    echo "O numero informado está entre 30 e 90";
} else if($a > 120) {
    echo "O numero informado é maior que 120";
} else {
    echo "O numero nao está entre 30 e 90 e não é maior que 120";
}