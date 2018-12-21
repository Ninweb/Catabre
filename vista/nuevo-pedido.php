<?php
    session_start();
			include ("../modelo/conexion.php");
    if(!isset($_SESSION['id_usuario'])) 
    {
          echo "<script>window.location.href='../index.php'</script>";

      exit();
      session_destroy(); 
    }
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
						<ol class="breadcrumb">
				          <li class="breadcrumb-item">
				            <a href="nuevo-pedido.php" style="color: #17a2b8;"> Generar Pedido</a>
				          </li>
				           <li class="breadcrumb-item">
				            <a href="consultar-pedido.php" style="color:#383838;"> Consultar Pedido</a>
				          </li>
				        </ol>
						<div class="card col-md-5offset-md-3">
							<div class="card-header" style="background-color: #17a2b8; color: #fff;">
						   <h3 align="center">Generar Pedido</h3>
						 </div>

						 <!-- INFORMACION DE REGISTRO -->
						 <div class="card-body">
						 	<form id="formulario">
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
													
													echo "<option value=\"".$row['id_persona']."\">".$row['nombre'].' '.$row['apellido'];

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
											$consulta_contenedor=mysqli_query($db, "SELECT * FROM contenedor WHERE contenedor.status='disponible'");
											echo "<select name=\"id_contenedor\" class='col-md-10 form-control' id='contenedor'  required>";
											echo "<option></option>";
											while ($row=mysqli_fetch_array($consulta_contenedor)) 
												{
													
													echo "<option id='id_contenedor' value=\"".$row['id_contenedor']."\">".$row['nombre'];

												}
											echo "</select>"; 
										?>
									</div>
								</div>	
								<br>

								
								<!-- <br> -->
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
											<label for="llegada" style="margin-left:-20px;">Fecha aproximada de llegada</label>
						        </div>
					        </div>	
									
									<div class="input-group-prepend">
					          <i class="fas fa-calendar-alt input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
					          <input required autocomplete="off" placeholder="<?php echo ''; ?>"  type="date" name="fecha_salida" id="salida" class="col-md-5 form-control" placeholder="" min="<?php echo date("Y-m-d"); ?>">
					          <input required autocomplete="off" placeholder="<?php echo ''; ?>"  type="date" name="fecha_llegada" id="llegada" class="col-md-5 form-control" placeholder="">
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

										<!--BOTONES Y CONTADOR-->
										<div id="subpanel">
											<div id="counters">
												<div align="left" id="contador">
													<p>Pedidos disponibles: </p>
													<p id="num-contador"></p>
												</div>
												<div align="left" id="contador" class="num-ped">
													<p>Pedidos realizados: </p>
													<p id="numero_pedido"></p>
												</div>
											</div>
											<div align="right" id="boton">
												<button type="button" class="btn btn-success" onclick="nuevo_pedido()"><i class="fas fa-cart-plus"></i><span class="desaparecer_muy_grande">&nbsp;Nuevo pedido</span></button>
											</div>
										</div>
										<!--BOTONES Y CONTADOR-->

										<div align="center" id="vacio-mensaje">No hay ningun pedido generado. Haga click en <b>Nuevo Pedido</b> para generar uno nuevo.</div>

										<div class="card-body tabla-pedido" id="tabla-pedido">
											<div class="info">
												<div id="id_pedido" style="display:none;">
													<p>Pedido número: </p>
													<p id="numero_pedido"></p>
												</div>
												
												<div class="col-md-6 alinear_izquierda espacio_margen">
													<label for="pedido">Presentación</label>
													<div class="input-group-prepend">
				          					<i class="fas fa-gift input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
				          					<input id="presentacion"   autocomplete="off" type="text" name="presentacion" class="col-md-10 form-control">
					        				</div>
												</div>

												<div class="col-md-6 alinear_izquierda espacio_margen">
													<label for="producto">Tipo de producto</label>
													<div class="input-group-prepend">
				          					<i class="fas fa-shopping-cart input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
				          					<input id="producto"  autocomplete="off" type="text" name="producto" class="col-md-10 form-control">
					        				</div>	
												</div>

												<div class="col-md-6 alinear_izquierda espacio_margen">
													<label for="especie">Especie</label>
													<div class="input-group-prepend">
				          					<i class="fas fa-water input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
				          					<input id="especie"   autocomplete="off" type="text" name="especie" class="col-md-10 form-control">
					        				</div>
												</div>

												<div class="col-md-6 alinear_izquierda espacio_margen">
													<label for="color">Color</label>
													<div class="input-group-prepend">
				          					<i class="fas fa-palette input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
				          					<input id="color"   autocomplete="off" type="text" name="color" class="col-md-10 form-control">
					        				</div>
												</div>

												<div class="col-md-6 alinear_izquierda espacio_margen">
													<label for="peso">Peso</label>
													<div class="input-group-prepend">
				          					<i class="fas fa-weight input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
				          					<input id="peso"   autocomplete="off" type="text" name="peso" class="col-md-10 form-control">
					        				</div>
												</div>

												<div class="col-md-6 alinear_izquierda espacio_margen">
													<label for="size">Tamaño: ancho x alto</label>
													<div class="input-group-prepend">
				          					<i class="fas fa-arrows-alt-h input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
				          					<input id="size"  autocomplete="off" type="text" name="size" class="col-md-10 form-control">
					        				</div>
												</div>

												<div class="col-md-6 alinear_izquierda espacio_margen">
													<label for="master">Master</label>
													<div class="input-group-prepend">
				          					<i class="fas fa-calendar-alt input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
				          					<input id="master"  autocomplete="off" type="text" name="master" class="col-md-10 form-control">
					        				</div>
												</div>

												<div class="col-md-6 alinear_izquierda espacio_margen">
													<label for="total">Total</label>
													<div class="input-group-prepend">
				          					<i class="fas fa-calendar-alt input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
				          					<input id="total"  autocomplete="off" type="text" name="total" class="col-md-10 form-control">
					        				</div>
												</div>
												&nbsp;
												
												<!--BOTONES-->
												<div align="center">
													<input type="button" class="btn btn-danger borrar" value="Eliminar pedido">
													<!-- <i class="fas fa-minus-square"></i><span class="desaparecer_muy_grande"></span> -->
												</div>
												<!--BOTONES-->

											</div>
											&nbsp;
										</div>

										<div id="nuevos-pedidos"></div>
									</div>
									<br>

									<div style="display:none">
										<input type="number" name="hidden-number-pedido" id="hidden-number-pedido"/>
									</div>

									

									
								</div>

								
								<!-- PEDIDO -->
								<div class="form-group" align="center">        
									<div class="col-sm-offset-4 col-sm-10">
										<button type="submit" name="generar" class="btn btn-primary">Generar Pedido</button>
									</div>
								</div>				

							</form>
							<div id="mostrarDatos">
										
							</div>
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
