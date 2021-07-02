<?php
    session_start();
    
    include('conexao.php');

    if (empty($_POST['nome']) || empty($_POST['senha'])) {
        echo "<script>window.location = '../formulariodelogin.html'</script>";
        exit();
    }

    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

    $query = "select * from usuario where s_nome_usuario = '$nome' and s_senha_usuario = '$senha'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);

    if($row == 1){
        $_SESSION['usuario'] = $nome;
        header("location: ../home.php");
        exit;
    }else {
        header("location: ../formulariodelogin.html");
    }
