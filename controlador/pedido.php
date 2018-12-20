
<?php

    include('../modelo/pedido.php');
    include("../modelo/conexion.php");
    /*
    function modeloPedido($json){        
        crearPedido($json);
    }*/

    $numeroPedidos = $_POST['hidden-number-pedido'];
    
    $jsonPedido =json_encode(array(
        "idContenedor"=>$_POST['id_contenedor'],
        "idCliente"=>$_POST['id_persona'],
        "numeroReferecia"=>$_POST['num_referencia'],
        "naviera"=>$_POST['naviera'],
        "destino"=>$_POST['destino'],
        "fechaSalida"=>$_POST['fecha_salida'],
        "fechaLlegada"=>$_POST['fecha_llegada'],
    ));
    echo "<script>alert('soy una alerta 1');</script>";
    crearPedido($jsonPedido,$db);
    /*
    for($i = 1; $i <= $numeroPedidos ; $i++ ){
        if($i == 1){
            $jsonProducto =json_encode(array(
                "idContenedor"=>$_POST['id_contenedor'],
                "idCliente"=>$_POST['id_persona'],
                "numeroReferecia"=>$_POST['num_referencia'],
                "naviera"=>$_POST['naviera'],
                "destino"=>$_POST['destino'],
                "fechaSalida"=>$_POST['fecha_salida'],
                "fechaLlegada"=>$_POST['fecha_llegada'],
                "presentacion"=>$_POST['presentacion'],
                "producto"=>$_POST['producto'],
                "especie"=>$_POST['especie'],
                "color"=>$_POST['color'],
                "peso"=>$_POST['peso'],
                "size"=>$_POST['size'],
                "master"=>$_POST['master'],
                "total"=>$_POST['total']
            ));
        }else{
            $jsonProducto =json_encode(array(
                "idContenedor"=>$_POST['id_contenedor'],
                "idCliente"=>$_POST['id_persona'],
                "numeroReferecia"=>$_POST['num_referencia'],
                "naviera"=>$_POST['naviera'],
                "destino"=>$_POST['destino'],
                "fechaSalida"=>$_POST['fecha_salida'],
                "fechaLlegada"=>$_POST['fecha_llegada'],
                "presentacion"=>$_POST['presentacion'.$i],
                "producto"=>$_POST['producto'.$i],
                "especie"=>$_POST['especie'.$i],
                "color"=>$_POST['color'.$i],
                "peso"=>$_POST['peso'.$i],
                "size"=>$_POST['size'.$i],
                "master"=>$_POST['master'.$i],
                "total"=>$_POST['total'.$i]
            ));
        }

        crearPedido($jsonProducto);
    }
    */
?>