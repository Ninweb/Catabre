$(document).ready(function(){
  var mensaje = false

  $('#registrar_btn').click(function(){
    var num_referencia = $('#num_referencia').val().length; 
    var nombre = $('#nombre').val().length;  

    if(num_referencia<=0){
      // console.log('El campo NAVIERA debe ser completado')
      mensaje = true
      $('.fa-hashtag').css({"background-color":"#FFC107", "color":"black", "border":"none"})
    }
    if(nombre<=0){
      // console.log('El campo Destino debe ser completado')
      mensaje = true
      $('.fa-file-signature').css({"background-color":"#FFC107", "color":"black", "border":"none"})
    }

    $('#num_referencia').keydown(function(){
      $('.fa-hashtag').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
      mensaje=false
    })
    $('#nombre').keydown(function(){
      $('.fa-file-signature').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
      mensaje=false
    })

    mensaje==true ? swal({ 
      title: "¡Atención!", 
      text: "Debe verificar los campos incorrectos. Por favor valide los campos con iconos amarillos.", 
      icon: "warning"
    }).then(()=>{
      mensaje==false
    }) : $('#formularioContenedor').submit(); 
  })
})