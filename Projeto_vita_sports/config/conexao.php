<?php
$host = "localhost";
$dbName = "vita_sports";
$dbUser = "root";
$dbSenha = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8mb4", $dbUser, $dbSenha,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false]);
} catch (PDOException $erro) {
    error_log($erro-> getMessage());
    exit("Não foi possivel conectar ao banco de dados.");
}
unset($host, $dbName, $dbUser, $dbSenha);