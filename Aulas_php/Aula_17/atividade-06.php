<?php

$numeros = [15.50, 28.90, 7.25, 49.90];

echo "Primeiro preço: $numeros[0]\n";
echo "Terceiro preço: $numeros[2]\n";
$numeros[1] = 30;
$numeros[] = 12.50;

for($i = 0; $i < count($numeros); $i++){
    echo "R$" . number_format($numeros[$i], 2, ",", ".") . "\n" ;
}

echo "Quantidade: " . count($numeros);