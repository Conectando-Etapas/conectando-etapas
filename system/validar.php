<?php

    if (!isset($_POST['sent'])) {
        die("CONECTION DENIED - Access to this page is restricted.");
    }

    include "../includes/db_con.php";

    switch ($_POST['sent']) {
        case 'registro':

            $qry_exe = mysqli_query($link, "SELECT email from usuario WHERE email = '" . $_POST['mail'] . "'");

            if (mysqli_num_rows($qry_exe) > 0) {

                header("Location: ../regis.php?msg=mail-used");
                die("");

            }
            
            $hashed_pass = password_hash($_POST['contra'], PASSWORD_DEFAULT);
            $qry = "INSERT INTO `usuario`(`email`, `password`, `imagen`, `username`) VALUES ('" . $_POST["mail"] . "','" . $hashed_pass . "','" . $_POST["foto"] . "','" . $_POST["nick"] . "')";

            $qry_exe = mysqli_query($link, $qry);

            if (!$qry_exe) {
                header("Location: ../regis.php?msg=smt-wrng");
                die();
            }

            header("Location: ../login.php?msg=sign-done");
            die();
            
            break;
        
        case 'login':
            
            $qry = "SELECT `password`, `email` FROM `usuario` where `email` = '" . $_POST["mail"] . "' ";

            $qry_exe = mysqli_query($link, $qry);

            if (mysqli_num_rows($qry_exe) > 0){
                $response = mysqli_fetch_assoc($qry_exe);

                if (password_verify($_POST['contra'], $response['password'])){ //CONTRASEÑA CORRECTA

                    session_start();
                    $_SESSION['logged'] = True;
                    $_SESSION['userId'] = $response['email'];

                    header("Location: ../panel_control.php");
                    die("Success!");
                } else {             //CONTRASEÑA INCORRECTA
                    header("Location: ../login.php?msg=wrng-pass");
                    die("");
                }

            } else {                //USUARIO NO EXISTE
                header("Location: ../login.php?msg=wrng-user");
                die("");
            }
            
            break;

        case 'cambios':

            if (isset($_FILES['customFoto'])) {

                if ($_FILES['customFoto']['error'] != 0 || $_FILES['customFoto']['size'] > 20000000) {
                    header("Location: ../edit.php?msg=smt-wrng&UNO=U");
                    die();
                }
            
                $imagen = "uploads/" . $_POST['email'] . "_" . $_FILES['customFoto']['name'];
                $destino = "../$imagen";
                
                move_uploaded_file($_FILES['customFoto']['tmp_name'], $destino);
            
            } else {
                $imagen = $_POST['foto'];
            }
            
            $qry = "UPDATE `usuario` SET `imagen`='$imagen',`username`='" . $_POST['nick'] . "' WHERE email='" . $_POST['email'] . "'";
            $qry_exe = mysqli_query($link, $qry);
            if (!$qry_exe) {
                header("Location: ../edit.php?msg=smt-wrng");
                die();
            }
            
            header('Location: ../panel_control.php');
            die();

            break;
        
        default:
            die("CONNECTION DENIED - Access to this page is restricted.");
            break;
    }
    
?>