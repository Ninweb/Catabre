<?php
  session_start();
  session_destroy(); 
?>
<!DOCTYPE html>
<html lang="es">
  <head>
   <?php
      include("head.php");
    ?>
  </head>

  <body>

      
    <div id="cuerpo" >
      <br><br><br><br><br><br>
      <div class="col-lg-4 offset-lg-4">
        
        <div id="fondo" class="card ">
          
          <div class="card-header">

            <h1 align="center" style="width: 100%">
              <strong style="color:#ffffff;">CATABRE</strong>
            </h1>

          </div>
          <div class="card-body form-group">
            
            <h4 align="center" style="width: 100%">
              <strong style="color:#ffffff;">Recuperar Contraseña</strong>
            </h4>
            <br>
            <form action="../controlador/recuperar-password.php" method="post">
              
              <input type="email" name="email" id="correo" placeholder="Correo Electrónico" class="col-md-8 offset-md-2 form-control espacio_margen" autocomplete="off" autofocus="">              <br>
              <button class="col-md-8 offset-md-2 btn btn-info" type="submit" name="recuperar">Enviar</button>
              <div align="center" style="padding-top:10px;">
                <a href="../index.php" style="color: #ffffff;">Volver al Inicio</a>
              </div>
            </form>
          </div>
        </div>
        
      </div>
        
      </div>


    <!-- Bootstrap core JavaScript-->
    <?php
      include("script.php");
    ?>

  </body>

</html>
