<!DOCTYPE html>
<html lang="es" data-bs-theme="<?php if ($dark_mode) echo 'dark'; else echo 'light'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cantarell" />
    
    <!--link rel="stylesheet" href="http://localhost/sources/css/bootstrap.min.css"-->
    <link rel="stylesheet" href="http://localhost/www/sources/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    
    <script src="https://kit.fontawesome.com/e7401517de.js" crossorigin="anonymous"></script>
    <title><?php echo $title_name; ?></title>

</head>

<body>

    <!--Navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary p-4 fixed-top nav-scrolled" id="menu">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><span>EEST N°2</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#extendNav" aria-controls="extendNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse justify-content-end"" id="extendNav">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">Inicio</a>
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
                                <li><a class="dropdown-item" href="#">Anécdotas</a></li>
                                <li><a class="dropdown-item" href="#">FAQ</a></li>
                                <li><a class="dropdown-item" href="#">Documentos</a></li>
                                <li><a class="dropdown-item" href="#">Contactos</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
