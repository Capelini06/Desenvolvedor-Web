<?php

$cont = 1;
$soma = 0;

while ($cont <=11) {
    $soma = $soma + $cont;
    echo "$soma\n";
    $cont++;
}

echo "Soma dos numeros de 1 a 11: $soma";