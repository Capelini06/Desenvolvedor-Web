<?php

$nota = 1;
$soma = 0;
$cont = 1;

while ($nota != 0) {
    $num = (int) readline("Insira uma nota (0 para terminar): ");
    $soma = $soma + $num;
    $cont++;
}

$media = $soma/$cont;
echo "A media de todos os numeros inseridos é: $media";