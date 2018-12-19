   
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">

      <!--nuevo-pedido-->
      

        <li class="nav-item">
            <a class="nav-link" <?php if ($page=="Pedido"){
                    ?>
                    style="color: #383838;"
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
                    style="color: #383838;"
                    <?php
                  }
                ?>   href="nuevo-contenedor.php">            
              <i class="fas fa-ship"></i>
                <span>Contenedor</span>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="nuevo-usuario.php">
            <i class="fas fa-users"></i>
            <span>Usuarios</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-power-off"></i>
            <span>Cerrar Sesión</span></a>
        </li>
      </ul>



    