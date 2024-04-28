<!DOCTYPE html>
<html lang="es" data-bs-theme="<?php echo ($dark_mode) ? 'dark' : 'light'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/www/sources/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="http://localhost/admin/sources/styles/custom.css">
    <script src="https://kit.fontawesome.com/e7401517de.js" crossorigin="anonymous"></script>
    
    <link rel="shortcut icon" href="http://localhost/www/sources/images/favicon.png" type="image/x-icon">
    <title>Iniciar Sesión - Administracion EEST N°2</title>
</head>
<body class="container-fluid">
    <header class="row">
        <img class="col-auto" src="http://localhost/www/sources/images/logo_trans.png" alt="404" height="60px">
    </header>

    <main class="row justify-content-center pt-5" style="color: #1B036D;">
        <div class="col-10">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Inicio de sesión</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card border-secondary mb-3">
                        <div class="card-body">
                            <form action="ValidarLogin.php" method="post">
                                
                                <?php
                                        if(isset($_GET['error']))
                                        echo '<div class="alert alert-danger text-center">
                                                <strong>¡Datos incorrectos!</strong> Compruebe los datos de sesión e inténtelo denuevo.
                                                </div>';
                                        
                                        ?>
                                <div class="form-group mt-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Introduce tu email" autocomplete="off" required>
                                        <label for="user" class="form-label">Email</label>
                                    </div>
                                </div>    
                                <div class="form-group mt-3">
                                    <div class="form-floating">   
                                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Introduce tu contraseña" autocomplete="off" required>
                                        <label for="pass" class="form-label">Contraseña</label>  
                                    </div>  
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-primary-outline-success mt-4 text-light form-control" name="btnlogin">Iniciar sesión</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

<?php

include "includes/footer.php";
?>