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
				$page='Pedido';
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

						 <!-- INFORMACION DE REGISTRO -->
						 <div class="card-body">
						 	<form method="post" action="controlador/pedido.php">
						 		<br>
						 		<center><h4>Información del Pedido</h4></center><br>

								<!-- USUARIOS -->
								<div class="col-md-6 offset-md-3">
									<label for="users">Usuarios</label>
									<div class="input-group-prepend">
									<i class="far fa-user input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>

									<?php 
											include ("../modelo/conexion.php");
											$consulta_persona = mysqli_query($db, "SELECT * FROM persona,usuario WHERE persona.id_usuario=usuario.id_usuario AND usuario.tipo='user'");
					    								echo "<select name=\"id_persona\" class='col-md-10 form-control' id='users'  required>";
													echo "<option></option>";
													while ($row=mysqli_fetch_array($consulta_persona)) 
														{
															
															echo "<option value=\"".$row['id_persona']."\">".$row['nombre_1'].' '.$row['apellido_1'];

														}

													echo "</select>"; 
										?>
									
					        	</div>
								</div>
								<br>
								<!-- USUARIOS -->								



								<!--CONTENEDOR-->
								<div class="col-md-6 offset-md-3">
									<label for="contenedor">Contenedor</label>
									<div class="input-group-prepend">
					          		<i class="fas fa-box-open input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
					         		<?php 
											include ("../modelo/conexion.php");
											$consulta_contenedor=mysqli_query($db, "SELECT * FROM contenedor WHERE contenedor.status='dispo'");
					    								echo "<select name=\"id_contenedor\" class='col-md-10 form-control' id='contenedor'  required>";
													echo "<option></option>";
													while ($row=mysqli_fetch_array($consulta_contenedor)) 
														{
															
															echo "<option value=\"".$row['id_contenedor']."\">".$row['nombre'];

														}

													echo "</select>"; 
										?>
					          
					       			 </div>
								</div>	
								<br>

								<!-- NUMERO DE REFERENCIA -->
								<div class="col-md-6 offset-md-3">
									<label for="num_referencia">N° de Referencia</label>
							       	<div class="input-group-prepend">
							        	<i class="fas fa-hashtag input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
							        	<input id="num_referencia" required="" autocomplete="off"  type="text" name="num_referencia" class="col-md-10 form-control" required>
							        </div>				
								 </div>
								<br>
								<!-- NUMERO DE REFERENCIA -->

							
								<!--NAVIERA -->
								<div class="col-md-6 offset-md-3">
									<label for="naviera">NAVIERA</label>
									<div class="input-group-prepend">
					          <i class="fas fa-ship input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
					          <input id="naviera" required="" autocomplete="off"  type="text" name="naviera" class="col-md-10 form-control" required>
					        </div>
								</div>
								<br>
								<!--NAVIERA -->

								<!--DESTINO-->

								<div class="col-md-6 offset-md-3">
									<label for="destino">Destino</label>
									<div class="input-group-prepend">
					          <i class="fas fa-globe-asia input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
					          <input id="destino" required="" autocomplete="off"  type="text" name="destino" class="col-md-10 form-control" required>
					        </div>
								</div>
								<br>

								<!--DESTINO-->

								<!--- FECHA DE SALIDA Y LLEGADA -->
								<div class="col-md-6 offset-md-3">
									<div class="row">
										<div class="input-group-prepend col-md-6">
						          <label for="salida">Fecha de sálida</label>
						        </div>	
						        <div class="input-group-prepend col-md-6">
											<label for="llegada">Fecha de llegada</label>
						        </div>
					        </div>	
									
									<div class="input-group-prepend">
					          <i class="fas fa-calendar-alt input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
					          <input required autocomplete="off"  type="date" name="fecha_salida" id="salida" class="col-md-5 form-control" placeholder="" min="<?php echo date("Y-m-d"); ?>">
					          <input required autocomplete="off"  type="date" name="fecha_llegada" id="llegada" class="col-md-5 form-control" placeholder="">
					        </div>	
								</div>
								<!--- FECHA DE SALIDA Y LLEGADA -->

								<br>

								<!-- PEDIDO -->
								<div class="col-md-10 offset-md-1">
									<div class="card" id="card">
										<div class="card-header fondo">
											<h4 align="center" style="color: #fff;">Tipo de Pedido</h4>
										</div>

										<div class="card-body tabla-pedido" id="tabla-pedido">
											<div class="info">
												<div id="id_pedido">
													<p>Pedido número: </p>
													<p id="numero_pedido"></p>
												</div>
												
												<div class="col-md-6 alinear_izquierda espacio_margen">
													<label for="pedido">Presentación</label>
													<div class="input-group-prepend">
				          					<i class="fas fa-gift input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
				          					<input id="presentacion" required  autocomplete="off" type="text" name="presentacion" class="col-md-10 form-control">
					        				</div>
												</div>

												<div class="col-md-6 alinear_izquierda espacio_margen">
													<label for="producto">Tipo de producto</label>
													<div class="input-group-prepend">
				          					<i class="fas fa-shopping-cart input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
				          					<input id="producto" required autocomplete="off" type="text" name="producto" class="col-md-10 form-control">
					        				</div>	
												</div>

												<div class="col-md-6 alinear_izquierda espacio_margen">
													<label for="especie">Especie</label>
													<div class="input-group-prepend">
				          					<i class="fas fa-water input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
				          					<input id="especie" required  autocomplete="off" type="text" name="especie" class="col-md-10 form-control">
					        				</div>
												</div>

												<div class="col-md-6 alinear_izquierda espacio_margen">
													<label for="color">Color</label>
													<div class="input-group-prepend">
				          					<i class="fas fa-palette input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
				          					<input id="color" required  autocomplete="off" type="text" name="color" class="col-md-10 form-control">
					        				</div>
												</div>

												<div class="col-md-6 alinear_izquierda espacio_margen">
													<label for="peso">Peso</label>
													<div class="input-group-prepend">
				          					<i class="fas fa-weight input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
				          					<input id="peso" required  autocomplete="off" type="text" name="peso" class="col-md-10 form-control">
					        				</div>
												</div>

												<div class="col-md-6 alinear_izquierda espacio_margen">
													<label for="size">Tamaño</label>
													<div class="input-group-prepend">
				          					<i class="fas fa-arrows-alt-h input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
				          					<input id="size" required autocomplete="off" type="text" name="size" class="col-md-10 form-control">
					        				</div>
												</div>

												<div class="col-md-6 alinear_izquierda espacio_margen">
													<label for="master">Master</label>
													<div class="input-group-prepend">
				          					<i class="fas fa-calendar-alt input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
				          					<input id="master" required autocomplete="off" type="text" name="master" class="col-md-10 form-control">
					        				</div>
												</div>

												<div class="col-md-6 alinear_izquierda espacio_margen">
													<label for="total">Total</label>
													<div class="input-group-prepend">
				          					<i class="fas fa-calendar-alt input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
				          					<input id="total" required autocomplete="off" type="text" name="total" class="col-md-10 form-control">
					        				</div>
												</div>
												&nbsp;
												
												<!--BOTONES-->
												<div align="center">
													<button type="button" class="btn btn-danger" onclick="eliminar_pedido()"><i class="fas fa-minus-square"></i><span class="desaparecer_muy_grande">&nbsp;Eliminar</span></button>
												&nbsp;
													<button id="" type="button" class="btn btn-success" onclick="nuevo_pedido()"><i class="fas fa-cart-plus"></i><span class="desaparecer_muy_grande">&nbsp;Agregar</span></button>
												</div>
												<!--BOTONES-->

											</div>
											&nbsp;
										</div>
									</div>
									<br>

									<div style="display:block">
										<input type="number" name="hidden-number-pedido" id="hidden-number-pedido"/>
									</div>

									<div class="form-group" align="center">        
										<div class="col-sm-offset-4 col-sm-10">
											<button type="submit" name="generar" class="btn btn-primary">Generar Pedido</button>
										</div>
									</div>
								</div>
								<!-- PEDIDO -->


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
