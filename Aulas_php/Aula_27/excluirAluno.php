<?php
require __DIR__ . "/config/conexao.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    //header(): Faz o redirecionamento para outra tela, enviando o cabecalho http bruto
    header("Location: alunos.php");
    exit();
}

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);

if (!$id || $id <= 0) {
    header("Location:alunos.php?erro=id_invalido");
    exit();
}

try {
    $sql = "DELETE FROM alunos WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([":id" => $id]);

    $quantidade = $stmt->rowCount();

    if ($quantidade > 0) {
        header("Location: alunos.php?sucesso=excluido");
        exit();
    }

    header("Location:alunos.php?erro=nao_encontrado");
    exit();
} catch (PDOException $erro) {
    header("Location:alunos.php?erro=falha");
}
?>