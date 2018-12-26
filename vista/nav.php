          <nav class="navbar navbar-expand static-top" style="background-color: #f96332">

            <a class="navbar-brand mr-1" href="#" style="color: #fff; font-weight: bold;">CATABRE</a>

            <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
              <i class="fas fa-bars"></i>
            </button>
            <ul class="navbar-nav ml-auto" style="color: #fff; font-weight: bold;">
          
	            <li class="nav-item">
	            	<i class="fas fa-user-circle"></i>
	                <?php
	                	include ("../modelo/conexion.php");
	                	$consulta_persona = mysqli_query($db, "SELECT * FROM persona,usuario WHERE persona.id_usuario=usuario.id_usuario AND  usuario.id_usuario='".$_SESSION['id_usuario']."'");
	                	$fila=mysqli_fetch_array($consulta_persona);
	                	echo $fila['nombre'].' '.$fila['apellido'];
	                ?>
	            </li>
      		</ul>
         </nav>
