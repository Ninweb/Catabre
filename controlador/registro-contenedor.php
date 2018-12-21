<?php
	include ("../modelo/conexion.php");
	$num_referencia=$_POST['num_referencia'];
	$nombre=$_POST['nombre'];

	$registrar=mysqli_query($db,"INSERT INTO contenedor(ref,nombre,status) VALUES('".$num_referencia."','".$nombre."','disponible')");
		
	
	echo "<script>swal('Guardado!', 'Nuevo Contenedor', 'success');</script>";
    echo "<script>document.getElementById('formularioContenedor').reset();</script>";
	

	

	
?>