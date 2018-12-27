<?php
    include('../modelo/contenedor.php');
    include("../modelo/conexion.php");
    include("../modelo/comprobarDatos.php");

    function modeloContenedor($json,$db,$funcionCRUD){ 
           
        if($funcionCRUD == 'crear'){
            crearContenedor($json,$db);
        }else if ($funcionCRUD == "editar"){
            editarContenedor($json,$db);
        }else if($funcionCRUD == 'eliminar'){
            eliminarContenedor($json,$db);
        }
        
    }

    function modeloComprobar($num_referencia,$db){
        $comprobacionRefContenedor = comprobarRefContenedor($num_referencia,$db);

        return $comprobacionRefContenedor;
    }

    
    $funcionCRUD = $_POST['funcion'];

    if($funcionCRUD == 'crear'){
        $num_referencia=$_POST['num_referencia'];
        $nombre=$_POST['nombre'];
        $jsonContenedor =json_encode(array(
            "numeroReferencia"=>$num_referencia,
            "nombre"=>$nombre
        ));

        $comp_ref = modeloComprobar($num_referencia,$db);
    }else if ($funcionCRUD == 'editar'){
        $num_referencia=$_POST['num_referencia'];
        $nombre=$_POST['nombre'];
        $id_contenedor = $_POST['id_contenedor'];
        $jsonContenedor =json_encode(array(
            "numeroReferencia"=>$num_referencia,
            "nombre"=>$nombre,
            "id_contenedor"=>$id_contenedor
        ));
    }else if($funcionCRUD == 'eliminar'){
        $id_contenedor = $_POST['id_contenedor'];
        $jsonContenedor =json_encode(array(
            "id_contenedor"=>$id_contenedor
        ));
    }

    if($comp_ref){
        echo "<script>
            swal({
                title: \"¡Error!\", 
                text: \"El número de referencia ya se encuentra en uso. Por favor, verifique e ingrese un número de referencia valido.\",
                icon: \"error\"
                })
            </script>";
    }else{
        modeloContenedor($jsonContenedor,$db,$funcionCRUD);
        
        if($funcionCRUD=='crear'){
            echo "<script>swal('Guardado!', 'Nuevo Contenedor', 'success').then(
                function(){ 
                    location.reload();
                }
            );</script>";
        }else if ($funcionCRUD == 'editar'){
            echo "<script>swal('Guardado!', 'Fue editado su Contenedor', 'success').then(
                function(){ 
                    location.reload();
                }
            );</script>";
        }else if ($funcionCRUD == 'eliminar'){
            echo "<script>swal('Eliminado!', 'Fue eliminado su Contenedor', 'success').then(
                function(){ 
                    location.reload();
                }
            );</script>";
        }
    }
    

    
    
    
    

?>