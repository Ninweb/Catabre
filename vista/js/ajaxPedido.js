


    $('#formulario').on("submit",function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        console.log(formulario);
        $.ajax({
            'method':'POST',
            'url': '../controlador/pedido.php',
            'data': formulario
        }).done(function(info){
            $("#mostrarDatos").html(info);
        });
    });
