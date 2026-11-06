<?php
include './include/cabecalho.php';

require __DIR__ . '/config/conexao.php';
// $sql vai guardar as instruções
$sql = 'SELECT id, nome, idade, cidade, curso, email FROM alunos';
// query executa essas instruções
$resultado = $pdo->query($sql);
// retorna uma lista de alunos - fetchAll
$alunos = $resultado->fetchAll();
// fecha tag php

if (isset($_GET["sucesso"]) && $_GET["sucesso"] === "excluido"):
    ?>
    <p>Aluno Excluido com Sucesso!</p>
<?php endif;
if (isset($_GET["erro"])): ?>
    <p>Não Foi Possível Concluir a Exclusão!</p>
<?php endif; ?>

<main>
    <h1>Alunos cadastrados:</h1>
    <tbody>
        <?php if (count($alunos) === 0): ?>
            <p>Nenhum Aluno cadastrado.</p>
        <?php else: ?>
            <table border="2" cellpadding="8">
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Nome
                    </th>
                    <th>
                        Idade
                    </th>
                    <th>
                        Cidade
                    </th>
                    <th>
                        Curso
                    </th>
                    <th>
                        Email
                    </th>
                </tr>
                <?php foreach ($alunos as $aluno): ?> <!-- editado -->
                    <tr>
                        <td><?= htmlspecialchars((string) $aluno['id'] ?? "") ?></td>
                        <td><?= htmlspecialchars($aluno['nome'] ?? "") ?></td>
                        <td><?= (int) ($aluno['idade'] ?? "") ?></td>
                        <td><?= htmlspecialchars($aluno['cidade'] ?? "") ?></td>
                        <td><?= htmlspecialchars($aluno['curso'] ?? "") ?></td>
                        <td><?= htmlspecialchars($aluno['email'] ?? "") ?></td>
                        <td>
                            <!-- urlencode - transforma o texto que esta sendo trago pelo em uma url legível/ajustada -->
                            <a href="editarAluno.php?id=<?= urlencode((string) $aluno["id"]) ?>">
                                Editar Aluno
                            </a>
                        </td>
                        <td>
                            <a href="confirmarExclusao.php?id=<?= urlencode((string) $aluno["id"]) ?>">
                                Excluir aluno
                            </a>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </tbody>
</main>


<?php
include './include/rodape.php';
?>