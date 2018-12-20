<?php
	include ("../modelo/conexion.php");
	if (isset($_POST['registrar'])) {

		$num_referencia=$_POST['num_referencia'];
		$nombre=$_POST['nombre'];

		$registrar=mysqli_query($db,"INSERT INTO contenedor(ref,nombre) VALUES('".$num_referencia."','".$nombre."')");
			
		echo "mostrar modal exito";
	}

	

	
?>