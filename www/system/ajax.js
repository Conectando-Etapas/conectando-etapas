let id = 0;
let flagFiltros = false
let where= "";
window.addEventListener("load" ,() =>{
  id = 0;
  buscraImg();
  console.log(where.length)
})

window.addEventListener("scroll", () => {
    let scrolled = document.documentElement.scrollHeight-window.innerHeight;
    let scroll = window.scrollY;
    if(Math.ceil(scroll) >= scrolled){
      
      buscraImg()
    };})

    document.getElementById("card").addEventListener("click", (event)=>{
      if(event.target.classList.contains("checkbox")){
        let id = event.target.id;
        id = id.substring(id.lastIndexOf("-")+1)
        if(where.includes(id)){
          where = where.replace(` OR tiene_categoria.id_categoria = ${id}`, " ");
          console.log(where)
        }else{
        where +=` OR tiene_categoria.id_categoria = ${id}`
        console.log(where.length)
        }
      }
    })

    document.getElementById("filtro").addEventListener("click", ()=>{
      document.getElementById("imagenes").innerHTML = " ";
      id = 0
      buscraImg();

    })

    document.getElementById("tres").addEventListener("click", () =>{
    switch (flagFiltros) {
    case false:
      document.getElementById("card").style.display = "block"
      flagFiltros=true
      break;
    case true:
      document.getElementById("card").style.display = "none"
      flagFiltros=false;
      break;
  }
    })




function buscraImg() {
  
    let data = new FormData
    data.append('pass', '1234');
    data.append('id', id);
    if(where.length > 1 ){
      where = where.substring(where.indexOf("R")+1)
      console.log(where)
      data.append('tipo', 2);
      data.append('where', where);
      console.log(id)
    }else{
    data.append('tipo', 1);
    }

    fetch('http://localhost/www/system/bajarFotos.php',{
      method: "POST",
      body: data
    })
  .then(res => res.json())
  .then(res => {
    if(res[(Object.keys(res).length-1)].ID != id){
      
      console.log(res)
      let fragment = document.createDocumentFragment();
      let element = document.createElement("div")
      element.classList.add("row")
      
      for (const ele of res) {
        element.innerHTML += `<div class="col-12 col-sm-6 col-md-4 col-xl-3 pb-3"><img loading="lazy" class="img" src="http://localhost/www/imagenes/${ele.Direccion}" alt=""></div>`;
      }
      fragment.appendChild(element)
      let a  = res[(Object.keys(res).length-1)].ID;
      id = a;
      console.log(res[(Object.keys(res).length-1)].ID)
      
      document.getElementById("imagenes").appendChild(fragment);
    }
  }) 

  
  }
