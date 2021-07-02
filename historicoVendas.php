<?php
    include_once("php/conexao.php");

    $sql = "select * from registro";
    $result = mysqli_query($conn, $sql);
    $listar = mysqli_fetch_all($result, MYSQLI_ASSOC);

    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Vendas</title>
    <link rel="stylesheet" href="css/historicoVendas.css">
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&display=swap" rel="stylesheet">
</head>
<body>

    <header>
       <?php require_once "header2.php"; ?>
    </header>
    
    <nav>
        <?php require_once "menu.php"; ?>
    </nav>

    
    <h1 style="font-family: 'Baskervville', serif; color: #2b154a; left: 380px;"><i class="fas fa-search-dollar"></i>Histórico de Vendas</h1>
    

    <div id="tabela">

        <table style="position: absolute; left: 340px;">
            <tr>
                <th>Data do Ocorrido</th>
                <th>Nome do Produto</th>
                <th>Quantidade do Produto</th>
            </tr>

            <?php 
                foreach($listar as $registro){
                    $data = $registro['s_diachegada_registro' ];
                    $hora = $registro['s_horachegada_registro'];
                    $nome_produto = $registro['s_nomeproduto_registro'];
                    $quantidade_produto = $registro['i_quantidadeproduto_registro'];
                    
            ?>
            <tr>
                <td><?=$data, 'as', $hora?></td>
                <td><?=$nome_produto?></td>
                <td><?=$quantidade_produto?></td>
            </tr>
            <?php
                }
            ?>

            
        </table>
    </div>
    
</body>
</html>