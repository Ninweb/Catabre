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
				$page='Contenedor';
				include ('menu.php');
			?>

			<!--menu fin-->



			<!--contenido-->
				<div id="content-wrapper">
					<div class="container-fluid">
						<ol class="breadcrumb">
				          <li class="breadcrumb-item">
				            <a href="nuevo-contenedor.php" style="color: #17a2b8;"> Registrar Contenedor</a>
				          </li>
				           <li class="breadcrumb-item">
				            <a href="consultar-contenedor.php" style="color:#383838;"> Consultar Contenedor</a>
				          </li>
				        </ol>
							<div class="card col-md-5offset-md-3">
								<div class="card-header" style="background-color: #1abc9c; color: #fff;">
									<h4 align="center" style="color: #fff;">Registrar Contenedor</h4>
								</div>
								<div class="card-body">
									<form id="formularioContenedor">
										<input type="hidden" name="funcion" value="crear">
										<br>
										<div class="col-md-12 offset-md-3">
												<label for="num_referencia">N° Referencia</label>
										</div>
										<div class="input-group col-md-12 offset-md-3">
											
											<div class="input-group-prepend">
														<i class="fas fa-hashtag input-group-text" style="border:none; background-color: #1abc9c; color: #fff; padding-top: 10px;"></i>
													</div>
											<input autocomplete="off" type="text" name="num_referencia" id="num_referencia" class="col-md-5 form-control">

										</div><br>

										
										<div class="col-md-12 offset-md-3">
												<label for="num_referencia">Nombre</label>
										</div>
										<div class="input-group col-md-12 offset-md-3">

											<div class="input-group-prepend">
													<i class="fas fa-file-signature input-group-text" style="border:none; background-color: #1abc9c; color: #fff; padding-top: 10px;"></i>
													</div>
											<input autocomplete="off" type="text" name="nombre" id="nombre" class="col-md-5 form-control">

										</div>&nbsp;
											<div class="form-group" align="center">        
												<div class="col-sm-offset-4 col-sm-10">
													<input type="button" name="registrar" id="registrar_btn" class="btn btn-primary registrar-contenedor" value="Registrar">
												</div>
										</div>
								</form>
								</div>
							</div>
					</div>
				<!--fin de contenido-->
					<div id="mostrarDatos">

					</div>

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