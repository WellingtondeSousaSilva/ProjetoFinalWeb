<?php

    session_start();

    include_once 'conexao.php';

    $nome = isset($_POST['nome']) == true ? $_POST['nome']:"";
    $email = isset($_POST['email']) == true ? $_POST['email']:"";
    $senha = isset($_POST['senha']) == true ? $_POST['senha']:"";

    $sql = "INSERT INTO usuario (s_nome_usuario, s_email_usuario, s_senha_usuario) VALUES
        ('$nome', '$email', '$senha')";

    if($conn->query($sql) == true){
        
        $_SESSION['usuario'] = $nome;
        header('location: ../home.php');
    }else{
        echo "Error" . $sql . "<br>" . $conn->error;
    }      

    $conn->close();