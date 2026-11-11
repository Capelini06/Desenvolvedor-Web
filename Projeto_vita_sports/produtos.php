<?php 

require "./include/funcoes.php";
require "./config/conexao.php";

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

$stmt = $pdo->prepare("SELECT p.*, c.nome AS categoria 
                        FROM produtos p 
                        INNER JOIN categorias c 
                        ON c.id_categoria = p.id_categoria 
                        WHERE p.id=:id");

$stmt -> execute([":id" => $id?: 0]);

$produto = $stmt->fetch();

include "./include/cabecalho.php";
?>

<main class="section">
    <?php if(!$produto): ?>
        <h1>Produto não encontrado!</h1>
    <?php else: ?>
        <div class="detail">
            <div class="visual large">
                VITTA / <?= (int)$produto["id"] ?>
            </div>
            <div>
                <small>
                    <?= e($produto["categoria"]??"VITTA") ?>
                </small>

                <h1>
                    <?= e($produto["nome"]) ?>
                </h1>

                <h2>
                    R$ <?= number_format((float) $produto["preco"], 2, ",", ".") ?>
                </h2>

                <p>
                    Tamanho:
                    <?= e($produto["tamanho"]) ?>
                </p>

                <p>
                    Estoque
                    <?= (int)$produto["estoque"] ?>
                </p>
            </div>
        </div>
        <?php endif ?>
</main>

<?php include "./include/rodape.php"; ?>