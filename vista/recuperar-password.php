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

      
    <div id="cuerpo" style="margin-top:5%;">
      <!-- <br><br><br><br><br><br> -->
      <div class="col-lg-4 offset-lg-4">
        
        <div id="fondo" class="card" style="border:1px solid #adadad;">
          
          <div class="card-header" style="background:#1abc9c; color:white">

            <h2 align="center" style="width: 100%; text-align:center;">
              <p>Grupo Catabre - Sistema de Administración</p>
            </h2>

          </div>
          <div class="card-body form-group">
            
            <h4 align="center" style="width: 100%">
              <strong style="color:#333;">Recuperar Contraseña</strong>
            </h4>
            <br>
            <form action="../controlador/recuperar-password.php" method="post">
              
              <input type="email" name="email" id="correo" placeholder="Correo Electrónico" class="col-md-8 offset-md-2 form-control espacio_margen" autocomplete="off" autofocus="">              <br>
              <button style="background:#333333; color:#adadad; border:none;" class="col-md-8 offset-md-2 btn btn-info" type="submit" name="recuperar">Enviar</button>
              <div align="center" style="padding-top:10px;">
                <a href="../index.php" style="text-decoration:none;">Volver al Inicio</a>
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
