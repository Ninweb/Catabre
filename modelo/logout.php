<?php
    session_start();
    include ("conexion.php"); 
    if(!isset($_SESSION['id_usuario'])) 
    {
          echo "<script>window.location.href='../index.php'</script>";

      exit();
      session_destroy(); 
    }
?>
<html>
  <head>
  </head>
  <body>
    <?php 
      // Borra todas las variables de sesión
      $_SESSION = array();
      // Borra la cookie que almacena la sesión
      if(isset($_COOKIE[session_name()])) {
      @setcookie(session_name(), '', time() - 42000, '/');
      }
      // Finalmente, destruir la sesión.
      @session_destroy();
        echo"<script>window.location.href='../index.php'</script>";
    ?>
  </body>
</html>