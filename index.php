<?php
  session_start();
  session_destroy(); 
?>
<!DOCTYPE html>
<html lang="es">
  <head>
  <?php
      include("./vista/head.php");
    ?>
  </head>

  <body id="body_home">

      
    <div id="cuerpo" >
      <br><br><br><br><br><br>
      <div class="col-lg-4 offset-lg-4">
        
        <div id="fondo" class="card" style="border:1px solid #adadad;">
          
          <div class="card-header" style="background:white;">

            <h1 align="center" style="width: 100%;">
              <strong>CATABRE</strong>
            </h1>

          </div>
          <div class="card-body form-group" style="background:white;">
            <br>
            <form id="formularioSesion">
              <input type="hidden" name="validacion" value="">
              <input type="email" name="email" id="correo" placeholder="Correo Electrónico" class="col-md-8 offset-md-2 form-control espacio_margen" autocomplete="off" autofocus="">
              <input type="password" name="clave" placeholder="Contraseña" class="col-md-8 offset-md-2 form-control espacio_margen" autocomplete="off">
              <br>
              <button style="background:#333333; color:#adadad" class="col-md-8 offset-md-2 btn" type="submit" name="iniciar_sesion">Iniciar Sesión</button>
              <div align="center" style="padding-top:10px;">
                <a href="vista/recuperar-password.php" style="text-decoration:none;">¿Ha olvidado su contraseña?</a>
              </div>
            </form>
            <div id="mostrarDatos" style="background:white;">
            </div>
          </div>
        </div>
        
      </div>
        
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vista/js/jquery.min.js"></script>
    <script src="vista/js/bootstrap.min.js"></script>
    <script src="vista/js/sb-admin.js"></script>
    <script src="vista/js/ajaxRegistros.js"></script>
    <script src="vista/js/validar.js"></script>
    <script src="vista/js/tabla-constructor.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="vista/js/validacionesPedido.js"></script>
    <script src="vista/js/validacionesUsuario.js"></script>
  </body>

</html>
