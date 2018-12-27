$(document).ready(function(){
  
  $('.registrar-usuario').click(function(){
    //obteniendo valores de los campos
    var nombre = $('#nombre').val().length;
    var apellido = $('#apellido').val().length;
    var empresa = $('#empresa').val().length; 
    var correo = $('#email').val().length; 
    var contrasena = $('#contrasena').val().length; 

    if(nombre<=0){
      console.log('El campo Usuario debe ser completado')
      $('.fa-user').css({"background-color":"#FFC107", "color":"black", "border":"none"})
    }
    if(apellido<=0){
      console.log('El campo Contenedor debe ser completado')
      $('.fa-user').css({"background-color":"#FFC107", "color":"black", "border":"none"})
    }
    if(empresa<=0){
      console.log('El campo NAVIERA debe ser completado')
      $('.fa-building').css({"background-color":"#FFC107", "color":"black", "border":"none"})
    }
    if(correo<=0){
      console.log('El campo Destino debe ser completado')
      $('.fa-envelope').css({"background-color":"#FFC107", "color":"black", "border":"none"})
    }
    if(contrasena<=0){
      console.log('El campo Fecha de salida debe ser completado')
      $('.fa-key').css({"background-color":"#FFC107", "color":"black", "border":"none"})
    }     

    $('#nombre').keydown(function(){
      $('.fa-user').css({"background-color":"#f96332", "color":"white", "border":"none"})
    })
    $('#apellido').keydown(function(){
      $('.fa-user').css({"background-color":"#f96332", "color":"white", "border":"none"})
    })
    $('#empresa').keydown(function(){
      $('.fa-building').css({"background-color":"#f96332", "color":"white", "border":"none"})
    })
    $('#email').keydown(function(){
      $('.fa-envelope').css({"background-color":"#f96332", "color":"white", "border":"none"})
    })
    $('#contrasena').keydown(function(){
      $('.fa-key').css({"background-color":"#f96332", "color":"white", "border":"none"})
    })


    // $('#formularioUsuario').on("submit",function(e){
    //   e.preventDefault();
    //   var email = document.getElementById('email').value
    //   $.ajax({
    //     'method':'POST',
    //     'url': '../../controlador/usuarioPersona.php',
    //     'data': email
    //   }).done(function(info){
    //     $("#mostrarDatos").html(info);
    //   });
    // })
     
  })

})