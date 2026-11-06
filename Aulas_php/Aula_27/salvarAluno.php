<?php

require __DIR__ . "/config/conexao.php";
include "./include/cabecalho.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    // http_response_code(405): Indica metodo não permitido
    http_response_code(405);
    // exit: Saida de encerramento
    exit("Envie um formulario para realizar um cadastro");
}
$nome = trim($_POST["nomeAluno"] ?? "");
$email = trim($_POST["email"] ?? "");
$curso = trim($_POST["curso"] ?? "");
$erros = [];

if ($nome === "") {
    $erros[] = "Insira o nome do aluno";
}

if ($email === "") {
    $erros[] = "Insira um email";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erros[] = "Informe um email valido";
}

if ($curso === "") {
    $erros[] = "Insira o nome do curso";
}

if (!empty($erro)) {
    http_response_code(400);
    echo "<h1>Revise os dados</h1>";
    foreach ($erros as $erro) {
        echo "<p> htmlspecialchars($erro, ENT_QUOTES, 'UTF-8'</p>";
    }
    exit();
}

try {
    // :nome e :email: São place holders ou variaveis hipoteticas
    $sql = "INSERT INTO alunos (nome, curso, email) VALUES (:nome, :curso, :email)";

    // $pdo: Driver que conversa com o banco
// prepare: Fala para preparar o comando entre parenteses
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':nome' => $nome,
        ':curso' => $curso,
        ':email' => $email
    ]);

    echo "Aluno cadastrado com sucesso";
    echo "<p><a href='cadastrarAluno.php'>Voltar para cadastrar mais alunos</a></p>";
    echo "<p><a href='alunos.php'>Listar alunos</a></p>";
} catch (PDOException $erro) {
    error_log($erro->getMessage());
    echo "Não foi possível cadastrar o aluno";
}
?>