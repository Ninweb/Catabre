<?php
	
			include ("../modelo/conexion.php");

			 if (isset($_POST['iniciar_sesion'])) {
			 		$email=$_POST['email'];
			 		$password=$_POST['clave'];
    				$password=md5($password);
    				$consulta_usuario = mysqli_query($db, "SELECT * FROM usuario WHERE email='".$_POST['email']."' AND clave='".$password."'");

    				if (mysqli_num_rows($consulta_usuario)>0) {

    					$row=mysqli_fetch_array($consulta_usuario);

    					if ($row['tipo']=='user'){

    							 @session_start();
          						$_SESSION['id_usuario']=$row['id_usuario'];
                  				 echo "<script>window.location.href='../vista/mi-pedido.php'</script>";
    					}

    					if ($row['tipo']=='admin'){

    							
    							 @session_start();
          						$_SESSION['id_usuario']=$row['id_usuario'];
                  				 echo "<script>window.location.href='../vista/nuevo-pedido.php'</script>";

    					}

    				}else{

    					echo "el email y/o contraseña no existen";


    				}

			 }

?>