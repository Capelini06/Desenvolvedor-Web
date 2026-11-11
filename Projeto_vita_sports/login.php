<?php 
include "include/cabecalho.php";
require "include/funcoes.php"; 

$email = "";
$senha = "";
?>

<main class="login">
    <section>
        <small>BEM-VINDO À VITTA</small>
        <h1>
            SEU PRÓXIMO 
            <br>PASSO COMEÇA <br>
            <em>AQUI</em>
        </h1>
    </section>
    <form action="./auth/autenticar.php" method="POST">
        <small>ÁREA RESTRITA</small>
        <h2>Acesse sua conta</h2>

        <?php  if(isset($_GET["erro"])): ?>
            <p class="notice"> Email ou senha inválidos</p>
        <?php endif; ?>

        <label  for="email">E-mail:</label>
        <input  type="email"
                id="email"
                name="email"
                value="<?= e($email) ?>"
                maxlength="150"
                required>

            <br><br>

        <label  for="senha">Senha:</label>
        <input  type="password"
                id="senha"
                name="senha"
                minlength="8"
                required>

            <br><br>

            <button type="submit" class="btn">Entrar</button>

    </form>
</main>

<?php include "include/rodape.php"; ?>