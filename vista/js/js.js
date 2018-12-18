$(document).ready(function($) {

	/*$("input").keyup(function() {
		$(this).val( $(this).val().toUpperCase() );
	});*/


	// efectos en el menu.

	$("#cuentas_superior").click(function() {
		if($("#submenu_superior").css('display')=='none'){
			$("#submenu_superior").slideDown('fast');
		} else{
			$("#submenu_superior").slideUp('fast');
		}
	});

	$("#cuentas").click(function() {
		if($("#sub_menu").css('display')=='none'){
			$("#sub_menu").slideDown('fast');
		} else{
			$("#sub_menu").slideUp('fast');
		}
	});

	$("#logo").click(function() {
		if($("#menu_oculto").css('display')=='none'){
			$("#menu_oculto").slideDown('fast');
		} else{
			$("#menu_oculto").slideUp('fast');
		}
	});

	$(".enlace_menu").hover(function() {
		$(this).css({
			'background-color' : 'rgb(0,0,0,0.1)'
		});
	});

	$(".enlace_menu").mouseout(function() {
		$(this).css({
			'background-color' : '#f96332'
		});
	});

	$(".enlace_menu_superior").hover(function() {
		$(this).css({
			'background-color' : 'rgb(0,0,0,0.1)'
		});
	});

	$(".enlace_menu_superior").mouseout(function() {
		$(this).css({
			'background-color' : '#fba185'
		});
	});

	$(".cambiar_naranja").hover(function() {
		$(this).css({
			'background-color' : '#f96332',
			'color' : '#ffffff'
		});
	});

	$(".cambiar_naranja").mouseout(function() {
		$(this).css({
			'background-color' : 'transparent',
			'color' : '#007bff'
		});
	});

	// Modificaciones que afectan a los pedidos

	$("#llegada").click(function() {
		$(this).attr({
			type: 'date'
		});
	});

	$("#llegada").focusout(function() {
		if($(this).val()==""){
			$(this).attr({
				type: 'text'
			});
		}
	});

	$("#salida").click(function() {
		$(this).attr({
			type: 'date'
		});
	});

	$("#salida").focusout(function() {
		if ($(this).val()=="") {
			$(this).attr({
				type: 'text'
			});
		}
	});

	var conteo_info = 1;

	$("#agregar_tipo_pedido").click(function() {
		
		if(conteo_info<8){

			conteo_info++;

			$(".info").last().after('&nbsp;<hr><div class="info">'+
							'<div class="input-group col-md-6 alinear_izquierda espacio_margen">'+
								'<span class="fas fa-gift input-group-addon fondo form-control tamano_icono icono col-md-2"></span>'+
								'<input required="" type="text" name="presentacion[]" placeholder="Presentación" class="col-md-10" onkeyup="javascript:this.value=this.value.toUpperCase();">'+
							'</div>'+
							'<div class="input-group col-md-6 alinear_izquierda espacio_margen">'+
								'<span class="fas fa-shopping-cart input-group-addon fondo form-control tamano_icono icono col-md-2"></span>'+
								'<input required="" type="text" name="tipo_producto[]" placeholder="Tipo de Producto" class="col-md-10" onkeyup="javascript:this.value=this.value.toUpperCase();">'+
							'</div>'+
							'<div class="input-group col-md-6 alinear_izquierda espacio_margen">'+
								'<span class="fas fa-water input-group-addon fondo form-control tamano_icono icono col-md-2"></span>'+
								'<input required="" type="text" name="especie[]" placeholder="Especie" class="col-md-10" onkeyup="javascript:this.value=this.value.toUpperCase();">'+
							'</div>'+
							'<div class="input-group col-md-6 alinear_izquierda espacio_margen">'+
								'<span class="fas fa-palette input-group-addon fondo form-control tamano_icono icono col-md-2"></span>'+
								'<input required="" type="text" name="color[]" placeholder="Color" class="col-md-10" onkeyup="javascript:this.value=this.value.toUpperCase();">'+
							'</div>'+
							'<div class="input-group col-md-6 alinear_izquierda espacio_margen">'+
								'<span class="fas fa-weight input-group-addon fondo form-control tamano_icono icono col-md-2"></span>'+
								'<input required="" type="text" name="peso[]" placeholder="Peso" class="col-md-10" onkeyup="javascript:this.value=this.value.toUpperCase();">'+
							'</div>'+
							'<div class="input-group col-md-6 alinear_izquierda espacio_margen">'+
								'<span class="fas fa-arrows-alt-h input-group-addon fondo form-control tamano_icono icono col-md-2"></span>'+
								'<input required="" type="text" name="tamanio[]" placeholder="Tamaño" class="col-md-10" onkeyup="javascript:this.value=this.value.toUpperCase();">'+
							'</div>'+
							'<div class="input-group col-md-6 alinear_izquierda espacio_margen">'+
								'<span class="fas fa-calendar-alt input-group-addon fondo form-control tamano_icono icono col-md-2"></span>'+
								'<input required="" type="text" name="master[]" placeholder="Master" class="col-md-10" onkeyup="javascript:this.value=this.value.toUpperCase();">'+
							'</div>'+
							'<div class="input-group col-md-6 alinear_izquierda espacio_margen">'+
								'<span class="fas fa-calendar-alt input-group-addon fondo form-control tamano_icono icono col-md-2"></span>'+
								'<input required="" type="text" name="total[]" placeholder="Total" class="col-md-10" onkeyup="javascript:this.value=this.value.toUpperCase();">'+
							'</div>'+
						'</div>');

		}

	});

	$(".eliminar_tipo_pedido").click(function() {
		if(conteo_info>=2){
			conteo_info--;
			$(".info").last().remove();
			$("hr").last().remove();
		}
	});

	$("#salida").change(function() {
		$("#llegada").attr({
			min: $(this).val()
		});
	});

	/*$("input[type='email']").keyup(function() {
		
		$(this).val().toUpperCase();

	});*/

	
	//consulta con ajax **incompleta**
	/*$("#login").submit(function(c) {

		
		c.preventDefault();

		//capturar todos los datos del formulario.
		var	datos_form = $(this).serialize();

		$.ajax({

			type: 'POST',
			url: '../../controlador/inicio_sesion.php',
			data: datos_form,
			success: function(data){

				swal({
					type: 'success',
					title: 'Ha iniciado sesión correctamente.',
					showConfirmButton: false,
					timer: 1500
				});

				$("#login")[0].reset();

				console.log(data);

			},
			error: function(data){

				swal({
					type: 'error',
					title: 'Error al iniciar sesión.',
					showConfirmButton: false,
					timer: 1500
				});

				$("#login")[0].reset();

				console.log(data);
				
			}

		});

	});*/
	
});