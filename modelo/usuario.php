<?php
    function crearUsuario($json,$db){
        $usuario = json_decode($json);


        $registrar=mysqli_query($db,"INSERT INTO usuario(email,clave,tipo) VALUES('$usuario->email','$usuario->password','user')");
        
        $id=mysqli_insert_id($db);
        
        return $id;
    }
?>