<?php

$qtaPedidos =0;
while ($pedido !== "SAIR"){
    echo "PASTEIS\n1)Pastel de queijo\n2)Pastel de carne\n3)Pastel de palmito\n";
    $pedido = readline("Voce gostaria de fazer um pedido? (SAIR para sair)");
    $qtaPedidos++;
}
echo "Voce pediu $qtaPedidos de pasteis. Obrigado pela preferencia";