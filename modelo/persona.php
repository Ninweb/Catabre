<?php
    function crearPersona($json,$db){
        $persona = json_decode($json);

        $registrar=mysqli_query($db,"INSERT INTO persona(id_usuario,nombre,apellido,empresa) VALUES('$persona->idUsuario','$persona->nombre','$persona->apellido','$persona->empresa')");
    }

    function editarPersona($json,$db){
        $persona = json_decode($json);
       
        $registrar=mysqli_query($db,"UPDATE persona SET nombre='$persona->nombre',apellido='$persona->apellido',empresa='$persona->empresa' WHERE id_usuario= '$persona->id_usuario' ");
    }

    function eliminarPersona($json,$db){
        $persona = json_decode($json);
        $delete=mysqli_query($db,"DELETE persona FROM persona  WHERE id_usuario= '$persona->id_usuario' ");
    }


?>