$(document).ready(function(){
  var mensaje = false
  
  $('#registrar_usuario').click(function(){
    //obteniendo valores de los campos
    var nombre = $('#nombre').val().length;
    var apellido = $('#apellido').val().length;
    var empresa = $('#empresa').val().length; 
    var correo = $('#email').val().length; 
    var contrasena = $('#contrasena').val().length; 

    if(nombre<=0){
      // console.log('El campo Usuario debe ser completado')
      $('.fa-user').css({"background-color":"#FFC107", "color":"black", "border":"none"})
      mensaje = true
    }
    if(apellido<=0){
      // console.log('El campo Contenedor debe ser completado')
      $('.fa-user').css({"background-color":"#FFC107", "color":"black", "border":"none"})
      mensaje = true
    }
    if(empresa<=0){
      // console.log('El campo NAVIERA debe ser completado')
      $('.fa-building').css({"background-color":"#FFC107", "color":"black", "border":"none"})
      mensaje = true
    }
    if(correo<=0){
      // console.log('El campo Destino debe ser completado')
      $('.fa-envelope').css({"background-color":"#FFC107", "color":"black", "border":"none"})
      mensaje = true
    }
    if(contrasena<=0){
      // console.log('El campo Fecha de salida debe ser completado')
      $('.fa-key').css({"background-color":"#FFC107", "color":"black", "border":"none"})
      mensaje = true
    }     

    $('#nombre').keydown(function(){
      $('.fa-user').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
      mensaje = false
    })
    $('#apellido').keydown(function(){
      $('.fa-user').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
      mensaje = false
    })
    $('#empresa').keydown(function(){
      $('.fa-building').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
      mensaje = false
    })
    $('#email').keydown(function(){
      $('.fa-envelope').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
      mensaje = false
    })
    $('#contrasena').keydown(function(){
      $('.fa-key').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
      mensaje = false
    })


    mensaje==true ? swal({ 
      title: "¡Atención!", 
      text: "Debe verificar los campos incorrectos. Por favor valide los campos con iconos amarillos.", 
      icon: "warning"
    }).then(()=>{
      mensaje==false
    }) : $('#formularioUsuario').submit();
     
  })

})