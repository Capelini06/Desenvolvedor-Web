<?php

$numeros = [10, 20, 30, 40, 50];
$soma = 0;
for ($i = 0; $i < count($numeros); $i++){
    echo "$numeros[$i]\n";
    $soma = $soma+ $numeros[$i];
}

echo "Soma dos numeros: $soma\n";
echo "Primeiro numero: $numeros[0]\n";
echo "Ultimo numero: " . array_last($numeros) . "\n";
$numeros[2] = 100;

$soma = 0;
for ($i = 0; $i < count($numeros); $i++){
    echo "$numeros[$i]\n";
    $soma = $soma+ $numeros[$i];
}

echo "Soma dos numeros: $soma";