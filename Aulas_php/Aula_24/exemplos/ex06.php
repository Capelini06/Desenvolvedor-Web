<?php

function calcularComEcho($a, $b){
    echo $a + $b . "\n";
}

function calcularComReturn($a, $b){
    return $a + $b;
}

$resultado1 = calcularComEcho(10, 5);
var_dump($resultado1);

echo "========================================================================\n";

$resultado2 = calcularComReturn(10, 5);
var_dump($resultado2);