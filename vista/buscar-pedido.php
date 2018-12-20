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
				          	<li class="breadcrumb-item">
				            	<a href="buscar-pedido.php" style="color:#383838;"> Buscar Pedido</a>
				          </li>
				        </ol>
						
						 <!-- INFORMACION -->
						 <div class="card-body">
						 	<div class="card-header" style="background-color: #f96332; color: #fff;">
									<h4 align="center" style="color: #fff;">Buscar Pedido</h4>
							</div>
						 	<form class="form-inline" style="float: right;" onkeypress="return anular(event)">
		                        <div class="form-group" >
		                          <label><strong> Ingrese N° de Pedido:</strong></label>
		                          <input type="text" name="buscar" class="form-control" id="busqueda" onkeypress="return isNumberKey(event)" maxlength="20" onkeyup="buscar_ajax(this.value);">
		                        </div>
                  			</form>
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
