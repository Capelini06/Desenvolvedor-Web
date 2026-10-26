<?php

$reais = $_GET['real'];
$dollar = $_GET['dollar'];

if (is_numeric($reais) 
    && is_numeric($dollar)
    && $reais > 0
    && $dollar > 0
){
    $valorReais = (float) $reais;
    $cotacao = (float) $dollar;

    $valorDolar = $valorReais / $cotacao;

    echo "<h2>Resultado da Conversão</h2>";
    echo "<p><strong>Valor em Reais:</strong> R$ " . number_format($valorReais, 2, ',', '.') . "</p>";
    echo "<p><strong>Cotação utilizada:</strong> R$ " . number_format($cotacao, 4, ',', '.') . "</p>";
    echo "<p><strong>Valor convertido:</strong> US$ " . number_format($valorDolar, 2, ',', '.') . "</p>";
} else {
    echo"<p>Erro: Informe valores numéricos</p>";
}
echo "<br><a href='index.html'>Fazer nova conversão</a>";