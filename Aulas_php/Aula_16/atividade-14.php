<?php

$N = readline ("Digite uma quantidade de valores que voce vai inserir: ");
$maior = 0;
$menor = 10000;
for($i = 1; $i <= $N; $i++){
    $valor = (int) readline("Insire um numero: ");
    if ($valor > $maior){
        $maior = $valor;
    }
    if($valor < $menor ) {
        $menor = $valor;
    }
}

echo "Maior valor inserido: $maior\nMenor valor inserido: $menor";