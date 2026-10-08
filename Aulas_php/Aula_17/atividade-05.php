<?php

$itens = [ "Espada", "Escudo", "Poção", "Mapa"];

echo "Inventario:\n";
for ($i = 0; $i <= count($itens); $i++){
    echo $i+1 . ") $itens[$i]\n";
}

$itens[] = "Arco";
array_pop($itens);
$itens[2] = "Poção grande";

echo "Inventario:\n";
for ($i = 0; $i < count($itens); $i++){
    echo $i+1 . ") $itens[$i]\n";
}

echo "Itens no inventario: " . count($itens);