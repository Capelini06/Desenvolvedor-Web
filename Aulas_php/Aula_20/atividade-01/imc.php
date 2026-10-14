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
            <h1>CALCULADORA DE IMC</h1>
            <form action="imc.php" method="get">
                <input type="text" name="peso" id="peso" placeholder="Seu peso" required>
                <input type="text" name="altura" id="altura" placeholder="Sua altura" required>
                <button type="submit">ENVIAR</button>
            </form>
        </div>

        <?php

        if (isset($_GET["peso"]) && isset($_GET["altura"])) {
            $peso = (float) ($_GET["peso"]);
            $altura = (float) $_GET["altura"];
            $imc = $peso / ($altura * $altura);
            ?>
            <div class="card">
                <p>URL DESSA PAGINA
                    <span class="url">
                        <?= htmlspecialchars($_SERVER["REQUEST_URI"]) ?>
                    </span>
                </p>
                <p>
                    Seu IMC é de <strong>
                        <?= $imc ?>
                    </strong> !
                </p>
                <?php if ($imc >= 40) { ?>
                    <p>Você esta em obesidade grau III.</p>
                <?php } else if ($imc >= 35 && $imc <= 39.9) { ?>
                        <p>Você esta em obesidade grau II.</p>
                <?php } else if ($imc >= 3 && $imc <= 34.9) { ?>
                            <p>Você esta em obesidade grau I.</p>
                <?php } else if ($imc >= 25 && $imc <= 29.9) { ?>
                                <p>Você esta em sobrepeso.</p>
                <?php } else if ($imc >= 18.5 && $imc <= 24.9) { ?>
                                    <p>Você no peso ideal.</p>
                <?php } else { ?>
                                    <p>Voce esta abaixo do peso</p>
                <?php } ?>
            </div>
        <?php } ?>
    </main>
</body>