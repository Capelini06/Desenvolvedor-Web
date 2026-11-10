<?php
include "./include/cabecalho.php";
require "./include/funcoes.php";
require "./config/conexao.php";

$produtos = $pdo->query("SELECT id, nome, preco, descricao FROM produtos ORDER BY id DESC LIMIT 3")->fetchAll();
?>

<main>
    <section class="hero">
        <div>
            <small>Nova coleção • 2026</small>
            <h1>VISTA SEU <br>
                <em>MOVIMENTO</em>
            </h1>
            <p>Peças esportivas para acompanhar o seu ritmo, dentro e fora do treino.</p>
            <a href="loja.php" class="btn-light">
                Explorar coleção
            </a>
        </div>
        <b class="hero-art">MOVE<br>YOUR<br>WAY.</b>
    </section>

    <section class="section">
        <h2>Produto em destaque</h2>
        <div class="products">

            <?php foreach ($produtos as $p): ?>
                <a href="produto.php?id=<?= (int) $p["id"] ?>" class="product">
                    <div class="visual">
                        VITTA / <?= (int) $p["id"] ?>
                    </div>
                    <h3>
                        <?= e($p["nome"]) ?>
                    </h3>
                    <b>
                        R$ <?= number_format((float) $p["preco"], 2, ",", ".") ?>
                    </b>
                </a>
            <?php endforeach; ?>

        </div>
    </section>
</main>
<?php include "./include/rodape.php" ?>