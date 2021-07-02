<?php
        
    class Usuario{

        public function login($nome, $senha){
            global $pdo;

            $sql = "SELECT * FROM usuario WHERE s_nome_usuario = ? AND s_senha_usuario = ?";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("s_nome_usuario", $nome);
            $sql->bindValue("s_senha_usuario", $senha);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                $dado = $sql->fetch();

                $_SESSION['i_usuario_usuario'] = $dado['i_usuario_usuario'];

                return true;
            }else{
                return false;
            }

        }
    }