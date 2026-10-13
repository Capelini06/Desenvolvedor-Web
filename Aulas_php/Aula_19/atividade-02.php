<?php

$produtos = [];

for($i = 1; $i <= 5; $i++){
    $produtos[] = readline("Insira o produto: ");
}

for($i = 0; $i < count($produtos); $i++){
    echo $i + 1 . ") $produtos[$i] \n";
}