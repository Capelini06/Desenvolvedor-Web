<?php

function calcularSubtotal($preco, $quantidade){
    return $preco * $quantidade;
}

function somarProdutos($prod1, $prod2, $prod3){
    return $prod1 + $prod2 + $prod3;
}

function calcularDesconto($subtotal) {
        $desconto = $subtotal >= 200 ? $subtotal * 0.1 : 0;
        $descontoApl = $subtotal - $desconto;
        return $descontoApl;
}

$caderno = calcularSubtotal(20, 2);
$mochila = calcularSubtotal(80, 2);
$caneta = calcularSubtotal(5, 5);

$subTotal = somarProdutos($caderno, $mochila, $caneta);
$total = calcularDesconto($subTotal);

echo "Sub total: {$subTotal}\n";
echo "Total: {$total}\n";