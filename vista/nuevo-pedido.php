<?php

?>
<!DOCTYPE html>
<html>
 <head>
    <?php
      include("head.php");
    ?>
  </head>
	<body id="page-top">
		<?php
			include ('nav.php');
		?>
		<!--inicio wrapper-->
		<div id="wrapper">

			<!--menu--->
			<?php

				include ('menu.php');
			?>

			<!--menu fin-->



			<!--contenido-->
				<div id="content-wrapper">
					<div class="container-fluid">
						<div class="card col-md-5offset-md-3">
							<div class="card-header" style="background-color: #17a2b8; color: #fff;">
							   <h3 align="center">NUEVO PEDIDO</h3>
							 </div>
							 <div class="card-body">
							 	<form method="post" action="prueba.php">
							 		<br>
							 		<center><h4>Información del Pedido</h4></center><br>
									<div class="input-group col-md-6 offset-md-3">
										 <div class="input-group-prepend">
								          <i class="far fa-user input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        </div>
										<select name="cliente" class="col-md-10 form-control" required>
											<option>Liseth Sanchez</option>
										</select>
									</div>
									<br>

									 <div class="input-group col-md-6 offset-md-3">
								        <div class="input-group-prepend">
								          <i class="fas fa-hashtag input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        </div>
								        <input required="" autocomplete="off"  type="text" name="num_referencia" placeholder="Número de Referencia" class="col-md-10 form-control" required>

								      </div>
									
									<br>
									<div class="input-group col-md-6 offset-md-3">
										<div class="input-group-prepend">
								          <i class="fas fa-box-open input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        </div>
										<select name="contenedor" class="col-md-10 form-control" required>
											<option></option>
											<option value="">SELECCIONE CONTENEDOR</option>
											<option value="1">Contenedor1</option>
										</select>
									</div>
									<br>
									<div class="input-group col-md-6 offset-md-3">
										<div class="input-group-prepend">
								          <i class="fas fa-ship input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        </div>
										<input required="" autocomplete="off"  type="text" name="naviera" class="col-md-10 form-control" placeholder="Naviera" required>
									</div>
									<br>
									<div class="input-group col-md-6 offset-md-3">
										<div class="input-group-prepend">
								          <i class="fas fa-globe-asia input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        </div>
										<input required="" autocomplete="off"  type="text" name="destino" class="col-md-10 form-control" placeholder="Destino" required>
									</div>
									<br>
									<div class="input-group col-md-6 offset-md-3">
											<div class="input-group-prepend">
								          <i class="fas fa-calendar-alt input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        </div>
											<input required autocomplete="off"  type="date" name="fecha_salida" id="salida" class="col-md-5 form-control" placeholder="Fecha de Sálida" min="<?php echo date("Y-m-d"); ?>">

											<input required autocomplete="off"  type="date" name="fecha_llegada" id="llegada" class="col-md-5 form-control" placeholder="Fecha de Llegada">
									</div>

									<br>
									<div class="col-md-10 offset-md-1">
										<div class="card">
											<div class="card-header fondo">
												<h4 align="center" style="color: #fff;">Tipo de Pedido</h4>
											</div>
											<div class="card-body">
												<div class="info">
													
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-gift input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>

														<input required  autocomplete="off" type="text" name="presentacion" placeholder="Presentación" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-shopping-cart input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required autocomplete="off" type="text" name="tipo_producto" placeholder="Tipo de Producto" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-water input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required  autocomplete="off" type="text" name="especie" placeholder="Especie" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-palette input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required  autocomplete="off" type="text" name="color" placeholder="Color" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-weight input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required=""  autocomplete="off" type="text" name="peso" placeholder="Peso" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-arrows-alt-h input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required=""  autocomplete="off" type="text" name="tamanio" placeholder="Tamaño" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-calendar-alt input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required=""  autocomplete="off" type="text" name="master" placeholder="Master" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-calendar-alt input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required=""  autocomplete="off" type="text" name="total" placeholder="Total" class="col-md-10 form-control">
													</div>
													&nbsp;

													<div align="center">
														
														<button type="button" class="btn btn-danger" onclick="ocultar_pedido1()"><i class="fas fa-minus-square"></i><span class="desaparecer_muy_grande">&nbsp;Eliminar</span></button>
													&nbsp;
														<button type="button" class="btn btn-success" onclick="mostrar_pedido1()"><i class="fas fa-cart-plus"></i><span class="desaparecer_muy_grande">&nbsp;Agregar</span></button>
													</div>

												</div>
											
												&nbsp;

												<!---pedido2--->

												<div class="info" style="display: none;" id="pedido2">
													
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-gift input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>

														<input required=""  autocomplete="off" type="text" name="presentacion2" placeholder="Presentación" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-shopping-cart input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required=""  autocomplete="off" type="text" name="tipo_producto2" placeholder="Tipo de Producto" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-water input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required=""  autocomplete="off" type="text" name="especie2" placeholder="Especie" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-palette input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required=""  autocomplete="off" type="text" name="color2" placeholder="Color" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-weight input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required=""  autocomplete="off" type="text" name="peso2" placeholder="Peso" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-arrows-alt-h input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required=""  autocomplete="off" type="text" name="tamanio2" placeholder="Tamaño" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-calendar-alt input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required=""  autocomplete="off" type="text" name="master2" placeholder="Master" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-calendar-alt input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required=""  autocomplete="off" type="text" name="total2" placeholder="Total" class="col-md-10 form-control">
													</div>
												&nbsp;
													<div align="center">
														<button type="button" class="btn btn-danger" onclick="ocultar_pedido2()"><i class="fas fa-minus-square"></i><span class="desaparecer_muy_grande">&nbsp;Eliminar</span></button>
													&nbsp;
														<button type="button" class="btn btn-success" onclick="mostrar_pedido2()"><i class="fas fa-cart-plus"></i><span class="desaparecer_muy_grande">&nbsp;Agregar</span></button>
													</div>

												</div>
												<!--fin pedido2--->

												<!---pedido3--->

												<div class="info" style="display: none;" id="pedido3">
													<br>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-gift input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>

														<input required=""  autocomplete="off" type="text" name="presentacion3" placeholder="Presentación" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-shopping-cart input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required=""  autocomplete="off" type="text" name="tipo_producto3" placeholder="Tipo de Producto" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-water input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required=""  autocomplete="off" type="text" name="especie3" placeholder="Especie" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-palette input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required=""  autocomplete="off" type="text" name="color3" placeholder="Color" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-weight input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required=""  autocomplete="off" type="text" name="peso3" placeholder="Peso" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-arrows-alt-h input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required=""  autocomplete="off" type="text" name="tamanio3" placeholder="Tamaño" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-calendar-alt input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required=""  autocomplete="off" type="text" name="master3" placeholder="Master" class="col-md-10 form-control">
													</div>
													<div class="input-group col-md-6 alinear_izquierda espacio_margen">
														<div class="input-group-prepend">
								          					<i class="fas fa-calendar-alt input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        				</div>
														<input required=""  autocomplete="off" type="text" name="total3" placeholder="Total" class="col-md-10 form-control">
													</div>&nbsp;
													<div align="center">
														<button type="button" class="btn btn-danger" onclick="ocultar_pedido3()"><i class="fas fa-minus-square"></i><span class="desaparecer_muy_grande">&nbsp;Eliminar</span></button>
													&nbsp;
														<button type="button" class="btn btn-success"  onclick="mostrar_pedido3()"><i class="fas fa-cart-plus"></i><span class="desaparecer_muy_grande">&nbsp;Agregar</span></button>
													</div>

												</div>
												<!--fin pedido3--->
											</div>
										</div>
									</div>
									<br>
									<div class="form-group" align="center">        
										<div class="col-sm-offset-4 col-sm-10">
											<button type="submit" name="generar" class="btn btn-primary">Generar Pedido</button>
										</div>
									</div>
							</form>

							</div>

						</div><br>
					</div>
			<!--fin de contenido-->


			<!--footer-->
					<?php
							include ('footer.php');
						?>
			<!--fin footer-->


				</div>
				<!--content-wrapper--->


		</div>
		<!--fin wrapper-->


			<!-- Scroll to Top Button-->
		    <a class="scroll-to-top rounded" href="#page-top">
		      <i class="fas fa-angle-up"></i>
		    </a>

		    <!--script-->
			 <?php
     			 include("script.php");
   			 ?>
   			
	</body>
</html>