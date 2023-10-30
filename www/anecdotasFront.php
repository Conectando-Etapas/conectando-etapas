<!DOCTYPE html>
<html lang="es" data-bs-theme="<?php if ($dark_mode) echo 'dark'; else echo 'light'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cantarell" />

    <!--link rel="stylesheet" href="http://localhost/sources/css/bootstrap.min.css"-->
    <link rel="stylesheet" href="http://localhost/www/sources/anecdotas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <script src="https://kit.fontawesome.com/e7401517de.js" crossorigin="anonymous"></script>
    <title>Anécdotas - EEST N°2 "Ing. Felipe Senillosa"</title>

</head>

<body>

    <!--Navbar-->

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
                        <li class="nav-item" ><a class="nav-link active" href="./Front.php">Galería</a></li>
                        <li class="nav-item" ><a class="nav-link active" href="./historyFront.php">Historia</a></li>
                        <li class="nav-item" ><a class="nav-link active" href="./basicFront.php">Ciclo Básico</a></li>
                        <li class="nav-item" ><a class="nav-link active" href="./superiorFront.php">Ciclo Superior</a></li>
                        <li class="nav-item dropdown-center">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                Más información
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./docsFront.php">Documentos</a></li>
                                <li><a class="dropdown-item" href="./FAQ.php">FAQ</a></li>
                                <li><a class="dropdown-item" href="./conEtFront.php">Conectando Etapas</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container-fluid text-center mt-4">
        <h1 class="col-12" >Anécdotas</h1>

<div class="gtco-testimonials" style="width: 100vw;">
  <div class="owl-carousel owl-carousel1 owl-theme">
    <div>
      <div class="card text-center me-1">
        <div class="card-body">
          <h5>Ronne Galle <br />
            <span> Project Manager </span>
          </h5>
          <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat ” </p>
        </div>
      </div>
    </div>
    <div>
      <div class="card text-center me-1">
        <div class="card-body">
          <h5>Missy Limana<br />
            <span> Engineer </span>
          </h5>
          <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat ” </p>
        </div>
      </div>
    </div>
    <div>
      <div class="card text-center me-1">
        <div class="card-body">
          <h5>Martha Brown<br />
            <span> Project Manager </span>
          </h5>
          <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat ” </p>
        </div>
      </div>
    </div>
    <div>
      <div class="card text-center me-1">
        <div class="card-body">
          <h5>Hanna Lisem<br />
            <span> Project Manager </span>
          </h5>
          <p class="card-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat ” </p>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>

    <div class="dropdown">
        <button class="btn btn-primary mx-auto fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#anec" aria-controls="anec" aria-expanded="false" aria-label="Toggle navigation">Ver todas las anécdotas</button>
        <div class="row mt-3 mb-3 border border-1 rounded collapse" id="anec">
            <div class="row text-center justify-content-center">
                <div class="col-12 col-md-2 me-2">
                    <strong>[Nombre]</strong><br>
                    <strong>[Años que rindió]</strong>

                </div>
                <div class="col-9">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga soluta tenetur non voluptates maxime nemo adipisci corrupti eum reprehenderit, eveniet perspiciatis unde consectetur natus voluptate possimus optio saepe quia, delectus illum repudiandae. Eius fugiat corporis sapiente aut! Aliquid, sit illo laboriosam repellat dignissimos sunt eligendi, et reiciendis, molestiae qui veritatis?</p>
                </div>
            </div>
        </div>
    </div>
    </div>

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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
       (function () {
        "use strict";

         var carousels = function () {
            $(".owl-carousel1").owlCarousel({
                loop: true,
                center: true,
                margin: 0,
                responsiveClass: true,
                nav: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    680: {
                        items: 2,
                        nav: false,
                        loop: false
                    },
                    1000: {
                        items: 3,
                        nav: true
                    }
                }
            });
        };

  (function ($) {
    carousels();
  })(jQuery);
})();

        
    </script>
</body>

</html>