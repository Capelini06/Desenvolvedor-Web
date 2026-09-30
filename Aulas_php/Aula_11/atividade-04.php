<?php

$idade = (int) readline("Insira sua idade: ");
$peso = (float) readline("Insira o seu peso: ");
$altura = (float) readline("Insira a sua altura:");

$imc = $peso / ($altura*$altura);

echo "Sua idade é: $idade anos\n";
echo "Seu IMC é de: $imc";