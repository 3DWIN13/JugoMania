var c = 1;
function elegir() {
   //console.log("hola mundoi");

 var select = document.getElementById('validationCustom04');
 var jugoselecionado = select.options[select.selectedIndex].text;
 console.log(jugoselecionado);
 var cantidad = document.getElementById('validationCustom05').value;
console.log(cantidad);

var anadirjugos = document.getElementById('listaJugo');

//validar juegos
if (jugoselecionado==='Elige...'||cantidad==='') {

  console.log('ahi no hay na pp')}else{
//anadir juegos

anadirjugos.innerHTML += `<li class="list-group-item d-flex justify-content-between lh-sm">
<div>
  <h6 class="my-0">`+jugoselecionado+`</h6>
  
</div>
<span class="text-muted">`+cantidad+`</span>
</li> `

document.getElementById('span_de_cantidad').innerHTML =c++;

}

}

function eliminar_de_la_lista() {

  
  
}
    // your page initialization code here
    // the DOM will be available here
 