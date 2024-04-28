<?php

    session_start();
    if (isset($_GET['darkmode'])) {

        switch ($_GET['darkmode']) {
            case "0":
                $_SESSION['darkmode'] = FALSE;
                break;
            
            case "1":
                $_SESSION['darkmode'] = TRUE;
                break;
        }

        echo "Color mode successfully changed.";
    }

?>