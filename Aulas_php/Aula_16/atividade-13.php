<?php

$N = (int) readline("Insira um numero: ");
$qta = 0;

for($i = 1; $i <= $N; $i++){
    if($i%3==0){
        $qta++;
    }
}

echo "De 1 ate $N a quantidade de itens multiplos de 3 é: $qta";