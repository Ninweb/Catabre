<?php 
    include('../modelo/usuario.php');
    include('../modelo/persona.php');
    include("../modelo/conexion.php");

    function modeloUsuario($json,$db){        
        $idUsuario = crearUsuario($json,$db);
        return $idUsuario;
    }
    
    function modeloPersona($json,$db){        
        crearPersona($json,$db);
        
    }

    $email=$_POST['email'];
    $password=$_POST['password'];

    $jsonUsuario =json_encode(array(
        "email"=>$email,
        "password"=>$password
    ));
    
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

?>