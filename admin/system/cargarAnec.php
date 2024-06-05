<?php
include "../includes/db_con.php";
$info = json_decode($_POST["info"]);

$qry = "SELECT `id_anec`, `autor`, `fecha`, `titulo`, `contenido` FROM anecdota WHERE `id_anec` = $info[0]";
    $consulta = mysqli_query($link, $qry);
    
    if (mysqli_num_rows($consulta) > 0) {
        $datos = mysqli_fetch_assoc($consulta);
        echo json_encode($datos);
    } else {
        http_response_code(404);
    }
    
    die();