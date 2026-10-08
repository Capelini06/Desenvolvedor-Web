<?php

$num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$par = 0;
$impar = 0;

for($i = 0; $i < count($num); $i++){
    echo "$num[$i]\n";
    if($num[$i]%2==0){
        $par++;
    } else {
        $impar++;
    }
}

echo "Quantidade: " . count($num) . "\n";
echo "Pares: $par\n";
echo "Impares: $impar";