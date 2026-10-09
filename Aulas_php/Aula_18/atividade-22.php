<?php

while (true){
    echo "MENU \n";
    echo "1) Somar \n";
    echo "2) Subtrair \n";
    echo "3) Multiplicar \n";
    echo "4) Dividir \n";
    echo "0) Sair \n";
    $opc = (int) readline("Insira sua escolhha: ");

    switch ($opc){
        case 1:
            $n1 = (float) readline("Insira um numero: ");
            $n2 = (float) readline("Insira um numero: ");
            $resultado = $n1 + $n2;
            echo "Resultado: $resultado\n";
            break;
        case 2:
            $n1 = (float) readline("Insira um numero: ");
            $n2 = (float) readline("Insira um numero: ");
            $resultado = $n1 - $n2;
            echo "Resultado: $resultado\n";
            break;
        case 3:
            $n1 = (float) readline("Insira um numero: ");
            $n2 = (float) readline("Insira um numero: ");
            $resultado = $n1 * $n2;
            echo "Resultado: $resultado\n";
            break;
        case 4:
            $n1 = (float) readline("Insira um numero: ");
            $n2 = (float) readline("Insira um numero: ");
            if ($n2 == 0) {
                echo "Não é possível dividir por zero\n";
            } else {
                $resultado = $n1 / $n2;
                echo "Resultado: $resultado\n";
            }
            break;
        case 0:
            echo "Encerrando\n";
            break 2;
        default:
            echo "OPÇÃO INVALIDA\n";
            break;
    }
}