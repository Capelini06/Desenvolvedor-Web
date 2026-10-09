<?php

$maior = 0;
$posicaoMaior = 0;
$menor = 0;
$posicaoMenor = 0;

$numeros = [];

for ($i = 1; $i <= 6; $i++) {
    $numeros[] = (int) readline("Insira um numero: ");
}

for ($i = 0; $i < count($numeros); $i++) {
    if ($i == 0) {
        $maior = $numeros[$i];
        $posicaoMaior = $i;
        $menor = $numeros[$i];
        $posicaoMenor = $i;
    }
    if ($maior < $numeros[$i]){
        $maior = $numeros[$i];
        $posicaoMaior = $i;
    }
    if ($menor > $numeros[$i]){
        $menor = $numeros[$i];
        $posicaoMenor = $i;       
    }
}

echo "Maior: $maior na posição $posicaoMaior\n";
echo "Menor: $menor na posição $posicaoMenor\n";