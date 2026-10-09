<?php

$qta = 0;
$soma = 0;
while (true){
    $opc = (int) readline ("Insira um numero(0 para terminar): ");
    if ($opc == 0){
        break;
    }
    $qta++;
    $soma+=$opc;
}

if($qta == 0){
    echo "Nenhum valor inserido.";
} else {
    $media = $soma/ $qta;
    echo "Valores inseridos: {$qta}\n";
    echo "Soma dos valores inseridos: {$soma}\n";
    echo "Media: {$media}\n";
}