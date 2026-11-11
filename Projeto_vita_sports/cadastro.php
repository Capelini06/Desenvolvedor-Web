<?php

$erros = [];
$sucesso = "";
$nome = "";
$email = "";
$senha = "";
$confirmarSenha = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nome"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $senha = trim($_POST["senha"] ?? "");
    $confirmarSenha = trim($_POST["confirmarSenha"] ?? "");

    //validações
    if ($nome === "") {
        $erros[] = "Informe o seu nome!";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "Informe um email válido!";
    }

    if (strlen($senha) < 8) {
        $erros[] = "A senha deve ter no minimo 8 caracteres!";
    }

    if ($senha !== $confirmarSenha) {
        $erros[] = "As senhas devem ser iguais!";
    }

    if (empty($erros)) {
        try {
            require_once __DIR__ . "/config/conexao.php";
            
            if (!isset($pdo) || !($pdo instanceof PDO)) {
                throw new RuntimeException(
                    "A conexão não foi encontrada. Verifique se config/conexao.php cria a variável \$pdo"
                );
            }
            
            $consulta = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email LIMIT 1");
            $consulta->execute([":email" => $email]);

            if ($consulta->fetch()) {
                $erros[] = "ja existe uma conta cadastrada com esse e-mail!";
            } else {
                // password_hash criptografa a senha oara hash
                $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

                $sql = "INSERT INTO usuarios (nome, email, senha, tipo_usuario) VALUES (:nome, :email, :senha, :tipo)";
                $inserir = $pdo->prepare($sql);
                $inserir->execute([
                    ":nome" => $nome,
                    ":email" => $email,
                    ":senha" => $senhaHash,
                    ":tipo" => "cliente"
                ]);
                $sucesso = "Cadastro realizado com sucesso! Agora você pode logar com a sua conta.";
                $nome = "";
                $email = "";
            }
        } catch (PDOException $e) {
            $erros[] = "Não foi possivel concluir o cadastro.";
        } catch (RuntimeException $e) {
            $erros[] = $e -> getMessage();
        }
    }
}

require "./include/funcoes.php";
include "./include/cabecalho.php";
?>

<main class="login">
    <section>
        <small>FAÇA PARTE DA VITTA</small>
        <h1>
            SEU PRÓXIMO 
            <br>PASSO COMEÇA <br>
            <em>AQUI</em>
        </h1>

        <p>Crie sua conta e acompanhe sua experiência na Vitta Sports.</p>
        
        <form action="cadastro.php" method="post">
            <small>NOVA CONTA</small>
            <h2>Cadastre-se:</h2>
            <?php if(!empty($erros)): ?>
                <div class="auth-message auth_error">
                    <?php foreach($erros as $erro): ?>
                        <p><?= e($erro)?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
    
            <?php if($sucesso !== ""): ?>
                <div class="auth-message auth-sucesso">
                    <?= e($sucesso) ?>
                    <p>
                        <a href="login.php">Ir para o Login.</a>
                    </p>
                </div>
            <?php endif; ?>
    
            <label  for="nome">Nome Completo:</label>
            <input  type="text"
                    id="nome"
                    name="nome"
                    value="<?= e($nome)?>"
                    maxlength="100"
                    required>
    
            <br><br>
    
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
                    value="<?= e($senha)?>"
                    minlength="8"
                    required>
    
            <br><br>
    
            <label  for="confirmarSenha">Confirmar Senha:</label>
            <input  type="password"
                    id="confirmarSenha"
                    name="confirmarSenha"
                    value="<?= e($confirmarSenha)?>"
                    minlength="8"
                    required>
    
            <br><br>
    
            <button type="submit" class="btn">Criar minha conta</button>
    
            <p class="auth-extra">
                Já possui uma conta?
                <a href="login.php">Entrar</a>
            </p>
        </form>
    </section>
</main>


<?php include "./include/rodape.php"; ?>