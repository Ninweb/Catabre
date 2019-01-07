		/*editar contenedor*/

            $(document).ready(function(){
	            $('#editar-contenedor').on('show.bs.modal', function (e) {
	            var id_contenedor= $(e.relatedTarget).data('id');
	            $.ajax({
	                type : 'post',
	                url : 'formularioEditarContenedor.php', //Here you will fetch records 
	                data :  'id_contenedor='+ id_contenedor, //Pass $id
	                success : function(data){
	                    $('.fetched-data').html(data);//Show fetched data from database
	                }
	            });
	         });
    	});


        /*editar usuario*/

            $(document).ready(function(){
	            $('#editar-usuario').on('show.bs.modal', function (e) {
	            var id_usuario= $(e.relatedTarget).data('id');
	            $.ajax({
	                type : 'post',
	                url : 'formularioEditarUsuario.php', //Here you will fetch records 
	                data :  'id_usuario='+ id_usuario, //Pass $id
	                success : function(data){
	                    $('.fetched-data').html(data);//Show fetched data from database
	                }
	            });
	         });
    	});


          /*editar perfil admin*/

            $(document).ready(function(){
	            $('#editar-admin').on('show.bs.modal', function (e) {
	            var id_usuario= $(e.relatedTarget).data('id');
	            $.ajax({
	                type : 'post',
	                url : 'formularioEditarAdmin.php', //Here you will fetch records 
	                data :  'id_usuario='+ id_usuario, //Pass $id
	                success : function(data){
	                    $('.fetched-data').html(data);//Show fetched data from database
	                }
	            });
	         });
		});
		



    		 /*eliminar contenedor*/
		$(document).ready(function(){
     		 $('#eliminar-contenedor').on('show.bs.modal', function(e) {
                var id_contenedor = $(e.relatedTarget).data('book-id');
                $(e.currentTarget).find('input[name="id_contenedor"]').val(id_contenedor);
            });

    	});

    	/*eliminar usuario*/
		$(document).ready(function(){
     		 $('#eliminar-usuario').on('show.bs.modal', function(e) {
                var id_usuario = $(e.relatedTarget).data('book-id');
                $(e.currentTarget).find('input[name="id_usuario"]').val(id_usuario);
            });

    	});

    	/*mostrar contraseña*/

    	$(document).ready(function () {
		  $('#mostrar_contrasena').click(function () {
		    if ($('#mostrar_contrasena').is(':checked')) {
		      $('#contrasena').attr('type', 'text');
		    } else {
		      $('#contrasena').attr('type', 'password');
		    }
		  });
		});

		/* cambiar contraseña*/

		$('#cambiarContraseña').click(function(){
			$('#nuevaContraseña').val('true');
			$('#old_pass').css("display","none");

			$('#new_pass').css("display","block");
		});


		