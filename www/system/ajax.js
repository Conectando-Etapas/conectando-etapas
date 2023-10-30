let id = 0;
let sql = "1 ";
window.addEventListener("load" , () =>{
  id = 0
  buscraImg()
})

window.addEventListener("scroll", () => {
    let scrolled = document.documentElement.scrollHeight-window.innerHeight;
    let scroll = window.scrollY;
    if(Math.ceil(scroll) >= scrolled){
      
      buscraImg();
      };
   })

   document.getElementById("btn-busqueda").addEventListener("click", ()=>{
    document.getElementById("imagenes").innerHTML = "";
    let busqueda = document.getElementById("inp-busqueda").value;
      sql = `AND %${busqueda}% `;
   })


function buscraImg() {
    let data = new FormData
    data.append('pass', '1234');
    data.append('id', id);
    data.append('sql', sql);
    fetch('http://localhost/www/system/bajarFotos.php',{
      method: "POST",
      body: data
    })
  .then(res => res.json())
  .then(res => {
    for (let i = 0; i < Object.keys(res).length; i++) {
      document.getElementById("imagenes").innerHTML += `<img class="img-fluid" src=http://localhost/www/imagenes/${res[i].Direccion} alt="">`;
    }
    let a  = res[(Object.keys(res).length-1)].ID;
    id= a;
  }) 
  }