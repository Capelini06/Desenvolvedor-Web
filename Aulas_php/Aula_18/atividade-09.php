<?php

$senha = 1234;
$tentativas = 3;

while(true){
    $opc = readline("Insira a senha($tentativas tentaivas restantes): ");
    if ($opc == 1234){
        echo"Senha correta";
        break;
    }
    $tentativas--;
    if ($tentativas == 0){
        echo "$tentativas tentativas restantes. Conta bloqueada";
        break;
    }
    echo "\n Senha incorreta. Tente novamente\n";
    }