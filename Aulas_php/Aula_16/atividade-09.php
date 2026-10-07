<?php

$N = (int) readline("Insira um numero: ");
$soma = 0;
for($i = 1; $i <= $N; $i++){
    $soma += $i;
}

echo "$soma";