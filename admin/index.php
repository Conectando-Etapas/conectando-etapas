<?php
include_once 'includes/db_con.php';

$consultas = mysqli_query($link, "SELECT * FROM `consulta` ORDER BY `consulta`.`fecha` ASC");

$title_name = "Administrador EEST 2";
include "includes/head_settings.php"
?>

<main class="row justify-content-center py-3">

    <div class="col-10 col-lg-8 p-0"><!-- Encolumnado central del contenido -->
        <div class="row">
            <h3>Consultas de los usuarios</h3>
            <hr class="mb-3">

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
    </div>


    <div id="gestion-de-sitio" class="col-10 col-lg-8">     
        <div class="row" id="gestion-sitio">
            <div class="col-12 fs-1">
                Gestion de Sitios
            </div>
            <div class="row">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Anecdotas</button>
                    </li>
                    <!-- <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Proyectos</button>
                    </li> -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Especilizaciones</button>
                    </li>
                </ul>

                <div class="tab-content border border-top-0" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Agregar</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Eliminar</button>
                            </div>
                            <div class="tab-content col px-5 py-3" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">

                                    <div class="mb-3">
                                        <label for="anecportada" class="form-label">Portada</label>
                                        <input type="text" class="form-control" id="anecportada">
                                    </div>
                                    <div class="mb-3">
                                        <label for="anecautor" class="form-label">Autor</label>
                                        <input type="text" class="form-control" id="anecautor">
                                    </div>
                                    <div class="mb-3">
                                        <label for="anecfecha" class="form-label" >Fecha</label>
                                        <input type="date" class="form-control" id="anecfecha">
                                    </div>
                                    <div id="infoAnec" style="height: 250px"></div>
                                    <button class="btn btn-primary mt-3 subir" id="subirAnec">subir</button>

                                </div>

                                <div class="tab-pane fade tabla" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                                    <?php
                                        $resAnect = mysqli_query($link, "SELECT `id_anec`, `titulo`, `autor`, `fecha` FROM `anecdota` WHERE 1");
                                    ?> 

                                    



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
                                                while($datosAnec = mysqli_fetch_assoc($resAnect)){
                                            ?>
                                            <tr id="anecdota-fila-<?php echo $datosAnec['id_anec'];?>">
                                                <th scope="row"><?php echo $datosAnec["id_anec"]; ?></th>
                                                <td><?php echo $datosAnec["titulo"]; ?></td>
                                                <td><?php echo $datosAnec["autor"]; ?></td>
                                                <td><?php echo $datosAnec["fecha"]; ?></td>
                                                <td><button id ="<?php echo $datosAnec["id_anec"]; ?>" type="button" class="btn btn-danger delete">Eliminar</button></td>
                                            </tr>
                                            <?php
                                                        }
                                            ?>
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="1">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                    <button class="nav-link show active" id="v-pills-proyectoAgregar-tab" data-bs-toggle="pill" data-bs-target="#v-pills-proyectoAgregar" type="button" role="tab" aria-controls="v-pills-proyectoAgregar" aria-selected="true">Agregar</button>
                                    <button class="nav-link" id="v-pills-proyectoEliminar-tab" data-bs-toggle="pill" data-bs-target="#v-pills-proyectoEliminar" type="button" role="tab" aria-controls="v-pills-proyectoEliminar" aria-selected="false">Eliminar</button>

                                </div>

                                <div class="tab-content col px-5 py-3" id="v-pills-tabContent">

                                    <div class="tab-pane fade show active" id="v-pills-proyectoAgregar" role="tabpanel" aria-labelledby="v-pills-proyectoAgregar-tab" tabindex="1">

                                        <div class="mb-3">

                                            <select class="form-select" aria-label="Default select example" id="proyectoOrinentacion">
                                                <option selected>Elija una orientacion</option>
                                                <?php
                                                    $resOrinetacionSelect = mysqli_query($link, "SELECT `id_orientacion`, `orientacion` FROM `orientacion` WHERE 1");
                                                    while($datosOrinetacionSelect = mysqli_fetch_assoc($resOrinetacionSelect)){
                                                ?>
                                                        <option value="<?php echo $datosOrinetacionSelect['id_orientacion']?>"><?php echo $datosOrinetacionSelect['orientacion']?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div id="infoProyectos" style="height: 250px"></div>

                                        <div class="mb-3">
                                            <label for="proyectoTitulo" class="form-label">Titulo</label>
                                            <input type="text" class="form-control" id="proyectoTitulo">
                                        </div>

                                        <div class="mb-3">
                                            <label for="proyectoResumen" class="form-label">Resumen</label>
                                            <input type="text" class="form-control" id="proyectoResumen">
                                        </div>

                                        <button class="btn btn-primary mt-3 subir" id="subirProyecto">subir</button>

                                    </div>

                                    <div class="tab-pane fade tabla" id="v-pills-proyectoEliminar" role="tabpanel" aria-labelledby="v-pills-proyectoEliminar-tab" tabindex="1">
                                        <table class="table table-striped" id="proyectoMuestra">
                                            <thead>
                                                <tr>
                                                    <th scope="col">IDProyecto</th>
                                                    <th scope="col">IDOrientación</th>
                                                    <th scope="col">Titulo</th>
                                                    <th scope="col">Eliminar</th>
                                                </tr>
                                            </thead>
                                            <tbody id="padreProyectos">
                                                <?php
                                                    $resAnect = mysqli_query($link, "SELECT `id_proyecto`, `id_orientacion`, `titulo` FROM `proyecto` WHERE 1");
                                                    while($datosAnec = mysqli_fetch_assoc($resAnect)){
                                                ?>
                                                <tr id="proyecto-fila-<?php echo $datosAnec['id_proyecto'];?>">
                                                    <th scope="row"><?php echo $datosAnec["id_proyecto"]; ?></th>
                                                    <td><?php echo $datosAnec["id_orientacion"]; ?></td>
                                                    <td><?php echo $datosAnec["titulo"]; ?></td>
                                                    <td><button id ="<?php echo $datosAnec["id_proyecto"]; ?>" type="button" class="btn btn-danger delete">Eliminar</button></td>
                                                </tr>
                                                <?php
                                                            }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">


                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="1">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                    <button class="nav-link show active" id="v-pills-OrinetacionAgregar-tab" data-bs-toggle="pill" data-bs-target="#v-pills-OrinetacionAgregar" type="button" role="tab" aria-controls="v-pills-OrinetacionAgregar" aria-selected="true">Agregar</button>
                                    <button class="nav-link" id="v-pills-OrinetacionEliminar-tab" data-bs-toggle="pill" data-bs-target="#v-pills-OrinetacionEliminar" type="button" role="tab" aria-controls="v-pills-OrinetacionEliminar" aria-selected="false">Eliminar</button>

                                </div>

                                <div class="tab-content col px-5 py-3" id="v-pills-tabContent">

                                    <div class="tab-pane fade show active" id="v-pills-OrinetacionAgregar" role="tabpanel" aria-labelledby="v-pills-OrinetacionAgregar-tab" tabindex="1">   

                                        <div id="infoOrientacion" style="height: 250px"></div>

                                        <div class="mb-3">
                                            <label for="orientacion" class="form-label">Orientación</label>
                                            <input type="text" class="form-control" id="Orinetacion">
                                        </div>

                                        <button class="btn btn-primary mt-3 subir" id="subirOrientacion">subir</button>

                                    </div>

                                    <div class="tab-pane fade tabla" id="v-pills-OrinetacionEliminar" role="tabpanel" aria-labelledby="v-pills-OrinetacionEliminar-tab" tabindex="1">
                                        <table class="table table-striped" id="orientacionMuestra">
                                            <thead>
                                                <tr>
                                                    <th scope="col">IDorientación</th>
                                                    <th scope="col">orinetación</th>
                                                    <th scope="col">imagen</th>
                                                </tr>
                                            </thead>
                                            <tbody id="padreOrientacion">
                                                <?php
                                                    $resAnect = mysqli_query($link, "SELECT `id_orientacion`, `orientacion`,`imagen` FROM `orientacion` WHERE 1");
                                                    while($datosAnec = mysqli_fetch_assoc($resAnect)){
                                                ?>
                                                <tr id="orientacion-fila-<?php echo $datosAnec['id_orientacion'];?>">
                                                    <th scope="row"><?php echo $datosAnec["id_orientacion"]; ?></th>
                                                    <td><?php echo $datosAnec["orientacion"]; ?></td>
                                                    <td><?php echo $datosAnec["imagen"]; ?></td>
                                                    <td><button id ="<?php echo $datosAnec["id_orientacion"]; ?>" type="button" class="btn btn-danger delete">Eliminar</button></td>
                                                </tr>
                                                <?php
                                                            }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>



<?php
include "includes/footer.php";
?>
