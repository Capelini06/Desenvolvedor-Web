<?php

$num = 1;
$soma = 0;

while ($num != 0) {
    $num = (int) readline("Insira um numero(0 para terminar): ");
    $soma = $soma + $num;
}

echo "A soma de todos os numeros inseridos é: $soma";