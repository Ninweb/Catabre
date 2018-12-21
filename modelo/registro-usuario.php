<?php
	include ("conexion.php");


	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$empresa=$_POST['empresa'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$password=md5($password);


	$registrar=mysqli_query($db,"INSERT INTO usuario(email,clave,tipo) VALUES('".$email."','".$password."','user')");
	
	$id=mysqli_insert_id($db);


	$registrar=mysqli_query($db,"INSERT INTO persona(id_usuario,nombre,apellido,empresa) VALUES('".$id."','".$nombre."','".$apellido."','".$empresa."')");
	
	



	echo "<script>swal('Guardado!', 'Nuevo Usuario', 'success');</script>";
    echo "<script>document.getElementById('formularioUsuario').reset();</script>";

	


?>