<?php

$num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$soma = 0;

for($i = 0; $i < count($num); $i++){
    echo "$num[$i]\n";
    $soma = $soma + $num[$i];
}

echo "Soma: $soma\n";
echo "Quantidade: " . count($num);