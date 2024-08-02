<?php
    include_once "includes/db_con.php";

    $title_name = "Carga de Imagenes";
    include "includes/head_settings.php";
?>

    <!-- Formulario de PRECARGA de imagenes -->
    <span class="d-none">

        <form action="" method="post" enctype="multipart/form-data" name="fileUpload">
            <input  class="d-none" type="file" name="fotos[]" id="fotos" multiple required>
        </form>

    </span>

    <!-- Modal. Ventana emergente que muestra la ayuda (punteo tutorial) -->
    <div class="modal fade" id="helpModal" tabindex="-1" aria-labelledby="helpModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-0 p-4">
                <div class="row align-items-center">
                    <div class="col-auto fs-3"><b>1. </b></div>
                    <div class="col">
                        Haga click en el botón de nube para PRE-CARGAR las imagenes que quiera subir a la galería.
                    </div>
                </div>
                <hr class="col mx-3">

                <div class="row align-items-center">
                    <div class="col-auto fs-3"><b>2. </b></div>
                    <div class="col">
                        Verá que se generan tarjetas (una por c/foto subida). Rellene en cada tarjeta los datos de la imagen que se ve junto al formulario.
                    </div>
                </div>
                <hr class="col mx-3">

                <div class="row align-items-center">
                    <div class="col-auto fs-3"><b>3. </b></div>
                    <div class="col">
                        Dentro del formulario encontrará una sección de categorías. Allí debe seleccionar las que correspondan. En azul se marcan las elegidas.
                    </div>
                </div>
                <hr class="col mx-3">

                <div class="row align-items-center">
                    <div class="col-auto fs-3"><b>4. </b></div>
                    <div class="col">
                        Por último, haga click en "Subir imágen". Esto enviará la imagen y sus datos al sistema para ser cargada en el archivo digital.
                    </div>
                </div>

                <div class="mt-4 text-center">Repita los pasos por cada imagen que desee subir</div>

                
                <button type="button" class="position-absolute top-0 end-0 btn btn-light rounded-5 m-1" data-bs-dismiss="modal">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                </button>
            </div>
        </div>
    </div>


    <main class="row justify-content-center mb-5"><!-- Inicio de página visible -->

    <div class="col-10">

        <!-- Contenedor para los mensajes de respuesta (Alerts horizontales) -->
        <div class="row justify-content-center my-3" id="StateDisplay"></div>

        <!-- Título sticky (Se ajusta al top al hacer scroll) -->
        <span class="row justify-content-between sticky-top pt-3 mb-3 pb-1">
            <h3 class="col-9 col-sm-auto">
                Imágenes precargadas
                <svg id="InfoSubida" style="fill: grey;"  data-bs-toggle="modal" data-bs-target="#helpModal" xmlns="http://www.w3.org/2000/svg" height="0.65em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm169.8-90.7c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
            </h3>
            <span class="col-3 col-sm-auto">
                <label for="fotos" id="btnUpload" class="btn position-absolute bottom-0 end-0">
                    <svg style="fill: var(--bs-primary);" class="fs-2" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z"/></svg>
                </label>
            </span>
            <hr class="mt-1 mb-0">
        </span>

        <!-- Contenedor para las tarjetas de imagen (generadas mediante js) -->
        <div class="row justify-content-center px-2" id="Display"></div>

        <!-- Placeholder (aparece cuando #Display está vacía) -->
        <div class="emptyPlaceholder">
            <div class="row justify-content-around">
                <img class="col-8 col-sm-6 col-md-4" src="./sources/images/no-results_Placeholder.png" alt="404. No encontrado">
                <div class="col-12 text-center">
                    <h3>Aún no ha cargado nada.</h3>
                    <p>Para publicar imágenes nuevas, primero deben ser 'pre-cargadas'.<br> Empiece por subirlas con el botón <svg height="1em" style="fill: dimgrey;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z"/></svg></p>
                </div>
            </div>
        </div>


    </div>

</main>

<script src="sources/script/subir-imagen.js"></script>
<?php include "includes/footer.php"; ?>