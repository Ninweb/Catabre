<?php
   include ("conexion.php");

   function comprobarCorreo($email,$db){
      $sql = "SELECT * from usuario where email='$email'";
      $get_email = mysqli_query($db, $sql);
      // $result = $db->query($get_email);
      $cont = mysqli_num_rows($get_email);

      if($cont>0){
         return true;
      }else{
         return false;
      }
   }

   function comprobarRefContenedor($num_referencia,$db){
      $sql = "SELECT * from contenedor where ref='$num_referencia'";
      $get_ref = mysqli_query($db, $sql);
      $cont = mysqli_num_rows($get_ref);

      if($cont>0){
         return true;
      }else{
         return false;
      }
   }

   function comprobarCorreoEdit($jsonUsuario,$db){
      echo "<script>alert('entro a comprobar correo edit');</script>";
      $json = json_decode($jsonUsuario);
      $sql_id = "SELECT * from usuario where email='$json->email' and id_usuario!='$json->id_usuario'";
      // $get_id = mysqli_fetch_array($sql_id, $db);
      $get_id = mysqli_fetch_array($db, $sql_id);
      echo($get_id);

      if ($get_id){
         echo "<script>alert('entro al if de comprobar correo edit');</script>";
         $sql_email = "SELECT email from usuario where email='$json->email'";
         $get_email = mysqli_fetch_array($db, $sql_email);

         return comprobarCorreo($get_email,$db);
      }else{
         echo "<script>alert('entro al else comprobar correo edit');</script>";
         return false;
      }
   }
?>