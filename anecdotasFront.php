<?php

class reacciones {
  public $like = 0;
  public $dislike = 0;
  public $smile = 0;
  public $sad = 0;
}

session_start();
include_once "includes/db_con.php";
$anec_fetch = mysqli_query($link, "SELECT * FROM anecdota");
?>
<!DOCTYPE html>
<html lang="es" data-bs-theme="<?php echo ($dark_mode) ? 'dark' : 'light'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cantarell" />

    <link rel="stylesheet" href="./sources/css/bootstrap.min.css">
    <link rel="stylesheet" href="./sources/anecdotas.css">
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
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="./index.php">Inicio</a></li>
                        <li class="nav-item" ><a class="nav-link active" href="./anecdotasFront.php">Anécdotas</a></li>
                        <li class="nav-item" ><a class="nav-link" href="./galeryFront.php">Galería</a></li>
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

  <main class="container-fluid text-center mt-4">
    <h1 class="col-12">Anécdotas</h1>

  <div class="gtco-testimonials" style="width: 100vw;">
    <div class="owl-carousel owl-carousel1 owl-theme">
      
      <div>
      <div class="card mx-3">
        <div class="card-body" id="anecDiv">
          <a href="#anecdota-10">
            <h5>Macanas: Nuestras (mejores) travesuras</h5>
          </a>
          <p class="card-text">“De esta me salve justito” pensaba yo</p>
        </div>
      </div>
    </div>
    <div>
        <div class="card mx-3">
          <div class="card-body" id="anecDiv">
          <a href="#anecdota-9">
              <h5>Mi historia en Técnica</h5>
            </a>
            <p class="card-text">El edificio era el antiguo Hospital de Tandil</p>
          </div>
        </div>
      </div>
      <div>
        <div class="card mx-3">
          <div class="card-body" id="anecDiv">
            <a href="#anecdota-8">
              <h5>Técnica en la década del '70</h5>
            </a>
            <p class="card-text">"Mi nombre es Guillermo Raúl García, fui alumno y docente"</p>
          </div>
        </div>
      </div>
      <div>
        <div class="card mx-3">
          <div class="card-body" id="anecDiv">
          <a href="#anecdota-7">
            <h5>Sorpresa en el pasillo</h5>
          </a>
            <p class="card-text">"Ahí nos salvamos por muy poco"</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>

    <div class="dropdown">
      <button class="btn btn-primary mx-auto fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#anec" aria-controls="anec" aria-expanded="true" aria-label="Toggle navigation">
        Mostar/esconder anécdotas
      </button>
        
      <div class="row mt-3 mb-3 rounded collapse show" id="anec">
            
        <?php
          while ($datos = mysqli_fetch_assoc($anec_fetch)) {
            
            $clave = json_decode($datos['reacciones'], true);
        ?>
          <div class='row justify-content-center mt-5 ' id="anecdota-<?php echo $datos['id_anec'] ?>">
            <div class='col-12 col-sm-10 col-md-8 bg-dark-subtle p-3 anecCont'>
              <h3 class='text-center'>
                <?php echo $datos['titulo'] ?>
              </h3>
              <div class='text-start'>
                <?php echo $datos['contenido'] ?>
              </div>
              <div class='text-end'>
                Autor: <?php echo $datos['autor'] ?>
                <br>
                Fecha: <?php echo $datos['fecha'] ?>
              </div>









              <div class="row  d-flex justify-content-center reaccines ">

                        <div class="col-2 row">
                          <div class="col-6 reaccionar " id="like-<?php echo $datos["id_anec"]; ?>">
                            <input type="radio" name="reac<?php echo $datos["id_anec"]?>" id="like<?php echo $datos["id_anec"]?>" <?php if(!empty($_SESSION ["reaciones"][$datos["id_anec"]]) && $_SESSION ["reaciones"][$datos["id_anec"]] == "like"){echo "checked";}?>>
                            <label for="like<?php echo $datos["id_anec"]?>" class="svg"><svg class="p-0 m-1 "xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M323.8 34.8c-38.2-10.9-78.1 11.2-89 49.4l-5.7 20c-3.7 13-10.4 25-19.5 35l-51.3 56.4c-8.9 9.8-8.2 25 1.6 33.9s25 8.2 33.9-1.6l51.3-56.4c14.1-15.5 24.4-34 30.1-54.1l5.7-20c3.6-12.7 16.9-20.1 29.7-16.5s20.1 16.9 16.5 29.7l-5.7 20c-5.7 19.9-14.7 38.7-26.6 55.5c-5.2 7.3-5.8 16.9-1.7 24.9s12.3 13 21.3 13L448 224c8.8 0 16 7.2 16 16c0 6.8-4.3 12.7-10.4 15c-7.4 2.8-13 9-14.9 16.7s.1 15.8 5.3 21.7c2.5 2.8 4 6.5 4 10.6c0 7.8-5.6 14.3-13 15.7c-8.2 1.6-15.1 7.3-18 15.1s-1.6 16.7 3.6 23.3c2.1 2.7 3.4 6.1 3.4 9.9c0 6.7-4.2 12.6-10.2 14.9c-11.5 4.5-17.7 16.9-14.4 28.8c.4 1.3 .6 2.8 .6 4.3c0 8.8-7.2 16-16 16H286.5c-12.6 0-25-3.7-35.5-10.7l-61.7-41.1c-11-7.4-25.9-4.4-33.3 6.7s-4.4 25.9 6.7 33.3l61.7 41.1c18.4 12.3 40 18.8 62.1 18.8H384c34.7 0 62.9-27.6 64-62c14.6-11.7 24-29.7 24-50c0-4.5-.5-8.8-1.3-13c15.4-11.7 25.3-30.2 25.3-51c0-6.5-1-12.8-2.8-18.7C504.8 273.7 512 257.7 512 240c0-35.3-28.6-64-64-64l-92.3 0c4.7-10.4 8.7-21.2 11.8-32.2l5.7-20c10.9-38.2-11.2-78.1-49.4-89zM32 192c-17.7 0-32 14.3-32 32V448c0 17.7 14.3 32 32 32H96c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32H32z"/></svg></label>
                          </div>
                            <div class="number col-3" id="number-like-<?php echo $datos["id_anec"]; ?>"> <?php echo $clave["like"];?></div>
                        </div>
                      
                        <div class="col-2 row">
                          <div class="col-6 reaccionar" id="dislike-<?php echo $datos["id_anec"]; ?>">
                            <input type="radio" name="reac<?php echo $datos["id_anec"]?>" id="dislike<?php echo $datos["id_anec"]?>" <?php if(!empty($_SESSION ["reaciones"][$datos["id_anec"]]) && $_SESSION ["reaciones"][$datos["id_anec"]] == "dislike"){echo "checked";}?>>
                            <label for="dislike<?php echo $datos["id_anec"]?>" class="svg"><svg class="p-0 m-1" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M323.8 477.2c-38.2 10.9-78.1-11.2-89-49.4l-5.7-20c-3.7-13-10.4-25-19.5-35l-51.3-56.4c-8.9-9.8-8.2-25 1.6-33.9s25-8.2 33.9 1.6l51.3 56.4c14.1 15.5 24.4 34 30.1 54.1l5.7 20c3.6 12.7 16.9 20.1 29.7 16.5s20.1-16.9 16.5-29.7l-5.7-20c-5.7-19.9-14.7-38.7-26.6-55.5c-5.2-7.3-5.8-16.9-1.7-24.9s12.3-13 21.3-13L448 288c8.8 0 16-7.2 16-16c0-6.8-4.3-12.7-10.4-15c-7.4-2.8-13-9-14.9-16.7s.1-15.8 5.3-21.7c2.5-2.8 4-6.5 4-10.6c0-7.8-5.6-14.3-13-15.7c-8.2-1.6-15.1-7.3-18-15.2s-1.6-16.7 3.6-23.3c2.1-2.7 3.4-6.1 3.4-9.9c0-6.7-4.2-12.6-10.2-14.9c-11.5-4.5-17.7-16.9-14.4-28.8c.4-1.3 .6-2.8 .6-4.3c0-8.8-7.2-16-16-16H286.5c-12.6 0-25 3.7-35.5 10.7l-61.7 41.1c-11 7.4-25.9 4.4-33.3-6.7s-4.4-25.9 6.7-33.3l61.7-41.1c18.4-12.3 40-18.8 62.1-18.8H384c34.7 0 62.9 27.6 64 62c14.6 11.7 24 29.7 24 50c0 4.5-.5 8.8-1.3 13c15.4 11.7 25.3 30.2 25.3 51c0 6.5-1 12.8-2.8 18.7C504.8 238.3 512 254.3 512 272c0 35.3-28.6 64-64 64l-92.3 0c4.7 10.4 8.7 21.2 11.8 32.2l5.7 20c10.9 38.2-11.2 78.1-49.4 89zM32 384c-17.7 0-32-14.3-32-32V128c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H32z"/></svg></label>
                          </div>
                            <div class="number col-3" id="number-dislike-<?php echo $datos["id_anec"]; ?>"> <?php echo $clave["dislike"];?></div>
                        </div>

                        <div class="col-2 row">
                          <div class="col-6 reaccionar" id="smile-<?php echo $datos["id_anec"]; ?>">
                            <input type="radio" name="reac<?php echo $datos["id_anec"]?>" id="smile<?php echo $datos["id_anec"]?>" <?php if(!empty($_SESSION ["reaciones"][$datos["id_anec"]]) && $_SESSION ["reaciones"][$datos["id_anec"]] == "smile"){echo "checked";}?>>
                            <label for="smile<?php echo $datos["id_anec"]?>" class="svg"><svg class="p-0 m-1" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm177.6 62.1C192.8 334.5 218.8 352 256 352s63.2-17.5 78.4-33.9c9-9.7 24.2-10.4 33.9-1.4s10.4 24.2 1.4 33.9c-22 23.8-60 49.4-113.6 49.4s-91.7-25.5-113.6-49.4c-9-9.7-8.4-24.9 1.4-33.9s24.9-8.4 33.9 1.4zm40-89.3l0 0 0 0-.2-.2c-.2-.2-.4-.5-.7-.9c-.6-.8-1.6-2-2.8-3.4c-2.5-2.8-6-6.6-10.2-10.3c-8.8-7.8-18.8-14-27.7-14s-18.9 6.2-27.7 14c-4.2 3.7-7.7 7.5-10.2 10.3c-1.2 1.4-2.2 2.6-2.8 3.4c-.3 .4-.6 .7-.7 .9l-.2 .2 0 0 0 0 0 0c-2.1 2.8-5.7 3.9-8.9 2.8s-5.5-4.1-5.5-7.6c0-17.9 6.7-35.6 16.6-48.8c9.8-13 23.9-23.2 39.4-23.2s29.6 10.2 39.4 23.2c9.9 13.2 16.6 30.9 16.6 48.8c0 3.4-2.2 6.5-5.5 7.6s-6.9 0-8.9-2.8l0 0 0 0zm160 0l0 0-.2-.2c-.2-.2-.4-.5-.7-.9c-.6-.8-1.6-2-2.8-3.4c-2.5-2.8-6-6.6-10.2-10.3c-8.8-7.8-18.8-14-27.7-14s-18.9 6.2-27.7 14c-4.2 3.7-7.7 7.5-10.2 10.3c-1.2 1.4-2.2 2.6-2.8 3.4c-.3 .4-.6 .7-.7 .9l-.2 .2 0 0 0 0 0 0c-2.1 2.8-5.7 3.9-8.9 2.8s-5.5-4.1-5.5-7.6c0-17.9 6.7-35.6 16.6-48.8c9.8-13 23.9-23.2 39.4-23.2s29.6 10.2 39.4 23.2c9.9 13.2 16.6 30.9 16.6 48.8c0 3.4-2.2 6.5-5.5 7.6s-6.9 0-8.9-2.8l0 0 0 0 0 0z"/></svg></label>
                          </div>
                            <div class="number col-3" id="number-smile-<?php echo $datos["id_anec"]; ?>"> <?php echo $clave["smile"];?></div>
                        </div>

                        <div class="col-2 row">
                          <div class="col-6 reaccionar" id="sad-<?php echo $datos["id_anec"]; ?>">
                            <input type="radio" name="reac<?php echo $datos["id_anec"]?>" id="sad<?php echo $datos["id_anec"]?>" <?php if(!empty($_SESSION ["reaciones"][$datos["id_anec"]]) && $_SESSION ["reaciones"][$datos["id_anec"]] == "sad"){echo "checked";}?>>
                            <label for="sad<?php echo $datos["id_anec"]?>" class="svg"><svg class="p-0 m-1" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM174.6 384.1c-4.5 12.5-18.2 18.9-30.7 14.4s-18.9-18.2-14.4-30.7C146.9 319.4 198.9 288 256 288s109.1 31.4 126.6 79.9c4.5 12.5-2 26.2-14.4 30.7s-26.2-2-30.7-14.4C328.2 358.5 297.2 336 256 336s-72.2 22.5-81.4 48.1zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg></label>
                          </div>
                            <div class="number col-3" id="number-sad-<?php echo $datos["id_anec"]; ?>"> <?php echo $clave["sad"];?></div>
                        </div>  

              </div>
              </div>
            </div>
          <?php
          }
        ?>

        
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

    <script type="module" src="sources/librerias/Markdown-Tag-main/markdown-tag.js"></script>
    <script src="sources/librerias/Markdown-Tag-main/markdown-tag-commonmark.js"></script>
    <!-- <script src="sources/librerias/Markdown-Tag-main/markdown-tag-GitHub.js"></script> -->
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
            768: {
              items: 3.5,
              nav: false
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

<script src="system/reaciones.js"></script>

</html>