<?php
include "../includes/db_con.php";
include "imagen.php";

$tipo = $_POST["tipo"];

if($tipo == 1){
$id = $_POST["id"];
    $res = mysqli_query($link,"SELECT `id_img`, `ubicacion` FROM `imagen` WHERE `id_img` > $id LIMIT 28" ); 
    $jsonImg = array();
    while ($datos = mysqli_fetch_array($res)) {
        $img = new imagen($datos[0],$datos[1]);
        $jsonImg[] = $img;
    } 
    echo json_encode($jsonImg);
}else{
    $id = $_POST["id"];
    $where = $_POST["where"] ;

    $res2 = mysqli_query($link, "SELECT DISTINCT `imagen`.`id_img`, `imagen`.`ubicacion`, `tiene_categoria`.`id_categoria`
    FROM `imagen` 
        LEFT JOIN `tiene_categoria` ON `tiene_categoria`.`id_imagen` = `imagen`.`id_img`
        WHERE  $where  AND imagen.id_img > $id 
        GROUP BY id_imagen
        LIMIT 20");
    while ($datos = mysqli_fetch_array($res2)) {
        $img = new imagen($datos[0],$datos[1]);
        $jsonImg[] = $img;
    } 
    echo json_encode($jsonImg);

}

?>

