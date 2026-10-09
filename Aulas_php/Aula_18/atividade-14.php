<?php

$soma=0;
$desc = 0;
$qta = 0;

while(true){
    $preco = (float) readline("Insira o preço so produto(0 para cancelar): ");
    if ($preco == 0){
        break;
    }
    $qta++;
    $soma += $preco;
}

if ($soma >= 200){
    $desc = 10;
}

$valorDesc = $soma * ($desc/100);
$final = $soma - $valorDesc;


echo "Produtos: {$qta}\n";
echo "Total: {$soma}\n";
echo "Desconto; {$valorDesc}\n";
echo "Total final: {$final}\n";
$valor = (float) readline("Insira o valor a ser pago: ");
if($valor > $final){
    echo "Troco: " . ($valor-$final) . "\n";
} else if ($valor < $final) {
    echo "Falta: " . ($final-$valor) . "\n";
} else {
    echo "Compra finalizada";
}