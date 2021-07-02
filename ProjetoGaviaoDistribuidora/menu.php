<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="js/menu.js"></script>
</head>
<body>
    
<nav id="menu">

<img src="img/victorHugo copy.jpeg" alt="">

 <h4 style="text-align: center;"><?php echo $_SESSION['usuario']; ?></h4>


   <a href="#" onclick="fecharMenu()" ><i class="fas fa-times" id="fechar" style="padding-right: 132px;"></i>fechar</a>
   <a href="home.php"><i class="fas fa-home" id="home" style="padding-right: 133px;"></i>home</a>
   <a href="fatura.php"><i class="fas fa-file-invoice" id="fatura" style="padding-right: 135px;"></i>fatura</a>
   <a href="listaUsuarios.php"><i class="fas fa-users" id="listaUsuario" style="padding-right: 26px;"></i>lista de usuários</a>
   <a href="estoque.php"><i class="fas fa-business-time" id="estoque"></i>estoque</a>
   <a href="historicoVendas.php"><i class="fas fa-dollar-sign" id="historico" style="padding-right: 107px;"></i>histórico</a>
   <a href="cadastrarProduto.php"><i class="fas fa-cart-arrow-down" style="padding-right: 8px;"></i>Cadastrar Produto</>
   <a href="comprar.php"><i class="fas fa-piggy-bank" style="padding-right: 105px;"></i>comprar</a>
   <a href="php/logout.php"><i class="fas fa-door-open" style="padding-right: 148px;"></i>sair</a>
</nav>

</body>
</html>