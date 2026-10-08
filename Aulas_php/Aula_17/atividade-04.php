<?php
$compras = [];

for ($i = 1; $i <= 3; $i++) {
    $produto = readline("Adicione um produto: ");
    $compras[] = $produto ;
}

echo "Produtos:\n";
for ($i = 0; $i <= 2; $i++) {
    echo $i+1 . ") $compras[$i]\n";
}
echo "Quantidade de produtos inseridos: " . count($compras) . "\n";
echo "Primeiro produto: $compras[0]\n";
echo "Ultimo produto: $compras[2]\n";