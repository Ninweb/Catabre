<?php
		include ("../modelo/conexion.php");


	if (isset($_POST['modificar'])) {

  	$id_usuario=$_POST['id_usuario'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$empresa=$_POST['empresa'];
	$email=$_POST['email'];
	$password=$_POST['password'];


	     $update=mysqli_query($db,"UPDATE persona,usuario SET persona.nombre='$nombre',persona.apellido='$apellido',persona.empresa='$empresa',usuario.email='$email',usuario.clave='$password' WHERE usuario.id_usuario='".$id_usuario."' AND persona.id_usuario='".$id_usuario."'");

               echo "<script>window.location.href='../vista/mi-perfil-admin.php'</script>";

    
  	}
?>