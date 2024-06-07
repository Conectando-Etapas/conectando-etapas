<?php
// ARCHIVO se encarga de cargar las anecdotas e imagenes para su modificacion
include "../includes/db_con.php";
$info = json_decode($_POST["info"]);

switch ($info[0]) {

    case 0:

        $qry = "SELECT `id_anec`, `autor`, `fecha`, `titulo`, `contenido` FROM anecdota WHERE `id_anec` = $info[1]";
        $consulta = mysqli_query($link, $qry);
        
        if (mysqli_num_rows($consulta) > 0) {
            $datos = mysqli_fetch_assoc($consulta);
            echo json_encode($datos);
        } else {
            http_response_code(404);
        }
        break;

    case 1:

        $qry = "SELECT `titulo`, `fecha`, `descripcion` FROM `imagen` WHERE `id_img` = $info[1]";
        $consulta = mysqli_query($link, $qry);
        
        if ($consulta) {
            $datos[0] = mysqli_fetch_assoc($consulta);
            // unset($consulta);

            $qry = "SELECT `id_categoria` FROM `tiene_categoria` WHERE `id_imagen` = $info[1]";
            $consulta = mysqli_query($link, $qry);
            if ($consulta && mysqli_num_rows($consulta) > 0){
                $i = 0;
                while ($categ = mysqli_fetch_assoc($consulta)) {
                    $datos[1][$i] = $categ['id_categoria'];
                    $i++;
                }
            }else
                $datos[1] = null;
            
            echo json_encode($datos);

        } else {
            http_response_code(404);
        }
        break;
    default:
        die();
    
}
    die();