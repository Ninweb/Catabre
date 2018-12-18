<!DOCTYPE html>
<html lang="es">
  <head>
    <?php
      include("vista/head.php");
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
            <br>
            <input type="email" name="correo" id="correo" placeholder="Correo Electrónico" class="col-md-8 offset-md-2 form-control espacio_margen" autocomplete="off" autofocus="">
            <input type="password" name="clave" placeholder="Contraseña" class="col-md-8 offset-md-2 form-control espacio_margen" autocomplete="off">
            <br>
            <button class="col-md-8 offset-md-2 btn btn-info" name="iniciar_sesion">Iniciar Sesión</button>
            <div align="center">
              <a href="#" style="color: #ffffff;">¿Ha olvidado su contraseña?</a>
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