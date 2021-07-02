<?php

    require 'conexao.php';

    if (isset($_GET['enviar'])) {
        if (!empty($_GET['mudar']) || !empty($_GET['id'])) {
            $mudar = $_GET['mudar'];
            $id = $_GET['id'];

            if ($mudar = 0) {
                $sql = "update usuario set i_nivelAcesso_usuario = 0 where i_usuario_usuario = '$id'";
            }else if($mudar = 0){
                $sql = "update usuario set i_nivelAcesso_usuario = 1 where i_usuario_usuario = '$id'";
            }else{
                $sql = "update usuario set i_nivelAcesso_usuario = 1 where i_usuario_usuario = '$id'";
            }
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("location: ../listaUsuarios.php");
            }else{
                echo "erro";
            }
        }
        
    }