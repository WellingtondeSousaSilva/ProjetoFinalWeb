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
    <title>fatura</title>
    <link rel="stylesheet" href="css/fatura.css">
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&display=swap" rel="stylesheet">
</head>
<body>

    <header>
       <?php require_once "header2.php"; ?>
    </header>

    <nav>
        <?php require_once "menu.php"; ?>
    </nav>

    
        
    <h1 style="font-family: 'Baskervville', serif; color: #2b154a; position: absolute; left: 640px;"><i class="fas fa-clipboard-list"></i>Fatura</h1>
    
    

    <div id="tabela">

        <table>
            <tr>
                <th>Id</th>
                <th>Descrição do Produto</th>
                <th>Preço por Unidade</th>
                <th>Comprado</th>
                <th>Total</th>
            </tr>

            <?php 
                foreach($listar as $produto){
                    $id = $produto['i_idproduto_produto'];
                    $descricao = $produto['s_tipoproduto_produto'];
                    $preco = $produto['i_valorproduto_produto'];
                    $quantida = $produto['i_quantiproduto_produto'];
                    
                
            ?>

            <tr>
                <td><?=$id?></td>
                <td><?=$descricao?></td>
                <td><?=$preco?></td>
                <td><?=$quantida?></td>
                <td><?= $preco * $quantida?></td>
            </tr>

            <?php
                }
            ?>

        </table>
    </div>
    
</body>
</html>