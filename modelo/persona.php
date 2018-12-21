<?php
    function crearPersona($json,$db){
        $persona = json_decode($json);

        $registrar=mysqli_query($db,"INSERT INTO persona(id_usuario,nombre,apellido,empresa) VALUES('$persona->idUsuario','$persona->nombre','$persona->apellido','$persona->empresa')");

       

    }


?>