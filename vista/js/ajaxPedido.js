$(document).on("ready",function(){
    enviarDatosAjax();
});




function enviarDatosAjax(){
    $('#form').on("submit",function(e){
        e.preventDefault();
        var form = $(this).serialize();
        console.log(form);
        $.ajax({
            'method': 'POST',
            'url': '../controlador/pedido.php',
            'data': form
        }).done(function(info){
            //vamos a mostrar la respuesta del servidor
            $('#mostrarDatos').html(info);
        });
    });
    //var idContenedor = document.getElementById('id_contenedor').value;
//var idCliente = document.getElementById('id_persona').value;
    /*var numeroReferencia = document.getElementById('num_referencia').value;
    var naviera = document.getElementById('naviera').value;
    var destino = document.getElementById('destino').value;
    var fechaSalida = document.getElementById('salida').value;
    var fechaLlegada = document.getElementById('llegada').value;

    var numeroPedidos = document.getElementById('hidden-number-pedido').value;
    
    var url = "../../controlador/pedido.php";
    */

}