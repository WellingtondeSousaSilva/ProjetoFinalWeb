<?php

    include_once("php/conexao.php");

    $sql = "select * from usuario";
    $result = mysqli_query($conn, $sql);
    $listarUsu = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Vendas</title>
    <link rel="stylesheet" href="css/listaUsuarios.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&display=swap" rel="stylesheet">
</head>
<body>

    <header>
       <?php require_once "header2.php"; ?>
    </header>
    
    <nav>
        <?php require_once "menu.php"; ?>
    </nav>

    
    <h1 style="font-family: 'Baskervville', serif; position: absolute; left: 350px; color: #2b154a;"><i class="fas fa-search-dollar"></i>Lista de Usuários</h1>
    

    <div id="tabela">

        <table style="position: absolute; left: 340px;">
            <tr>
                <th>id</th>
                <th>Nome do Usuario</th>
                <th>Nível do usuário</th>
                <th>excluir</th>
               <!-- <th>Foto do usuário</th> -->
            </tr>

            <?php 
                foreach($listarUsu as $usuario){
                    $idUsuario = $usuario['i_usuario_usuario'];
                    $nomeUsuario = $usuario['s_nome_usuario'];
                    $nivelUsuario = $usuario['i_nivelAcesso_usuario']; 
                        if($nivelUsuario == 0){
                            $nivelUsuario = 0;
            ?>

            <tr>
                <td><?=$idUsuario?></td>
                <td style="text-align: left;"><?=$nomeUsuario?></td>
                <td><?=$nivelUsuario?></td>
                <td style="text-align: center; color: black;"><a href="php/excluirUsuario.php?nomeUsuario=<?php echo $idUsuario?>">excluir
            </a>
                <form method="GET" action="php/mudar.php">
                    <input type="hidden" name="mudar" value=1>
                    <input type="hidden" name="id" value="<?=$idUsuario?>">
                    <button type="submit" name="enviar" style="border: none;">mudar</button>
                </form>
        
                </td> 
            </tr>

            <?php
                }else {
                    $nivelUsuario = 1;
                    ?>
                    <tr>
                    <td><?=$idUsuario?></td>
                    <td style="text-align: left;"><?=$nomeUsuario?></td>
                    <td><?=$nivelUsuario?></td>
                    <td style="text-align: center; color: black;"><a href="php/excluirUsuario.php?nomeUsuario=<?php echo $idUsuario?>">excluir
                </a>
                    <form method="GET" action="php/mudar.php">
                        <input type="hidden" name="mudar" value=1>
                        <input type="hidden" name="id" value="<?=$idUsuario?>">
                        <button type="submit" name="enviar">mudar</button>
                    </form>
            
                    </td> 
                </tr> 
                <?php  
                }
            ?>

            <?php
                }
            ?>

            
        </table>
    </div>
    
</body>
</html>