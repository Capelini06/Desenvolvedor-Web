<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // http_response_code(405) - indica método não permitido
    http_response_code(405);
    // exit - saída de encerramento
    exit('Envie um formulário para realizar um cadastro!');
}

require __DIR__ . '/config/conexao.php';

include "./include/cabecalho.php";

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$nome = trim($_POST['nome'] ?? '');
$idade = (int) trim($_POST['idade'] ?? '');
$cidade = trim($_POST['cidade'] ?? '');
$curso = trim($_POST['curso'] ?? '');
$email = trim($_POST['email'] ?? '');
$erros = [];

if ($id === false || $id === null || $id <= 0) {
    $erros[] = 'Identificador não encontrado!';
}
if ($nome === '')
    $erros[] = 'Informe um nome!';
if ($idade == null)
    $erros[] = 'Informe uma idade!';
if ($cidade === '')
    $erros[] = "Informe a cidade do aluno!";
if ($curso === '')
    $erros[] = "Informe o curso que esta inscrito!";
if ($email === '')
    $erros[] = "Informe o email do aluno!";
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
    $erros[] = "Informe um email em formato válido";

if (!empty($erros)) {
    http_response_code(400);
    echo "<h1>Revise os dados</h1> <ul>";
    foreach ($erros as $erro) {
        echo "<li>" . htmlspecialchars($erro, ENT_QUOTES, 'UTF-8') . "</li>";
    }
    echo "</ul><p><a href='alunos.php'>Voltar a listagem</a></p>";
    exit();
}

try {
    $sql = 'UPDATE alunos SET nome=:nome, idade=:idade, cidade=:cidade, curso=:curso, email=:email WHERE id=:id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':nome' => $nome, ':idade' => $idade, ':cidade' => $cidade, ':curso' => $curso, ':email' => $email, ':id' => $id]);
    echo '<h1>Alteração concluída!</h1>';
    echo '<p>Os dados do aluno foram enviados para atualização.</p>';
    echo "</ul><p><a href='alunos.php'>Voltar a listagem</a></p>";
} catch (PDOException $erro) {
    error_log($erro->getMessage());
    http_response_code(500);
    echo '<h1>Não foi possível atualizar o aluno.</h1>';
}