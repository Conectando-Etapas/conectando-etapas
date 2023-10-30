window.addEventListener("click", (event)=>{
if (event.target.parentNode.parentNode.parentNode.classList.contains("Reaccion")){
    console.log("Hola")
    mandarreacionsDB( event.target.parentNode.parentNode.parentNode.id,  event.target.parentNode.parentNode.id)
}
})

// llamada a la DB para manipulacion de datos
function mandarreacionsDB(id, reacion){
    let formData = new FormData
    formData.append("ID", id);
    formData.append("reaccion", reacion)
    fetch('http://localhost/www/system/bajarSubirReaciones.php',{
        method: "post",
        body: formData, 
    })
}



//REACCIONES

// SEPARA EL CODIGO DE LAS REACCIONES OBTENIDO EN LA DB
// async function separodoCodigoReaccion(id) {

//     let codigo = await InfoDB(2,id); 
//     codigo = JSON.stringify(codigo) 
//     let inicio = codigo.indexOf(":");
//     codigo = codigo.substring(inicio+2, codigo.lastIndexOf('"'))


//     console.log(codigo) 
//     codigo = codigo.split(',');
//     let codseparado = new Array
//     for (let i = 0; i < codigo.length; i++) {
//         codseparado[i] = codigo[i].split("-");
//     }
//     return codseparado;
// }

// async function AumentoReacciones(reaccion, id){
//     let codSeparado = await separodoCodigoReaccion(id)
//     console.log(codSeparado);
//     for (let i = 0; i < codSeparado.length; i++) {
//         if (codSeparado[i][0] == reaccion) {
//             codSeparado[i][1]++;
//         }   
//     }
//     for (let i = 0; i < codSeparado.length; i++) {
//         codSeparado[i] = codSeparado[i].join('-');
//     }
//     codSeparado = codSeparado.join()
//     console.log(codSeparado)
//     await InfoDB(1,id, codSeparado)
// }



// //aumenta la cantidad de reaciones en el inciso que se le inidque 
// function AumentoReacciones(reaccion, id){
//     let codigo = "r-100,c-200,k-300,";
//     //InfoDB(2,id); 
//     let c = codigo.indexOf(reaccion);
//     let a = codigo.substring(c, codigo.indexOf(",",c))
//     a = a.split('-');
//     return a;
// }

