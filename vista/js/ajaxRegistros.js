


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


   

    $('#formularioContenedor').on("submit",function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        console.log(formulario);
        $.ajax({
            'method':'POST',
            'url': '../controlador/registro-contenedor.php',
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
            'url': '../modelo/registro-usuario.php',
            'data': formulario
        }).done(function(info){
            $("#mostrarDatos").html(info);
        });
    });