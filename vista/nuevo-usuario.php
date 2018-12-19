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
				$page='Usuarios';
				include ('menu.php');
			?>

			<!--menu fin-->



			<!--contenido-->
				<div id="content-wrapper">
					<div class="container-fluid">
							<div class="card col-md-5offset-md-3"">
								<div class="card-header" style="background-color: #f96332; color: #fff;">
									<h4 align="center" style="color: #fff;">Registrar Usuario</h4>
								</div>
								<div class="card-body">
									<form action="registro-contenedor.php" method="post">
									<br>
									<div class="col-md-12 offset-md-3">
											<label for="nombre">Nombre</label>
									</div>
									<div class="input-group col-md-12 offset-md-3">
										 <div class="input-group-prepend">
								          <i class="fas fa-user input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        </div>
										<input required  autocomplete="off" type="text" name="nombre_ususario" class="col-md-5 form-control">

									</div><br>
									<div class="col-md-12 offset-md-3">
											<label for="apellido">Apellido</label>
									</div>
									<div class="input-group col-md-12 offset-md-3">
										 <div class="input-group-prepend">
								          <i class="fas fa-file-signature input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        </div>
										<input required  autocomplete="off" type="text" name="apellido" class="col-md-5 form-control">

									</div><br>
									<div class="col-md-12 offset-md-3">
											<label for="empresa">Empresa</label>
									</div>
									<div class="input-group col-md-12 offset-md-3">
										 <div class="input-group-prepend">
								          <i class="fas fa-building input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        </div>
										<input required  autocomplete="off" type="text" name="empresa" class="col-md-5 form-control">

									</div><br>
									<div class="col-md-12 offset-md-3">
											<label for="correo">Correo Eléctronico</label>
									</div>
									<div class="input-group col-md-12 offset-md-3">
										 <div class="input-group-prepend">
								          <i class="far fa-envelope input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        </div>
										<input required  autocomplete="off" type="text" name="email" class="col-md-5 form-control">

									</div><br>
									<div class="col-md-12 offset-md-3">
											<label for="clave">Contraseña</label>
									</div>
									<div class="input-group col-md-12 offset-md-3">
										 <div class="input-group-prepend">
								         <i class="fas fa-key input-group-text" style="background-color: #f96332; color: #fff; padding-top: 10px;"></i>
								        </div>
										<input required  autocomplete="off" type="text" name="password" class="col-md-5 form-control">

									</div>
									&nbsp;
										<div class="form-group" align="center">        
											<div class="col-sm-offset-4 col-sm-10">
												<button type="submit" name="registar" class="btn btn-primary">Registar</button>
											</div>
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