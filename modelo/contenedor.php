<?php
    function crearContenedor($json,$db){
        $contenedor = json_decode($json);
        $registrar=mysqli_query($db,"INSERT INTO contenedor(ref,nombre,status) VALUES('$contenedor->numeroReferencia','$contenedor->nombre','disponible')");
    }



?>