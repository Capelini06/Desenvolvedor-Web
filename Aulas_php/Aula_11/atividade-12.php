<?php

$nota1 = (float) readline("Insira o primeiro valor: ");
$peso1 = (int) readline("Insira o primeiro peso: ");

$nota2 = (float) readline("Insira o segundo valor: ");
$peso2 = (int) readline("Insira o segundo peso: ");

$nota3 = (float) readline("Insira o terceiro valor: ");
$peso3 = (int) readline("Insira o terceiro peso: ");

$media = (($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3))/ ($peso1+$peso2+$peso3);

echo "Media: $media";