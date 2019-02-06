<?php
	include ("../modelo/conexion.php");
    include("script.php");

  	$id_contenedor=$_POST['id_contenedor'];
    $consulta=mysqli_query($db, "SELECT * FROM contenedor WHERE id_contenedor='".$id_contenedor."'");
  	$resultados=mysqli_fetch_array($consulta);


  	?>
        

			<form id="formularioEditarContenedor">
				<input type="hidden" name="id_contenedor" value="<?php echo $resultados['id_contenedor']?>">
				<input type="hidden" name="funcion" value="editar">
                <br>
				<div class="col-md-12 offset-md-3">
						<label for="num_referencia">N° Referencia</label>
				</div>
				<div class="input-group col-md-12 offset-md-3">
					
						<div class="input-group-prepend">
						<i class="fas fa-hashtag input-group-text" style="background-color: #1abc9c; color: #fff; padding-top: 10px;"></i>
					</div>
					<input required  autocomplete="off" type="text" name="num_referencia" value="<?php echo $resultados['ref']?>" class="col-md-5 form-control">

				</div><br>

				
				<div class="col-md-12 offset-md-3">
						<label for="num_referencia">Nombre</label>
				</div>
				<div class="input-group col-md-12 offset-md-3">

						<div class="input-group-prepend">
						<i class="fas fa-file-signature input-group-text" style="background-color: #1abc9c; color: #fff; padding-top: 10px;"></i>
					</div>
					<input required  autocomplete="off" type="text" name="nombre" value="<?php echo $resultados['nombre_conte']?>" class="col-md-5 form-control">

				</div>&nbsp;
				<div class="input-group col-md-12 offset-md-3">

					<div class="form-check mb-2 mr-sm-2">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="status" value="disponible"> Status-Diposible
						</label>
						</div>
				</div>
				&nbsp;
					<div class="form-group" align="center">        
						<div class="col-sm-offset-4 col-sm-10">
							<button type="submit" name="modificar" class="btn btn-primary">Modificar</button>
						</div>
				</div>
			</form>

            <div id="mostrarDatos">
										
			</div>

