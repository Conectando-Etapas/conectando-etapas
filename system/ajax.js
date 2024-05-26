let id = 0;
let flagFiltros = false;

window.addEventListener("load" ,() =>{
  id = 0;
  buscraImg();
})

window.addEventListener("scroll", () => {
    let scrolled = document.documentElement.scrollHeight-window.innerHeight;
    let scroll = window.scrollY;
    if(Math.ceil(scroll) >= scrolled){
      
      buscraImg();
    };}) 

    document.getElementById("card").addEventListener("click", (event)=>{
      if(event.target.classList.contains("checkbox")){
        let idFil = event.target.id;
        idFil = idFil.substring(idFil.lastIndexOf("-")+1);
        id = 0;
        document.getElementById("imagenes").innerHTML = " ";
        tipo = "filtro";
        busqueda = idFil
        buscraImg("filtro", idFil);
      }
    })

    document.getElementById("tres").addEventListener("click", () =>{
    switch (flagFiltros) {
    case false:
      document.getElementById("card").style.display = "block";
      flagFiltros=true;
      break;
    case true:
      document.getElementById("card").style.display = "none";
      flagFiltros=false;
      break;
  }
    })


document.getElementById("Buscar").addEventListener("click", ()=>{
let input = document.getElementById("busqueda").value;
  document.getElementById("borrarBusqueda").style.display = "block";
if(input !== " "){
  input = input.trim();
  id = 0;
  document.getElementById("imagenes").innerHTML = " ";
  buscraImg('busqueda',input);
}
})

document.getElementById("borrarBusqueda").addEventListener("click", ()=>{
  document.getElementById("borrarBusqueda").style.display = "none";
  document.getElementById("busqueda").value = "";
  document.getElementById("imagenes").innerHTML = " ";
  document.getElementById("masCat").innerHTML = "";
  id = 0;
  buscraImg('borrarBusqueda');
})


document.getElementById("imagenes").addEventListener("click", (event)=>{
if(event.target.classList.contains("img")){
  buscraImgEspecifica(event.target.id)
  document.getElementById("modal-container").classList.add("show")
  document.getElementById("img-modal").src = event.target.src

}
})

document.getElementById("cerrar_modal").addEventListener("click", ()=>{
  document.getElementById("modal-container").classList.remove("show")
  document.getElementById("img-modal").src = ""
  document.getElementById("titulo-modal").innerHTML = "";
document.getElementById("texto-modal").innerHTML = ""
document.getElementById("recomendados").style.display = "none";

})


function buscraImgEspecifica(idEspecifica) {
  let data = new FormData;
  data.append('idEsp', idEspecifica);
  fetch('./system/bajarFotos.php',{
    method: "POST",
    body: data
  })

.then(resp => resp.json())
.then(resp => {
console.log(resp)
document.getElementById("titulo-modal").innerHTML = resp[0];
document.getElementById("texto-modal").innerHTML = resp[2]
})
}


function buscraImg(tipo = null, busqueda = null,) {
  
    let data = new FormData;
    data.append('id', id);

    if(tipo!=null){
      data.append('filtBusq', tipo)
      if(busqueda != null){
      data.append('where', busqueda);
    }
    }

    fetch('./system/bajarFotos.php',{
      method: "POST",
      body: data
    })
  .then(res => res.json())
  .then(res => {
    document.getElementById("masCat").innerHTML = "";
    if(res[0][(Object.keys(res[0]).length-1)].ID != id){
      
      console.log(res);
      let fragment = document.createDocumentFragment();
      let element = document.createElement("div");
      element.classList.add("row");
      
      for (const ele of res[0]) {
        element.innerHTML += `<div class="col-12 col-sm-6 col-md-4 col-xl-3 pb-3"><img id="${ele.ID}" loading="lazy" class="img rounded " src="http://localhost/imagenes/${ele.Direccion}" alt=""></div>`;
      }

      if (res[1] != null) {
        let eleCat = document.createElement("div")
        for (const cat of res[1]) {
          eleCat.innerHTML += `<input type="checkbox" class="btn-check checkbox cat-check" id="btn-check-${cat.ID}" autocomplete="off">
          <label class="badge rounded-pill col-auto ms-1 mb-1 cat-label" for="btn-check-${cat.ID}">${cat.Direccion}</label>
      `
        }
        document.getElementById("recomendados").style.display = "block";
        document.getElementById("masCat").appendChild(eleCat);
      }

      fragment.appendChild(element);
      let a  = res[0][(Object.keys(res[0]).length-1)].ID;
      console.log(a)
      id = a;
      
      document.getElementById("imagenes").appendChild(fragment);

    }
  }) 

  
  }