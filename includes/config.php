<?php

    include_once "includes/db_con.php";

    session_start();
    $user_name = FALSE;

    /*if (isset($_SESSION['logged'])) {// -- SWITCH ADMIN

        $userId = $_SESSION['userId'];
        
        $qry = "SELECT username, imagen FROM usuario WHERE email = '" . $userId . "'";
        $qry_exe = mysqli_query($link, $qry);
        if (!$qry_exe){
            echo "<div class='col-12 col-sm-8 alert alert-warning alert-dismissible fade show' role='alert'><i class='fa-solid fa-warning'></i> Hubo un error al cargar los datos de usuario<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
            $user_name = False;
            $user_foto = "";
        } else {
            $response = mysqli_fetch_assoc($qry_exe);
            $user_name = $response['username'];
            $user_foto = $response['imagen'];
        }
    }*/

    if (isset($_SESSION['darkmode']))
        if ($_SESSION['darkmode'] == TRUE)
            $dark_mode = TRUE;
        else
            $dark_mode = FALSE;

?>