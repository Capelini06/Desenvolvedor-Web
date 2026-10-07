<?php

$numero = (int) readline("Insire um numero: ");

for ($i = 0; $i <= 10; $i++){
    $conta = $numero * $i;
    echo "$i * $numero = $conta\n
    ";
}