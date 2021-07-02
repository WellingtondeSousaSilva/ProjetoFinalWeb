<?php
    
    $id_produto = $_GET['id'];

    require 'php/conexao.php';

    $sql = "select * from produto where i_idproduto_produto = $id_produto";

    $result = mysqli_query($conn, $sql);

    $dados = mysqli_fetch_assoc($result);

    $nome_produto = $dados['s_nomeproduto_produto'];
    $fornecedor_produto = $dados['s_fornecedor_produto'];
    $peso_produto = $dados['s_pesoproduto_produto'];
    $tipo_produto = $dados['s_tipoproduto_produto'];
    $valor_produto = $dados['i_valorproduto_produto'];
    $ide_produto = $dados['i_idproduto_produto'];
    $quant_produto = $dados['i_quantiproduto_produto'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar produto</title>
    <link rel="stylesheet" href="css/alterarProduto.css">
</head>
<body style="background-image: url(img/imgdaTelaCadastroDefinitivo.jpeg);">

    <header>
       <?php require_once "header2.php"; ?>
    </header>

    <nav>
        <?php require_once "menu.php"; ?>
    </nav>

    <form id="cadstraPro" method="POST" action="php/alterar.php">

        <h1>Alterar Produtos</h1>

        <p>Identificador:</p>
        <input type="text" readonly name="idPro" placeholder="" value="<?php echo $id_produto?>" required class="input">
        <br> 
        <p>Marca do produto:</p>
        <input type="text" name="fabricantePro" placeholder="" value="<?php echo $fornecedor_produto?>" required class="input">
        <p>Produto:</p>
        <input type="text" name="produto" placeholder="" value="<?php echo $nome_produto?>" required class="input">
        <p>tipo do produto:</p>
        <input type="text" name="tipoPro" placeholder="" value="<?php echo $tipo_produto?>" required class="input">
        <p>Peso do produto:</p>
        <input type="text" name="pesoPro" placeholder="" value="<?php echo $peso_produto?>" required class="input">
        <p>Valor:</p>
        <input type="text" name="valor" placeholder="" value="<?php echo $valor_produto?>" required class="input">
        <p>Quantidade:</p>
        <input type="text" name="quantidade" placeholder="" value="<?php echo $quant_produto?>" required class="input">
        <br><br>
        <button>Alterar</button>
        
        <!-- <img src="logoLoginDefinitivo.png" alt="" id="img2"> -->
    </form>

</body>
</html>