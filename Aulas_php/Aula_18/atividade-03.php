<?php

$valor = (float) readline("Insira o valor da compra: ");
if ($valor >= 500){
    $percentualDesconto = 15;
} else if ($valor >= 200){
    $percentualDesconto = 10;
} else if ($valor >= 100){
    $percentualDesconto = 5;
} else {
    $percentualDesconto = 0;
}

$desc = $percentualDesconto/100;
$valorDesc = $valor * $desc;
$valorFinal = $valor - $valorDesc;

echo "Valor da compra: R$" . number_format($valor, 2, ",", ".") . "\n";
echo "Desconto aplicado: {$percentualDesconto}%\n";
echo "Valor do desconto: R$" . number_format($valorDesc, 2, ",", ".") . "\n";
echo "Valor da final: R$" . number_format($valorFinal, 2, ",", ".") . "\n";
