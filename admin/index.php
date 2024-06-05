<?php
include_once 'includes/db_con.php';

$consultas = mysqli_query($link, "SELECT * FROM `consulta` ORDER BY `consulta`.`fecha` ASC");
$qryAnect = "SELECT `id_anec`, `titulo`, `autor`, `fecha`, `contenido` FROM `anecdota`";
$qryImg = "SELECT `id_img`, `titulo`, `ubicacion` FROM `imagen`";

$title_name = "Administrador EEST 2";
include "includes/head_settings.php"
?>

<!-- Modal. Ventana emergente que muestra la ayuda (punteo tutorial) -->
<div class="modal fade" id="vistaPrevia" tabindex="-1" aria-labelledby="imgModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content border-0 p-4">
            
            <img id="modalImg" class="text-danger" src="" alt="Parece que la foto no existe. ELIMINE este regístro!">
            
            <button type="button" class="position-absolute top-0 end-0 btn btn-light rounded-5 m-1" data-bs-dismiss="modal">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
            </button>
        </div>
    </div>
</div>

<main class="row justify-content-center py-3">

    <div class="col-10 col-lg-8 p-0"><!-- Encolumnado central del contenido -->
        <div class="row justify-content-center">
            <span class="sticky-top pt-3">
                <h3>Consultas de los usuarios</h3>
                <hr class="mb-3">
            </span>

            <div class="col-12 border rounded-3 overflow-hidden m-0">

                <!-- Placeholder para el contenedor (aparece cuando no hay consultas activas) -->
                <?php if (mysqli_num_rows($consultas) <= 0) { ?>

                    <div class="emptyPslaceholder">
                        <div class="row justify-content-around">
                            <img class="col-6 col-sm-4 h-100" src="./sources/images/no-results_Placeholder.png" alt="404. No encontrado">
                            <div class="col-12 text-center">
                                <h3>No hay consultas activas</h3>
                                <p>Cuándo alguien haga una pregunta, aparecerá aquí.</p>
                            </div>
                        </div>
                    </div>

                <?php } else { ?>

                    <div class="row">

                        <!-- Contenedor de consultas (cargado dinámicamente dde la BD) -->
                        <div class="col-12 tab-content" id="tabConsultas">
                            <?php $first = true; foreach ($consultas as $datos) { ?>

                                <div class="tab-pane fade<?php if ($first) echo ' show active'; $first = false; ?>" id="consulta-<?php echo $datos['id_cons']; ?>" role="tabpanel" tabindex="0">

                                    <div class="row justify-content-between bg-secondary-subtle py-1 px-2">

                                        <div class="d-none d-sm-inline col-auto text-secondary">
                                            <svg xmlns="http://www.w3.org/2000/svg" style="fill: var(--bs-secondary);" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 64C150 64 64 150 64 256s86 192 192 192c17.7 0 32 14.3 32 32s-14.3 32-32 32C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256v32c0 53-43 96-96 96c-29.3 0-55.6-13.2-73.2-33.9C320 371.1 289.5 384 256 384c-70.7 0-128-57.3-128-128s57.3-128 128-128c27.9 0 53.7 8.9 74.7 24.1c5.7-5 13.1-8.1 21.3-8.1c17.7 0 32 14.3 32 32v80 32c0 17.7 14.3 32 32 32s32-14.3 32-32V256c0-106-86-192-192-192zm64 192a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z"/></svg>
                                            <?php echo $datos['Email']; ?>
                                        </div>

                                        <div class="col text-end text-secondary">
                                            <?php echo date('d/m/y H:i', strtotime($datos['fecha'])); ?>
                                            <svg class="px-2" xmlns="http://www.w3.org/2000/svg" style="fill: var(--bs-secondary);" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M184 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H96c-35.3 0-64 28.7-64 64v16 48V448c0 35.3 28.7 64 64 64H416c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H376V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H184V24zM80 192H432V448c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V192zm176 40c-13.3 0-24 10.7-24 24v48H184c-13.3 0-24 10.7-24 24s10.7 24 24 24h48v48c0 13.3 10.7 24 24 24s24-10.7 24-24V352h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H280V256c0-13.3-10.7-24-24-24z"/></svg>
                                        </div>

                                    </div>

                                    <div class="row px-3 py-4">

                                        <!-- Consulta del usuario -->
                                        <div class="col-12 col-md-6">
                                            <div class="form-text mb-2"><b><?php echo $datos['Nombre']; ?></b> preguntó...</div>
                                            <div class="consultaCont"><?php echo $datos['contenido']; ?></div>
                                        </div>

                                        <hr class="d-md-none col mx-4 my-3">

                                        <!-- Input de respuesta -->
                                        <div class="col-12 col-md-6">
                                            <form class="text-end" action="https://capeleti.000webhostapp.com/subir/Responder_consulta.php" method="post">
                                                <input type="hidden" name="id" value="<?php echo $datos['id_cons']; ?>">
                                                <input type="hidden" name="Contenido" value="<?php echo $datos['contenido']; ?>">
                                                <input type="hidden" name="Autor" value="<?php echo $datos['Nombre']; ?>">
                                                <input type="hidden" name="Email" value="<?php echo $datos['Email']; ?>">

                                                <div class="col-12 text-start mb-3">
                                                    <label for="" class="form-label form-text">Inserte la respuesta:</label>
                                                    <textarea
                                                        class="form-control"
                                                        rows="3"
                                                        name="resConsulta"
                                                        placeholder="Ej. Buendía, nos comunicamos desde Técnica 2..."
                                                        title="Escriba una respuesta para enviarle a <?php echo $datos['Nombre']; ?>"
                                                        required
                                                    ></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary" name="Enviar">Enviar respuesta</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <!-- Lista de consultas disponibles (cargadas dinámicamente dde la BD) -->
                        <div class="consultaList col-12 border-top overflow-y-scroll" role="tablist">
                            <div class="col-12 sticky-top bg-light m-0 border-bottom">
                                Todas las consultas:
                            </div>
                            <?php $first = true; foreach ($consultas as $datos) { ?>

                                <div class="row nav-item" role="presentation">
                                    <button class="nav-link col-12 p-2 px-3<?php echo ($first) ? ' active' : null; ?>" id="tabConsulta-<?php echo $datos['id_cons']; ?>" data-bs-toggle="tab" data-bs-target="#consulta-<?php echo $datos['id_cons']; ?>" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="<?php echo $first; $first = false; ?>">
                                        <div class="row text-start justify-content-between">

                                            <div class="col-2 col-md-4">
                                                <div class="row">
                                                    <div class="col-3"><?php echo date('d/m', strtotime($datos['fecha'])); ?></div>
                                                    <div class="col-9 d-none d-md-inline px-md-2 text-truncate"><?php echo $datos['Nombre']; ?></div>
                                                </div>
                                            </div>

                                            <div class="col-10 col-md-8 text-truncate" style="max-width: 50vw;">
                                                <?php echo $datos['contenido']; ?>
                                            </div>

                                        </div>
                                    </button>
                                </div>

                                <hr class="col mx-3 my-0">

                            <?php } ?>

                        </div>

                    </div>
                <?php } ?>
            </div>
        </div>

    <!-- Panel de gestión dinámica del sitio [CRUD de Anécdotas|Modif. Imgs] -->    
        <div class="mt-5 row justify-content-center" id="gestion-sitio">
            <!-- Título sticky (Se ajusta al top al hacer scroll) -->
            <span class="sticky-top pt-3">
                <h3>Gestión del Sitio</h3>
                <hr class="mb-3">
            </span>


            <div class="row">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <!-- BOTONERA superior del panel (tabs) -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="anec-tab" data-bs-toggle="tab" data-bs-target="#anec-tab-pane" type="button" role="tab" aria-controls="anec-tab-pane" aria-selected="true">Anecdotas</button>
                    </li>
                    
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="img-tab" data-bs-toggle="tab" data-bs-target="#img-tab-pane" type="button" role="tab" aria-controls="img-tab-pane" aria-selected="false">Imágenes</button>
                    </li>

                    <!-- Agregar aquí nuevos tabs para gestionar otros elementos dinámicos del sitio -->

                </ul>

                <!-- Contenedor del panel -->
                <div class="tab-content border border-top-0 rounded-bottom-3" id="myTabContent">

                    <!-- Panel de anécdotas -->
                    <div class="tab-pane fade show active" id="anec-tab-pane" role="tabpanel" aria-labelledby="anec-tab" tabindex="0">
                        <div class="d-flex justify-content-between align-items-start">
                            
                            <!-- Botonera vertical - opciones dentro de anécdotas [Insertar|Modificar|Borrar] -->
                            <div class="nav flex-column nav-pills me-3 mt-3" id="anec-vPills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="anec-vPills-insert-tab" data-bs-toggle="pill" data-bs-target="#anec-vPills-insert" type="button" role="tab" aria-controls="anec-vPills-insert" aria-selected="true">Agregar</button>
                                <button class="nav-link" id="anec-vPills-update-tab" data-bs-toggle="pill" data-bs-target="#anec-vPills-update" type="button" role="tab" aria-controls="anec-vPills-update" aria-selected="false">Modificar</button>
                                <button class="nav-link" id="anec-vPills-delete-tab" data-bs-toggle="pill" data-bs-target="#anec-vPills-delete" type="button" role="tab" aria-controls="anec-vPills-delete" aria-selected="false">Eliminar</button>
                            </div>
                            
                            <!-- Contenedor de la botonera vertical -->
                            <div class="tab-content col px-5 py-3" id="anec-vPills-tabContent">
                                
                                <!-- Inserción -->
                                <div class="tab-pane fade show active" id="anec-vPills-insert" role="tabpanel" aria-labelledby="anec-vPills-insert-tab" tabindex="0">

                                    <div class="mb-3">
                                        <label for="anecTitulo" class="form-label">Portada</label>
                                        <input type="text" class="form-control" id="anecTitulo" maxlength="30">
                                    </div>
                                    <div class="mb-3">
                                        <label for="anecautor" class="form-label">Autor</label>
                                        <input type="text" class="form-control" id="anecautor" maxlength="30">
                                    </div>
                                    <div class="mb-3">
                                        <label for="anecfecha" class="form-label" >Fecha</label>
                                        <input type="date" class="form-control" id="anecfecha" maxlength="20">
                                    </div>
                                    <div class="quillEditor" id="infoAnec"></div>
                                    <button class="btn btn-primary mt-3 subir" id="subirAnec">Subir</button>

                                </div>

                                <!-- Modificación -->
                                <div class="tab-pane fade" id="anec-vPills-update" role="tabpanel" aria-labelledby="anec-vPills-update-tab" tabindex="0">
                                    <!-- Listado de opciones a modificar -->
                                    <label class="form-label">Seleccione la anécdota a modificar</label>
                                    <select class="form-select" id="selectAnecMod">
                                    <?php
                                        $resAnect = mysqli_query($link, $qryAnect);
                                        while($datosAnec = mysqli_fetch_assoc($resAnect)){
                                    ?>
                                        <option value="<?php echo $datosAnec['id_anec']; ?>">
                                            <?php echo $datosAnec["titulo"] . " (" . $datosAnec["autor"] . ")"; ?>
                                        </option>
                                    <?php } ?>
                                    </select>

                                    <input type="hidden" id="idAnecMod">
                                    <div class="mb-3">
                                        <label for="anecTitulo" class="form-label">Portada</label>
                                        <input type="text" class="form-control" id="anecTituloMod" maxlength="30">
                                    </div>
                                    <div class="mb-3">
                                        <label for="anecautor" class="form-label">Autor</label>
                                        <input type="text" class="form-control" id="anecAutorMod" maxlength="30">
                                    </div>
                                    <div class="mb-3">
                                        <label for="anecfecha" class="form-label" >Fecha</label>
                                        <input type="text" class="form-control" id="anecFechaMod" maxlength="20">
                                    </div>
                                    <div class="quillEditor" id="infoAnecDos"></div>
                                    <button class="btn btn-primary mt-3 subir" id="modifAnec">Actualizar</button>

                                </div>

                                <!-- Borrado (lista generada dinámicamente) -->
                                <div class="tab-pane fade tabla" id="anec-vPills-delete" role="tabpanel" aria-labelledby="anec-vPills-delete-tab" tabindex="0">

                                    <table class="table table-striped" id="anecdotasMuestra">
                                        <thead>
                                            <tr>
                                                <th scope="col">IDAnecdota</th>
                                                <th scope="col">Titulo</th>
                                                <th scope="col">Autor</th>
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody id="padreAnecdotas">
                                        <?php
                                            $resAnect = mysqli_query($link, $qryAnect);
                                            while($datosAnec = mysqli_fetch_assoc($resAnect)){
                                        ?>

                                            <tr id="anecdota-fila-<?php echo $datosAnec['id_anec'];?>">
                                                <th scope="row"><?php echo $datosAnec["id_anec"]; ?></th>
                                                <td><?php echo $datosAnec["titulo"]; ?></td>
                                                <td><?php echo $datosAnec["autor"]; ?></td>
                                                <td><?php echo $datosAnec["fecha"]; ?></td>
                                                <td><button id ="<?php echo $datosAnec["id_anec"]; ?>" type="button" class="btn btn-danger delete">Eliminar</button></td>
                                            </tr>

                                        <?php } ?>
                                        </tbody>
                                    </table>


                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Panel de imágenes -->
                    <div class="tab-pane fade" id="img-tab-pane" role="tabpanel" aria-labelledby="img-tab" tabindex="0">
                        <div class="d-flex justify-content-between align-items-start" style="height: 250px; overflow-y: scroll;">
                            
                            <!-- Listado de Imágenes para su posterior borrado y/o modificación -->
                            <table class="table table-striped" id="imgsMuestra">
                                <thead class="sticky-top">
                                    <tr>
                                        <th scope="col" colspan="4">Listado de imágenes</th>
                                    </tr>
                                </thead>
                                <tbody id="padreImgs">
                                <?php
                                    $resImg = mysqli_query($link, $qryImg);
                                    while($datosImg = mysqli_fetch_array($resImg)){
                                ?>

                                    <tr id="img-fila-<?php echo $datosImg[0];?>">
                                        <td  data-bs-toggle="modal" data-bs-target="#vistaPrevia" ><a href="#" onclick="switchImg('<?php echo $datosImg[2]; ?>')">Vista Previa</a></td>
                                        <td><?php echo $datosImg[1]; ?></td>
                                        <td><button id ="imgMod-<?php echo $datosImg[0]; ?>" type="button" class="btn btn-warning update">Modificar</button></td>
                                        <td><button value="<?php echo $datosImg[0]; ?>" type="button" class="btn btn-danger delete">Eliminar</button></td>
                                    </tr>

                                <?php } ?>
                                </tbody>
                            </table>

                            <!-- Formulario de modificación -->

                        </div>
                    </div>

                    <!-- Agregar aquí más paneles para gestionar otros elementos dinámicos del sitio -->

                </div>

                
            </div>
        </div>
    </div>

</main>

<script src="./system/gestionSitio.js"></script>

<?php
include "./includes/footer.php";
?>
