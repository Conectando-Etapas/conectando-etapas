<!DOCTYPE html>
<html lang="es" data-bs-theme="<?php echo (isset($dark_mode)) ? 'dark' : 'light'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cantarell" />
    
    <!-- Estilos default (BS y custom) -->
    <link rel="stylesheet" href="./sources/bootstrap/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./sources/bootstrap/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    
    <script src="https://kit.fontawesome.com/e7401517de.js" crossorigin="anonymous"></script>
    <title><?php echo (isset($title_name)) ? $title_name : 'EEST 2 "Ing. F. Senillosa"'; ?></title>

</head>

<body>

    <!--Navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg p-4" id="menu">
            <div class="container-fluid">
                <a class="navbar-brand" href="./"><span>EEST Nº2</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#extendNav" aria-controls="extendNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse justify-content-end me-5" id="extendNav">
                    <ul class="navbar-nav mb-2 mb-lg-0 p-md-1">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./">Inicio</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Biblioteca</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Historia</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Más
                        </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./FAQ.php">FAQ</a></li>
                                <li><a class="dropdown-item" href="./galeryFront.php">Galería</a></li>
                                <li><a class="dropdown-item" href="./galeria.php">Archivo digital</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
