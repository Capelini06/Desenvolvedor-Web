<?php

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);
    exit('Envie um formulário válido para atualizar o aluno!');
}

require __DIR__ . '/config/conexao.php';

include "./include/cabecalho.php";
// filter_input - faz um filtro escolhido para a váriavel que passarmos para ver se ela se aplica ao que estamos validando
// FILTER_VALIDATE_INT - verifica se o número é inteiro
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($id === false || $id === null || $id <= 0) {
    http_response_code(400);
    exit('Identificador inválido');
}
// WHERE id = :id limita a consulta para achar por esse id
$sql = 'SELECT * FROM alunos WHERE id = :id';
// prepare faz a preparação da execução do sql e o execute passa a executar com os parametros passados
$stmt = $pdo->prepare($sql);
$stmt->execute([':id' => $id]);
$aluno = $stmt->fetch();
// fetch recupera a linha do banco e armazena no $aluno

if (!$aluno) {
    http_response_code(404);
    exit('Aluno não encontrado!');
}
?>

<main>
    <form action="atualizarAluno.php" method="POST">

        <input type="hidden" name="id" value="<?= htmlspecialchars((string) $aluno['id'], ENT_QUOTES, 'UTF-8') ?>">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required
            value="<?= htmlspecialchars($aluno['nome'], ENT_QUOTES, 'UTF-8') ?>">

        <br><br>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required
            value="<?= htmlspecialchars((string) $aluno['idade'], ENT_QUOTES, 'UTF-8') ?>">

        <br><br>

        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" required
            value="<?= htmlspecialchars($aluno['cidade'], ENT_QUOTES, 'UTF-8') ?>">

        <br><br>

        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required
            value="<?= htmlspecialchars($aluno['curso'], ENT_QUOTES, 'UTF-8') ?>">

        <br><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required
            value="<?= htmlspecialchars($aluno['email'], ENT_QUOTES, 'UTF-8') ?>">

        <br><br>

        <button type="submit">Atualizar Informações</button>
    </form>
</main>