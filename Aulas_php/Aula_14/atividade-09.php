<?php
$metros = (float) readline("Insira um tamanho em metros:");

switch ($metros) {
    case "Centimetros":
        $centimetros = $metros*100;
        echo "$metros metros em sentimetros = $centimetros";
        break;
    case "Quilometros":
        $km = $metros/1000;
        echo "$metros metros em sentimetros = $km";
        break;
    case "Milimetros":
        $mm = $metros*1000;
        echo "$metros metros em sentimetros = $mm";
        break;
    default:
        echo "Invalido";
        break;
}