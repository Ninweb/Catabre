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
						<ol class="breadcrumb">
				          <li class="breadcrumb-item">
				            <a href="nuevo-usuario.php" style="color:#383838;"> Registrar Usuario</a>
				          </li>
				           <li class="breadcrumb-item">
				            <a href="consultar-usuario.php" style="color: #17a2b8;"> Consultar Usuario</a>
				          </li>
				        </ol>
							<div class="card">
								<div class="card-header" style="background-color: #f96332; color: #fff;">
									<h4 align="center" style="color: #fff;">Consultar Usuario</h4>
								</div>
								<div class="card-body">
									
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