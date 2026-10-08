<?php

$produtos = [];

for ($i = 1; $i <= 5; $i++){
    $prod = readline("Insira um produto: ");
    $produtos[] = $prod;
}

for ($i = 0; $i < count($produtos); $i++){
    echo "$produtos[$i]\n";
}

echo "Quantidade: " .count($produtos);

echo "\n";

$remocao = readline("Insira o nome de um produto a ser removido: ");
$posicao = array_search($remocao, $produtos);
if ($posicao !== false){
    array_splice($produtos, $posicao, 1);
}

$produtos[] = "Chocolate";

for ($i = 0; $i < count($produtos); $i++){
    echo "$produtos[$i]\n";
}