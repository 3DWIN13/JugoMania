
    // your page initialization code here
    // the DOM will be available here
const Ulista = document.getElementById('listaJugo');
const templetaLista = document.getElementById('template-Lista').content
const fragment = document.createDocumentFragment()
const elnumerito = document.getElementById('span_de_cantidad')
const eltotal = document.getElementById('total')
let carrito={}
const formulario_carrito = document.getElementById('FormularioJugo');
const seleccionar = document.getElementById('seleccionar')

//usamos el evento de escucha y le pasomos el evento a los metodos
formulario_carrito.addEventListener('click', e=>{addcarrito(e) });

Ulista.addEventListener('click', e=>{EliminarElemento(e)} );

seleccionar.addEventListener('click', e=>{SeleccionProducto(e)});

const SeleccionProducto = e => {

  if (e.target.classList.contains('btn-outline-primary')) {
    //const nombre = seleccionar.querySelector('button').dataset.id;
  const select = document.getElementById('validationCustom04')  
  select.options[select.selectedIndex].text = e.target.dataset.id
  
   console.log(e.target.dataset.id);
  }
  
  
  
}

//funcion de anadir el carrito
 const addcarrito = e =>{
  
   //decimos = si el evento escucho algo del elemnto que tiene es clase entra en el if
   // y optenemos todo del miniformulario del carrito la cantida, el prooducto y su id
   if (e.target.classList.contains('btn-outline-light')) {
    const select =  document.getElementById('validationCustom04');
    const jugoselecionado =select.options[select.selectedIndex].text; 
    const preciojugoYid = select.options[select.selectedIndex].value;
    const split =  preciojugoYid.split('/')
    const precio = split[0];
    const id = split[1];
    const cantidad = document.getElementById('validationCustom05').value;
  

    //validamos para que no puede elegir una cantidad vacia
    //si no armamos un array de objetos
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

  
    //aqui validamos si existe uno igual en el carrito, solo aumentamos la cantidad
    if (carrito.hasOwnProperty(compra.id)) {
      compra.cantidad = carrito[compra.id].cantidad + parseInt(cantidad) 
    }

    //hacemos una copia del array de arriba y lo metemos en este array inisializados con su id
    //hacemos un objetos de objetos, tenemos el objeto principal que almacenara los otos objetos
    carrito[compra.id] = { ...compra }
    
    //pintamos el carrioto, mientra se valla comprando
    PintarElementosCarritos();
   }
   
    }
  }
   // construimois la funcion para pintar lo que se compra
    const PintarElementosCarritos =() =>{
      console.log(carrito)
      Ulista.innerHTML=' ';
      Object.values(carrito).forEach(items =>{
        templetaLista.querySelector('h6').textContent = items.Jugo
        templetaLista.querySelector('span').textContent = items.cantidad
        templetaLista.querySelector('button').dataset.id = items.id

        //usamos uso de un template y fragment, muy practico todo
        const clone = templetaLista.cloneNode(true);
        fragment.appendChild(clone)
      });
      Ulista.appendChild(fragment);

      //mientras se valla anadendo los objeto en el array esto lo cuenta y lo pinta en el html
      const nElementos = Object.values(carrito).length
      elnumerito.innerText=nElementos
      
      const totalPrecio = Object.values(carrito).reduce((acc, {cantidad, precio}) => acc +cantidad*precio, 0)
      //console.log(totalPrecio)
      eltotal.innerText="$"+totalPrecio

    }


//construimos la funcion eliminar un elemnto
//cogemos el click que escuchamos, para que entre en el if
//con el mismo eventos accedemos a su html y obtenemos lo que queremos en este caso su dataset
// que contien su id y eliminamos ese objeto que esta dentro del array de objeros
const EliminarElemento = e =>{
 
  if (e.target.classList.contains('btn-close')) {
    const idbutton = e.target.dataset.id
    console.log(idbutton);
    if (carrito.hasOwnProperty(idbutton)) {
      console.log("se va a eliminar")

      delete carrito[idbutton]

      //pintamos el carriot para uqe se actualise la lista
      PintarElementosCarritos();
    }
   
   

  }
}


