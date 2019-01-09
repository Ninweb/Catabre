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
				            <a href="nuevo-pedido.php" style="color:#383838;"> Generar Pedido</a>
				          </li>
				           <li class="breadcrumb-item">
				           	 <a href="consultar-pedido.php" style="color: #17a2b8;" > Consultar Pedido</a>
				          	</li>
				          	
				        </ol>
						
						 <!-- INFORMACION -->
						 <div class="card-body">
						 	<div class="card-header" style="background-color: #1abc9c; color: #fff;">
									<h4 align="center" style="color: #fff;">Consultar Pedido</h4>
							</div>

							<?php
								include ("../modelo/conexion.php");
								$consulta_pedido1=mysqli_query($db, "SELECT * FROM contenedor,pedido,producto WHERE producto.id_pedido=pedido.id_pedido AND contenedor.id_contenedor=pedido.id_contenedor");	
								if (mysqli_num_rows($consulta_pedido1)>0) {
									$consulta_contenedor=mysqli_query($db,"SELECT * FROM contenedor");
								$num_contenedores=mysqli_num_rows($consulta_contenedor);
								for ($i=1; $i<=$num_contenedores ; $i++) { 
									$consulta_pedido=mysqli_query($db, "SELECT * FROM contenedor,pedido,producto WHERE producto.id_pedido=pedido.id_pedido AND contenedor.id_contenedor=pedido.id_contenedor AND contenedor.id_contenedor='".$i."'");	

									if (mysqli_num_rows($consulta_pedido)>0) {
										# code...
									?>	
										<br>
										<div class="card-header" style="background-color: #b8daff; color: #fff;">
											<h4 align="center" style="color: #383838;">Contenedor #<?php echo $i; ?></h4>
										</div>
										<div class="table-responsive">

										 	<table class="table table-bordered" style="text-align: center;">
														<thead class="alert-dark">
															<tr>
																<th>N° Referencia</th>
																<th>Contenedor</th>
																<th>Naviera</th>
																<th>Origen</th>
																<th>Destino</th>
																<th>Presentación</th>
																<th>Producto</th>
																<th>Especie</th>
																<th>Color</th>
																<th>Peso</th>
																<th>Tamaño</th>
																<th>Master</th>
																<th>Total</th>
																<th>Fecha Sálida</th>
																<th>Fecha Llegada</th>
															</tr>
														</thead>
													<?php
														
														
														while ($fila=mysqli_fetch_array($consulta_pedido)) {
															?>
																
																    <tbody>
																      <tr>
																      	<td><?php echo $fila['ref']; ?></td>
																        <td><?php echo $fila['nombre_conte']; ?></td>
																        <td><?php echo $fila['naviera']; ?></td>
																        <td><?php echo $fila['origen']; ?></td>
																        <td><?php echo $fila['destino']; ?></td>
																        <td><?php echo $fila['presentacion']; ?></td>
																        <td><?php echo $fila['producto']; ?></td>
																        <td><?php echo $fila['especie']; ?></td>
																        <td><?php echo $fila['color']; ?></td>
																        <td><?php echo $fila['peso']; ?></td>
																        <td><?php echo $fila['tamano']; ?></td>
																        <td><?php echo $fila['master']; ?></td>
																        <td><?php echo $fila['total']; ?></td>
																        <td><?php echo $fila['fecha_salida']; ?></td>
																        <td><?php echo $fila['fecha_llegada']; ?></td>
																      </tr>
																    </tbody>
															<?php
														}
													?>
												</table>
											</div>
											<?php
									}
								}
							
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
