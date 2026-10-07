<?php

$numero = (int) readline("Insira um numero: ");

for ($i = 1; $i <= 10; $i++){
    $mult = $numero * $i;
    echo "$numero * $i = $mult\n";
}