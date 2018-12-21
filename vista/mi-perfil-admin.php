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
				$page='Mi Perfil';
				include ('menu.php');
			?>

			<!--menu fin-->



			<!--contenido-->
				<div id="content-wrapper">
					<div class="container-fluid">
						<div class="card">
								<div class="card-header" style="background-color: #f96332; color: #fff;">
									<h4 align="center" style="color: #fff;">Mi Perfil</h4>
								</div>
							<?php
									include ("../modelo/conexion.php");
									$consulta_usuario=mysqli_query($db, "SELECT * FROM usuario,persona WHERE persona.id_usuario=usuario.id_usuario AND usuario.tipo='admin'");
								if (mysqli_num_rows($consulta_usuario)) {
									?>
									<table class="table table-bordered" style="text-align: center;">
										<thead >
											<tr>
												<th>Nombre</th>
												<th>Apellido</th>
												<th>Empresa</th>
												<th>Email</th>
												<th>Modificar</th>
											</tr>
										</thead>
									<?php
										
										
										while ($fila=mysqli_fetch_array($consulta_usuario)) {
											?>
												
												    <tbody>
												      <tr>
												      	<td><?php echo $fila['nombre']; ?></td>
												        <td><?php echo $fila['apellido']; ?></td>
												        <td><?php echo $fila['empresa']; ?></td>
												        <td><?php echo $fila['email']; ?></td>
												        <td>
												                              <a href="#" id="<?php echo $fila['id_usuario'];?>" data-target="#editar-admin" class="btn btn-success" data-toggle="modal" data-id="<?php echo $fila['id_usuario'];?>">
												                              <i class="far fa-edit" aria-hidden="true"></i>
												                              </a>

												                          </td>
												                        
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
					                                No existen administradores registrado
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
     			 include("modal-editar-admin.php");
   			 ?>
	</body>
</html>