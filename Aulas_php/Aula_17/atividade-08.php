<?php
$notas = [7.5, 8.0, 6.5, 9.0];

for($i = 0; $i < count($notas); $i++){
    echo "$notas[$i]\n";
}

echo "Primeira nota: $notas[0]\n";
echo "Ultima nota: $notas[3]\n";

$notas[1] = 8.5;
$notas[] = 10;

for($i = 0; $i < count($notas); $i++){
    echo "$notas[$i]\n";
}

echo "Quantidades de notas: " . count($notas);