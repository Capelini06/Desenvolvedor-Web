<?php

if (!isset($_GET["nomeUsuario"])) {
    echo "Digite um nome ou apelido adequado";
    exit;
}

$nome = trim($_GET["nomeUsuario"]);
if (empty($nome)) {
    echo "<p>O campo de busca não pode ficar vazio</p>";
    exit;
}

$termoNome = htmlspecialchars($nome, ENT_NOQUOTES, "UTF-8");
echo "<h1>Resultado da busca: {$termoNome}</h1>";