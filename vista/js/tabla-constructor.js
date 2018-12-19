var cantidad_pedido = 1;

numero_pedido = document.getElementById('numero_pedido').innerHTML = cantidad_pedido;


function nuevo_pedido(){
	var table = document.getElementById('tabla-pedido')
	var clon = table.cloneNode(true)
	cantidad_pedido = cantidad_pedido + 1
	document.getElementById('card').appendChild(clon).lastChild
	numero_pedido = document.getElementById('numero_pedido').innerHTML = cantidad_pedido;
}