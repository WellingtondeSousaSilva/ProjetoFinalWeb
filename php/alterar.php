<?php

    require 'conexao.php';

    $id_produto = $_POST['idPro'];
    $fabricante_produto = $_POST['fabricantePro'];
    $nome_produto = $_POST['produto'];
    $tipo_produto = $_POST['tipoPro'];
    $peso_produto = $_POST['pesoPro'];
    $valor_produto = $_POST['valor'];
    $quantidade_produto = $_POST['quantidade'];

    $sql = "update produto set s_nomeproduto_produto = '$nome_produto', s_fornecedor_produto = '$fabricante_produto', s_pesoproduto_produto = '$peso_produto', s_tipoproduto_produto = '$tipo_produto', i_valorproduto_produto = '$valor_produto', i_quantiproduto_produto = '$quantidade_produto' where i_idproduto_produto = '$id_produto'";

    $result =mysqli_query($conn, $sql);

    if ($result == true) {
        header("location: ../estoque.php");
    }else{
        echo "erro";
    }
