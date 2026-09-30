<?php

$reais = (float) readline("Insira o valor em reais:");
$cotacao = (float) readline("Insira a cotação do dólar");
$dolar = $reais / $cotacao;

echo "Valor em dolar: $dolar";