         
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">

      <!--nuevo-pedido-->
      

        <li class="nav-item">
            <a class="nav-link" <?php if ($page=="Mi Pedido"){
                    ?>
                    style="color: #383838;"
                    <?php
                  }
                ?>  

                href="mi-pedido.php">
             <i class="fas fa-cart-arrow-down"></i>
                  <span>Mi Pedido</span>
            </a>
        </li>
       
       <li class="nav-item">
            <a class="nav-link" <?php if ($page=="Historial de Pedidos"){
                    ?>
                    style="color: #383838;"
                    <?php
                  }
                ?>  

                href="historia-pedidos.php">
              <i class="fas fa-list-ul"></i>
                  <span>Historial de Pedidos</span>
            </a>
        </li>
      
        <li class="nav-item">
             <a class="nav-link" <?php if ($page=="Contenedores"){
                    ?>
                    style="color: #383838;"
                    <?php
                  }
                ?>   href="contenedores.php">            
              <i class="fas fa-ship"></i>
                <span>Contenedores</span>
            </a>
        </li>
       
        <li class="nav-item">
         <a class="nav-link" <?php if ($page=="Mi Perfil"){
                    ?>
                    style="color: #383838;"
                    <?php
                  }
                ?> href="mi-perfil-user.php">
            <i class="far fa-address-card"></i>
            <span>Mi Perfil</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">
            <i class="fas fa-power-off"></i>
            <span>Cerrar Sesión</span></a>
        </li>
      </ul>



    