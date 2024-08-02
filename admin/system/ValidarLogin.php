<?php

$link = mysqli_connect("localhost", "root", "", "conectando_etapas");

    if (!$link)
        die("404. Something went wrong.");

if (isset($_GET["logout"])) {
    session_start();
    unset($_SESSION["loggedInUser"]);
    unset($_SESSION["user"]);
    session_destroy();
    header("Location: ../index.php");
    die();
}


if (isset($_POST['btnlogin'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $consul = mysqli_query($link, "SELECT `clave`, `email` FROM `admin` WHERE `email` = '$email'");

    $rows = mysqli_num_rows($consul);

    // if ($stmt = $mysqli->prepare($query)) {
    //     $stmt->bind_param("s", $username);
    //     $stmt->execute();
    //     $result = $stmt->get_result();

    $hash = mysqli_fetch_assoc($consul);
            // if(password_verify($pass, $hash['clave'])){
            if($pass == $hash['clave']){
                
                session_start();
                $_SESSION["loggedInUser"] = true;
                $_SESSION["user"] = $username;
                header('Location: ../index.php');
                exit();
            } else {
                header("Location: ../Login.php?error=Datos%20de%20sesi%C3%B3n%20incorrectos");
                exit();
            }
    } else {
        header("Location: ../Login.php?error=Datos%20de%20sesi%C3%B3n%20incorrectos");
        exit();
    }


    // if ($rows == 1){
    //     session_start();
    //     $_SESSION["user"] = $username;
    //     header('Location: Index.php');
    //     exit();
    // } else {
    //     // Mostrar mensaje de error
    //     $error = 'Datos inválidos. Intente de nuevo.';
    //     header('Location: login.php?error='. urlencode($error));
    //     exit();
    // }

?>