<!DOCTYPE html>
<html lang="es" data-bs-theme="<?php if ($dark_mode) echo 'dark'; else echo 'light'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cantarell" />
    <link rel="shortcut icon" href="./sources/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./sources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./sources/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./sources/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    
    <script src="https://kit.fontawesome.com/e7401517de.js" crossorigin="anonymous"></script>
    <title>Principal - EEST N°2 "Ing. Felipe Senillosa"</title>

</head>

<body class="container-fluid">

    <!--Navbar-->
    
    <header class="header row">
        <img src="sources/images/EESTN2.png" alt="" class="bg-image">
        <nav class="navbar navbar-expand-lg p-4 fixed-top" id="menu">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php"><span>EEST Nº2</span><img src="sources/images/logo_trans.png" alt="" class="img-header"></a>
                <button onclick="document.getElementById ('menu').classList.add('nav-scrolled')" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#extendNav" aria-controls="extendNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="extendNav">
                    <ul class="navbar-nav mb-2 mb-lg-0 p-md-1">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="./index.php">Inicio</a></li>
                        <li class="nav-item" ><a class="nav-link" href="./anecdotasFront.php">Anécdotas</a></li>
                        <li class="nav-item" ><a class="nav-link" href="./galeryFront.php">Galería</a></li>
                        <li class="nav-item" ><a class="nav-link" href="./historyFront.php">Historia</a></li>
                        <li class="nav-item" ><a class="nav-link" href="./basicFront.php">Ciclo Básico</a></li>
                        <li class="nav-item" ><a class="nav-link" href="./cicloSuperior.php">Ciclo Superior</a></li>
                        <li class="nav-item dropdown">
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
    </header>
    <main class="row">

        <!--Intro-->

        <section class="container-fluid d-flex flex-column justify-content-center align-items-center mt-5 pt-5 text-center w-75 m-auto border-top border-1" id="intro">
            <h1 class="p-3 fs-2 fw-bold">EEST N°2 "Ing. Felipe Senillosa</h1>
            <p class="p-3 fs-4">La EESTN 2 "Ing. Felipe Senillosa", es una escuela de educación técnico-profesional con más de 75 años de trayectoria. Contamos con más de 2000 alumnos en busca de una educación que les permita introducirse de forma íntegra al mercado laboral en una amplia gama de especialidades.</p>
            <a href="./historyFront.php" class="btn btn-primary btn-lg btn-block">Más informacion</a>
        </section>

        <!--Preview-->

        <section class="container-fluid mt-5 border-top border-1">
            <div class="row mx-auto mt-5 my-5 preview">
                <div class="row mt-5 d-flex">
                    <div class="col-md-12 col-12 col-lg-5">
                        <img class= "mt-1" src="./imagenes/escuelavieja.jpg" alt="Prueba" width="100%" height="auto">
                    </div>
                    <div class="col-12 col-md-12 col-lg-7 d-flex">
                        <p class="fs-4 px-3">
                            La denominación que tenia en aquel momento, Escuela Nacional de Educación Técnica N°1 “Ing. Felipe Senillosa”, era en honor a un luchador que siendo extranjero, dejó su vida en nuestra patria trabajando en varios ámbitos de Técnica con proyectos, comisiones y trabajos personales en distintos lugares, siendo uno de ellos el Fuerte Independencia (Tandil).
                        </p>
                    </div>
                </div>
                <div class="row mt-5 d-flex">
                    <div class="col-md-12 col-12 col-lg-7 d-flex">
                        <p class="fs-4 px-3">
                        En 1994, se implemento la Ley Federal Nº 24.195/92 y debido a esto la escuela pasa a la jurisdicción provincial y recibe la denominación de Escuela de Educación Técnica Nº2 “Ing Felipe Senillosa”. Paso a tener los tres años del Plan de Estudios de Polimodal en el Turno Diurno y se unifico el 7mo. de la Escuela Primaria con el primer y segundo año del Ciclo Básico.<br>En el año 2005 se instituyó un bloque técnico de seis años de duración incorporando el Tercer Ciclo, con el nombre de Escuela de Enseñanza Básica.
                    </p>
                    </div>
                    <div class="col-md-12 col-xs-12 col-lg-5">
                        <img src="./imagenes/electro.jpg" class="img-fluid" alt="Prueba" width="100%" height="auto">
                    </div>
                </div>
            </div>
        </section>

        <!--Cursos-->

        <section class="container-fluid mt-5 border-top border-1 text-center">
            <h1 class="p-2 fs-2 mt-5 mx-auto fw-bold">Cursos</h1>
            <div class="row w-75 mx-auto mt-5 my-5">
                <div class="col-xs-12 col-sm-12 col-lg-4">
                    <div class="thumbnail"> <img data-src="holder.js/100%x200" alt="100%x200" src="./imagenes/carpinteria1.jpg"
                            data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
                        <div class="caption mt-1">
                            <h3 class="fw-bold">Ciclo Básico</h3>
                            <p class="fs-5">Infórmese sobre los primeros años de estudio en la escuela, los cuales comprenden 1°, 2°, y 3° año <a href="basicFront.php">aquí</a>.</p>                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-4">
                    <div class="thumbnail"> <img data-src="holder.js/100%x200" alt="100%x200" src="./imagenes/dibujotecnico.jpg"
                            data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
                        <div class="caption mt-1">
                            <h3 class="fw-bold">Ciclo Superior</h3>
                            <p class="fs-5"> Continúe revisando nuestro calendario académico para las diferenctes ofertas para ciclo superior <a href="cicloSuperior.php">aquí</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-4">
                    <div class="thumbnail"> <img alt="100%x200" src="./imagenes/maestro.jpg"
                            data-holder-rendered="true" style="height: 200px; width: 100%; display: block;">
                        <div class="caption mt-1">
                            <h3 class="fw-bold">Especializaciones</h3>
                            <p class="fs-5">Oriéntese sobre las diferentes tecnicaturas que ofrecemos a partir de 4° año, las materias de cada una, y su respectiva salida laboral <a href="./cicloSuperior.php#Especializaciones">aquí</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="row justify-content-evenly py-4 fs-7" id="footer">

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
            <a href="./specFront.php?orientacion=programacion">Programación</a> <br>
            <a href="./specFront.php?orientacion=automotores">Automotor</a>
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



    <!-- Bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- <script src="./sources/bootstrap/js/bootstrap.min.js"></script> -->
    <!-- <script src="./sources/botstrap/js/bootstrap.bundle.js"></script> -->

    <!-- Otras librerías -->

    <script>
        const newElement = document.querySelector('.navbar');

    window.addEventListener('scroll', () => {
    if (window.scrollY > 80){
        newElement.classList.add('nav-scrolled');
    }else if (window.scrollY <= 80){
        newElement.classList.remove('nav-scrolled');
    }
})

    
    </script>
</body>

</html>