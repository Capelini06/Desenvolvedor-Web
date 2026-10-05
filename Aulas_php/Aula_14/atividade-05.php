<?php

$valor1 = (int) readline("Insira o primeiro valor: ");
$valor2 = (int) readline("Insira o segundo valor: ");
$operacao = (int) readline("Insira a operação (1-adição, 2-subtração, 3-divisão, 4-multiplicação): ");

switch ($operacao) {
    case 1:
        $resultado = $valor1 + $valor2;
        echo "$valor1 + $valor2 = $resultado";
        break;
    case 2:
        $resultado = $valor1 - $valor2;
        echo "$valor1 - $valor2 = $resultado";
        break;
    case 3:
        $resultado = $valor1/$valor2;
        echo "$valor1/$valor2 = $resultado";
        break;
    case 4:
        $resultado = $valor1 * $valor2;
        echo "$valor1 * $valor2 = $resultado";
        break;
    default:
        echo "invalido";
        break;
}