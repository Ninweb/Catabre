<?php
   include ("conexion.php");

   function comprobarCorreo($email,$db){
      // echo "entro a la funcion comprobar correo, ";
      // $correo = json_decode($json);

      $sql = "SELECT * from usuario where email='$email'";
      $get_email = mysqli_query($db, $sql);
      // $result = $db->query($get_email);
      $cont = mysqli_num_rows($get_email);

      if($cont>0){
         // echo " entro al if get email, ";
         return true;
      }else{
         // echo " no entro al if get email, ";
         return false;
      }
   }

   function comprobarRefContenedor($num_referencia,$db){
      // echo "entro a la funcion comprobar correo, ";
      // $correo = json_decode($json);

      $sql = "SELECT * from contenedor where ref='$num_referencia'";
      $get_ref = mysqli_query($db, $sql);
      // $result = $db->query($get_email);
      $cont = mysqli_num_rows($get_ref);

      if($cont>0){
         // echo " entro al if get email, ";
         return true;
      }else{
         // echo " no entro al if get email, ";
         return false;
      }
   }
?>