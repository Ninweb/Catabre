		/*editar contenedor*/

            $(document).ready(function(){
	            $('#editar-contenedor').on('show.bs.modal', function (e) {
	            var id_contenedor= $(e.relatedTarget).data('id');
	            $.ajax({
	                type : 'post',
	                url : '../controlador/editar-contenedor.php', //Here you will fetch records 
	                data :  'id_contenedor='+ id_contenedor, //Pass $id
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