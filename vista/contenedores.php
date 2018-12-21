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

				$page='Contenedores';

				include ('menu-user.php');
			?>

			<!--menu fin-->



			<!--contenido-->
				<div id="content-wrapper">
					<div class="container-fluid">
						<div class="card">
								<div class="card-header" style="background-color: #f96332; color: #fff;">
									<h4 align="center" style="color: #fff;">Contenedores</h4>
								</div>

									<?php
										include ("../modelo/conexion.php");
										$consulta_contenedor=mysqli_query($db, "SELECT * FROM contenedor");
										if (mysqli_num_rows($consulta_contenedor)) {
											?>
												<table class="table table-bordered" style="text-align: center;">
														<thead class="alert-dark">
															<tr>
																<th>#REFERENCIA</th>
																<th>NOMBRE</th>
																<th>STATUS</th>
															</tr>
														</thead>
													<?php
														
														
														while ($fila=mysqli_fetch_array($consulta_contenedor)) {
															?>
																
																    <tbody>
																      <tr>
																        <td><?php echo $fila['ref']; ?></td>
																        <td><?php echo $fila['nombre']; ?></td>
																		<td><?php echo $fila['status']; ?></td>
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
						                                No existen contenedores registrados
						                              </strong> 
						                            </div>
					                          	</center>
					                  		<?php
										}
									?>
									
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