$(document).ready(function(){
   var pedido = false
   var contenedor = document.getElementById('contenedor').value;
   if(contenedor == "No hay contenedor disponible"){
    swal({ 
      title: "¡Atención!", 
      text: "En estos momentos no tenemos contenedores disponibles.", 
      icon: "warning"
    })
  }

   //verificando si hay pedido generado
   $('#pedido').click(function(){
      pedido = true
   })

   
   $('#generar_pedido').click(function(){
      //obteniendo valores de los campos
      var usuario = document.getElementById('users').value;
      var contenedor = document.getElementById('contenedor').value;
      var naviera = $('#naviera').val().length; 
      var destino = $('#destino').val().length; 
      var fecha_salida = $('#salida').val().length; 
      var fecha_llegada = $('#llegada').val().length; 

      //VERIFICAR SI HAY CONTENEDOR DISPONIBLE
      if(contenedor == "No hay contenedor disponible"){
        swal({ 
          title: "¡Atención!", 
          text: "En estos momentos no tenemos contenedores disponibles.", 
          icon: "warning"
        })
      }
      


      //QUE NO HAYA NINGUN CAMPO VACIO
      var numero_pedido = document.getElementById('numero_pedido').value;
      var num_pedido = parseInt(numero_pedido)
      if (isNaN(num_pedido)) num_pedido = 0;

      if(!pedido || num_pedido==0){
        swal({ 
          title: "¡Atención!", 
          text: 'Primero debe realizar un pedido haciendo click en el boton "Nuevo pedido"', 
          icon: "warning"
        })
      }

      for(var i=1; i<=num_pedido; i++){
        var presentacion = $('#presentacion'[i]).val().length; 
        var producto = $('#producto'[i]).val().length; 
        var especie = $('#especie'[i]).val().length; 
        var color = $('#color'[i]).val().length; 
        var peso = $('#peso'[i]).val().length; 
        var size = $('#size'[i]).val().length; 
        var master = $('#master'[i]).val().length; 
        var total = $('#total'[i]).val().length; 

        //campos constantes
        if(usuario<=0 || usuario=="Seleccione usuario"){
          console.log('El campo Usuario debe ser completado')
          $('.fa-user').css({"background-color":"#FFC107", "color":"black", "border":"none"})
        }
        if(contenedor<=0 || contenedor=="Seleccione contenedor"){
          console.log('El campo Contenedor debe ser completado')
          $('.fa-box-open').css({"background-color":"#FFC107", "color":"black", "border":"none"})
        }
        if(naviera<=0){
          console.log('El campo NAVIERA debe ser completado')
          $('.fa-ship').css({"background-color":"#FFC107", "color":"black", "border":"none"})
        }
        if(destino<=0){
          console.log('El campo Destino debe ser completado')
          $('.fa-globe-asia').css({"background-color":"#FFC107", "color":"black", "border":"none"})
        }
        if(fecha_salida<=0){
          console.log('El campo Fecha de salida debe ser completado')
          $('.fa-calendar-alt').css({"background-color":"#FFC107", "color":"black", "border":"none"})
        }
        if(fecha_llegada<=0){
          console.log('El campo Fecha de llegada debe ser completado')
          $('.fa-calendar-alt').css({"background-color":"#FFC107", "color":"black", "border":"none"})
        }

        //campos variables
        if(presentacion<=0){
          console.log('El campo Presentacion debe ser completado')
          $('.fa-gift').css({"background-color":"#FFC107", "color":"black", "border":"none"})
        }
        if(producto<=0){
          console.log('El campo Producto debe ser completado')
          $('.fa-shopping-cart').css({"background-color":"#FFC107", "color":"black", "border":"none"})
        }
        if(especie<=0){
          console.log('El campo Especie debe ser completado')
          $('.fa-water').css({"background-color":"#FFC107", "color":"black", "border":"none"})
        }
        if(color<=0){
          console.log('El campo Color debe ser completado')
          $('.fa-palette').css({"background-color":"#FFC107", "color":"black", "border":"none"})
        }
        if(peso<=0){
          console.log('El campo Peso debe ser completado')
          $('.fa-weight').css({"background-color":"#FFC107", "color":"black", "border":"none"})
        }
        if(size<=0){
          console.log('El campo Tamaño debe ser completado')
          $('.fa-arrows-alt-h').css({"background-color":"#FFC107", "color":"black", "border":"none"})
        }
        if(master<=0){
          console.log('El campo Master debe ser completado')
          $('.fa-calendar-alt').css({"background-color":"#FFC107", "color":"black", "border":"none"})
        }
        if(total<=0){
          console.log('El campo Total debe ser completado')
          $('.fa-calendar-alt').css({"background-color":"#FFC107", "color":"black", "border":"none"})
        }
      }
      

      
      //SI EL CORREO NO SE REPITE
      $('.registrar-usuario').click(function(){
        var email = document.getElementById('email').value
        $.ajax({
          type:'post',
          url: '../../modelo/comprobarDatos.php',
          data: email,
          error: swal({
            title: "¡Error!", 
            text: 'Este correo ya se encuentra en la base de datos. Por favor, verifique e ingrese un correo electrónico valido.',
            icon: "error"
          })
        })
      })
      

   
      //SI EL NUMERO DE REFERENCIA NO SE REPITE
      $('.registrar-contenedor').click(function(){
         
      })
      

   
      //SI LAS CLAVES SON IGUALES
      
   })
})