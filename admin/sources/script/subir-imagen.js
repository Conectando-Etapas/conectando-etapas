//DECLARACIONES
const formPrecarga = document.forms.namedItem("fileUpload");
const display = document.querySelector("#Display");
const stateDisplay = document.querySelector("#StateDisplay");
const btnUpload = document.querySelector("#btnUpload");
const formsubida = document.querySelectorAll("form");



// EVENTOS ----------------


// -- Movimiento del boton de subida
btnUpload.addEventListener(
    "mouseover",
    (event) => {
    btnUpload.classList.add("fa-beat");
});

btnUpload.addEventListener(
    "mouseout",
    (event) => {
    btnUpload.classList.remove("fa-beat");
});

// FIN EVENTOS ------------



// -- Precarga de imagen
formPrecarga.fotos.addEventListener(
"change",
(event) => {
    const formData = new FormData(formPrecarga);

    formData.append("fotos", fotos.files);

    const request = new XMLHttpRequest();

    request.onload = (progress) => {// Función al regresar del request.
        console.log(`REQUEST (precarga): ${request.status} - ${request.statusText}.`);
        let response;
        try {
            response = JSON.parse(request.response);
            console.log(response);
        } catch (error) {
            console.log("ERROR: " + error + " - " + request.response);
            display.innerHTML = "ERROR: " + error + " - " + request.response;
        }

        switch (request.status) {// Mensajes de status (van en el contenedor de estado - alert en la parte superior)
            case 200:
                stateDisplay.innerHTML = `
                    <div class="alert alert-success alert-dismissible fade show">
                        Todos los archivos han sido cargados satisfactoriamente.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
                break;

            case 207:
                stateDisplay.innerHTML = `
                    <div class="alert alert-warning alert-dismissible fade show">
                        Solo ALGUNOS de los archivos han sido cargados. En <b>color rojo</b> se marcan los archivos en conflicto.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
                break;

            case 417:
                stateDisplay.innerHTML = `
                    <div class="alert alert-danger alert-dismissible fade show">
                        No pudieron cargarse los archivos. Por favor reintente la carga.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
                break;

            default:
                stateDisplay.innerHTML = `
                    <div class="alert alert-danger alert-dismissible fade show">
                        Ha ocurrido un <b>error desconocido</b>:<br>${request.status} - ${request.statusText}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
                break;
        }

        stateDisplay.scrollIntoView();// Hace un scroll hasta el contenedor de estado (alert en la parte superior)

        response.response.forEach(element => {// Imprime los que están bien.
            if (element.status_code > 400){

                display.innerHTML +=
                `<div class="redCard card alert alert-dismissible col-12 mb-3" id="${element.id_temp}-card">
                    <div class="card-header bg-transparent">
                        <h4>${element.original_name}<h4>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="row imgCardContent card-body">
                        <span><b>${element.status_code}</b>: ${element.status_text}</span>
                    </div>
                </div>`;

            } else {

                /* -- Agrega la card con la imagen y su formulario adjunto -- */
                display.innerHTML +=
                `<div class="col-12 imgCard card mb-3 pt-2" id="${element.id_temp}">
                    <div class="card-header bg-transparent cardTitle">
                        <h4 class="text-truncate">${element.original_name}</h4>
                        <svg
                            class="trashBtn"
                            onclick="trash('${element.id_temp}')"
                            style="fill: var(--bs-dark);"
                            xmlns="http://www.w3.org/2000/svg"
                            height="1.6em" viewBox="0 0 448 512"
                            ><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"/>
                        </svg>
                    </div>
                    <div class="row imgCardContent card-body">

                        <div class="imgContainer col-12 col-md-5 p-0 bg-secondary border border-dark rounded-2">
                            <img src="uploads/${element.location}" alt="404. Imagen no encontrada.">
                        </div>

                        <div class="col-12 col-md-7">
                        <form id="form-${element.id_temp}" action="" method="post">
                            <input type="hidden" name="direccion" value="${element.location}">
                            <h5 class="form-title mt-5 mt-md-0">Inserte los datos alusivos a la imágen</h5>

                            <div class="mb-3">
                                <label for="fecha-${element.id_temp}" class="form-label">Fecha</label>
                                <input type="text" class="form-control" id="fecha-${element.id_temp}" name="fecha" placeholder="Introduzca la fecha aproximada." required>
                            </div>

                            <div class="mb-3">
                                <label for="titulo-${element.id_temp}" class="form-label">Título para la imagen (opcional)</label>
                                <input type="text" class="form-control" id="titulo-${element.id_temp}" name="titulo" placeholder="Frase corta que defina la imágen.">
                            </div>

                            <div class="mb-3">
                                <label for="descripcion-${element.id_temp}" class="form-label">Descripción (opcional)</label>
                                <textarea class="form-control" id="descripcion-${element.id_temp}" name="decripcion" rows="3" placeholder="Ej. Un recuerdo de la 5a edición de ExpoTécnica. Podemos apreciar los preparativos para la feria."></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Categorías (seleccione varias)</label>
                                <div class="contCategorias row justify-content-around mb-3 " id="contCategorias-${element.id_temp}"></div>
                            </div>

                            <div class="mb-3 row justify-content-center">
                            <div class="img-submit btn btn-primary col-10 col-sm-8 col-md-6 col-lg-4" value="${element.id_temp}">Subir imágen</div>
                            </div>

                        </form>
                        </div>
                    </div>
                </div>`;

                /* -- Rellena el contenedor de categorias con sus etiquetas (igual para cada imagen) -- */
                response.pills.forEach(categoria => {
                    document.getElementById(`contCategorias-${element.id_temp}`).innerHTML +=
                    `<input
                        type="checkbox"
                        id="${categoria.nombre}-${element.id_temp}"
                        name="CATEGORIA[]"
                        value="${categoria.id_categoria}"
                    >
                    <label
                        class="badge rounded-pill col-auto mb-1"
                        for="${categoria.nombre}-${element.id_temp}"
                        title="${categoria.descripcion}"
                    >
                        ${categoria.nombre}
                    </label>
                    `;
                })

            }
        });

    cargarevemtos();
    };

    request.open("POST", "system/precarga-imagen.php", true);
    request.send(formData);
    event.preventDefault();// Evita la recarga de la página.
},
false,
);



// -- Evento escucha el envío de los formularios de subida.
function cargarevemtos() {

    const imgSubmit = document.querySelectorAll(".img-submit");
    imgSubmit.forEach(element => {

    // -- Cargar imagen (Toma del formulario de card y lo trata en el archivo cargar-imagen.PHP)
    element.addEventListener(
        "click",
        (event) => {
            console.log(document.forms.namedItem(`form-${element.getAttribute("value")}`));
            const formSubData = new FormData(document.forms.namedItem(`form-${element.getAttribute("value")}`));

            const request = new XMLHttpRequest();

            // Función al regresar del request.
            request.onload = (progress) => {

                console.log(`REQUEST (subida): ${request.status} - ${request.statusText}.`);

                switch (request.status) {
                    case 410:
                    //Gone - El archivo que se quiere cargar ya no existe.
                        stateDisplay.innerHTML = `
                            <div class="alert alert-danger alert-dismissible fade show">
                                El archivo que se quiere cargar ya no existe. Por favor intente nuevamente.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`;
                        break;

                    case 417:
                    //Expectation failed - Avisar que reintente
                        stateDisplay.innerHTML = `
                            <div class="alert alert-danger alert-dismissible fade show">
                                No pudo cargarse el archivo. Por favor reintente la carga.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`;
                        break;

                    case 200:
                        stateDisplay.innerHTML = `
                            <div class="alert alert-success alert-dismissible fade show">
                                El archivo fue publicado satisfactoriamente.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`;
                        break;
                }

                trash(element.getAttribute("value"));
                if (request.status != 200)
                    stateDisplay.scrollIntoView();// Hace un scroll hasta el contenedor de estado (alert en la parte superior)

                // let response;
                // try {
                //     response = JSON.parse(request.response);
                //     console.log(response);
                // } catch (error) {
                //     console.log("ERROR: " + error + " - " + request.response);
                //     display.innerHTML = "ERROR: " + error + " - " + request.response;
                // }
                console.log(request.response);
            };

            request.open("POST", "system/cargar-imagen.php", true);
            request.send(formSubData);
            },
            false,
            );

        });

}

// Eliminación de las cards (activado por el botón de basura)
function trash(id){
    document.getElementById(id).remove();
}