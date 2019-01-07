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

				include ('menu-user.php');
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
									$consulta_usuario=mysqli_query($db, "SELECT * FROM usuario,persona WHERE persona.id_usuario=usuario.id_usuario AND usuario.tipo='user'");
								if (mysqli_num_rows($consulta_usuario)) {
									?>
									<table class="table table-bordered" style="text-align: center;">
										<thead class="alert-dark">
											<tr>
												<th>Nombre</th>
												<th>Apellido</th>
												<th>Empresa</th>
												<th>Email</th>
												<th>contraseña</th>
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
														<td><input type="password" value="<?php echo $fila['clave']; ?>" disabled class="form-control"></td>
														<td>
															<a href="#" id="<?php echo $fila['id_usuario'];?>" data-target="#editar-user" data-toggle="modal" data-id="<?php echo $fila['id_usuario'];?>">
															<i class="far fa-edit" aria-hidden="true" style="color: #28a745;"></i>
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
			    require("script.php");

     			include("modal-editar-user.php");



   			 ?>
   				<script type="text/javascript">
   					
   					
			          /*editar perfil usuario*/

			            $(document).ready(function(){
				            $('#editar-user').on('show.bs.modal', function (e) {
				            var id_usuario= $(e.relatedTarget).data('id');
				            
				            $.ajax({
				                	type : 'post',
				                	url : 'formularioEditarPerfilUser.php', //Here you will fetch records 
				                	data :  'id_usuario='+ id_usuario, //Pass $id
				                	success : function(data){
				                 	   $('.fetched-data').html(data);//Show fetched data from database
				                	}
				            	});
				         	});
						});
   				</script>

	</body>


</html>