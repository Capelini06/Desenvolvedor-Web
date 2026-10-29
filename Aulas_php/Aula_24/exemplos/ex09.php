<?php

function calcularSubtotal($preco, $quantidade) {
    return $preco * $quantidade;
}

function calcularDesconto($subtotal) {
        return $subtotal >= 200 ? $subtotal * 0.1 : 0;
}
$subTotal = calcularSubtotal(75, 3);
$desconto = calcularDesconto($subTotal);
$total = $subTotal - $desconto;

echo "Valor do desconto: {$desconto}\n";
echo "Sub total: {$subTotal}\n";
echo "Total: {$total}\n";