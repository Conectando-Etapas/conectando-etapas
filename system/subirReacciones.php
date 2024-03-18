<?php
include "../includes/db_con.php";
    session_start();
    $id = $_POST["ID"];
    $reaccion = $_POST["reaccion"];
    if(empty($_SESSION ["reaciones"][$id]) || $_SESSION ["reaciones"][$id] != $reaccion){
        $json = mysqli_query($link,"SELECT `reacciones` FROM `anecdota` WHERE `id_anec` = $id");
        $datos = mysqli_fetch_assoc($json);
        $clave = json_decode($datos['reacciones'], true);

        if (!empty($_SESSION ["reaciones"][$id])){
            $clave[$_SESSION ["reaciones"][$id]]--;
            $oldReac = $_SESSION ["reaciones"][$id];
        
        }

        $clave["$reaccion"]++;
        $json = json_encode($clave);    
        mysqli_query($link, "UPDATE `anecdota` SET `reacciones`= '$json' WHERE id_anec = $id");

        $_SESSION ["reaciones"][$id] = $reaccion;
        
        if (isset($oldReac)) {
            $response["oldReac"] = $oldReac;
        }
        $response["result"] = "success";
    } else {
        $response["result"] = "no_update";
    }
    

    echo json_encode($response);
?>