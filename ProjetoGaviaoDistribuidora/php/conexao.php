<?php

    define('host', 'localhost');
    define('usuario', 'root');
    define('senha', '');
    define('banco', 'falcaodistribuidora');

    $conn = mysqli_connect(host, usuario, senha, banco) or die ('nao foi possivel conectar');
    