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
				            <a href="nuevo-contenedor.php" style="color:#383838;"> Registrar Contenedor</a>
				          </li>
				           <li class="breadcrumb-item">
				            <a href="consultar-contenedor.php" style="color: #17a2b8;"> Consultar Contenedor</a>
				          </li>
				        </ol>
							<div class="card">
								<div class="card-header" style="background-color: #f96332; color: #fff;">
									<h4 align="center" style="color: #fff;">Consultar Contenedor</h4>
								</div>
								<div class="card-body">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>#REFERENCIA</th>
												<th>NOMBRE</th>
												<th>MODIFICAR</th>
												<th>ELIMINAR</th>
											</tr>
										</thead>
									<?php
										
										include ("../modelo/conexion.php");
										$consulta_contenedor=mysqli_query($db, "SELECT * FROM contenedor");
										while ($fila=mysqli_fetch_array($consulta_contenedor)) {
											?>
												
												    <tbody>
												      <tr>
												        <td><?php echo $fila['ref']; ?></td>
												        <td><?php echo $fila['nombre']; ?></td>
												         <td>
								                              <a href="#" id="<?php echo $fila['id_contenedor'];?>" data-target="#editar-contenedor" class="btn btn-success" data-toggle="modal" data-id="<?php echo $fila['id_contenedor'];?>">
								                              <i class="far fa-edit" aria-hidden="true"></i>
								                              </a>

								                          </td>
								                          <td>
							                                  <a href="#" class="btn btn-danger"  data-toggle="modal" data-target="#eliminar-contenedor" data-book-id="<?php echo $fila['id_contenedor'];?>">
							                                    <i class="fas fa-trash-alt" aria-hidden="true"></i>
							                                  </a>
                          								</td>
												      </tr>
												    </tbody>
											<?php
										}
									?>
									</table>
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
     			 include("modal-editar-contenedor.php");
     			 include("modal-eliminar-contenedor.php");
   			 ?>
	</body>
</html>