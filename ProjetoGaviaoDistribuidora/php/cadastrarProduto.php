<?php

    include('conexao.php');

    $fornecedor = isset($_POST['fornecedor']) == true ? $_POST['fornecedor']:"";
    $nomePro = isset($_POST['nomePro']) == true ? $_POST['nomePro']:"";
    $tipoPro = isset($_POST['tipoPro']) == true ? $_POST['tipoPro']:"";
    $pesoPro = isset($_POST['pesoPro']) == true ? $_POST['pesoPro']:"";
    $valor = isset($_POST['valor']) == true ? $_POST['valor']:"";
    $quantidade = isset($_POST['quantidade']) == true ? $_POST['quantidade']:"";

   $sql = "INSERT INTO produto (s_fornecedor_produto, s_nomeproduto_produto, s_tipoproduto_produto, i_valorproduto_produto, s_pesoproduto_produto, i_quantiproduto_produto) VALUES
        ('$fornecedor', '$nomePro', '$tipoPro', '$valor', '$pesoPro', '$quantidade')";

    if($conn->query($sql) == true){
        
        
        header('location: ../home.php');
    }else{
        echo "Error" . $sql . "<br>" . $conn->error;
    }      

    $conn->close();