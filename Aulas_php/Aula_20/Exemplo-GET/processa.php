<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Get</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main>
        <div class="card">
            <h1>PRIMEIRO GET</h1>
            <form action="processa.php" method="get">
                <input  type="text" 
                        name="nome" 
                        id="nome" 
                        placeholder="Seu nome" 
                        required>
                <input  type="number"
                        name="idade"
                        id="idade"
                        placeholder="Sua idade"
                        required>
                <button type="submit">ENVIAR</button>
            </form>
        </div>

<?php

if(isset($_GET["nome"]) && isset($_GET["idade"])){
    $nome = htmlspecialchars($_GET["nome"]);
    $idade = (int) $_GET["idade"];
?>
<div class="card">
    <p>URL DESSA PAGINA
        <span class="url">
            <?= htmlspecialchars($_SERVER["REQUEST_URI"]) ?>
        </span>
    </p>
    <p>
        Olá, <strong>
            <?= $nome ?>
        </strong> !
    </p>
    <?php if($idade>=18){ ?>
        <p>Você é maior de idade.</p>
    <?php }else{ ?>
        <p>Você é menor de idade.</p>
    <?php } ?>
</div>
<?php } ?>
    </main>
    </body>