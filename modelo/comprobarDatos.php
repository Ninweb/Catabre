<?php
   // include ("../../modelo/conexion.php");

   function comprobarCorreo($email,$db){
      echo "entro a la funcion comprobar correo, ";
      // $correo = json_decode($json);

      $get_email = mysqli_query($db, "SELECT * FROM usuarios WHERE email='$email'");
      $result = $db->query($get_email);
      $cont = mysqli_num_rows($result);

      // $busqueda = "SELECT email FROM usuarios WHERE email='$correo->email'";
      // $result = $db->query($busqueda);


      // echo $get_email."algo";

      if($cont==1){
         echo " entro al if get email, ";
         return true;
      }else{
         echo " no entro al if get email, ";
         return false;
      }
   }
/*
   $email = $_POST['email'];

   $get_email = "SELECT email FROM usuarios WHERE email='$email'";
   mysqli_query($db,$get_email);

   if($get_email == $email){
      echo "
         <script>
         swal({
            title: \"¡Error!\", 
            text: \"Este correo ya se encuentra en la base de datos. Por favor, verifique e ingrese un correo electrónico valido.\",
            icon: \"error\"
          })
         </script>
      ";
   }
   */
?>