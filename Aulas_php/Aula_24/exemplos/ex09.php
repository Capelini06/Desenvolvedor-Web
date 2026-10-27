<?php

function calcularSubtotal($preco, $quantidade) {
    return $preco * $quantidade;
}

function calcularDesconto($subtotal) {
    if ($subtotal >= 200) {
        return $subtotal * 0.10;
    }
    return 0;
}
$subtotal = calcularSubtotal(75, 3);
$desconto = calcularDesconto($subtotal);
$total = $subtotal - $desconto;