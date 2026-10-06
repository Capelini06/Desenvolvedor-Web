<?php

$positivo= 0;
$negativo = 0;
$cont = 1;
$qta = (int) readline("Quantos numeros voce quer enviar?");

while ($cont <= $qta){
    $num = (int) readline("Insira um numero: ");
    if($num >=0){
        $positivo++;
    } else {
        $negativo++;
    }
    $cont++;
}

echo "Voce inseriu $positivo numeros positivos e $negativo numeros negativos";