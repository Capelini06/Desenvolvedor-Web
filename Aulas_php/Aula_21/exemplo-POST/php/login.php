<?php

$usuarioCorreto = "ADMIN";
$senhaCorreta = "abc123";

if(isset($_POST["usuario"]) && isset($_POST["senha"])){
    $usuario = trim($_POST["usuario"]);
    $senha = $_POST["senha"];

    if($usuario == $usuarioCorreto && $senha == $senhaCorreta){
        echo "<h1>Bem vindo, " . htmlspecialchars($usuario) . "!</h1>";
        echo "<p>Login realizado com sucesso</p>";
    } elseif ($usuario == $usuarioCorreto){
        echo "<h1>Senha incorreta! tente novamente</h1>";
        echo "<p><a href='../html/login.html'>TENTAR NOVAMENTE</a></p>";
    } else {
        echo "<h1>Usuário não encontrado!</h1>";
        echo "<p><a href='../html/login.html'>TENTAR NOVAMENTE</a></p>";
    }
} else {
    echo "<h1>Acesse o formulário de login.</h1>";
    echo "<p><a href='../html/login.html'>TENTAR NOVAMENTE</a></p>";
}