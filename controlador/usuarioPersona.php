<?php 
    include('../modelo/usuario.php');
    include('../modelo/persona.php');
    include("../modelo/conexion.php");

    function modeloUsuario($json,$db,$funcionCRUD){        
        if($funcionCRUD == 'crear'){
            $idUsuario = crearUsuario($json,$db);
        }else if ($funcionCRUD == "editar"){
            $idUsuario = editarUsuario($json,$db);
        }else if($funcionCRUD == 'eliminar'){
            $idUsuario = eliminarUsuario($json,$db);
        }
        return $idUsuario;
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
        $comprobacion = comprobarCorreo($json,$db);
  
        return $comprobacion;
     }

    $funcionCRUD = $_POST['funcion'];


    if($funcionCRUD == 'crear'){

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
            $email=$_POST['email'];
            $password=$_POST['password'];
            $jsonUsuario =json_encode(array(
                "email"=>$email,
                "password"=>$password
            ));
        }
    }else if ($funcionCRUD == 'editar'){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $id_usuario = $_POST['id_usuario'];
        $jsonUsuario =json_encode(array(
            "email"=>$email,
            "password"=>$password
            "id_contenedor"=>$id_usuario
        ));
    }else if($funcionCRUD == 'eliminar'){
        $id_usuario = $_POST['id_contenedor'];
        $jsonContenedor =json_encode(array(
            "id_contenedor"=>$id_usuario
        ));
    }

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
        //buscar id de persona asociada a idUsuario
        //$id_persona = no se 
        $nombre=$_POST['nombre'];
	    $apellido=$_POST['apellido'];
        $empresa=$_POST['empresa'];
        $jsonUsuario =json_encode(array(
            "nombre"=>$nombre,
            "apellido"=>$apellido,
            "empresa"=>$empresa
            "id_persona"=>$id_persona
        ));
    }else if($funcionCRUD == 'eliminar'){
        //buscar id de persona asociada a idUsuario
        //$id_persona = no se 
        $jsonContenedor =json_encode(array(
            "id_persona"=>$id_persona
        ));
    }


    modeloPersona($jsonPersona,$db,$funcionCRUD);

    
    if($funcionCRUD=='crear'){
        echo "<script>swal('Guardado!', 'Nuevo Usuario', 'success').then(
            function(){ 
                location.reload();
            }
        );</script>";
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

?>