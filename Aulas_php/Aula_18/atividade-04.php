<?php

$seg = (int) readline("Insira uma quantidade de degundos: ");

$hora = intdiv($seg, 3600);
$min1 = intdiv($seg%3600, 60);
$min2 = ($seg%60);

echo "$hora horas, $min1 minutos e $min2 segundos\n";
