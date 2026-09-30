<?php

$valor1 = (int) readline("Insira o primeiro valor: ");
$valor2 = (int) readline("Insira o segundo valor : ");

$divisão = $valor1/$valor2;
$resto = $valor1%$valor2;

echo "Divisão de $valor1 por $valor2: $divisão\n";
echo "Resto da divisão: $resto";