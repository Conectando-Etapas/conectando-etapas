<?php
/* Este archivo esta dedicado a la subida de imagenes al servidor. También se encarga de mover las fotos */
    include "../includes/db_con.php";

    if (!isset($_POST['direccion']) || $_POST['direccion'] == null){   // -- FIREWALL
        http_response_code(417); // -- Falla en la carga (417 = expectation failed)
        die();
    }


    $direccion = $_POST["direccion"];
    $fecha = (!empty( $_POST["fecha"]) ) ? $_POST["fecha"] : "Desconocida";
    $titulo = (!empty( $_POST["titulo"]) ) ? $_POST["titulo"] : "Imagen no etiquetada";
    $decripcion = (!empty( $_POST["decripcion"]) ) ? $_POST["decripcion"] : "No existe aún descripción de la imágen";
    if (isset($_POST["CATEGORIA"]))
        $categorias = $_POST["CATEGORIA"];

    try {
        /* -- Genera el nombre de la foto (basado en el tiempo actual) -- */
        $time = date_create("now", timezone_open('America/Argentina/Buenos_Aires'));

        $new_location = "IMG-";
        $new_location .= date_format($time, 'YmdHisu');//FOMATO: '[PRE-yyyymmddhhiissuuuuuu]' Año, mes, dia (Nro), hora en formato 24, minutos, segundos, milisegundos en formato de 6 decimales
        $new_location .= "." . pathinfo($direccion, PATHINFO_EXTENSION);

        if (file_exists("../uploads/$direccion"))
            rename("../uploads/$direccion", "../../ArchivoDigital/$new_location");
        else {
            http_response_code(410);// El archivo que se quiere subir ya no existe (HTTP 410 -> "GONE")
            die();
        }
        
    } catch (\Throwable $th) {

        http_response_code(417);
        echo $th;
        die();
    }

    try {
        $consulta = mysqli_query($link, "INSERT INTO imagen (ubicacion, titulo, descripcion, fecha) VALUES ('$new_location', '$titulo', '$decripcion', '$fecha')");
        if (!$consulta) {
            http_response_code(417);
            die();
        } else {
            /* -- Pide la id de la imagen recien cargada -- */
            $consulta = mysqli_query($link, "SELECT id_img FROM imagen WHERE ubicacion = '$new_location';");
            
            if (mysqli_num_rows($consulta) < 1) {
                http_response_code(417);
                die();
            }
            $datos = mysqli_fetch_array($consulta);

            /* -- Cargar la consulta para agregar las categorias a su tabla -- */
            if (isset($categorias)) {

                $qry = "INSERT INTO tiene_categoria (id_imagen, id_categoria) VALUES ($datos[0],$categorias[0])";
                for ($i = 1; $i < count($categorias); $i++) {
                    $qry .= ", ($datos[0], $categorias[$i])";
                }

                unset($consulta);
                $consulta = mysqli_query($link, $qry);
                if (!$consulta) {
                    http_response_code(417);
                    $consulta = mysqli_query($link, "DELETE * FROM imagen WHERE ubicacion = '$new_location';");
                    die();
                }
            }

        }

    } catch (\Throwable $th) {

        http_response_code(417);
        unlink("../../ArchivoDigital/$new_location");
        echo $th;
        die();
    }

?>