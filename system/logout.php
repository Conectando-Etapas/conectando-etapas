<?php

    session_start();
    unset($_SESSION['logged']);

    $save_darkmode = $_SESSION['darkmode'];

    session_destroy();
    
    session_start();
    $_SESSION['darkmode'] = $save_darkmode;

    header("Location: ../panel_control.php");
    die();

?>