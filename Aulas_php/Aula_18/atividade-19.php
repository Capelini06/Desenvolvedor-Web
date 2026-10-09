<?php

$pares = [];
$impar = [];

for($i = 1; $i <= 10; $i++){
    $num = (int) readline("Insira um numero: ");
    if($num%2==0){
        $pares[] = $num;
    } else {
        $impar[] = $num;
    }
}

echo "NUMEROS PARES: \n";
for($p = 0; $p < count($pares); $p++){
    echo $p+1 . ") $pares[$p]\n";
}
echo "Numeros pares inseridos: " . count($pares) . "\n";

echo "NUMEROS IMPARES: \n";
for($j = 0; $j < count($impar); $j++){
    echo $j+1 . ") $impar[$j]\n";
}
echo "Numeros impares inseridos: " . count($impar) . "\n";