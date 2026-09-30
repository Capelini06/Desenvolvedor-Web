<?php

$precoOriginal = (float) readline("Insira o preço original: ");
$percentualDesconto = (float) readline("Percentual de desconto: ");

$valorDesconto = ($precoOriginal * ($percentualDesconto/100));
$valorFinal = ($precoOriginal - $valorDesconto);

echo "Valor original        : $precoOriginal \n";
echo "Valor de desconto     : $valorDesconto \n";
echo "Valor final           : $valorFinal    \n";    