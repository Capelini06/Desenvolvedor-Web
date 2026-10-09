<?php

$nomes = [];

for($i = 1; $i <= 5; $i++){
    $nomes[] = readline("Insira um nome: ");
}

for ($i = 0; $i < count($nomes); $i++){
    echo ($i+1) . ") {$nomes[$i]}\n";
}