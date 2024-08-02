<?php

include "../includes/db_con.php";

if (!isset($_POST['submit'])) {
    header("Location: ../index.php");
    die();
}

$titulo = str_replace("'", "''",$_POST['titulo']);
$fecha = str_replace("'", "''",$_POST['fecha']);
$descripcion = str_replace("'", "''", $_POST['descripcion']);

if (isset($_POST['CATEGORIA']))
    $categorias = $_POST['CATEGORIA'];

$qry = "UPDATE `imagen` SET `titulo`='$titulo',`fecha`='$fecha',`descripcion`='$descripcion' WHERE `id_img` = " . $_POST['idImg'];
$consulta = mysqli_query($link, $qry);

if (!$consulta) {
    header("Location: ../index.php");
    die();
}

// Eliminar todas las entradas de esa imagen en la tabla tiene_categoria

$qry = "DELETE FROM `tiene_categoria` WHERE `id_imagen` = " . $_POST['idImg'];
$consulta = mysqli_query($link, $qry);

if (!$consulta) {
    header("Location: ../index.php");
    die();
}

// Agregar una fila en esa tabla por cada categoria seleccionada (y ahecho en la carga de imagen - copialo de ahi)
if (isset($categorias)) {

    $qry = "INSERT INTO tiene_categoria (id_imagen, id_categoria) VALUES (" . $_POST['idImg'] . ",$categorias[0])";
    for ($i = 1; $i < count($categorias); $i++) {
        $qry .= ", (" . $_POST['idImg'] . ", $categorias[$i])";
    }

    unset($consulta);
    $consulta = mysqli_query($link, $qry);
}

header("Location: ../index.php");
die();

?>