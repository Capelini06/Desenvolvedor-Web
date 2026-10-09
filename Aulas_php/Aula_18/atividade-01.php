<?php

$nome = readline("Insira o seu nome: ");
$idade = (int) readline("Insira a sua idade: ");
$altura = (float) readline("Insira a sua altura: ");

$anoNasci = 2026 - $idade;

echo "Nome: {$nome}\n";
echo "Idade: {$idade}\n";
echo "Altura: {$altura}\n";
echo "Ano de nascimento aproximado: $anoNasci\n";
if ($idade >= 18){
    echo "Situação: Maior de idade";
} else {
    echo "Situação: Menor de idade";
}