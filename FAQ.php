<!DOCTYPE html>
<html lang="es" data-bs-theme="<?php if ($dark_mode) echo 'dark'; else echo 'light'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cantarell" />
    <link rel="shortcut icon" href="./sources/images/favicon.png" type="image/x-icon">

    <!-- Estilos BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./sources/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    
    <!-- Estilos propios y otros -->
    <link rel="stylesheet" href="./sources/main_config.css">
    <link rel="stylesheet" href="./sources/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <title>Preguntas Frecuentes - EEST N°2 "Ing. Felipe Senillosa"</title>

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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="./index.php">Inicio</a></li>
                        <li class="nav-item" ><a class="nav-link active" href="./anecdotasFront.php">Anécdotas</a></li>
                        <li class="nav-item" ><a class="nav-link active" href="./galeryFront.php">Galería</a></li>
                        <li class="nav-item" ><a class="nav-link active" href="./historyFront.php">Historia</a></li>
                        <li class="nav-item" ><a class="nav-link active" href="./basicFront.php">Ciclo Básico</a></li>
                        <li class="nav-item" ><a class="nav-link active" href="./cicloSuperior.php">Ciclo Superior</a></li>
                        <li class="nav-item dropdown-center">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                Más información
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./docsFront.php">Documentos</a></li>
                                <li><a class="dropdown-item" href="./FAQ.php">Preguntas Frecuentes</a></li>                                <!-- <li><a class="dropdown-item" href="./conEtFront.php">Conectando Etapas</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <main class="container-fluid pt-5">
    <?php
        $done = '<div class="alert alert-success d-flex alert-dismissible fade show" role="alert"><div><svg class="px-3" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#1e8816}</style><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/></svg>Consulta publicada correctamente.</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        $doneNot = '<div class="alert alert-danger d-flex alert-dismissible fade show" role="alert"><div><svg class="px-3" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ba1717}</style><path d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/></svg>Hubo un error. Por favor reintente la carga de su consulta.</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        if(isset($_GET['done']))
            echo ($_GET['done'] == 1) ? $done : $doneNot;
    ?>

        <div class="row px-5 py-2">
            <div class="col-12 col-md-6 col-lg-7 pe-md-5 mb-5 mb-md-0"><!-- Acordeon de preguntas frecuentes -->

                <h2>Preguntas Frecuentes</h2>
                <p>Encuentre solución rápida a su inconveniente o, si lo prefiere, puede enviarnos su consulta.</p>

                <div class="accordion accordion-flush" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ¿La escuela tiene un código de vestimenta?
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        Si, la escuela posée un código de vestimenta. Este se basa en los colores azules, blancos, y negros. También ofrecemos la posibilidad de adquirir con la vestimenta oficial con el logo del establecimiento.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ¿Cuales son los requisitos?
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        No existen requisitos. Solo hay que anotarse. Cabe mencionar que la escuela se rige por un cupo de alumnos máximo que pueden quedar.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ¿Cuál es el correo electrónico de la escuela?
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        El correo electrónico de la escuela es eestn2tandil@abc.gob.ar o Tecnica2.senillosa@gmail.com
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5 bg-light p-3"><!-- Formulario de consulta -->
                <form action="system/enviar_consulta.php" method="post">
                    
                    <h3>¿Tiene alguna consulta?</h3>
                    <p>Escríbanos y le responderemos lo más pronto posible.</p>

                    <div class="mb-2">
                        <label for="nombre" class="form-label">Nombre*</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Complete con su nombre y apellido" name="Nombre" required>
                    </div>
                    <div class="mb-2">
                        <label for="mail" class="form-label">Direccion de email</label>
                        <input type="email" class="form-control" id="mail" placeholder="En esta dirección recibirá su respuesta." name="Email" required>
                    </div>
                    <div class="mb-2">
                        <label for="consulta" class="form-label">Consulta</label>
                        <textarea class="form-control" id="consulta" rows="3" name="Consulta" required></textarea>
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-primary" name="Envio">Enviar</button>
                    </div>
                </form>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- <script src="./sources/js/bootstrap.min.js"></script> -->
    <!-- <script src="./sources/js/bootstrap.bundle.js"></script> -->

    <!-- Funcionamiento de botones dinámicos (dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>
