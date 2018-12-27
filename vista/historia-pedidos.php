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
				$page='Historial de Pedidos';
				include ('menu-user.php');
			?>

			<!--menu fin-->



			<!--contenido-->
				<div id="content-wrapper">
					<div class="container-fluid">
						
						 <!-- INFORMACION -->
						 <div class="card-body">
						 	<div class="card-header" style="background-color: #f96332; color: #fff;">
									<h4 align="center" style="color: #fff;">Historial de Pedidos</h4>
							</div>

							<?php
								include ("../modelo/conexion.php");
								$consulta_pedido=mysqli_query($db, "SELECT * FROM contenedor,pedido,producto,persona WHERE producto.id_pedido=pedido.id_pedido AND contenedor.id_contenedor=pedido.id_contenedor AND persona.id_persona=pedido.id_persona AND persona.id_persona='".$fila['id_persona']."'");	
								if (mysqli_num_rows($consulta_pedido)>0) {

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
													
													
													while ($fila=mysqli_fetch_array($consulta_pedido)) {
														?>
															
															    <tbody>
															      <tr>
															      	<td><?php echo $fila['ref']; ?></td>
															        <td><?php echo $fila['nombre_conte']; ?></td>
															        <td><?php echo $fila['presentacion']; ?></td>
															        <td><?php echo $fila['producto']; ?></td>
															        <td><?php echo $fila['especie']; ?></td>
															        <td><?php echo $fila['color']; ?></td>
															        <td><?php echo $fila['peso']; ?></td>
															        <td><?php echo $fila['tamano']; ?></td>
															        <td><?php echo $fila['master']; ?></td>
															        <td><?php echo $fila['total']; ?></td>
															      </tr>
															    </tbody>
														<?php
													}
												?>
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
