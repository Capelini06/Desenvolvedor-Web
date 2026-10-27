<?php

function mostrarTotal($preco, $qta){
    $total = $preco * $qta;
    echo "Total: R$" . number_format($total, 2, ",", ".");
}

$preco = (float) readline("Insira o preço: ");
$qta = (int) readline("Insira a quantidade: ");

mostrarTotal($preco, $qta);