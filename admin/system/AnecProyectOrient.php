<?php
include "../includes/db_con.php";

$info = json_decode($_POST['array']);
// $info = ["anecdotas", 0, "titulo", "autor", "fecha", "informacion"];


$sql = craerSQL($info);

echo mysqli_query($link, $sql);



function craerSQL($informacion){
$sql= "";

switch ($informacion[1]) {

    case 0:
        $sql = INSERT($informacion);

        break;
    case 1:
        $sql = DELETE($informacion);
        break;
}

return $sql;
}

function INSERT($informacion){
    $insert = "";
    switch ($informacion[0]) {
        case 'anecdotas':
            $insert = "INSERT INTO `anecdota`(`portada`, `titulo`, `contenido`, `autor`, `fecha`) VALUES (1, '$informacion[2]','$informacion[5]','$informacion[3]','$informacion[4]')";
            break;
        case 'proyecto':
            $insert = "INSERT INTO `proyecto`( `id_orientacion`, `titulo`, `contenido`, `resumen`) VALUES ('$informacion[2]','$informacion[3]','$informacion[4]','$informacion[5]')";
            break;
        case 'orientacion':
            $insert ="INSERT INTO `orientacion`( `orientacion`, `Contenido`) VALUES ('$informacion[2]','$informacion[3]')";
            break;
    }
    return $insert;
}

function DELETE($informacion){
    $delete = "";
    switch ($informacion[0]) {
        case 'anecdotas':
            $delete = "DELETE FROM `anecdota` WHERE id_anec = $informacion[2] ";
            break;
        case 'proyecto':
            $delete = "DELETE FROM `proyecto` WHERE id_proyecto = $informacion[2] ";
            break;
        case 'orientacion':
            $delete = "DELETE FROM `orientacion` WHERE id_orientacion = $informacion[2]";
            break;
    }
    return $delete;
}


?>