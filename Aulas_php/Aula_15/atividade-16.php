<?php
$soma = 0;
$produtos = 0;
$maisCaro = 0;
while (true){
    $opc = readline("Adicionar um produto? S/N: ");
    if ($opc == "N") {
        break;
    } else {
        $nome = readline("Insira o nome do produto: ");
        $preco = (float) readline("Insira o preço do produto: ");
        $soma =+ $preco;
        $produtos++;
        if($preco > $maisCaro){
            $maisCaro = $preco;
        }
    }
}

echo "Total de produtos inseridos: $produtos\nPreço total dos produtos inseridos: $soma\nPreço mais caro: $maisCaro";