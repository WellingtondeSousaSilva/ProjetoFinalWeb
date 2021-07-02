<?php

    require 'conexao.php';

    $id_produto = $_GET['id'];
    
    $sql = "delete from produto where i_idproduto_produto = $id_produto";

    $result =mysqli_query($conn, $sql);

    if ($result == true) {
        header("location: ../estoque.php");
    }else{
        echo "erro";
    }