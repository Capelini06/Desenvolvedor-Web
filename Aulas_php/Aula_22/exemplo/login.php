<?php

$usuario = $_POST['usuario'];

if (isset($_POST['usuario'])) {
    echo "<h1>Olá, {$usuario}</h1>";

} else {
    echo "<h1>Campo vazio</h1>";
}
