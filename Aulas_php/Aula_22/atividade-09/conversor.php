<?php

if (isset($_GET['real']) && isset($_GET['dolar'])) {
    $real = $_GET['real'] ?? '';
    $dolar = $_GET['dolar'] ?? '';

    $valorConv = $real * $dolar;

    echo "<h1>CONVERSÃO:</h1>";
    echo "<p>Valor em reais: {$real}</p>";
    echo "<p>Cotação dolar: {$dolar}</p>";
    echo "<p>Valor convertido: {$valorConv}</p>";
}