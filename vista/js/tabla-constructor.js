var cantidad_pedido = 1;
var aux = 0;

const top_pedido = 3;
var number_pedido = 1;

// $('#presentacion').attr("id", "presentacion"+cantidad_pedido)
// $('#producto').attr("id", "producto"+cantidad_pedido)
// $('#especie').attr("id", "especie"+cantidad_pedido)
// $('#color').attr("id", "color"+cantidad_pedido)
// $('#peso').attr("id", "peso"+cantidad_pedido)
// $('#size').attr("id", "size"+cantidad_pedido)
// $('#master').attr("id", "master"+cantidad_pedido)
// $('#total').attr("id", "total"+cantidad_pedido)

// $('#presentacion'+aux).attr("name", "presentacion"+cantidad_pedido)
// $('#producto'+aux).attr("name", "producto"+cantidad_pedido)
// $('#especie'+aux).attr("name", "especie"+cantidad_pedido)
// $('#color'+aux).attr("name", "color"+cantidad_pedido)
// $('#peso'+aux).attr("name", "peso"+cantidad_pedido)
// $('#size'+aux).attr("name", "size"+cantidad_pedido)
// $('#master'+aux).attr("name", "master"+cantidad_pedido)
// $('#total'+aux).attr("name", "total"+cantidad_pedido)

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

document.getElementById('numero_pedido').innerHTML = cantidad_pedido;


function nuevo_pedido(){
  aux = cantidad_pedido;

	if(number_pedido <= top_pedido){

    //CONSTRUCTOR DE LA TABLA
    cantidad_pedido++
    var table = document.getElementById('tabla-pedido')
    var clon = table.cloneNode(true)
    document.getElementById('tabla-pedido').append(clon)

    //NUMERO DE PEDIDO Y RESET DE CAMPOS
    document.getElementById('numero_pedido').innerHTML = cantidad_pedido;
    // $('#numero_pedido').css("color","red")
    // document.getElementById('presentacion'+cantidad_pedido).innerHTML = ""


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


    //IDs INDEPENDIENTES
    /*$('#presentacion'+aux).attr("id", "presentacion"+cantidad_pedido)
    $('#producto'+aux).attr("id", "producto"+cantidad_pedido)
    $('#especie'+aux).attr("id", "especie"+cantidad_pedido)
    $('#color'+aux).attr("id", "color"+cantidad_pedido)
    $('#peso'+aux).attr("id", "peso"+cantidad_pedido)
    $('#size'+aux).attr("id", "size"+cantidad_pedido)
    $('#master'+aux).attr("id", "master"+cantidad_pedido)
    $('#total'+aux).attr("id", "total"+cantidad_pedido)

    //NAMEs INDEPENDIENTES
    $('#presentacion'+aux).attr("name", "presentacion"+cantidad_pedido)
    $('#producto'+aux).attr("name", "producto"+cantidad_pedido)
    $('#especie'+aux).attr("name", "especie"+cantidad_pedido)
    $('#color'+aux).attr("name", "color"+cantidad_pedido)
    $('#peso'+aux).attr("name", "peso"+cantidad_pedido)
    $('#size'+aux).attr("name", "size"+cantidad_pedido)
    $('#master'+aux).attr("name", "master"+cantidad_pedido)
    $('#total'+aux).attr("name", "total"+cantidad_pedido)*/

    number_pedido++
  }else{
    alert('Ha llegado al límite de pedidos en este contenedor.')
  }

  document.getElementById('hidden-number-pedido').value = cantidad_pedido;
  // alert(hideNumber)
  
}

function eliminar_pedido(){

}