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
						 	<div class="card-header" style="background-color: #f96332; color: #fff;">
									<h4 align="center" style="color: #fff;">Consultar Pedido</h4>
							</div>
						 	<table class="table table-bordered">
										<thead>
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
										
										include ("../modelo/conexion.php");
										$consulta_pedido=mysqli_query($db, "SELECT * FROM contenedor,pedido,producto,persona WHERE producto.id_pedido=pedido.id_pedido AND contenedor.id_contenedor=pedido.id_pedido AND persona.id_persona=pedido.id_persona");
										while ($fila=mysqli_fetch_array($consulta_pedido)) {
											?>
												
												    <tbody>
												      <tr>
												      	<td><?php echo $fila['num_referencia']; ?></td>
												        <td><?php echo $fila['nombre']; ?></td>
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
