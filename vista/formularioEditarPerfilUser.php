<?php
	include ("../modelo/conexion.php");
	include ('script.php');
  	$id_usuario=$_POST['id_usuario'];
    $consulta=mysqli_query($db, "SELECT * FROM persona,usuario WHERE persona.id_usuario=usuario.id_usuario AND usuario.id_usuario='".$id_usuario."'");
  	$resultados=mysqli_fetch_array($consulta);

  	?>

	<form id="formularioEditarUsuario">
		<br>
		<input type="hidden" name="id_usuario" value="<?php echo $resultados['id_usuario'] ?>">
		<input type="hidden" name="funcion" value="editar">
		<div class="col-md-12">
				<label for="nombre">Nombre</label>
		</div>
		<div class="input-group col-md-12">
				<div class="input-group-prepend">
				<i class="fas fa-user input-group-text" style="background-color: #1abc9c; color: #fff; padding-top: 10px;"></i>
			</div>
			<input required  autocomplete="off" type="text" name="nombre" value="<?php echo $resultados['nombre']; ?>" class="col-md-7 form-control">

		</div><br>
		<div class="col-md-12">
				<label for="apellido">Apellido</label>
		</div>
		<div class="input-group col-md-12">
				<div class="input-group-prepend">
				<i class="fas fa-file-signature input-group-text" style="background-color: #1abc9c; color: #fff; padding-top: 10px;"></i>
			</div>
			<input required  autocomplete="off" type="text" name="apellido" value="<?php echo $resultados['apellido'] ?>" class="col-md-7 form-control">

		</div><br>
		<div class="col-md-12">
				<label for="empresa">Empresa</label>
		</div>
		<div class="input-group col-md-12">
				<div class="input-group-prepend">
				<i class="fas fa-building input-group-text" style="background-color: #1abc9c; color: #fff; padding-top: 10px;"></i>
			</div>
			<input required  autocomplete="off" type="text" name="empresa" value="<?php echo $resultados['empresa'] ?>" class="col-md-7 form-control">

		</div><br>
		<div class="col-md-12">
				<label for="correo">Correo Eléctronico</label>
		</div>
		<div class="input-group col-md-12">
				<div class="input-group-prepend">
				<i class="far fa-envelope input-group-text" style="background-color: #1abc9c; color: #fff; padding-top: 10px;"></i>
			</div>
			<input required  autocomplete="off" type="email" name="email" value="<?php echo $resultados['email'] ?>" class="col-md-7 form-control">

		</div><br>
		<div id="old_pass">
			<div class="col-md-12">
					<label for="clave">Contraseña</label>
			</div>
			<div class="input-group col-md-12 prueba">
				<div class="input-group-prepend">
					<i class="fas fa-key input-group-text" style="background-color: #1abc9c; color: #fff; padding-top: 10px;"></i>
				</div>
				<input required  autocomplete="off" type="password" name="password" value="<?php echo $resultados['clave'] ?>" class="col-md-7 form-control" disabled>
				<button type="button" name="modificar" id="cambiarContraseña" class="btn btn-primary">Cambiar Contraseña</button>
			</div>
		</div>


		
		<input type="hidden" name="nuevaContraseña" id="nuevaContraseña" value="false">



		<div id="new_pass" style="display:none;">
			<div class="col-md-12">
					<label for="nuevaClave">Nueva Contraseña</label>
			</div>
			<div class="input-group col-md-12 prueba">
				<div class="input-group-prepend">
					<i class="fas fa-key input-group-text" style="background-color: #1abc9c; color: #fff; padding-top: 10px;"></i>
				</div>
				<input   autocomplete="off" type="password" name="newPassword" class="col-md-7 form-control">
			</div>

			<div class="col-md-12">
					<label for="clave">Repite Contraseña</label>
			</div>
			<div class="input-group col-md-12 prueba">
				<div class="input-group-prepend">
					<i class="fas fa-key input-group-text" style="background-color: #1abc9c; color: #fff; padding-top: 10px;"></i>
				</div>
				<input   autocomplete="off" type="password" name="rePassword"  class="col-md-7 form-control">
			</div>
		</div>


		
		
		&nbsp;
			<div class="form-group" align="center">        
				<div class="col-sm-10">
					<button type="submit" name="modificar" class="btn btn-primary">Modificar</button>
				</div>
		</div>
		</form>
    <div id="mostrarDatos">
    </div>