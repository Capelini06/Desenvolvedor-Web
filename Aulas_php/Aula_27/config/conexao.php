<?php
$host = 'localhost';
$banco = 'escola_web';
$usuario = 'root';
$senha = ''; 

try {
    // Conexão usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);
    
    // Configura o PDO para lançar exceções em caso de erros
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}
?>