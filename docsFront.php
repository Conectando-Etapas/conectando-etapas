<!DOCTYPE html>
<html lang="es" data-bs-theme="<?php if ($dark_mode) echo 'dark'; else echo 'light'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cantarell" />
    
    <link rel="stylesheet" href="http://localhost/www/sources/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/www/sources/main_config.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="http://localhost/www/sources/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    
    
    <title>Documentos - EEST N°2 "Ing. Felipe Senillosa"</title>

</head>

<body>

    <!--Navbar-->
    
    <header class="header">
        <nav class="navbar navbar-expand-lg p-4 fixed-top" id="menu">
            <div class="container-fluid">
                <a class="navbar-brand" href="./"><span>EEST Nº2</span></a>
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
                                <li><a class="dropdown-item" href="./FAQ.php">Preguntas Frecuentes</a></li>                                <!---  <li><a class="dropdown-item" href="./conEtFront.php">Conectando Etapas</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-5 text-center justify-content-center">
        <div class="row fs-4">
            <div class="col-12 col-md-4 offset-md-1" id="insc">
                <p>¿Querés inscribirte? ¡Descargá e imprimí este documento y llenalo!</p>
            </div>
            <div class="col-12 col-md-4 offset-md-1 mt-3">
                <a class="btn btn-outline-primary btn-lg" href="#" role="button" id="downloadInsc" name="downloadInsc"><i class="fa-solid fa-download fa-bounce" style="color: #005eff;"></i> Descargar Inscripción.</a>
            </div>
        </div>
        <div class="row fs-4 mt-2">
            <div class="col-12 col-md-4 offset-md-1" id="insc">
                <p>¿Querés rematricularte? ¡Descargá e imprimí este documento y llenalo!</p>
            </div>
            <div class="col-12 col-md-4 offset-md-1 mt-3">
            <a class="btn btn-outline-primary btn-lg" href="#" role="button" id="downloadMatr" name="downloadMatr"><i class="fa-solid fa-download fa-bounce" style="color: #005eff;"></i> Descargar Matrícula.</a>
            </div>
        </div>
        <small class="text-muted">Posteriormente, los documentos deberan ser entregados en la institución en época de inscripciones. <br>
            *Inscripción: este documento es el registro inicial, el cual debe entregarse una sola vez. <br>
            **Matrícula: es el siguiente paso luego de la inscripción. Se deberá entregar nuevamente al inicio de cada ciclo lectivo.
        </small>
    </main>

    <div class="container-fluid" id="footer">
        <div class="row text-center fs-5" id="footer">
            <div class="col-12 mb-0 pt-0">
                EEST N°2 "Ing. Felipe Senillosa"
            </div>
            <div class="col-12">
                <small>
                    Email: eestn2tandil@abc.gob.ar
                </small>
            </div>
            <div class="col-12">
                <small>
                    Teléfono: 0249 - 4442637/33 
                    Leando Alem 285
                </small>
            </div>
            <div class="col-12 ">
                <small id="iconos">
                <a href="https://www.instagram.com/la.senillosa.eestn2.tandil/"><i class="bi bi-instagram"></i></a>
                <a href="https://www.facebook.com/felipe.senillosa.9?locale=es_LA"><i class="bi bi-facebook"></i></a>
                </small>
            </div>
        </div>
    </div>


    <script src="https://kit.fontawesome.com/5b34b9778f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="http://localhost/www/sources/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="http://localhost/www/sources/js/bootstrap.bundle.js"></script>
    
</body>
</html>