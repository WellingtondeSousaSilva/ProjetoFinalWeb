<?php

    session_start();
    if (!$_SESSION['usuario']) {
        header("location: formulariodelogin.html");
        exit;
    }