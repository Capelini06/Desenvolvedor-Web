<?php

if (isset($_POST['user']) && isset($_POST['senha'])){
    $user = $_POST['user'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if($user == "ADMIN" && $senha == "123abc"){
        echo "<h1>LOGIN EFETUADO</h1>";
        echo "<h2>Bem vindo {$user}</h2>";
    } else {
        echo "<h1>LOGIN NEGADO</h1>";
        echo "<h2>Usuario ou senha incorretos. </h2>";
    }
}