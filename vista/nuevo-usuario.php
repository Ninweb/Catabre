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
				$page='Usuarios';
				include ('menu.php');
			?>

			<!--menu fin-->



			<!--contenido-->
				<div id="content-wrapper">
					<div class="container-fluid">
						<ol class="breadcrumb">
				          <li class="breadcrumb-item">
				            <a href="nuevo-usuario.php" style="color: #17a2b8;"> Registrar Usuario</a>
				          </li>
				           <li class="breadcrumb-item">
				            <a href="consultar-usuario.php" style="color:#383838;"> Consultar Usuario</a>
				          </li>
				        </ol>
							<div class="card col-md-5offset-md-3">
								<div class="card-header" style="background-color: #1abc9c; color: #fff;">
									<h4 align="center" style="color: #fff;">Registrar Usuario</h4>
								</div>
								<div class="card-body">
									<form id="formularioUsuario">
									<input type="hidden" name="funcion" value="crear">
									<br>

									<div class="col-md-6 offset-md-3">
										<div class="row">
											<div class="input-group-prepend col-md-6">
												<label for="salida">Nombre</label>
											</div>	
											<div class="input-group-prepend col-md-6">
												<label for="llegada" style="margin-left:0px;">Apellido</label>
											</div>
										</div>	
										
										<div class="input-group-prepend">
											<i class="fas fa-user input-group-text" style="border:none; background-color: #1abc9c; color: #fff; padding-top: 10px;"></i>
											<input style="margin-right:10px;" autocomplete="off" type="text" name="nombre" id="nombre" class="col-md-5 form-control">
											<input autocomplete="off" type="text" name="apellido" id="apellido" class="col-md-5 form-control">
										</div>	
									</div>
									<br>

									<div class="col-md-12 offset-md-3">
										<label for="empresa">Empresa</label>
									</div>
									<div class="input-group col-md-12 offset-md-3">
										<div class="input-group-prepend">
											<i class="fas fa-building input-group-text" style="border:none; background-color: #1abc9c; color: #fff; padding-top: 10px;"></i>
										</div>
										<input autocomplete="off" type="text" name="empresa" id="empresa" class="col-md-5 form-control">
									</div><br>

									<div class="col-md-12 offset-md-3">
										<label for="correo">Correo Eléctronico</label>
									</div>
									<div class="input-group col-md-12 offset-md-3">
										<div class="input-group-prepend">
											<i class="far fa-envelope input-group-text" style="border:none; background-color: #1abc9c; color: #fff; padding-top: 10px;"></i>
										</div>
										<input autocomplete="off" id="email" type="email" name="email" id="email" class="col-md-5 form-control">
									</div><br>

									<div class="col-md-12 offset-md-3">
										<label for="clave">Contraseña</label>
									</div>										
									<div class="input-group col-md-12 offset-md-3">
										<div class="input-group-prepend">
											<i class="fas fa-key input-group-text" style="border:none; background-color: #1abc9c; color: #fff; padding-top: 10px;"></i>
										</div>
										<input  autocomplete="off" type="password" name="password"  id="contrasena" class="col-md-5 form-control">
										<div style="margin-top:15px;">
											<input style="margin-left:20px;" type="checkbox" id="mostrar_contrasena" title="clic para mostrar contraseña"/>
											&nbsp;&nbsp;Mostrar Contraseña</div>
										</div>
									</div>
									
									&nbsp;
									<div class="form-group" align="center">        
										<div class="col-sm-offset-4 col-sm-10">
											<input type="button" name="registrar" id="registrar_usuario" class="btn btn-primary registrar-usuario" value="Registrar">
										</div>
									</div>
								</form>

								<div id="mostrarDatos">
								</div>
							</div>

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