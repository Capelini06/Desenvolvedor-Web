<?php

$anoNasc = (int) readline("Insira o seu ano de nascimento: ");
$anoAtual = (int) readline("Insira o ano atual: ");

$idade = $anoAtual - $anoNasc;

echo "Idade: {$idade}\n";
if(($anoNasc%4==0 && $anoNasc%100!==0) || ($anoNasc%100==0 && $anoNasc%400==0)){
    echo "Ano de nascimento: bissexto";
} else {
    echo "Ano de nascimento: não bissexto";
}