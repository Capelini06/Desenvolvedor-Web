<?php
$host = "localhost";
$banco = "vita_sports";
$user = "root";
$senha = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$banco;charset=utf8mb4", $user, $senha,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false]);
} catch (PDOException $erro) {
    error_log($erro-> getMessage());
    exit("Não foi possivel conectar ao banco de dados.");
}
