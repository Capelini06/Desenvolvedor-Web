<?php

$vetor = [];

for($i = 1; $i <= 5; $i++){
    $vetor[] = readline("Insira uma cidade: ");
}

for($i = 0; $i < count($vetor); $i++){
    echo $i+1 . ") $vetor[$i]\n";
}