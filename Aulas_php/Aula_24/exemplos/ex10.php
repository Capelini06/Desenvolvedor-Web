<?php

function calcularAreaRetangulo($largura, $altura){
    return $largura * $altura;
}

$areaSala = calcularAreaRetangulo(5, 4);
$areaQuarto = calcularAreaRetangulo(3, 2.5);

echo "Sala: {$areaSala} m²\n";
echo "Quarto: {$areaQuarto} m²\n";