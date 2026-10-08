<?php
$temp = [22.5, 25.0, 19.5, 27.0, 24.5];
$maior = 0;
$menor = 100;
$soma = 0;
for($i = 0; $i < count($temp); $i++){
    echo "$temp[$i]\n";
    $soma = $soma + $temp[$i];
    if($temp[$i] > $maior){
        $maior = $temp[$i];
    }
    if ($temp[$i] < $menor) {
        $menor = $temp[$i];
    }
}

$media = $soma / count($temp);
echo "Maior temperatura: " . number_format($maior, 1, ",", ".") . "°C\n";
echo "Menor temperatura: " . number_format($menor, 1, ",", ".") . "°C\n";
echo "Media de temperatura: " . number_format($media, 1, ",", ".") . "°C\n";
echo "Total de temperaturas: " . count($temp);