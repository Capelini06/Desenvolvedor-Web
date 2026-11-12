<?php 

session_start();

require_once __DIR__ . "/../config/conexao.php";
require_once __DIR__ . "/../include/funcoes.php";

exigirAdmin();

$produtos=$pdo->query(" SELECT p.id, p.nome, p.preco, p.estoque, c.nome AS categoria 
                        FROM produtos p INNER JOIN categorias c ON c.id_categoria = p.id_catrgoria
                        ORDER BY p.id DESC")->fetchAll();

$titulo = "ADMIN | VITTA";
include __DIR__ . "/../include/cabecalho.php";
?>

<main class="section">
    <h1>Adminstração de Produtos</h1>
    <p><a class="btn" href="form.php">Novo produto</a></p>
    <div class="tablewrap">
        <table>
            <tr>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Ações</th>
            </tr>

            <?php foreach($produtos as $p): ?>
                <tr>
                    <td><?= e($p["nome"]) ?></td>
                    <td><?= e($p["categoria"]) ?></td>
                    <td><?= number_format((float) ($p["preco"]), 2, ",", ".") ?></td>
                    <td><?= (int) $p["estoque"] ?></td>
                    <td>
                        <a href="form.php?id=<?= (int) $p["id"] ?>">Editar</a>
                        |
                        <a href="excluir.php?id=<?= (int) $p["id"] ?>">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</main>

<?php include_once __DIR__ . "/../include/rodape.php"; ?>