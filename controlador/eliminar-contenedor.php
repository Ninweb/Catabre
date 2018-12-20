<?php
		include ("../modelo/conexion.php");



  			$id_contenedor=$_POST['id_contenedor'];
	    
			$delete=mysqli_query($db,"DELETE contenedor FROM contenedor WHERE id_contenedor='".$id_contenedor."'");

             echo "<script>window.location.href='../vista/consultar-contenedor.php'</script>";
   
?>