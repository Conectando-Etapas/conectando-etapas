<?php

/* Este archivo esta dedicado a la precarga de imaegenes. */
/* Recibe datos desde subir-imagen.php mediante un XHTTPRequest */
/* Procesa la imagen y la guarda en la carpeta "uploads". */
/* Devuelve los datos relacionados para la generacion de tarjetas de subida de vuelta en el archivo de origen. */


include "../includes/db_con.php";//Conexión a la base de datos.

class final_res
{
    public $pills;
    public $response;
}

class response 
{
    public $status_code = 100;
    public $status_text = "Pending..";
    public $location = "undefined";
    public $original_name = "Archivo-x";
    public $id_temp = "undefined";
}


if (isset($_FILES['fotos']['name'])){   // -- FIREWALL

    http_response_code(200);
    $lines = count($_FILES['fotos']['name']);
    $response = [];
} else {
    http_response_code(417); // -- Falla en la carga (417 = expectation failed)
    die();
}


$num_errors = 0;

for ($i = 0; $i < $lines; $i++) {
    $response[$i] = new response();

    $response[$i]->status_code = 200;

    if ($_FILES['fotos']['size'][$i] <= 0) {

        $response[$i]->status_code = 404; //  -- 404 = NotFound
        $response[$i]->status_text = "El archivo no existe o fue movido.";
        $response[$i]->original_name = $_FILES['fotos']['name'][$i];
    } else {

        if (pathinfo($_FILES['fotos']['name'][$i], PATHINFO_EXTENSION) != 'png' && pathinfo($_FILES['fotos']['name'][$i], PATHINFO_EXTENSION) != 'jpg') {

            $response[$i]->status_code = 401; //  -- 401 = NonAuthorized
            $response[$i]->status_text = "Tipo de archivo no autorizado. Debe ser tipo PNG o JPEG.";
            $response[$i]->original_name = $_FILES['fotos']['name'][$i];
        } else {
            if ($_FILES['fotos']['size'][$i] > 20000000) {

                $response[$i]->status_code = 401; //  -- 401 = NonAuthorized
                $response[$i]->status_text = "El archivo excede el limite autorizado y es demasiado grande. Peso máximo admitido: 20MB";
                $response[$i]->original_name = $_FILES['fotos']['name'][$i];
            } else {

                $time = date_create("now", timezone_open('America/Argentina/Buenos_Aires'));
                
                $location = "PRE-";
                $location .= date_format($time, 'YmdHisu');//FOMATO: '[PRE-yyyymmddhhiissuuuuuu]' Año, mes, dia (Nro), hora en formato 24, minutos, segundos, milisegundos en formato de 6 decimales
                $location .= "." . pathinfo($_FILES['fotos']['name'][$i], PATHINFO_EXTENSION);

                //Redimensionamiento de imagenes 
                $nuevo_alto = 700;
                $nuevo_ancho = 900;
                $estado_transferencia = false;
                $img_Original = $_FILES['fotos']['tmp_name'][$i];

                $tipo_extencio = pathinfo($_FILES['fotos']['name'][$i], PATHINFO_EXTENSION);
                switch ($tipo_extencio) {
                    case "jpg":
                        $img_Original = imagecreatefromjpeg($img_Original);
                        break;
                    case "png":
                        $img_Original = imagecreatefrompng($img_Original);
                        break;
                }

                $ancho_original = imagesx($img_Original);
                $alto_original = imagesy($img_Original);

                if (!($ancho_original<=$nuevo_ancho && $alto_original <= $nuevo_alto)) {
                    if($ancho_original >= $alto_original){
                        $nuevo_alto = $nuevo_ancho * $alto_original/ $ancho_original;
                    }else{
                        $nuevo_ancho = $nuevo_alto * $ancho_original/ $alto_original;
                    }
                    $tmp = imagecreatetruecolor($nuevo_ancho,$nuevo_alto);
                    imagecopyresampled($tmp, $img_Original, 0, 0, 0, 0, floor($nuevo_ancho), floor($nuevo_alto), $ancho_original, $alto_original);

                    switch ($tipo_extencio) {
                        case 'jpg':
                            $estado_transferencia = imagejpeg($tmp, "../uploads/".$location, 80);
                            break;
                        case 'png':
                            $estado_transferencia = imagepng($tmp, "../uploads/".$location, 8);
                            break;
                    }
                }else{

                    $estado_transferencia = move_uploaded_file($_FILES['fotos']['tmp_name'][$i], "../uploads/".$location);

                }




                if ($estado_transferencia) {

                    $response[$i]->location = $location;
                    $response[$i]->status_code = 200;
                    $response[$i]->status_text = "OK";
                    $response[$i]->original_name = $_FILES['fotos']['name'][$i];
                    $response[$i]->id_temp = date_format($time, 'YmdHisu');
                } else {
                    $response[$i]->location = $th;
                    $response[$i]->status_code = 417; //  -- 417 = expectation failed
                    $response[$i]->status_text = "Hubo un error inesperado al guardar el archivo. Reintente la carga.";
                    $response[$i]->original_name = $_FILES['fotos']['name'][$i];
                }
                
            }
        }
    }

    if ($response[$i]->status_code != 200)
        $num_errors ++;
    

}

    if ($num_errors > 0)
        if ($num_errors < $lines)
            http_response_code(207); //   -- multi-status
        else
            http_response_code(417); //   -- expectation failed
    else
        http_response_code(200); //   -- status: ok


    // Consulta la BD en busca de categorías de imagen.
    $res = mysqli_query($link, "SELECT id_categoria, nombre, descripcion FROM categoria");
    $pills = array();
    for ($i = 0; $i < mysqli_num_rows($res); $i++){
        $pills[$i] = mysqli_fetch_assoc($res);
    }

        $final_response = new final_res();
        $final_response->pills = $pills;
        $final_response->response = $response;

    echo json_encode($final_response);
    die();
?>