$(document).ready(function (){
   var pedido = false
   var entrar = true
   var cant_pedido = 0;
   const top_pedido = 3;
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
      $('#generar_pedido').removeAttr("disabled")  
      if(entrar){         
         if(cant_pedido < top_pedido-2){
            pedido = true
            cant_pedido++
            // console.log(`pedido if ${cant_pedido}`)
         }else{  
            cant_pedido++
            // console.log(`pedido else1 ${cant_pedido}`)
            swal({ 
               title: "¡Atención!", 
               text: "Queda solamente un pedido disponible en este contenedor.", 
               icon: "warning"
            })
            entrar = false
         }
      }else{
         cant_pedido++
         // console.log(`pedido else2 ${cant_pedido}`)
         swal({ 
            title: "¡Atención!", 
            text: "Ha llegado al límite de pedidos en este contenedor.", 
            icon: "warning"
         })
         $('#pedido').attr("disabled","true")
         entrar = false
      }
      // alert(cant_pedido)
   })      

   //eliminar tabla
   $(document).on('click', '.borrar', function (event) {
      // console.log(`cantidad pedido al entrar: ${cant_pedido}`)
      $('#pedido').removeAttr("disabled")
		event.preventDefault();	
      $(this).closest('#tabla-pedido').remove();
      cant_pedido--      
      // console.log(`eliminar pedido ${cant_pedido}`)
      entrar = true

      if(cant_pedido==0){
         $('#generar_pedido').attr("disabled","true")
      }
   });


   var mensaje = false
   
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


      if(!pedido || cant_pedido==0){
         swal({ 
            title: "¡Atención!", 
            text: 'Primero debe realizar un pedido haciendo click en el boton "Nuevo pedido"', 
            icon: "warning"
         })
      }
      

      for(var i=0; i<cant_pedido; i++){
			if(i==0){
				var presentacion = $('#presentacion').val().length; 
				var producto = $('#producto').val().length; 
				var especie = $('#especie').val().length; 
				var color = $('#color').val().length; 
				var peso = $('#peso').val().length; 
				var size = $('#size').val().length; 
				var master = $('#master').val().length; 
				var total = $('#total').val().length;
			}else{
				var presentacion = $('#presentacion'[i]).val().length; 
				var producto = $('#producto'[i]).val().length; 
            var especie = $('#especie'[i]).val().length; 
				var color = $('#color'[i]).val().length; 
				var peso = $('#peso'[i]).val().length; 
				var size = $('#size'[i]).val().length; 
				var master = $('#master'[i]).val().length; 
				var total = $('#total'[i]).val().length; 
			}

         //campos constantes
         if(usuario<=0 || usuario=="Seleccione usuario"){
            // console.log('El campo Usuario debe ser completado')
            mensaje = true
            $('.fa-user').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(contenedor<=0 || contenedor=="No hay contenedor disponible"){
            // console.log('El campo Contenedor debe ser completado')
            mensaje = true
            $('.fa-box-open').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(naviera<=0){
            // console.log('El campo NAVIERA debe ser completado')
            mensaje = true
            $('.ship').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(destino<=0){
            // console.log('El campo Destino debe ser completado')
            mensaje = true
            $('.fa-globe-asia').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(fecha_salida<=0){
            // console.log('El campo Fecha de salida debe ser completado')
            mensaje = true
            $('.fa-calendar-alt').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(fecha_llegada<=0){
            // console.log('El campo Fecha de llegada debe ser completado')
            mensaje = true
            $('.fa-calendar-alt').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }

         //campos variables
         if(presentacion<=0){
            // console.log('El campo Presentacion debe ser completado')
            mensaje = true
            $('.fa-gift').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(producto<=0){
            // console.log('El campo Producto debe ser completado')
            mensaje = true
            $('.fa-shopping-cart').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(especie<=0){
            // console.log('El campo Especie debe ser completado')
            mensaje = true
            $('.fa-water').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(color<=0){
            // console.log('El campo Color debe ser completado')
            mensaje = true
            $('.fa-palette').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(peso<=0){
            // console.log('El campo Peso debe ser completado')
            mensaje = true
            $('.fa-weight').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(size<=0){
            // console.log('El campo Tamaño debe ser completado')
            mensaje = true
            $('.fa-arrows-alt-h').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(master<=0){
            // console.log('El campo Master debe ser completado')
            mensaje = true
            $('.fa-calendar-alt').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(total<=0){
            // console.log('El campo Total debe ser completado')
            mensaje = true
            $('.fa-calendar-alt').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
      }

      /*if(mensaje && !pedido){
         swal({ 
            title: "¡Atención!", 
            text: "Hay campos incorrectos. Por favor valide los campos con iconos amarillos.", 
            icon: "warning"
         })
      }*/

      $('#users').keydown(function(){
         $('.fa-user').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
         mensaje=false
      })
      $('#contenedor').keydown(function(){
         $('.fa-box-open').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
         mensaje=false
      })
      $('#naviera').keydown(function(){
         $('.fa-ship').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
         mensaje=false
      })
      $('#destino').keydown(function(){
         $('.fa-globe-asia').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
         mensaje=false
      })
      $('#salida').keydown(function(){
         $('.fa-calendar-alt').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
         mensaje=false
      })
      $('#llegada').keydown(function(){
         $('.fa-calendar-alt').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
         mensaje=false
      })

      $('#presentacion').keydown(function(){
         $('.fa-gift').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
         mensaje=false
      })
      $('#producto').keydown(function(){
         $('.fa-shopping-cart').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
         mensaje=false
      })
      $('#especie').keydown(function(){
         $('.fa-water').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
         mensaje=false
      })
      $('#color').keydown(function(){
         $('.fa-palette').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
         mensaje=false
      })
      $('#peso').keydown(function(){
         $('.fa-weight').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
         mensaje=false
      })
      $('#size').keydown(function(){
         $('.fa-arrows-alt-h').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
         mensaje=false
      })
      $('#master').keydown(function(){
         $('.fa-calendar-alt').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
         mensaje=false
      })
      $('#total').keydown(function(){
         $('.fa-calendar-alt').css({"background-color":"#1abc9c", "color":"white", "border":"none"})
         mensaje=false
      })

      mensaje==true ? swal({ 
         title: "¡Atención!", 
         text: "Debe verificar los campos incorrectos. Por favor valide los campos con iconos amarillos.", 
         icon: "warning"
      }).then(()=>{
         mensaje==false
      }) : $('#formulario').submit(); 
      
	})
   
   if(pedido==false){
      $('#generar_pedido').attr("disabled","true")
   }
   else{
      $('#generar_pedido').removeAttr("disabled")         
   }
})