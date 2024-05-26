<!DOCTYPE html>
<html lang="es" data-bs-theme="<?php echo ($dark_mode) ? 'dark' : 'light'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/sources/bootstrap/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="http://localhost/admin/sources/styles/custom.css">
    <script src="https://kit.fontawesome.com/e7401517de.js" crossorigin="anonymous"></script>

    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet"> 
    <script src="https://cdn.quilljs.com/1.3.7/quill.js"></script>

    <link rel="shortcut icon" href="http://localhost/sources/images/favicon.png" type="image/x-icon">
    <title><?php echo ($title_name) ? $title_name : 'EEST N°2 - "Ing F Senillosa"'; ?></title>
</head>
<body class="container-fluid">
    <header class="row">
        <img class="col-auto" src="http://localhost/sources/images/logo_trans.png" alt="404" height="60px">
        <div class="botonera">
            <a class="btn btn-light" href="./">Principal</a>
            <a class="btn btn-light" href="./subir-imagen.php">Carga de datos</a>
        </div>
    </header>
