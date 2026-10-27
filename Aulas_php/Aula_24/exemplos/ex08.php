<?php

function calcularDesconto($valor){
    if($valor >= 200){
        return  $valor - $valor * 0.1;
    }
    return $valor;
}

$compra1 = calcularDesconto(100);
$compra2 = calcularDesconto(199);
$compra3 = calcularDesconto(200);
$compra4 = calcularDesconto(400);
$compra5 = calcularDesconto(500);

echo "Compra 1: R$" . number_format($compra1, 2, ",", ".") . "\n";
echo "Compra 2: R$" . number_format($compra2, 2, ",", ".") . "\n";
echo "Compra 3: R$" . number_format($compra3, 2, ",", ".") . "\n";
echo "Compra 4: R$" . number_format($compra4, 2, ",", ".") . "\n";
echo "Compra 5: R$" . number_format($compra5, 2, ",", ".") . "\n";