<?php
    function crearContenedor($json,$db){
        $contenedor = json_decode($json);

        $registrar=mysqli_query($db,"INSERT INTO contenedor(ref,nombre,status) VALUES('$contenedor->numeroReferencia','$contenedor->nombre','disponible')");
    }

    function editarContenedor($json,$db){
        $contenedor = json_decode($json);
       
        $registrar=mysqli_query($db,"UPDATE contenedor SET ref='$contenedor->numeroReferencia', nombre='$contenedor->nombre' WHERE id_contenedor= '$contenedor->id_contenedor' ");
    }

    function eliminarContenedor($json,$db){
        $contenedor = json_decode($json);
        $delete=mysqli_query($db,"DELETE contenedor FROM contenedor  WHERE id_contenedor= '$contenedor->id_contenedor' ");
    }

?>