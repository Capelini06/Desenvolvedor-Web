<?php
$soma = 0;
$produtos = 0;
$maisCaro = 0;
while (true){
    $opc = readline("Adicionar um produto? S/N: ");
    if ($opc == "N") {
        break;
    } else {
        $preco = (float) readline("Insira o preço do produto: ");
        $soma =+ $preco;
        $produtos++;
        if($preco > $maisCaro){
            $maisCaro = $preco;
        }
    }
}

if ($soma < 200){
    echo "Total de produtos inseridos: $produtos\n
    Preço total dos produtos inseridos: $soma\n
    Preço mais caro: $maisCaro";
} elseif ($soma >= 200){
    $soma = $soma * 0.9;
    echo "Total de produtos inseridos: $produtos\n
    Preço total dos produtos inseridos (com desconto de 10%): $soma\n
    Preço mais caro: $maisCaro";
}
