function enviarDatosAjax(){
    var idContenedor = document.getElementById('id_contenedor').value;
    var idCliente = document.getElementById('id_persona').value;
    var numeroReferencia = document.getElementById('num_referencia').value;
    var naviera = document.getElementById('naviera').value;
    var destino = document.getElementById('destino').value;
    var fechaSalida = document.getElementById('salida').value;
    var fechaLlegada = document.getElementById('llegada').value;

    var numeroPedidos = document.getElementById('hidden-number-pedido').value;
    
    var url = "../../controlador/pedido.php";

    $.ajax({
        type: "POST",
        url: url,
        data:{
            idContenedor: idContenedor,
            idCliente: idCliente,
            numeroReferencia: numeroReferencia,
            naviera: naviera,
            destino: destino,
            fechaSalida: fechaSalida,
            fechaLlegada: fechaLlegada,
            numeroPedidos:numeroPedidos
        }
    });

}