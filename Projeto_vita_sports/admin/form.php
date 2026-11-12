<?php

session_start();
require_once __DIR__ . "/../include/funcoes.php";
exigirAdmin();

require_once __DIR__ . "/../config/conexao.php";
$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
$p=["nome"=>"", "descricao"=>"", "preco"=>"", "tamanho"=>"", "estoque"=>0, "id_categoria"=>""];

if($id){
    $stmt=$pdo->prepare("SELECT * FROM produtos WHERE id=:id");
    $stmt->execute([":id"=>$id]);
    $p=$stmt->fetch()?:$p;
}
$cats=$pdo->query("SELECT * FROM categorias ORDER BY nome")->fetchAll();

$titulo = ($id ? "Editar" : "Cadastrar") . " Produto | Admin";
include __DIR__ . "/../include/cabecalho.php";
?>

<main class="section narrow">
    <h1>
        <?= $id?"editar":"cadastrar"?> Produto
    </h1>
    <form class="adminform" method="post" action="salvar.php">
        <input  type="hidden" name="id" id="id" value="<?= (int)($p["id"]??0)?>">
        <label  for="nome">Nome: </label>
        <input  type="text"
                name="nome"
                id="nome"
                required
                maxlength="100"
                value="<?= e($p["nome"]) ?>">

        <br><br>

        <label  for="descricao">Descrição: </label>
        <textarea name="descricao" id="descricao"><?= e($p["descricao"]) ?></textarea>

        <br><br>

        <label  for="preco">Preço: </label>
        <input  type="number"
                name="preco"
                id="preco"
                min="0"
                step="0.01"
                required
                value="<?= (float) $p["preco"] ?>">

        <br><br>

        <label  for="imagem_url">Imagem (caminho): </label>
        <input  type="text"
                name="imagem_url"
                id="imagem_url"
                value="<?= e($p["imagem_url"]?? "")?>">

        <br><br>

        <label  for="tamanho">Tamanho: </label>
        <input  type="text"
                name="tamanho"
                id="tamanho"
                value="<?= e($p["tamanho"])?>">
        
        <br><br>

        <label  for="estoque">Estoque: </label>
        <input  type="number"
                name="estoque"
                id="estoque"
                step="1"
                min="0"
                value="<?= (int) $p["estoque"] ?>">

        <br><br>

        <label  for="id_categoria">Categoria: </label>
        <select name="id_categoria" id="id_categoria">
            <?php foreach($cats as $c):?>
            <option value="<?= (int) $c["id_categoria"] ?>" 
                    <?=((int) $p["id_categoria"] === (int) $c["id_categoria"])?"selected":""?> >
                <?= e($c["nome"])?>
            </option>
            <?php endforeach;?>
        </select>
        
        <br><br>

        <button class="btn">Enviar</button>
    </form>
    <a href="painelProdutos.php">Voltar</a>
</main>

<?php include __DIR__ . "/../include/rodape.php"; ?>