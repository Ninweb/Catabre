//INICIO: INICIAR SESION//
    $('#formularioSesion').on("submit",function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        console.log(formulario);
        $.ajax({
            'method':'POST',
            'url': 'controlador/ingresar.php',
            'data': formulario
        }).done(function(info){
            $("#mostrarDatos").html(info);
        });
    });
//FIN: INICIAR SESION//

//INICIO : CORREO DE CONTACTO//
    $('#formularioContacto').on("submit",function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        console.log(formulario);
        $.ajax({
            'method':'POST',
            'url': '../controlador/contacto.php',
            'data': formulario
        }).done(function(info){
            $("#mostrarDatos").html(info);
        });
    });

//FIN : CORREO DE CONTACTO//

//INICIO: CREAR PEDIDOS Y PRODUCTOS//
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
//FIN: CREAR PEDIDOS Y PRODUCTOS//

//INICIO: CRUD CONTENEDOR//

        //INICIO: CREAR CONTENEDOR//
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
        //FIN: CREAR CONTENEDOR//



        //INICIO: EDITAR CONTENEDOR//

        $('#formularioEditarContenedor').on("submit",function(e){
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

        //FIN: EDITAR CONTENEDOR//

        //INICIO : ELIMINAR CONTENEDOR//

        $('#formularioEliminarContenedor').on("submit",function(e){
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
        //FIN: ELIMINAR CONTENEDOR//

//FIN: CRUD DE CONTENEDOR//


//INICIO: CRUD DE USUARIO//
    //INICIO: CREAR USUARIOS//
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
    //FIN: CREAR USUARIOS//

    //INICIO: EDITAR USUARIO//
    $('#formularioEditarUsuario').on("submit",function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        console.log(formulario);
        var variable = document.getElementById('pass').value;
        alert(`hola ${variable}`)
        $.ajax({
            'method':'POST',
            'url': '../controlador/usuarioPersona.php',
            'data': formulario
        }).done(function(info){
            $("#mostrarDatos").html(info);
        });
    });
    //FIN: EDITAR USUARIO//

    //INICIO: ELIMINAR USUARIO//

    $('#formularioEliminarUsuario').on("submit",function(e){
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
    //FIN: ELIMINAR USUARIO//
//FIN: CRUD DE USUARIO//