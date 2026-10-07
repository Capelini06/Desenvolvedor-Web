<?php

$N = (int) readline("Digite um numero: ");
$mult = 0;
for ($i = 2; $i <=($N-1); $i++){
    if($N%$i==0){
        $mult++;
    }
}

if($mult > 0){
    echo "O numero não é primo";
} else {
    echo "O numero é primo";
}
