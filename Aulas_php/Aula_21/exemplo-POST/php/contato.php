<?php

if(isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["mensagem"])){
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensagem = htmlspecialchars($_POST["mensagem"]);

    echo "<h1>Mensagem recebida</h1>";
    echo "<p>Obrigado $nome</p>";
    echo "<p>Vamos responder para $email</p>";
    echo "<p>Sua mensagem: $mensagem</p>";
} else {
    echo "<p>Nenhum dado recebido. Preencha o formulario primeiro.</p>";
}
echo "<p><a href='contato.html'>VOLTAR</a></p>";