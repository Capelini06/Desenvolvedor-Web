<?php

if ($_SERVER["REQUEST_METHOD"] !== "GET") {
    http_response_code(405);
    exit("Envie um formulário válido para excluir o aluno!");
}

include "./include/cabecalho.php";

require __DIR__ . '/config/conexao.php';

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

if (!$id || $id <= 0) {
    die("Indetificador inválido!");
}

$sql = "SELECT * FROM alunos WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->execute([":id" => $id]);
$aluno = $stmt->fetch();

if (!$aluno) {
    http_response_code(404);
    die("Aluno não encontrado");
}
?>

<main>
    <h1>Confirmar exclusão</h1>
    <p>Você realmente deseja excluir esse aluno?</p>
    <ul>
        <li>
            <strong>ID:</strong>
            <?= (int) $aluno["id"] ?>
        </li>
        <li>
            <strong>Nome:</strong>
            <?= htmlspecialchars($aluno["nome"]) ?>
        </li>
        <li>
            <strong>Idade:</strong>
            <?= (int) $aluno["idade"] ?>
        </li>
        <li>
            <strong>Cidade:</strong>
            <?= htmlspecialchars($aluno["cidade"]) ?>
        </li>
        <li>
            <strong>Curso:</strong>
            <?= htmlspecialchars($aluno["curso"]) ?>
        </li>
        <li>
            <strong>Email:</strong>
            <?= htmlspecialchars($aluno["email"]) ?>
        </li>
    </ul>
    <form action="excluirAluno.php" method="post">
        <input type="hidden" name="id" value="<?= (int) $aluno["id"] ?>">
        <button type="submit">Excluir aluno</button>
    </form>
    <a href="alunos.php">Cancelar exclusão</a>
</main>

<?php include "./include/rodape.php" ?>