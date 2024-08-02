<?php
session_start();
if (!isset($_SESSION['loggedInUser']) || $_SESSION['loggedInUser'] != true) {
    header("Location: http://localhost/Workspace/conectando-etapas/admin/Login.php");
    // header("Location: https://autogestion.tecnica2tandil.edu.ar/Login.php");
    die();
}
$link = mysqli_connect("localhost", "root", "", "conectando_etapas");

    if (!$link)
        echo "404. Something went wrong.";

?>
