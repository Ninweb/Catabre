   
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">

      <!--nuevo-pedido-->
      

        <li class="nav-item">
            <a class="nav-link" <?php if ($page=="Pedido"){
                    ?>
                    style="color: #383838; background: white;"
                    <?php
                  }
                ?>  

                href="nuevo-pedido.php">
             <i class="fas fa-cart-arrow-down"></i>
                  <span>Pedido</span>
            </a>
        </li>
       
      
        <li class="nav-item">
             <a class="nav-link" <?php if ($page=="Contenedor"){
                    ?>
                    style="color: #383838; background: white;"
                    <?php
                  }
                ?>   href="nuevo-contenedor.php">            
              <i class="fas fa-ship"></i>
                <span>Contenedores</span>
            </a>
        </li>
        <li class="nav-item">
         <a class="nav-link" <?php if ($page=="Usuarios"){
                    ?>
                    style="color: #383838; background: white;"
                    <?php
                  }
                ?> href="nuevo-usuario.php">
            <i class="fas fa-users"></i>
            <span>Usuarios</span></a>
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



    