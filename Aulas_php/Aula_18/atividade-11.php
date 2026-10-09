<?php

$num = (int) readline("Insira um valor positivo maior que 0: ");
$soma = 0;
$fatorial = 1;

if ($num <= 0){
    echo "Numero invalido.";
} else {
    for($i = 1; $i <= $num; $i++){
        $soma = $soma + $i;
        $fatorial = $fatorial * $i;
    }
    echo "Soma: {$soma}\n";
    echo "Fatorial: {$fatorial}\n";
}

