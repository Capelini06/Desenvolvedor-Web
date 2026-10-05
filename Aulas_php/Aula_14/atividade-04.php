<?php

$opcao = readline("Insira uma opção de 1 a 5: ");
$saldo = readline("Insira o saldo em conta: ");
    switch ($opcao) {
        case 1:
            echo "Seu saldo é de: $saldo";
            break;
        case 2:
            $saque = (float) readline("Insira quanto reias voce quer sacar: ");
            if ($saque >= $saldo) {
                $saldo - $saque;
                echo "Seu saldo é de: $saldo";
                break;
            } else {
                echo "Saldo insuficiente";
                break;
            }
        case 3:
            $deposito = (float) readline("Insira quantos reais voce quer depositar: ");
            $saldo + $deposito;
            echo "Seu saldo é de: $saldo";
            break;
        case 4:
            $saque = (float) readline("Insira quanto reias voce quer sacar: ");
            if ($saque >= $saldo) {
                $saldo - $saque;
                echo "Seu saldo é de: $saldo";
            } else {
                echo "Saldo insuficiente";
            }
            break;
        case 5:
            echo "Até a proxima";
            break;
        default:
            echo "Opação invalida";
            break;
    }

