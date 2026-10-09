<?php

$nome = readline("Insira o nome do aluno: ");
$nota1 = (float) readline("Insira a  primeira nota: ");
$nota2 = (float) readline("Insira a  segunda nota: ");
$nota3 = (float) readline("Insira a  terceira nota: ");

$media = ($nota1+$nota2+$nota3)/3;

echo "Nome: {$nome}\n";
echo "Media: " . number_format($media, 2, ",", ".") . "\n";
if ($media >= 7){
    echo "Situação: Aprovado";
} else if ($media <= 6.9 && $media >= 5){
    echo "Situação: Em exame";
} else {
    echo "Situação: Reprovado";
}