<?php

$tamanho = readline("Insira o tamanho (P, M, G, GG): ");	

switch ($tamanho) {
case "P":
    echo "Busto: 82 a 86 cm";
    echo "Cintura: 64 a 68 cm";
    break;    
case "M":
    echo "Busto: 90 a 94 cm";
    echo "Cintura: 72 a 76 cm";
    break;    
case "G":
    echo "Busto: 98 a 102 cm";
    echo "Cintura: 80 a 84 cm";
    break;
case "GG":
    echo "Busto: 106 a 110 cm";
    echo "Cintura: 88 a 92 cm";
    break;
default:
    echo "Invalido";
    break;
}