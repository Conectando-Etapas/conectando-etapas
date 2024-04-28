<?php
include '../includes/db_con.php';

// if(!isset($_POST["Enviar"])){
    
//     header("location: mostrar_consulta.php");
//     die();
// }

// if(!isset($_POST['estado'])){

// $_SESSION["idConsulta"] = $_GET["id"];

// $resConsulta = $_POST["resConsulta"];

// $respuesta = mysqli_query($link, "SELECT `contenido`, `Autor`, `Email` FROM `consulta` WHERE id_cons = '".$_SESSION["idConsulta"]."'");
// $Datos = mysqli_fetch_array($respuesta);

// $_POST["Autor"]= $Datos[1];
// $_POST["Email"] = $Datos[0];
// $_POST["Contenido"] = $Datos[2];
// $_POST["resConsulta"] = $resConsulta;

// header("location: https://capeleti.000webhostapp.com/subir/Responder_consulta.php");
// die();
// }

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\SMTP;

// require 'mail/vendor/autoload.php';
// try{

//     $email= new PHPMailer(true);
//     $email->isSMTP();
//     $email->Host = 'smtp.gmail.com';
//     $email->SMTPAuth(true);
//     $email->Username ='j5primespvlvp@gmail.com';
//     $email->Password ='xllagwoxrpewjzuy';
//     $email->Port = 587;

//     $email->setFrom('j5primespvlvp@gmail.com', 'yo');
//     $email->addAddress($Datos[2], 'vos');

//     $email->isHTML();
//     $email->Subject='Respuesta a su consulta';
//     $email->Body=
//     '
//         ¡Hola '.$Datos[1].'! esta es la respeusta a tu consulta: <br>
//         '.$resConsulta.'<br>
//          ¡Saludso!            
//     ';

//     $email->send();
// }
// catch(Exception $e){
//     echo 'Mensaje' . $email->ErrorInfo;   
// }
// if(isset($_POST['estado']))
// if($_POST['estado'] == "BORRAR"){

if(isset($_POST["mensaje"])){
    echo $_POST["mensaje"];
}



$consulta = "DELETE FROM `consulta` WHERE id_cons = '".$_GET["id"]."'";

mysqli_query($link, $consulta);

header("location: ../index.php");
die();

?>