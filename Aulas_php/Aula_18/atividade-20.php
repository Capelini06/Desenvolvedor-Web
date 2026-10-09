<?php

$lista = [];

for($i = 1; $i <= 5; $i++){
    $lista[] = readline("Insira um numero: ");
}

echo "LISTA NA ORDEM ORIGINAL\n";
for($i = 0; $i < count($lista); $i++){
    echo $i+1 . ") $lista[$i]\n";
}

echo "LISTA NA ORDEM INVERTIDA\n";
for($j = (count($lista) - 1); $j >= 0; $j--){
    echo $j +1 . ") $lista[$j]\n";
}