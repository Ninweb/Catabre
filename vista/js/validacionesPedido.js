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

   $('#generar_pedido').click(function(){
      //obteniendo valores de los campos
      var usuario = document.getElementById('users').value;
      var contenedor = document.getElementById('contenedor').value;
      var naviera = $('#naviera').val().length;
      var destino = $('#destino').val().length;
      var fecha_salida = $('#salida').val().length;
      var fecha_llegada = $('#llegada').val().length;
      var mensaje = false

      // VERIFICAR SI HAY CONTENEDOR DISPONIBLE
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
            var presentacion = $('#presentacion').val()
            // alert(presentacion)
				var producto = $('#producto').val()
				var especie = $('#especie').val()
				var color = $('#color').val()
				var peso = $('#peso').val()
				var size = $('#size').val()
				var master = $('#master').val()
				var total = $('#total').val()
			}else{
            var presentacion = $(`#presentacion${i}`).val()
            // alert(presentacion)
				var producto = $(`#producto${i}`).val()
            var especie = $(`#especie${i}`).val()
				var color = $(`#color${i}`).val()
				var peso = $(`#peso${i}`).val()
				var size = $(`#size${i}`).val()
				var master = $(`#master${i}`).val()
				var total = $(`#total${i}`).val()
			}

         //campos constantes
         if(usuario<=0 || usuario=="Seleccione usuario"){
            mensaje = true
            $('.fa-user').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(contenedor<=0 || contenedor=="No hay contenedor disponible"){
            mensaje = true
            $('.fa-box-open').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(naviera<=0){
            mensaje = true
            $('.ship').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(destino<=0){
            mensaje = true
            $('.fa-globe-asia').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(fecha_salida<=0){
            mensaje = true
            $('.fa-calendar-alt').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(fecha_llegada<=0){
            mensaje = true
            $('.fa-calendar-alt').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }

         //campos variables
         if(presentacion==""){
            // alert(presentacion)
            mensaje = true
            $('.fa-gift').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(producto==""){
            // alert(producto)
            mensaje = true
            $('.fa-shopping-cart').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(especie==""){
            mensaje = true
            $('.fa-water').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(color==""){
            mensaje = true
            $('.fa-palette').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(peso==""){
            // alert(peso)
            mensaje = true
            $('.fa-weight').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(size==""){
            mensaje = true
            $('.fa-arrows-alt-h').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(master==""){
            mensaje = true
            $('.fa-calendar-alt').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
         if(total==""){
            mensaje = true
            $('.fa-calendar-alt').css({"background-color":"#FFC107", "color":"black", "border":"none"})
         }
      }


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