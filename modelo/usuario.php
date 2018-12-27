<?php
    function crearUsuario($json,$db){
        $usuario = json_decode($json);
        $registrar=mysqli_query($db,"INSERT INTO usuario(email,clave,tipo) VALUES('$usuario->email','$usuario->password','user')");
        $id=mysqli_insert_id($db);
        return $id;
    }

    function editarUsuario($json,$db){
        $usuario = json_decode($json);
        $registrar=mysqli_query($db,"UPDATE usuario SET email='$usuario->email', clave='$usuario->password' WHERE id_usuario= '$usuario->id_usuario' ");
    }

    function eliminarUsuario($json,$db){
        $usuario = json_decode($json);
        $delete=mysqli_query($db,"DELETE usuario FROM usuario  WHERE id_usuario= '$usuario->id_usuario' ");
    }
?>