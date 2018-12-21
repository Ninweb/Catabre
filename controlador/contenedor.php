<?php
    include('../modelo/contenedor.php');
    include("../modelo/conexion.php");

    function modeloContenedor($json,$db){        
        crearContenedor($json,$db);
    }


    $num_referencia=$_POST['num_referencia'];
    $nombre=$_POST['nombre'];
    
    $jsonContenedor =json_encode(array(
        "numeroReferencia"=>$num_referencia,
        "nombre"=>$nombre
    ));

    modeloContenedor($jsonContenedor,$db);

    echo "<script>swal('Guardado!', 'Nuevo Contenedor', 'success');</script>";
    echo "<script>document.getElementById('formularioContenedor').reset();</script>";




?>