<?php
  session_start();
  session_destroy(); 
?>
<!DOCTYPE html>
<html lang="es">
  <head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="vista/logo/logo-dark.ico">
    <title>CATABRE</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/general.css" rel="stylesheet">
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
            <br>
            <form action="controlador/ingresar.php" method="post">
              
              <input type="email" name="email" id="correo" placeholder="Correo Electrónico" class="col-md-8 offset-md-2 form-control espacio_margen" autocomplete="off" autofocus="">
              <input type="password" name="clave" placeholder="Contraseña" class="col-md-8 offset-md-2 form-control espacio_margen" autocomplete="off">
              <br>
              <button class="col-md-8 offset-md-2 btn btn-info" type="submit" name="iniciar_sesion">Iniciar Sesión</button>
              <div align="center" style="padding-top:10px;">
                <a href="#" style="color: #ffffff;">¿Ha olvidado su contraseña?</a>
              </div>
            </form>
          </div>
        </div>
        
      </div>
        
      </div>


    <!-- Bootstrap core JavaScript-->
    <?php
      include("vista/script.php");
    ?>

  </body>

</html>
