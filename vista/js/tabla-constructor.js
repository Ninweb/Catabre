var cantidad_pedido = 1;
var aux = 0;
var pedidos_disponibles = 40;

const top_pedido = 3;
var number_pedido = 1;

$('#tabla-pedido').hide()

document.getElementById('numero_pedido').innerHTML = cantidad_pedido;
document.getElementById('num-contador').innerHTML = pedidos_disponibles;


function nuevo_pedido(){ 
  $('#tabla-pedido').show()

  // if(cantidad_pedido == 1){
  //   $('#presentacion').attr({
  //     "id":"presentacion"+cantidad_pedido,
  //     "name":"presentacion"+cantidad_pedido
  //   })
  //   $('#producto').attr({
  //     "id":"producto"+cantidad_pedido,
  //     "name":"producto"+cantidad_pedido
  //   })
  //   $('#especie').attr({
  //     "id":"especie"+cantidad_pedido,
  //     "name":"especie"+cantidad_pedido
  //   })
  //   $('#color').attr({
  //     "id":"color"+cantidad_pedido,
  //     "name":"color"+cantidad_pedido
  //   })
  //   $('#peso').attr({
  //     "id":"peso"+cantidad_pedido,
  //     "name":"peso"+cantidad_pedido
  //   })
  //   $('#size').attr({
  //     "id":"size"+cantidad_pedido,
  //     "name":"size"+cantidad_pedido
  //   })
  //   $('#master').attr({
  //     "id":"master"+cantidad_pedido,
  //     "name":"master"+cantidad_pedido
  //   })
  //   $('#total').attr({
  //     "id":"total"+cantidad_pedido,
  //     "name":"total"+cantidad_pedido
  //   })
  // }
  


	if(number_pedido <= top_pedido){
    aux = cantidad_pedido;
    
    //CONSTRUCTOR DE LA TABLA
    pedidos_disponibles--
    cantidad_pedido++
    $('#vacio-mensaje').hide();
    var table = document.getElementById('tabla-pedido')
    var clon = table.cloneNode(true)
    document.getElementById('nuevos-pedidos').append(clon)
    $('#tabla-pedido').hide()

    //NUMERO DE PEDIDO Y PEDIDOS DISPONIBLES
    document.getElementById('numero_pedido').innerHTML = cantidad_pedido;
    document.getElementById('num-contador').innerHTML = pedidos_disponibles;

    //IDs Y NAMEs INDEPENDIENTES
    $('#presentacion'+aux).attr({
      "id":"presentacion"+cantidad_pedido,
      "name":"presentacion"+cantidad_pedido
    })
    $('#producto'+aux).attr({
      "id":"producto"+cantidad_pedido,
      "name":"producto"+cantidad_pedido
    })
    $('#especie'+aux).attr({
      "id":"especie"+cantidad_pedido,
      "name":"especie"+cantidad_pedido
    })
    $('#color'+aux).attr({
      "id":"color"+cantidad_pedido,
      "name":"color"+cantidad_pedido
    })
    $('#peso'+aux).attr({
      "id":"peso"+cantidad_pedido,
      "name":"peso"+cantidad_pedido
    })
    $('#size'+aux).attr({
      "id":"size"+cantidad_pedido,
      "name":"size"+cantidad_pedido
    })
    $('#master'+aux).attr({
      "id":"master"+cantidad_pedido,
      "name":"master"+cantidad_pedido
    })
    $('#total'+aux).attr({
      "id":"total"+cantidad_pedido,
      "name":"total"+cantidad_pedido
    })

    number_pedido++
  }else{
    alert('Ha llegado al límite de pedidos en este contenedor.')
  }

  document.getElementById('hidden-number-pedido').value = cantidad_pedido;
  
}

function eliminar_pedido(){
  event.preventDefault();
  $(this).remove()
}