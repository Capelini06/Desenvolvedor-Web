<?php

function somar($num1, $num2){
    $resultado = $num1 + $num2;
    return $resultado;
}

$num1 = (float) readline("Insira o primeiro numero: ");
$num2 = (float) readline("Insira o segundo numero: ");

$resultado = somar($num1, $num2);

echo $resultado;