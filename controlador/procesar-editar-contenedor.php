<?php
		include ("../modelo/conexion.php");


	if (isset($_POST['modificar'])) {

  			$id_contenedor=$_POST['id_contenedor'];
	      $ref=$_POST['num_referencia'];
	      $nombre=$_POST['nombre'];
	      $update=mysqli_query($db,"UPDATE contenedor SET ref='$ref',nombre='$nombre' WHERE id_contenedor='".$id_contenedor."'");

               echo "<script>window.location.href='../vista/consultar-contenedor.php'</script>";

    
  	}
?>