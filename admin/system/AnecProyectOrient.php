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
    
    case 2:
        $sql = UPDATE($informacion);
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

        case 'imagen':
            $imgLocation = "../../web/ArchivoDigital/" . $informacion[3];
            if (file_exists($imgLocation)) {
                mysqli_query($link, "DELETE FROM `tiene_categoria` WHERE `id_imagen` = $informacion[2]");
                $delete = "DELETE FROM `imagen` WHERE `id_img` = $informacion[2]";
                unlink($imgLocation);
            } else
                die();
            break;
    }
    return $delete;
}

function UPDATE($informacion) {
    $update = "";
    switch ($informacion[0]) {
        case 'anecdotas':
            $informacion = str_replace("'", "''", $informacion);
            $update = "UPDATE `anecdota` SET `titulo`='$informacion[3]',`portada`='1',`contenido`='$informacion[6]',`autor`='$informacion[4]',`fecha`='$informacion[5]' WHERE `id_anec` = '$informacion[2]'";
            break;
    }

    return $update;
}


?>
