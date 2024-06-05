//editor de texto 
let toolbarOptions =  [
    ['bold', 'italic', 'underline', 'strike'],  
    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
    [{ 'color': [] }, { 'background': [] }],
    [{ 'align': [] }],
    ['clean']                          
    ];


var editorAnec = new Quill('#infoAnec', {
    modules: {
        toolbar: toolbarOptions
    },
    theme: 'snow'
});
var editorAnecDos = new Quill('#infoAnecDos', {
    modules: {
        toolbar: toolbarOptions
    },
    theme: 'snow'
});

// ANECDOTAS
    //  subir
        document.getElementById('subirAnec').addEventListener('click',()=> {
            let titulo = document.getElementById('anecTitulo');
            let autor = document.getElementById('anecautor');
            let fecha = document.getElementById('anecfecha');
            let informacion = editorAnec.root;
            

            let info = ["anecdotas", 0, titulo.value, autor.value, fecha.value, informacion.innerHTML];
            ajax(info);
            titulo.value = "";
            autor.value = "";
            fecha.value = "";
            informacion.innerHTML = "";
        })

    //modificar
        // SELECT datos actuales
        document.getElementById("selectAnecMod").addEventListener('change', (event)=>{

            let data = new FormData;
            let a = JSON.stringify([event.target.value]);
            data.append('info', a);

            fetch('./system/cargarAnec.php',{
                method: "POST",
                body: data
            })
            .then(res => res.json())
            .then(res => {
                document.getElementById("idAnecMod").value = res.id_anec;
                document.getElementById("anecTituloMod").value = res.titulo;
                document.getElementById("anecAutorMod").value = res.autor;
                document.getElementById("anecFechaMod").value = res.fecha;
                editorAnecDos.root.innerHTML = res.contenido;
                // document.getElementById("infoAnecMod").children[0].innerHTML = res.contenido;
            })

        });

        //UPDATE nuevos datos
        document.getElementById('modifAnec').addEventListener('click',()=> {
            let id_anec = document.getElementById('idAnecMod');
            let titulo = document.getElementById('anecTituloMod');
            let autor = document.getElementById('anecAutorMod');
            let fecha = document.getElementById('anecFechaMod');
            let informacion = editorAnecDos.root;

            let info = ["anecdotas", 2, id_anec.value, titulo.value, autor.value, fecha.value, informacion.innerHTML];
            ajax(info)
            titulo.value = "";
            autor.value = "";
            fecha.value = "";
            informacion.innerHTML = "";
        })

    //eliminar
        document.getElementById("anecdotasMuestra").addEventListener('click', (event)=>{

            if(event.target.classList.contains("delete")){
                let info = ["anecdotas", 1, event.target.id]
                ajax(info)
                let nodoPadre = document.getElementById("padreAnecdotas")
                let nodo = document.getElementById(`anecdota-fila-${event.target.id}`)
                nodoPadre.removeChild(nodo);
            }

        });

//IMAGEN
    //Cambiar img de vista previa
    function switchImg(foto) {
        document.getElementById("modalImg").setAttribute('src', `../ArchivoDigital/${foto}`);
    }

    //Cosas...

    //eliminar
        document.getElementById("imgsMuestra").addEventListener('click', (event)=>{

            if(event.target.classList.contains("delete")){
                let nodoPadre = document.getElementById("padreImgs")
                let nodo = document.getElementById(`img-fila-${event.target.value}`)
                
                let info = ["imagen", 1, event.target.value, nodo.getAttribute("value")]
                ajax(info)
                nodoPadre.removeChild(nodo);
            }

        });


/*
//PROYECTO
    //subir
        document.getElementById('subirProyecto').addEventListener('click',()=>{

            let orientacion = document.getElementById('proyectoOrinentacion');
            let titulo = document.getElementById('proyectoTitulo');
            let contenido = editorProyecto.root;
            let resumen = document.getElementById('proyectoResumen');
            let info =["proyecto", 0, orientacion.value,titulo.value,contenido.innerHTML,resumen.value]
            ajax(info)

            orientacion.value=""
            titulo.value=""
            contenido.innerHTML=""
            resumen.value=""

        });

    // eliminar
        document.getElementById("proyectoMuestra").addEventListener('click', (event)=>{

            if(event.target.classList.contains("delete")){
                let info = ["proyecto", 1, event.target.id]
                ajax(info)

                let nodoPadre = document.getElementById("padreProyectos")
                let nodo = document.getElementById(`proyecto-fila-${event.target.id}`)
                nodoPadre.removeChild(nodo);
            }

        });

//Orinetacion
    //subir
        document.getElementById('subirOrientacion').addEventListener('click',()=>{

            let orientacion = document.getElementById('Orinetacion');
            let contenido = editorOrientacion.root;
            let info =["orientacion", 0, orientacion.value, contenido.innerHTML]
            ajax(info)
            orientacion.value = ""
            contenido.innerHTML = " "
        });

    // eliminar
        document.getElementById("orientacionMuestra").addEventListener('click', (event)=>{

            if(event.target.classList.contains("delete")){
                
                let info = ["orientacion", 1, event.target.id]
                ajax(info)
                let nodoPadre = document.getElementById("padreOrientacion")
                let nodo = document.getElementById(`orientacion-fila-${event.target.id}`)
                nodoPadre.removeChild(nodo);
            }

        });
*/


//ajax
    function ajax(array) {
        let data = new FormData;
        let a = JSON.stringify(array)
        data.append('array', a);
        fetch('./system/AnecProyectOrient.php',{
            method: "POST",
            body: data
        })
        .then(res => res.json())
        .then(res => {
            // console.log(res); // usar SOLO en fase de desarrollo
        })
    }