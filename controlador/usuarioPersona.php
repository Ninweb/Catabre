<?php 
    include('../modelo/usuario.php');
    include('../modelo/persona.php');
    include("../modelo/conexion.php");
    include("../modelo/comprobarDatos.php");

    function modeloUsuario($json,$db,$funcionCRUD){        
        if($funcionCRUD == 'crear'){
            $idUsuario = crearUsuario($json,$db);
            return $idUsuario;
        }else if ($funcionCRUD == "editar"){
            editarUsuario($json,$db);
            return $_POST['id_usuario'];
        }else if($funcionCRUD == 'eliminar'){
            eliminarUsuario($json,$db);
            return $_POST['id_usuario'];
        }
    }
    
    function modeloPersona($json,$db,$funcionCRUD){        
        if($funcionCRUD == 'crear'){
            crearPersona($json,$db);
        }else if ($funcionCRUD == "editar"){
            editarPersona($json,$db);
        }else if($funcionCRUD == 'eliminar'){
            eliminarPersona($json,$db);
        }
    }

    function modeloComprobar($json,$db){
        $comprobacionCorreo = comprobarCorreo($json,$db);
  
        return $comprobacionCorreo;
     }

    $funcionCRUD = $_POST['funcion'];
    $contraseñaErronea = false;

    if($funcionCRUD == 'crear'){    
        $email=$_POST['email'];
        $password=$_POST['password'];
        $jsonUsuario =json_encode(array(
            "email"=>$email,
            "password"=>$password
        ));        

        $comp_email = modeloComprobar($email,$db);        
    }else if ($funcionCRUD == 'editar'){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $jsonUsuario =json_encode(array(
            "email"=>$email,
            "password"=>$password
        ));     
    }else if ($funcionCRUD == 'editar'){
        $email=$_POST['email'];
        $id_usuario = $_POST['id_usuario'];
        $hayNuevaContraseña=$_POST['nuevaContraseña'];
        echo "<script>alert('hola1');</script>";
        $nuevaContraseña = $_POST['newPassword'];
        $repiteContraseña = $_POST['rePassword'];
        if($nuevaContraseña == $repiteContraseña){
            $jsonUsuario =json_encode(array(
                "email"=>$email,
                'password'=>md5($nuevaContraseña),
                "id_usuario"=>$id_usuario
            ));
        }else{
            $contraseñaErronea = true;
        }
    }else if($funcionCRUD == 'eliminar'){
        $id_usuario = $_POST['id_usuario'];
        $jsonUsuario =json_encode(array(
            "id_usuario"=>$id_usuario
        ));
    }

    if($comp_email){
        echo "<script>
            swal({
                title: \"¡Error!\", 
                text: \"Este correo ya se encuentra registrado. Por favor, verifique e ingrese un correo electrónico valido.\",
                icon: \"error\"
                })
            </script>";
    }else{
        $idUsuario = modeloUsuario($jsonUsuario,$db,$funcionCRUD);

        if($funcionCRUD == 'crear'){
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $empresa=$_POST['empresa'];
            $jsonPersona =json_encode(array(
                "idUsuario"=>$idUsuario,
                "nombre"=>$nombre,
                "apellido"=>$apellido,
                "empresa"=>$empresa
            ));
                
        }else if ($funcionCRUD == 'editar'){
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $empresa=$_POST['empresa'];
            $jsonPersona =json_encode(array(
                "nombre"=>$nombre,
                "apellido"=>$apellido,
                "empresa"=>$empresa,
                "id_usuario"=>$idUsuario
            ));
        }else if($funcionCRUD == 'eliminar'){
    
            $jsonPersona =json_encode(array(
                "id_usuario"=>$idUsuario
            ));
        }


        modeloPersona($jsonPersona,$db,$funcionCRUD);

        
        if($funcionCRUD=='crear'){
            if ($comp_email){
                // echo "entro al if 1, ";
                echo "<script>
                swal({
                    title: \"¡Error!\", 
                    text: \"Este correo ya se encuentra en la base de datos. Por favor, verifique e ingrese un correo electrónico valido.\",
                    icon: \"error\"
                    })
                </script>";
            }else{
                echo "<script>swal('Guardado!', 'Nuevo Usuario', 'success').then(
                    function(){ 
                        location.reload();
                    }
                );</script>";
            }   
        }else if ($funcionCRUD == 'editar'){
            echo "<script>swal('Guardado!', 'Fue editado el usuario', 'success').then(
                function(){ 
                    location.reload();
                }
            );</script>";
        }else if ($funcionCRUD == 'eliminar'){
            echo "<script>swal('Eliminado!', 'Fue eliminado el usuario', 'success').then(
                function(){ 
                    location.reload();
                }
            );</script>";
        }
    }
    
    
    

    

?>