<?php

$cidades = ["Curitiba", "São Paulo", "Rio de Janeiro", "Belo Horizonte", "Salvador"];

for ($i = 0; $i < count($cidades); $i++){
    echo "$cidades[$i]\n";
}

echo "Primeira cidade: $cidades[0]\n";
echo "Ultima cidade: $cidades[4]\n";
$cidades[2] = "Brasilia";
$cidades[] = "Porto Alegre";

for ($i = 0; $i < count($cidades); $i++){
    echo "$cidades[$i]\n";
}

echo "Quantidade de cidades: " . count($cidades);