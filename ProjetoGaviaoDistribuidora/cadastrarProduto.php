<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="css/cadastrarProduto.css">
</head>
<body style="background-image: url(img/imgdaTelaCadastroDefinitivo.jpeg);">

    <nav>
        <?php require_once "menu.php"; ?>
    </nav>

    <form id="cadstraPro" method="POST" action="php/cadastrarProduto.php">

        <h1>Cadastrar Produtos</h1>

        <p>Fornecedor:</p>
        <input type="text" name="fornecedor" placeholder="" required class="input">
        <p>Produto:</p>
        <input type="text" name="nomePro" placeholder="" required class="input">
        <p>tipo do produto:</p>
        <input type="text" name="tipoPro" placeholder="" required class="input">
        <p>Peso do produto:</p>
        <input type="text" name="pesoPro" placeholder="" required class="input">
        <p>Valor:</p>
        <input type="text" name="valor" placeholder="" required class="input">
        <p>Quantidade:</p>
        <input type="text" name="quantidade" placeholder="" required class="input">
        <br><br>
        <button>Enviar</button>
        <button> <a href="estoque.php">Listar</a></button>
        <!-- <img src="logoLoginDefinitivo.png" alt="" id="img2"> -->
    </form>

</body>
</html>