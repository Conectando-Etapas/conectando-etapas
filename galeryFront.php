<?php
session_start();
unset($_SESSION['busqueda']);
unset($_SESSION['filtro']);
unset($_SESSION['flag']);
?>
<!DOCTYPE html>
<html id="html"lang="es" data-bs-theme="<?php if ($dark_mode) echo 'dark'; else echo 'light'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cantarell" />

    <link rel="stylesheet" href="./sources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./sources/main_config.css">
    <link rel="stylesheet" href="./sources/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    
    
    <title>Galería - EEST N°2 "Ing. Felipe Senillosa"</title>

</head>

<body id="body">

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
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="./index.php">Inicio</a></li>
                        <li class="nav-item" ><a class="nav-link" href="./anecdotasFront.php">Anécdotas</a></li>
                        <li class="nav-item" ><a class="nav-link active" href="./galeryFront.php">Galería</a></li>
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
    </header>

    <main class="mt-5">
        <div class="container">
            <div id="busquedas">
                <div class="row" id="barra">
                    <div class="col-2"></div>
                    <div class="col-8">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control border border-end-0" id="busqueda" placeholder="Buscar..."  >
                        <button class="btn border border-start-0 " id="borrarBusqueda"type="button">X</button>
                        <button class="btn border" type="button" id="Buscar"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></button>
                    </div>
                    </div>
                    <div class="col-2">

  <button class="btn btn-primary"  id="tres" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 128 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/></svg>

  </button>
</p>
                    </div>
                </div>
                <div class="row mb-5" id="card">
                    <div class=" row d-flex justify-content-center">

                        <div class="col-8 p-3  filtros">
                            <?php
                            include "includes/db_con.php";
                            
                            $resultado = mysqli_query($link, "SELECT `id_categoria`, `nombre` FROM `categoria`");
                            while ($datos = mysqli_fetch_array($resultado)) {
                            ?>
                                <input type="checkbox" class="btn-check checkbox cat-check" id="btn-check-<?php echo $datos["id_categoria"] ?>" autocomplete="off">
                                <label class="badge rounded-pill col-auto ms-1 mb-1 cat-label" for="btn-check-<?php echo $datos["id_categoria"] ?>"><?php echo $datos["nombre"] ?></label>
                            <?php 
                            }
                            ?>
                        </div>
                </div>
                </div>
                <div id="recomendados">
            <div class="row d-flex justify-content-center my-2" id="recomendados">
                <div class="col-12"> Recomendados</div>
                <div class="col-12 filtros" id="masCat"></div>
            </div>
            </div>
            </div>
            <div id="imagenes" class="row d-flex justify-content-center"></div>

            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center align-items-center position-fixed top-0 start-0" id="modal-container">
        <div class="px-2 py-2  p-3 rounded position-relative" id="modal">
            <div class="btn   position-absolute top-0 end-0" id="cerrar_modal">X</div>
                <div class="row m-2  border-bottom">
                <div class="col-12 fs-4 text-center" id="titulo-modal"></div>
                </div>
                <div class="row">
                <div class="col-md-7 col-12 d-flex justify-content-center border-end" id="container-img-modal"> <img class="rounded" id="img-modal" src="" alt="imagen"></div>
                <div class="col-md-5 col-12 overflow-auto" id="texto-modal">
                </div>
                </div>
            </div>
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
                <a href="mailto:eestn2tandil@abc.gob.ar">
                    Email: eestn2tandil@abc.gob.ar
                </a><br>
            </p>
            <h3 class="mt-3">¡Seguinos!</h3>
            <a class="footer-a" target="_blank" href="https://www.instagram.com/la.senillosa.eestn2.tandil/"><i class="bi bi-instagram fs-5"></i> la.senillosa.eestn2.tandil</a><br>
            <a class="footer-a" target="_blank" href="https://www.facebook.com/felipe.senillosa.9?locale=es_LA"><i class="bi bi-facebook fs-5"></i> Felipe Senillosa</a>
        </div>

    </footer>


</body>
<script src="system/ajax.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>