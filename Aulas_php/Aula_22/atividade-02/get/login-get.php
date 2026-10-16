<?php

if (isset($_GET['user']) && isset($_GET['senha'])){
    $user = $_GET['user'] ?? '';
    $senha = $_GET['senha'] ?? '';

    if($user == "ADMIN" && $senha == "123abc"){
        echo "<h1>LOGIN EFETUADO</h1>";
        echo "<h2>Bem vindo {$user}</h2>";
    } else {
        echo "<h1>LOGIN NEGADO</h1>";
        echo "<h2>Usuario ou senha incorretos. </h2>";
    }
}