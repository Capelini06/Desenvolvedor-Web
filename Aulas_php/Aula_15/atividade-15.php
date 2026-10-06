<?php

$saldo = 1000;
$bool = true;

while ($bool) {
    echo "1)Vizualizar saldo\n2)Fazer deposito\n3)Fazer saque\n0)Sair\n";
    $escolha = readline("Digite a sua esolha: ");
    if ($escolha == 1){
        echo "Saldo: $saldo\n";
    }  elseif ($escolha == 2){
        $deposito = (int) readline("Insira quanto voce quer depositar: ");
        $saldo += $deposito;
    } elseif ($escolha == 3){
        $saque = (int) readline("Insira quanto voce quer sacar: ");
        $saldo -= $saque;
    }  elseif ($escolha == 0){
        $bool = false;
    }   else {
        echo "Opção invalida!";
    }
}