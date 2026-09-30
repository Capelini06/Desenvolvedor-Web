<?php

$produto = readline("Insira o nome do produto: ");
$preco = (float)readline("Insira o preço unitario do produto: ");
$quantidade = (int)readline("Insira a quantidade comprada: ");

$total = $preco * $quantidade;

echo "================================================== \n";
echo "                   RESULTADO                       \n";
echo "================================================== \n";
echo "Nome do produto       : $produto\n";    
echo "Preço unitario        : $preco\n";    
echo "Quantidade            : $quantidade\n";    
echo "Valor total           : $total\n";    