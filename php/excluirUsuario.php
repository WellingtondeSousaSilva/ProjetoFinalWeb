<?php

    require 'conexao.php';

    $nomeUsu = $_GET['nomeUsuario'];
    
    $sql = "delete from usuario where i_usuario_usuario = $nomeUsu";

    $result = mysqli_query($conn, $sql);

    if ($result == true) {
        echo "sucesso";
    }else{
        echo "erro";
    }