<?php
include_once 'includes/db_con.php';

switch ($_GET["orientacion"]) {
    case 'mmo':
    case 'programacion':
    case 'quimica':         
    case 'electromecanica':
    case 'informatica':
    case 'automotores':

        $id = $_GET["orientacion"];
        $res = mysqli_query($link, "SELECT * FROM `orientacion` WHERE orientacion = '$id' ");
        $datos = mysqli_fetch_assoc($res);

        break;
    default:
        header("Location: ./cicloSuperior.php#Especializaciones");
        die();
        break;
}
?>

<!DOCTYPE html>
<html lang="es" data-bs-theme="<?php if ($dark_mode) echo 'dark'; else echo 'light'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cantarell" />
    <link rel="shortcut icon" href="./sources/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./sources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./sources/main_config.css">
    <link rel="stylesheet" href="./sources/especializacion.css">
    <link rel="stylesheet" href="./sources/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./sources/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    
    <script src="https://kit.fontawesome.com/e7401517de.js" crossorigin="anonymous"></script>
    <title> - EEST N°2 "Ing. Felipe Senillosa"</title>

</head>

<body class="<?php echo $datos['orientacion'];?> container-fluid">

<header class="header row">
        <nav class="navbar navbar-expand-lg p-4 fixed-top" id="menu">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php"><span>EEST Nº2</span><img src="sources/images/logo_trans.png" alt="" class="img-header"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#extendNav" aria-controls="extendNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="extendNav">
                    <ul class="navbar-nav mb-2 mb-lg-0 p-md-1">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="./index.php">Inicio</a></li>
                        <li class="nav-item" ><a class="nav-link" href="./anecdotasFront.php">Anécdotas</a></li>
                        <li class="nav-item" ><a class="nav-link" href="./galeryFront.php">Galería</a></li>
                        <li class="nav-item" ><a class="nav-link" href="./historyFront.php">Historia</a></li>
                        <li class="nav-item" ><a class="nav-link" href="./basicFront.php">Ciclo Básico</a></li>
                        <li class="nav-item" ><a class="nav-link" href="./cicloSuperior.php">Ciclo Superior</a></li>
                        <li class="nav-item dropdown-center">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                Más información
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./docsFront.php">Documentos</a></li>
                                <li><a class="dropdown-item" href="./FAQ.php">Preguntas Frecuentes</a></li>                                <!---  <li><a class="dropdown-item" href="./conEtFront.php">Conectando Etapas</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="sub-nav col-12"></div>
    </header>
    
    
    <!--[cambia teniendo en cuenta la especialización] -->

    
    

    <main class="row px-0">

    <div class="image-container">
        <img src="./imagenes/portadasEspecializacion/<?php echo $datos["imagen"] ?>" alt="404. Not found" class="img-fluid img-spec ">
        <h2 class="col-10 text-center text-white overlay-text"> <?php 
        switch ($datos["orientacion"]) {
            case 'mmo':
                echo "Maestro mayor<br>de obras";
                break;
            case 'quimica':
                echo "Química";
                    break;
            case 'programacion':
                echo "Programación";
                break;
            case 'informatica':
                echo "Informática";
            break;
            case 'automotores':
                echo "Automotores";
                break;
            case 'electromecanica':
                echo "Electromecánica";
            break;


        }
        
        ?> </h2>

        </div>
        <div class="row justify-content-center fs-4">
            <div class="col-10">

        
        <div class="row d-flex justify-content-center fs-4">
            <div class="col-12 ">
        <section class=" d-flex justify-content-center">
        <div class="row his-cont mt-5 mb-3 d-flex justify-content-center">
            <div class="col-12 col-md-8 fs-4">
                <h1 class="text-center mb-3">¿De que se trata la tecnicatura?</h1>
                <?php echo $datos["Contenido"];?>
            </div>
        </div>
        </section>

    </div>
</div>

        <!--"Rincón de egresados" dependiendo de la especialización contando como les fue-->

        </div>
    </div>
</main>
    
<footer class="row justify-content-evenly py-4 fs-7">

    <div class="col-12 col-sm-6 col-md-5 col-lg-4 px-4">
        <h3 class="mt-3">Sobre Nosotros</h3>
        <a href="./historyFront.php">Nuestra Historia</a><br>
        <a href="./galeryFront.php">Nosotros en acción</a><br>
        <a href="./basicFront.php">Ciclo Basico</a><br>
        <a href="./cicloSuperior.php">Ciclo Superior</a><br>

        <h3 class="mt-3">Nuestros Cursos</h3>
        <a href="./specFront.php?orientacion=mmo">Maestro Mayor de Obras</a><br>
        <a href="./specFront.php?orientacion=electromecanica">Electromecánica</a><br>
        <a href="./specFront.php?orientacion=quimica">Química</a><br>
        <a href="./specFront.php?orientacion=informatica">Informática</a><br>
        <a href="./specFront.php?orientacion=programacion">Programación</a>
    </div>
    <div class="col-12 col-sm-6 col-md-5 col-lg-4 px-4">
        <h3 class="mt-3">Ayuda</h3>
        <a href="./FAQ.php">Centro de Ayuda</a><br>
        <a href="./docsFront.php">Guías y documentos</a>

        <h3 class="mt-3">Contacto</h3>
        <p>
            Leando Alem 285 - Tandil<br>
            Teléfono: 0249 - 4442637/33<br>
            Email: 
            <a href="mailto:eestn2tandil@abc.gob.ar">
                eestn2tandil@abc.gob.ar
            </a><br>
        </p>
        <h3 class="mt-3">¡Seguinos!</h3>
        <a class="footer-a" target="_blank" href="https://www.instagram.com/la.senillosa.eestn2.tandil/"><i class="bi bi-instagram fs-5"></i> la.senillosa.eestn2.tandil</a><br>
        <a class="footer-a" target="_blank" href="https://www.facebook.com/felipe.senillosa.9?locale=es_LA"><i class="bi bi-facebook fs-5"></i> Felipe Senillosa</a>
    </div>

</footer>



    <script src="https://kit.fontawesome.com/5b34b9778f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="./sources/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./sources/bootstrap/js/bootstrap.bundle.js"></script>
    
</body>
</html>