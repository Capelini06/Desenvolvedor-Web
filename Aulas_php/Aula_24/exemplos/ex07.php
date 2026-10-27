<?php
function somar($num1, $num2){
    return $num1 + $num2;
}

$primeiraSoma = somar(100, 400);
$segundaSoma = somar(772, 451);
$total = somar($primeiraSoma, $segundaSoma);

echo $total;