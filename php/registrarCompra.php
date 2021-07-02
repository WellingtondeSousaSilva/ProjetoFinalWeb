<?php

    require 'conexao.php';

    $nomePro = isset($_POST['nomePro']) == true ? $_POST['nomePro']:"";
    $diaChegada = isset($_POST['diachegada']) == true ? $_POST['diachegada']:"";
    $horaChegada = isset($_POST['hora']) == true ? $_POST['hora']:"";
    $quantidade = isset($_POST['quantidade']) == true ? $_POST['quantidade']:"";

   $sql = "INSERT INTO registro (s_nomeproduto_registro, s_diachegada_registro, s_horachegada_registro, i_quantidadeproduto_registro) VALUES
        ('$nomePro', '$diaChegada', '$horaChegada', '$quantidade')";

    if($conn->query($sql) == true){
        
        
        header('location: ../home.php');
    }else{
        echo "Error" . $sql . "<br>" . $conn->error;
    }      

    $conn->close();