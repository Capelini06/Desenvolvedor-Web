<?php
require __DIR__ . "/config/conexao.php";

// $sql guarda as intruções
$sql = "SELECT id, nome, curso FROM alunos";

// querry executa as instruções
$resultado = $pdo->query($sql);

// retorna uma lista de alunos
$alunos = $resultado->fetchAll();
?>
<?php include "include/cabecalho.php"?>
<main>
    <h1>Aluno cadastrados</h1>
    <tbody>
        <?php if (count($alunos) === 0): ?>
            <p>Nenhum aluno cadastrado</p>
        <?php else: ?>
            <table border="1" cellpadding="8">
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>CURSO</th>
                </tr>
                <?php foreach ($alunos as $aluno): ?>
                    <tr>
                        <td><?= htmlspecialchars((string) $aluno["id"]) ?></td>
                        <td><?= htmlspecialchars($aluno["nome"]) ?></td>
                        <td><?= htmlspecialchars($aluno["curso"]) ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif ?>
    </tbody>
</main>
<?php include "include/rodape.php"?>