<?php include_once "includes/cabecalho.php"; ?>

<main>
    <h2>Entre em contato</h2>
    <form action="processaContato.php" method="post">
        <label  for="nomeUsuario">Nome: </label>
        <input  type="text"
                id="nomeUsuario"
                name="nomeUsuario">
                
        <br><br>

        <label  for="emailUsuario">Email: </label>
        <input  type="text"
                name="emailUsuario"
                id="emailUsuario">

        <br><br>

        <label  for="qtdFunc">Digite a quantidade de funcionarios: </label>
        <input  type="number"
                name="qtdFunc"
                id="qtdFunc"
                step="1">

        <br><br>

        <button type="submit">Enviar contato</button>
    </form>
</main>

<?php include "includes/rodape.php"; ?>