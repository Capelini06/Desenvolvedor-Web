<?php

$N = (int) readline("Insira um valor: ");


for ($i = 2; $i <= $N; $i++) {
    $primo = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $primo = false;
        }

    }
    if ($primo == true) {
        echo " Numero {$i} é primo!\n";
    }
}