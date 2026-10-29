<?php include "includes/cabecalho.php"; ?>

<main>
    <h1>Busca de conteúdo</h1>
    <form action="processaNome.php" method="get">
        <label  for="nomeBusca">Quer buscar um nome?: </label>
        <input  type="text" 
                name="nomeUsuario"
                id="nomeUsuario"
                required>
        <button type="submit">ENVIAR</button>
    </form>
</main>

<?php include "includes/rodape.php"; ?>