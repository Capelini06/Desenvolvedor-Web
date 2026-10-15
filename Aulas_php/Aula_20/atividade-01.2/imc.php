<?php

$mostrarResultado = false;
$erro = "";
$classificacao = "";
$imc = 0;
$peso = 0;
$altura = 0;

if (isset($_GET["peso"]) && isset($_GET["altura"])) {
    $peso = (float) str_replace(",", ".", $_GET["peso"] ?? "");
    $altura = (float) str_replace(",", ".", $_GET["altura"] ?? "");

    if ($peso <= 0 || $altura <= 0) {
        $erro = "Informe peso e altura maior que 0";
    } else {
        $imc = $peso / ($altura ** 2);
        if ($imc >= 40) {
            $classificacao = "Obesidade grau III";
        } else if ($imc >= 35 && $imc <= 39.9) {
            $classificacao = "Obesidade grau II";
        } else if ($imc >= 3 && $imc <= 34.9) {
            $classificacao = "Obesidade grau I";
        } else if ($imc >= 25 && $imc <= 29.9) {
            $classificacao = "Sobrepeso";
        } else if ($imc >= 18.5 && $imc <= 24.9) {
            $classificacao = "Peso ideal";
        } else {
            $classificacao = "Abaixo do peso";
        }
        $mostrarResultado = true;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div class="card">
            <h1>CALCULADORA IMC</h1>
            <form action="imc.php" method="get">
                <input type="text" name="peso" id="peso" placeholder="Digite o seu peso(Kg)"
                    value="<?= htmlspecialchars($_GET[$peso] ?? "") ?>">
                <input type="text" name="altura" id="altura" placeholder="Digite a sua altura(M)"
                    value="<?= htmlspecialchars($_GET[$altura] ?? "") ?>">
                <button type="submit">CALCULAR</button>
            </form>
        
        <?php if ($erro != "") { ?>
            <p class="erro"><?= $erro ?></p>
        <?php } ?>
        
        <?php if ($mostrarResultado) { ?>
            <div class="card">
                <p>IMC: <strong><?= number_format($imc, 2, ",", ".") ?></strong></p>
                <p>Classificação: <strong><?= $classificacao ?></strong></p>
            </div>
        <?php } ?>
    </main>
</body>

</html>