<?php

$N = (int) readline("Insira um numero: ");
$soma = 0;

for($i = 1; $i <= $N; $i++){
    if($i%2==0){
        $soma = $soma + $i;
    }
}

echo "A somas dos numeros pares de 1 ate $N: $soma";