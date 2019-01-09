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

				$page='Mi Pedido';

				include ('menu-user.php');
			?>

			<!--menu fin-->



			<!--contenido-->
				<div id="content-wrapper">
					<div class="container-fluid">
						 <div class="card-body">
						 	<div class="card-header" style="background-color: #1abc9c; color: #fff;">
									<h4 align="center" style="color: #fff;">Mi Último Pedido</h4>
							</div>

							<?php

								$id_persona=$fila['id_persona'];
								$email=$fila['email'];
								$empresa=$fila['empresa'];

								$consulta_pedido=mysqli_query($db, "SELECT * FROM contenedor,pedido,producto,persona WHERE pedido.id_contenedor=contenedor.id_contenedor AND pedido.id_pedido=producto.id_pedido AND persona.id_persona=pedido.id_persona AND persona.id_persona='".$id_persona."' order by pedido.id_pedido desc limit 1");

								$row=mysqli_fetch_array($consulta_pedido);

								 /*consulta producto*/
								$consulta_producto=mysqli_query($db, "SELECT * FROM contenedor,pedido,producto,persona WHERE pedido.id_contenedor=contenedor.id_contenedor AND pedido.id_pedido=producto.id_pedido AND persona.id_persona=pedido.id_persona AND persona.id_persona='".$id_persona."' AND producto.id_pedido='".$row['id_pedido']."'");



								if (mysqli_num_rows($consulta_producto)>0) {

										?>
									 	<table class="table table-bordered" style="text-align: center;">
													<thead class="alert-dark">
														<tr>
															<th>N° Referencia</th>
															<th>Contenedor</th>
															<th>Presentación</th>
															<th>Producto</th>
															<th>Especie</th>
															<th>Color</th>
															<th>Peso</th>
															<th>Tamaño</th>
															<th>Master</th>
															<th>Total</th>
														</tr>
													</thead>
												<?php
													
													
													while ($row1=mysqli_fetch_array($consulta_producto)) {
														?>
															
															    <tbody>
															      <tr>
															      	<td><?php echo $row1['ref']; ?></td>
															        <td><?php echo $row1['nombre_conte']; ?></td>
															        <td><?php echo $row1['presentacion']; ?></td>
															        <td><?php echo $row1['producto']; ?></td>
															        <td><?php echo $row1['especie']; ?></td>
															        <td><?php echo $row1['color']; ?></td>
															        <td><?php echo $row1['peso']; ?></td>
															        <td><?php echo $row1['tamano']; ?></td>
															        <td><?php echo $row1['master']; ?></td>
															        <td><?php echo $row1['total']; ?></td>
															      </tr>
															    </tbody>
														<?php
													}
												?>
											</table>

											  <table class="table table-borderless alert-info" style="width: 50%; margin:0 auto;">
												    <thead>

												    	<tr>
												    		<th colspan="2">Información de Pedido</th>
												    	</tr>
												      <tr>
												        <th>Fecha de Sálida</th>
												        <th>Fecha Llegada</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td><?php echo $row['fecha_salida']; ?></td>
												        <td><?php echo $row['fecha_llegada']; ?></td>
												      </tr>
												      
												    </tbody>
							  				</table>
											<?php
									}else{

										?>
					                        <center>
					                            <div class="alert alert-info">
					                              <strong><i class="fa fa-exclamation-circle fa-2x" aria-hidden="true"></i> 
					                                No existen pedidos registrados
					                              </strong> 
					                            </div>
					                          </center>
					                  <?php
									}
							?>
							
							  <hr>
							  <div class="col-md-6" style="margin:0 auto;">
                    			<span class="anchor" id="formContact"></span>
                    				<!-- form user info -->
			                    <div class="card card-outline-secondary">
			                        <div class="card-header" style="background:#1abc9c;">
			                            <h4 class="mb-0" style="color:#fff; text-align:center;">Contacto</h4>
			                        </div>
			                        <div class="card-body">
			                      
			                            <form id="formularioContacto" autocomplete="off" >
			                                <fieldset>
			                                    <label for="name2" class="mb-0">Empresa</label>
			                                    <div class="row mb-1">
			                                        <div class="col-lg-12">
			                                            <input type="text" name="empresa" class="form-control" value="<?php echo $empresa ?>" readonly>
			                                        </div>
			                                    </div>
			                                    <label for="email2" class="mb-0">Correo Electrónico</label>
			                                    <div class="row mb-1">
			                                        <div class="col-lg-12">
			                                            <input type="text" name="email" class="form-control" value="<?php echo $email ?>" readonly>
			                                        </div>
			                                    </div>
			                                    <label for="message2" class="mb-0">Mensaje</label>
			                                    <div class="row mb-1">
			                                        <div class="col-lg-12">
			                                            <textarea rows="6" name="mensaje" id="message2" class="form-control" required></textarea>
			                                        </div>
			                                    </div>
																					<div style="text-align:center;">
																						<button type="submit" name="enviar" class="btn btn-primary btn-lg">Enviar</button>
																					</div>
			                                </fieldset>
			                            </form>

																	<div id="mostrarDatos">
																	</div>
			                        </div>
                    			</div>
                    <!-- /form user info -->
						</div>
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