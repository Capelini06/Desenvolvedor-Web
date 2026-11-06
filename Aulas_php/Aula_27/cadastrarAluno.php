<?php include "include/cabecalho.php"; ?>

<main>
    <h1>Cadastrar aluno</h1>
    <form action="salvarAluno.php" method="post">
        <label for="nomeAluno">Nome:</label>
        <input type="text" id="nomeAluno" name="nomeAluno">

        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <br><br>

        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso">

        <br><br>

        <button type="submit">Cadastrar aluno</button>
    </form>
</main>

<?php include "include/rodape.php"; ?>