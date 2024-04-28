<!DOCTYPE html>
<html lang="es" data-bs-theme="<?php if ($dark_mode) echo 'dark'; else echo 'light'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cantarell" />

    <!-- Estilos BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./sources/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    
    <!-- Estilos propios y otros -->
    <link rel="stylesheet" href="./sources/main_config.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <script src="https://kit.fontawesome.com/e7401517de.js" crossorigin="anonymous"></script>
    <title>Ciclo Básico - EEST N°2 "Ing. Felipe Senillosa"</title>

</head>

<body>

<header class="header">
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
                        <li class="nav-item" ><a class="nav-link active" href="./basicFront.php">Ciclo Básico</a></li>
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
    </header>

    <main class="container mb-5">
        <div class="row">
            <h1 class="col-12 text-center mt-5 mb-3">Ciclo Básico</h1>
            <div class="col-12 text-center fs-5">
                <p>El ciclo basico técnico tiene una duracion de tres años y tiene una Formación Técnica Específica la cual esta comprendida por los saberes del mundo del trabajo, el conocimiento del sistema socio-productivo local, la formacion ciudadana y la adquisicion de saberes en lo que respecta a la produccion de conocimientos cientificos y tecnologicos.</p>
                <p>Una de las características principales de la Formación Específica en el ciclo Básico es favorecer el desarrollo de capacidades que resultarán necesarias en las diferentes tecnicaturas que el alumno pueda elegir en el ciclo superior.</p>
            </div>
        </div>
        
        <hr>
        
        <div class="row font-left">
            <div class="col-12 col-md-4">
                <img src="./imagenes/electro.jpg" alt="" class="p-0 m-0 img-fluid">
            </div>
            <div class="col-12 col-md-8">
                <h2>Primer año</h2>
                <h4>Información</h4>                    
                <p class="fs-5">El primer año de la Educación Secundaria Técnica consta de formación general y formación científico tecnológica, y se divide en 8 materias: Ciencias Naturales, Ciencias Sociales, Educación Artística, Educación Física, Inglés, Matemática, Prácticas del Lenguaje y Construcción Ciudadana. La cantidad total de módulos semanales en el primer año es de 24.</p>
                <h4>Talleres</h4>
                <p class="fs-5">Dentro de la formación científico-tecnológica se dictan tres materias: Procedimientos Técnicos, Lenguajes Tecnológicos y Sistemas Tecnológicos, cada una con una carga horaria anual de 72 horas, y con 6 módulos semanales</p>
            </div>
        </div>

        <hr>

        <div class="row font-right">
            <div class="col-12 col-md-8">
                <h2>Segundo año</h2>
                <h4>Información</h4>
                <p class="fs-5">El segundo año de la Educación Secundaria Técnica incluye ocho asignaturas en el área de Formación General, con cuatro módulos semanales cada una, con materias como Biología, Construcción de Ciudadanía, Educación Artística, Educación Física, Físico Química, Geografía, Historia, Matemática, Prácticas del Lenguaje, e Inglés. La cantidad total de módulos semanales del segundo año es de 24.</p>
                <h4>Talleres</h4>
                <p class="fs-5">El segundo año de la Educación Secundaria Técnica incluye tres materias técnico-específicas: Procedimientos Técnicos, Lenguajes Tecnológicos y Sistemas Tecnológicos, con un total de ocho módulos semanales. Procedimientos Técnicos se vuelve el área con más horas con 144, el resto de materias continua con 72 horas.</p>
            </div>
            <div class="col-12 col-md-4">
                <img src="./imagenes/electro.jpg" alt="" class="p-0 m-0 img-fluid">
            </div>
        </div>

        <hr>

        <div class="row font-left">
            <div class="col-12 col-md-4">
                <img src="./imagenes/electro.jpg" alt="" class="p-0 m-0 img-fluid">
            </div>

            <div class="col-12 col-md-8">
                <h2>Tercer año</h2>
                <h4>Información</h4>
                <p class="fs-5">El tercer año de la Educación Secundaria Técnica incluye ocho asignaturas en el área de Formación General, con cuatro módulos semanales cada una, con materias como Biología, Construcción de Ciudadanía, Educación Artística, Educación Física, Físico Química, Geografía, Historia, Inglés, Matemática, y Prácticas del Lenguaje.</p>
                <h4>Talleres</h4>
                <p class="fs-5">Dentro de la formación científico-tecnológica se repiten las tres materias: Procedimientos Técnicos, Lenguajes Tecnológicos y Sistemas Tecnológicos, en este año Sistemas Tecnológicos se amplía con 144 horas anuales, el resto se mantiene en 72. La cantidad total de módulos semanales es de 8.</p>
            </div>
        </div>

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



    <!-- Bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- <script src="./sources/js/bootstrap.min.js"></script> -->
    <!-- <script src="./sources/js/bootstrap.bundle.js"></script> -->

    <!-- Funcionamiento de botones dinámicos (dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>