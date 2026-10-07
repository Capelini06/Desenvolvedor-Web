<?php

for($i = 1; $i <=100; $i++){
    $soma+=$i;
    echo "Soma: $soma\n";
}

echo "\n============================================================\n\n";

for($i = 10; $i >=1; $i--){
    echo "Loop $i\n";
}

echo "\n============================================================\n\n";

$numero = (int) readline("Digite um numero: ");
for($i = 1; $i <=$numero; $i++){
    echo "Loop $i\n";
}