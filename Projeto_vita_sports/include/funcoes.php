<?php

function e(?string $valor): string{
    return htmlspecialchars($valor ?? "", ENT_QUOTES, "UTF-8");
}

// Verifica se o usuario que esta acessando é o admin ou não, se não for, vai para o login
function exigirAdmin(): void{
    // Verifica se o estado da sessão é diferente de ativo, se for, se cria uma sessão
    if(session_status() !== PHP_SESSION_ACTIVE) session_start();
    if(!isset(
        $_SESSION["usuario_id"]) 
        ||
        ($_SESSION["tipo"] ?? "")
        !== "admin"){
            header("Location: ../login.php");
            exit;
        }
}