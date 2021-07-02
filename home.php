<?php
    session_start();
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    
</head>
<body style="background-image: url(img/fundocaixas7.jpeg);">
    <header>
       <?php require_once "header.php"; ?>
    </header>

    <nav>
        <?php require_once "menu.php"; ?>

    </nav>

    <main>
        <center>
            <h1 style="position: absolute; right: 655px; top: 125px;">Bem vindo, <?php echo $_SESSION['usuario']; ?></h1>
        </center>
       
    </main>
    
        
</body>
</html>