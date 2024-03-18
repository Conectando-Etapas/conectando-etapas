<?php
include "../includes/db_con.php";
include "imagen.php";
// $id = 0;
$jsonImg = array();
if (isset($_POST['idEsp'])){
    $id = $_POST['idEsp'];
    $res = mysqli_query($link,"SELECT `titulo`, `fecha`,`descripcion` FROM `imagen` WHERE `id_img` = $id " );
    $datos = mysqli_fetch_array($res); 
    for ($i=0; $i < 3; $i++) { 
        $jsonImg[$i] = $datos[$i];
    }
    echo json_encode($jsonImg);

}
else{
$id = $_POST['id'];
session_start();
$jsonImg = array();
if(isset($_POST["where"]) || (isset($_SESSION['flag']) && $_SESSION['flag'] == true)){
    $_SESSION['flag'] = true;
    $proc  = $_POST["filtBusq"];

    if(isset($_POST["where"])){
        $condicion = $_POST["where"];
    }

    switch ($proc) {
        case 'busqueda':
            $condicion = "%".$condicion."%";
            $bus = str_replace(" ", "%", $condicion);
            $_SESSION['busqueda'] = $bus;
            break;

            case 'filtro':
                if(!isset($_SESSION['filtro'][$condicion])){
                $_SESSION['filtro'][$condicion] = $condicion; 
                }
                else{
                    unset($_SESSION['filtro'][$condicion]); 
                }
            break;
            case 'borrarBusqueda':
                unset($_SESSION['busqueda']);
                break;
    }



    if((empty($_SESSION['filtro']) || count($_SESSION['filtro']) == 0 ) &&  empty($_SESSION['busqueda']) )  {
        unset($_SESSION['flag']);
        $res = mysqli_query($link,"SELECT `id_img`, `ubicacion` FROM `imagen` WHERE `id_img` > $id LIMIT 36" );
    }else{
        $where = crearConsulta();
    $res = mysqli_query($link, "SELECT DISTINCT `imagen`.`id_img`, `imagen`.`ubicacion`, `tiene_categoria`.`id_categoria`
    FROM `imagen` 
        LEFT JOIN `tiene_categoria` ON `tiene_categoria`.`id_imagen` = `imagen`.`id_img`
        WHERE $where[0]  AND imagen.id_img > $id
        GROUP BY id_imagen
        LIMIT 36");
    if(isset($where[1])){
        $res2 = mysqli_query($link,"SELECT `id_categoria`, `nombre` FROM `categoria` WHERE $where[1] " );
        while ($datos = mysqli_fetch_array($res2)) {
            $cat = new imagen($datos[0],$datos[1]); 
            $jsonImg[1][] = $cat;
        } 
        
    }
    }

}else{
    $res = mysqli_query($link,"SELECT `id_img`, `ubicacion` FROM `imagen` WHERE `id_img` > $id LIMIT 36" ); 
}


while ($datos = mysqli_fetch_array($res)) {
    $img = new imagen($datos[0],$datos[1]); 
    $jsonImg[0][] = $img;
} 


echo json_encode($jsonImg);
}

function crearConsulta(){
    $consultaImg ="";
    $consultaFiltros = "";
    if (isset($_SESSION['filtro']) && count($_SESSION['filtro']) > 0 ) {
        foreach ($_SESSION['filtro'] as $key => $value)  {
            $consultaImg = $consultaImg . ' OR  `tiene_categoria`.`id_categoria` = '.$value.'';     
        }
        $consultaImg = substr($consultaImg, 3);
        $consultaImg= '('.$consultaImg.')';
    }

    
    if(isset($_SESSION['busqueda'])){
        if(str_contains($consultaImg, 'tiene_categoria')){
            $consultaImg = $consultaImg . ' AND'; 
        }
        $consultaImg = $consultaImg ." `imagen`.`descripcion` LIKE '".$_SESSION['busqueda'] ."'";
        $consultaFiltros = $consultaFiltros." `categoria`.`descripcion` LIKE '".$_SESSION['busqueda'] ."'";    
    }
    $consutas = array();
    $consutas[0] = $consultaImg;

    if(strlen($consultaFiltros) > 1 ){
        $consutas[1] = $consultaFiltros;
    }
    
    return $consutas;

}

?>
