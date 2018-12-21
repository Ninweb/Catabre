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


	if(number_pedido <= top_pedido){
    aux = cantidad_pedido;

    //IDs Y NAMEs INDEPENDIENTES
    if(cantidad_pedido==1){
      $('#presentacion').attr({
        "id":"presentacion"+cantidad_pedido,
        "name":"presentacion"+cantidad_pedido
      })
      $('#producto').attr({
        "id":"producto"+cantidad_pedido,
        "name":"producto"+cantidad_pedido
      })
      $('#especie').attr({
        "id":"especie"+cantidad_pedido,
        "name":"especie"+cantidad_pedido
      })
      $('#color').attr({
        "id":"color"+cantidad_pedido,
        "name":"color"+cantidad_pedido
      })
      $('#peso').attr({
        "id":"peso"+cantidad_pedido,
        "name":"peso"+cantidad_pedido
      })
      $('#size').attr({
        "id":"size"+cantidad_pedido,
        "name":"size"+cantidad_pedido
      })
      $('#master').attr({
        "id":"master"+cantidad_pedido,
        "name":"master"+cantidad_pedido
      })
      $('#total').attr({
        "id":"total"+cantidad_pedido,
        "name":"total"+cantidad_pedido
      })
    }


    //CONSTRUCTOR DE LA TABLA
    pedidos_disponibles--
    cantidad_pedido++
    $('#vacio-mensaje').hide();
    var table = document.getElementById('tabla-pedido')
    var clon = table.cloneNode(true)
    document.getElementById('nuevos-pedidos').append(clon)

    // var new_tabla = document.getElementById('nuevos-pedidos');
    // if(aux==1){
    //   var busca_tabla = $(new_tabla).find('#tabla-pedido');
    //   console.log('hola1')
    //   $('#nuevos-pedidos #tabla-pedido').attr("id","tabla-pedido"+cantidad_pedido);
    // }else{
    //   var busca_tabla = $(new_tabla).find('#tabla-pedido'+aux);
    //   console.log('hola2')
    //   if(busca_tabla){
    //     $('#tabla-pedido'+aux).attr("id","tabla-pedido"+cantidad_pedido);
    //     console.log('hola4')
    //   }
    // }
    

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

$(document).on('click', '.borrar', function (event) {
  event.preventDefault();
  $(this).closest('tr').remove();
});