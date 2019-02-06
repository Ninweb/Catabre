   
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">

      <!--nuevo-pedido-->
      

        <li class="nav-item">
           <div id="accordion">
		         <a class="nav-link" data-toggle="collapse" href="#collapseThree" <?php if ($page=="Pedido"){
                    ?>
                    style="color: #383838; background: white;"
                    <?php
                  }
                ?>  

                href="#">
            	 <i class="fas fa-cart-arrow-down"></i>
                  <span>Pedido</span>
                  <i class="fas fa-angle-right" style="float:right;"> </i> </a>
		            <div id="collapseThree" class="collapse" data-parent="#accordion">
		            	<ul class="navbar-nav">
		                    <li class="nav-item">
		                        <a class="nav-link"  href="nuevo-pedido.php"> Registrar</a>
		                    </li>
		                    <li class="nav-item">
		                        <a class="nav-link"  href="consultar-pedido.php"> Consultar</a>
		                    </li>
		                </ul>

		            </div>
		     </div>
        </li>
       
      
        <li class="nav-item">
              <div id="accordion">
		         <a class="nav-link" data-toggle="collapse" href="#collapseFour" <?php if ($page=="Contenedor"){
                    ?>
                    style="color: #383838; background: white;"
                    <?php
                  }
                ?>   href="#">            
              	<i class="fas fa-ship"></i>
                <span>Contenedores</span>
               	<i class="fas fa-angle-right" style="float:right;"> </i> </a>
		            <div id="collapseFour" class="collapse" data-parent="#accordion">
		            	<ul class="navbar-nav">
		                    <li class="nav-item">
		                        <a class="nav-link"  href="nuevo-contenedor.php"> Registrar</a>
		                    </li>
		                    <li class="nav-item">
		                        <a class="nav-link"  href="consultar-contenedor.php"> Consultar</a>
		                    </li>
		                </ul>

		            </div>
		    </div>
        </li>


        <li class="nav-item">
        	<div id="accordion">
		         <a class="nav-link" data-toggle="collapse" href="#collapseTwo" <?php if ($page=="Usuarios"){
		                    ?>
		                    style="color: #383838; background: white;"
		                    <?php
		                  }
		                ?> href="#">
		            <i class="fas fa-users"></i>
		            Clientes <i class="fas fa-angle-right" style="float:right;"> </i> </a>
		            <div id="collapseTwo" class="collapse" data-parent="#accordion">
		            	<ul class="navbar-nav">
		                    <li class="nav-item">
		                        <a class="nav-link"  href="nuevo-usuario.php"> Registrar</a>
		                    </li>
		                    <li class="nav-item">
		                        <a class="nav-link"  href="consultar-usuario.php"> Consultar</a>
		                    </li>
		                </ul>

		            </div>
             </div>               
        </li>
        <li class="nav-item">
         <a class="nav-link" <?php if ($page=="Mi Perfil"){
                    ?>
                    style="color: #383838; background: white;"
                    <?php
                  }
                ?> href="mi-perfil-admin.php">
            <i class="far fa-address-card"></i>
            <span>Mi Perfil</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">
            <i class="fas fa-power-off"></i>
            <span>Cerrar Sesión</span></a>
        </li>
      </ul>



    