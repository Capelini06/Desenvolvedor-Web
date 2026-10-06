<?php
$comp = 0;

while (true){
        $numero = (int) readline("Insira um numero (0 para sair): ");
    if ($numero > $comp){
        $comp = $numero;
    }
    if ($numero == 0){
        break;
    }
}

echo "Maior numero inserido: $comp";