<?php
    include_once("php/conexao.php");

    $sql = "select * from produto";
    $result = mysqli_query($conn, $sql);
    $listar = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
    <link rel="stylesheet" href="css/estoque.css">
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&display=swap" rel="stylesheet">
</head>
<body>

    <header>
       <?php require_once "header2.php"; ?>
    </header>
    
    <nav>
        <?php require_once "menu.php"; ?>
    </nav>

   
    <h1 style="font-family: 'Baskervville', serif; color: #2b154a; position: absolute; left: 430px;"><i class="fas fa-cubes"></i>Estoque</h1>
    
    

    <div id="tabela">

        <table style="position: absolute; left: 50px;">
            <tr>
                <th>Id</th>
                <th>Nome do Produto</th>
                <th>Fabricante do Produto</th>
                <th>Peso do Produto</th>
                <th>Tipo do Produto</th>
                <th>Valor</th>
                <th>Quantidade no Estoque</th>
                <th>excluir/alterar</th>
            </tr>

            <?php 
                foreach($listar as $produto){
                    $id = $produto['i_idproduto_produto'];
                    $nomeProduto = $produto['s_nomeproduto_produto'];
                    $fornecedor = $produto['s_fornecedor_produto'];
                    $pesoPro = $produto['s_pesoproduto_produto'];
                    $tipoPro = $produto['s_tipoproduto_produto'];
                    $valor = $produto['i_valorproduto_produto'];
                    $quanProduto = $produto['i_quantiproduto_produto'];
                    
                
            ?>

            <tr>
                <td><?=$id?></td>
                <td><?=$nomeProduto?></td>
                <td><?=$fornecedor?></td>
                <td><?=$pesoPro?></td>
                <td><?=$tipoPro?></td>
                <td><?=$valor?></td>
                <td><?=$quanProduto?></td>
                <td style="text-align: center; color: black;"><a href="php/excluir.php?id=<?php echo $id?>">excluir</a> <a href="alterarProduto.php?id=<?php echo $id?>">alterar</a></td>
                
                
                
                
                
            </tr>
            
            <?php
                }
            ?>
            
        </table>
    </div>
    
</body>
</html>