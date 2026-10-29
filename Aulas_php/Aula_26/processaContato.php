<?php

$nomeUsuario = trim($_POST["nomeUsuario"]);
$emailUsuario = trim($_POST["emailUsuario"]);

if (isset($_POST["nomeUsuario"])) {
    echo "O campo está preenchido <br>";
} else {
    echo "O campo não está preenchido<br>";
}

if(!filter_var($emailUsuario, FILTER_VALIDATE_EMAIL)){
    echo "Email invalido<br>";
} else {
    echo "Email valido<br>";
}

echo "Ola {$nomeUsuario} <br>";
echo "Já entramos em contato no email: {$emailUsuario}";