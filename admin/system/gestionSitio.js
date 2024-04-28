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
var editorProyecto = new Quill('#infoProyectos', {
    modules: {
        toolbar: toolbarOptions
    },
    theme: 'snow'
});
var editorOrientacion = new Quill('#infoOrientacion    ', {
    modules: {
        toolbar: toolbarOptions
    },
    theme: 'snow'
});

// ANECDOTAS
    //  subir
        document.getElementById('subirAnec').addEventListener('click',()=> {
            let titulo = document.getElementById('anecportada');
            let autor = document.getElementById('anecautor');
            let fecha = document.getElementById('anecfecha');
            let informacion = editorAnec.root;
            

            let info = ["anecdotas", 0, titulo.value, autor.value, fecha.value, informacion.innerHTML];
            ajax(info)
            console.log(informacion.innerHTML)
            titulo.value = "";
            autor.value = "";
            fecha.value = "";
            informacion.innerHTML = "";
            console.log("a")
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

        })

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

        })

    // eliminar
        document.getElementById("proyectoMuestra").addEventListener('click', (event)=>{

            if(event.target.classList.contains("delete")){
                console.log(event.target.id)
                let info = ["proyecto", 1, event.target.id]
                ajax(info)

                let nodoPadre = document.getElementById("padreProyectos")
                let nodo = document.getElementById(`proyecto-fila-${event.target.id}`)
                nodoPadre.removeChild(nodo);
            }

        })

//Orinetacion
    //subir
        document.getElementById('subirOrientacion').addEventListener('click',()=>{

            let orientacion = document.getElementById('Orinetacion');
            let contenido = editorOrientacion.root;
            let info =["orientacion", 0, orientacion.value, contenido.innerHTML]
            ajax(info)
            orientacion.value = ""
            contenido.innerHTML = " "
        })

    // eliminar
        document.getElementById("orientacionMuestra").addEventListener('click', (event)=>{

            if(event.target.classList.contains("delete")){
                console.log(event.target.id)
                
                let info = ["orientacion", 1, event.target.id]
                ajax(info)
                let nodoPadre = document.getElementById("padreOrientacion")
                let nodo = document.getElementById(`orientacion-fila-${event.target.id}`)
                nodoPadre.removeChild(nodo);
            }

        })



//ajax
    function ajax(array) {
        let data = new FormData;
        let a = JSON.stringify(array)
        data.append('array', a);

        fetch('http://localhost/admin/system/AnecProyectOrient.php',{
            method: "POST",
            body: data
        })
        .then(res => res.json())
        .then(res => {
            console.log(res)
        })
        
    }