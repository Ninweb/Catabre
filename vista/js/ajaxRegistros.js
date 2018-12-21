


    $('#formulario').on("submit",function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        console.log(formulario);
        $.ajax({
            'method':'POST',
            'url': '../controlador/pedidoProducto.php',
            'data': formulario
        }).done(function(info){
            $("#mostrarDatos").html(info);
        });
    });


   

    $('#formularioContenedor').on("submit",function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        console.log(formulario);
        $.ajax({
            'method':'POST',
            'url': '../controlador/contenedor.php',
            'data': formulario
        }).done(function(info){
            $("#mostrarDatos").html(info);
        });
    });

    $('#formularioUsuario').on("submit",function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        console.log(formulario);
        $.ajax({
            'method':'POST',
            'url': '../controlador/usuarioPersona.php',
            'data': formulario
        }).done(function(info){
            $("#mostrarDatos").html(info);
        });
    });