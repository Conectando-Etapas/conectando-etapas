document.getElementById("anec").addEventListener("click", (event)=>{
    let element = event.target.parentNode
if (element.classList.contains("reaccionar")){
    let elementID = element.id
    reaccion = elementID .substring(0, elementID .indexOf("-"))
    id = elementID .substring(elementID .indexOf("-")+1)
    mandarreacionsDB(id , reaccion)
}
})

// llamada a la DB para manipulacion de datos
function mandarreacionsDB(id, reaccion){
    let formData = new FormData
    formData.append("ID", id);
    formData.append("reaccion", reaccion)
    fetch('http://localhost/www/system/subirReacciones.php',{
        method: "post",
        body: formData, 
    })
    .then(res => res.json())
    .then(res => {
        if (res["result"] == "success"){
            let reac = document.getElementById(`number-${reaccion}-${id}`)
            let numReac = parseInt(reac.innerHTML)
            reac.innerHTML = numReac + 1;

            if(res["oldReac"] != null){
                let oldReac = document.getElementById(`number-${res["oldReac"]}-${id}`)
                let numOldReac = parseInt(oldReac.innerHTML)
                oldReac.innerHTML = numOldReac-1
            }
        }
    })
}

