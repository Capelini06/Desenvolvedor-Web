<?php


echo "<h1>RESULTADO:</h1>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'] ?? "";
    echo "<p>Recebido por POST: " . htmlspecialchars($nome) . "</p>";
} else if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['nome']) && !empty(trim($_GET['nome']))) {
        $nome = $_GET['nome'];
        echo "<p>Recebido por GET: " . htmlspecialchars($nome) . "</p>";
    } else {
        echo "<p>Nada recebido.</p>";
    }

} else {
    echo "<p>Nada recebido.</p>";
}