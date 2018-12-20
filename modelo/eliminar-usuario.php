<?php
		include ("../modelo/conexion.php");



  			$id_usuario=$_POST['id_usuario'];
	    
			$delete=mysqli_query($db,"DELETE usuario,persona FROM usuario,persona WHERE usuario.id_usuario='".$id_usuario."' and persona.id_usuario='".$id_usuario."'");

             echo "<script>window.location.href='../vista/consultar-usuario.php'</script>";
   
?>