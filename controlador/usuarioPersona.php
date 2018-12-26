<?php 
   include('../modelo/usuario.php');
   include('../modelo/persona.php');
   include("../modelo/conexion.php");
   include("../modelo/comprobarDatos.php");

   function modeloUsuario($json,$db){        
      $idUsuario = crearUsuario($json,$db);
      return $idUsuario;
   }
   
   function modeloPersona($json,$db){        
      crearPersona($json,$db);        
   }

   function modeloComprobar($json,$db){
      $comprobacion = comprobarCorreo($json,$db);

      return $comprobacion;
   }

   $email=$_POST['email'];
   $password=$_POST['password'];

   $jsonUsuario =json_encode(array(
      "email"=>$email,
      "password"=>$password
   ));

   $comp_email = modeloComprobar($email,$db);

   if ($comp_email){
      echo "entro al if 1, ";
      echo "<script>
      swal({
         title: \"¡Error!\", 
         text: \"Este correo ya se encuentra en la base de datos. Por favor, verifique e ingrese un correo electrónico valido.\",
         icon: \"error\"
         })
      </script>";
   }else{
      echo " no entro al if 1, ";
      $idUsuario = modeloUsuario($jsonUsuario,$db);

      $nombre=$_POST['nombre'];
      $apellido=$_POST['apellido'];
      $empresa=$_POST['empresa'];
      
      $jsonPersona =json_encode(array(
         "idUsuario"=>$idUsuario,
         "nombre"=>$nombre,
         "apellido"=>$apellido,
         "empresa"=>$empresa,
      ));

      modeloPersona($jsonPersona,$db);

      
      echo "<script>swal('Guardado!', 'Nuevo Usuario', 'success');</script>";
      echo "<script>document.getElementById('formularioUsuario').reset();</script>";
   }
   
   

?>