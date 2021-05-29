/*var c = 0;
var lista = 0;
var otro = 0;

function elegir() {
   //console.log("hola mundoi");

 var select = document.getElementById('validationCustom04');
 var jugoselecionado = select.options[select.selectedIndex].text;
 console.log(jugoselecionado);
 var cantidad = document.getElementById('validationCustom05').value;
console.log(cantidad);

var anadirjugos = document.getElementById('listaJugo');

var existe = !!document.getElementById(jugoselecionado);



//validar jUGOS
if (jugoselecionado==='Elige...'||cantidad==='') {

  console.log('ahi no hay na pp')}
  
  else if (existe==true) {//si existe un ugo igual, solo se sumara la cantidad
let suma = parseInt(cantidad);

/*do {
  let acumula = prompt('anade un juguito: ');
  suma += parseInt(acumula);
} while (confirm('quieres seguir anadendo'));
*/
  /*suma += parseInt(cantidad);

    console.log("la cantidad que se va a sumar: "+cantidad);    
    console.log('la suma de la cantidades: ' + suma);
    


    
  } else {
    
  
//anadir juegos
lista++;
anadirjugos.innerHTML += `<li name="lista" id="lista_`+lista+`" class="list-group-item d-flex justify-content-between lh-sm">
<div>
  <h6 id="`+jugoselecionado+`" class="my-0">`+jugoselecionado+`</h6>
 <button onclick="eliminate(this);" id="lista_`+lista+`"> <small class="text-muted">eliminar</small></button>
 
</div>

<span  class="text-muted">`+cantidad+`</span>
<input type="hidden" id="lacantidad" value="`+cantidad+`" />

</li> `

document.getElementById('span_de_cantidad').innerHTML =c++;

}

}


function eliminate(b) {
  console.log(b.id);
  eleliminado = document.getElementById(b.id);
  lalistaU = document.getElementById('listaJugo');
  lalistaU.removeChild(eleliminado);
  document.getElementById('span_de_cantidad').innerHTML =c-- ;
}
*/



  
  

    // your page initialization code here
    // the DOM will be available here

const Ulista = document.getElementById('listaJugo');
const templetaLista = document.getElementById('template-Lista').content
const fragment = document.createDocumentFragment()
let carrito={}

const formulario_carrito = document.getElementById('FormularioJugo');
formulario_carrito.addEventListener('click', e=>{
  addcarrito(e) });

 const addcarrito = e =>{
  
   if (e.target.classList.contains('btn-outline-light')) {
    const select =  document.getElementById('validationCustom04');
    const jugoselecionado =select.options[select.selectedIndex].text; 
    const preciojugoYid = select.options[select.selectedIndex].value;
    const split =  preciojugoYid.split('/')
    const precio = split[0];
    const id = split[1];
    const cantidad = document.getElementById('validationCustom05').value;
   // console.log(jugoselecionado+" : "+precio+ "id: "+id +" ==> "+cantidad)

   if (jugoselecionado==='Elige...'||cantidad==='') {
     console.log('salta un error de tienes que poner cantidad y elegir el jugo')
   }else{
    const compra = {
      id:id,
      Jugo:jugoselecionado,
      cantidad: parseInt(cantidad),
      precio:precio,
      CantidadElementos:1
    }

    if (carrito.hasOwnProperty(compra.id)) {
      compra.cantidad = carrito[compra.id].cantidad + parseInt(cantidad) 
    }

    carrito[compra.id] = { ...compra }

    PintarElementosCarritos();
   }
    //console.log(carrito);
    }
  }
    //e.stopPropagation()
    //console.log(e.target.classList.contains('btn-outline-light'));
  
    const PintarElementosCarritos =() =>{
      console.log(carrito)
      Ulista.innerHTML=' ';
      Object.values(carrito).forEach(items =>{
        templetaLista.querySelector('h6').textContent = items.Jugo
        templetaLista.querySelector('span').textContent = items.cantidad

        const clone = templetaLista.cloneNode(true);
        fragment.appendChild(clone)
      });
      Ulista.appendChild(fragment);
    }
  
 
/*document.addEventListener('DOMContentLoaded', e=>{
 console.log("cargo el documento")
 addcarrito();
})*/

