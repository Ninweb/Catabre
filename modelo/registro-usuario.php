<?php
	include ("../modelo/conexion.php");

	if (isset($_POST['registrar'])) {

		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$empresa=$_POST['empresa'];
		$email=$_POST['email'];
		$password=$_POST['password'];


		$registrar=mysqli_query($db,"INSERT INTO usuario(email,clave,tipo) VALUES('".$email."','".$password."','user')");
		
		$id=mysqli_insert_id($db);


		$registrar=mysqli_query($db,"INSERT INTO persona(id_usuario,nombre,apellido,empresa) VALUES('".$id."','".$nombre."','".$apellido."','".$empresa."')");
		
		



		echo "true";
	}
	


?>