<?php

$letra = readline("Insira uma letra de A a E");

switch ($letra) {
case "A":
    echo "Entre 1 e 10.";
    break;    
case "B":
    echo "Entre 11 e 20.";
    break;    
case "C":
    echo "Entre 21 e 30.";
    break;
case "D":
    echo "Entre 31 e 40.";
    break;
case "E":
    echo "Entre 41 e 50.";
    break;
default:
    echo "Invalido";
    break;
}