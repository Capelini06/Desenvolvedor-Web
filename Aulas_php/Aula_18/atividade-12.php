<?php

$num = (int) readline("Insira a quantidade de valores que voce quer inserir: ");
$maior = 0;
$menor = 0;
$soma = 0;
$qta = 0;

for ($i = 1; $i <= $num; $i++) {
    $valor = (float) readline("Insira um valor: ");
    $soma += $valor;
    $qta++;
    if ($i == 1) {
        $maior = $valor;
        $menor = $valor;
    }
    if($num > $maior){
        $maior = $num;
    }
    if ($num < $menor){
        $menor = $num;
    }
}

$media = $soma / $qta;

echo "Maior: $maior \n";
echo "Menor: $menor \n";
echo "Media: $media \n";