var cantidad_pedido = 0;
var aux = 0;
var pedidos_disponibles = 3;

const top_pedido = 3;

$('#tabla-pedido').hide()
document.getElementById('num-contador').innerHTML = pedidos_disponibles;
document.getElementById('numero_pedido').innerHTML = cantidad_pedido;

//NUEVO PEDIDO
function nuevo_pedido(){ 
  $('#tabla-pedido').show()  

  if(cantidad_pedido+1 == top_pedido-1){
    document.getElementById('num-contador').innerHTML = pedidos_disponibles-1;
    document.getElementById('numero_pedido').innerHTML = cantidad_pedido;
  }
  

	if(cantidad_pedido < top_pedido){
    
    pedidos_disponibles--
    cantidad_pedido++

    document.getElementById('num-contador').innerHTML = pedidos_disponibles;
    document.getElementById('numero_pedido').innerHTML = cantidad_pedido;

    $('#vacio-mensaje').hide();
    
    //CONSTRUCTOR DE LA TABLA    
    var table = document.getElementById('tabla-pedido')
    var clon = table.cloneNode(true)
    document.getElementById('nuevos-pedidos').append(clon)   
    $('#tabla-pedido').hide()
    

    //IDs Y NAMEs INDEPENDIENTES
    if(cantidad_pedido==1){
      $('#presentacion').attr({"id":"presentacion"+cantidad_pedido, "name":"presentacion"+cantidad_pedido})
      $('#producto').attr({"id":"producto"+cantidad_pedido,"name":"producto"+cantidad_pedido})
      $('#especie').attr({"id":"especie"+cantidad_pedido,"name":"especie"+cantidad_pedido})
      $('#color').attr({"id":"color"+cantidad_pedido,"name":"color"+cantidad_pedido})
      $('#peso').attr({"id":"peso"+cantidad_pedido,"name":"peso"+cantidad_pedido})
      $('#size').attr({"id":"size"+cantidad_pedido,"name":"size"+cantidad_pedido})
      $('#master').attr({"id":"master"+cantidad_pedido,"name":"master"+cantidad_pedido})
      $('#total').attr({"id":"total"+cantidad_pedido,"name":"total"+cantidad_pedido})
      $('#eliminar').attr({"id":"eliminar"+cantidad_pedido})
    }else{
      $('#presentacion'+aux).attr({"id":"presentacion"+cantidad_pedido,"name":"presentacion"+cantidad_pedido})
      $('#producto'+aux).attr({"id":"producto"+cantidad_pedido,"name":"producto"+cantidad_pedido})
      $('#especie'+aux).attr({"id":"especie"+cantidad_pedido,"name":"especie"+cantidad_pedido})
      $('#color'+aux).attr({"id":"color"+cantidad_pedido,"name":"color"+cantidad_pedido})
      $('#peso'+aux).attr({"id":"peso"+cantidad_pedido,"name":"peso"+cantidad_pedido})
      $('#size'+aux).attr({"id":"size"+cantidad_pedido,"name":"size"+cantidad_pedido})
      $('#master'+aux).attr({"id":"master"+cantidad_pedido,"name":"master"+cantidad_pedido})
      $('#total'+aux).attr({"id":"total"+cantidad_pedido,"name":"total"+cantidad_pedido})
      $('#eliminar'+aux).attr({"id":"eliminar"+cantidad_pedido})
    }    
    
    aux = cantidad_pedido;

    //NUMERO DE PEDIDO Y PEDIDOS DISPONIBLES
    document.getElementById('numero_pedido').innerHTML = cantidad_pedido;
    document.getElementById('num-contador').innerHTML = pedidos_disponibles;
    
    
    document.getElementById('hidden-number-pedido').value = cantidad_pedido;
  }
  
  
}


//ELIMINAR PEDIDO
$(document).on('click', '.borrar', function (event) {
  event.preventDefault();
  $(this).closest('#tabla-pedido').remove();
  pedidos_disponibles++
  cantidad_pedido--

  document.getElementById('num-contador').innerHTML = pedidos_disponibles;
  document.getElementById('numero_pedido').innerHTML = cantidad_pedido;

  if(cantidad_pedido == 0){
    $('#vacio-mensaje').show();
  }
});