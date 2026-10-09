<?php

$saldo = 1000;

do {
    echo "Saldo: {$saldo}\n";
    $saque = (int) readline("Insira um valor para sacar (ele deve ser multiplo de 10): ");
} while (($saque > 1000 && $saque < 0) && $saque%10==0);

$nota100 = intdiv($saque, 100);
$nota50 = intdiv($saque%100, 50);
$saque = $saque - (100 * $nota100);
$saque = $saque - (50 * $nota50);
$nota20 = intdiv($saque, 20);
$nota10 = intdiv(($saque%100)%20, 10);

echo "Notas de 100: $nota100\n";
echo "Notas de 50: $nota50\n";
echo "Notas de 20: $nota20\n";
echo "Notas de 10: $nota10\n";