
<?php

    include('../modelo/pedido.php');
    include('../modelo/producto.php');
    include("../modelo/conexion.php");


    function modeloPedido($json,$db){        
        $idPedido = crearPedido($json,$db);
        return $idPedido;
    }

    function modeloProducto($json,$db){        
        crearProducto($json,$db);
    }

    $idContenedor=$_POST['id_contenedor'];
    $idCliente=$_POST['id_persona'];
    $naviera=$_POST['naviera'];
    $destino=$_POST['destino'];
    $fechaSalida=$_POST['fecha_salida'];
    $fechaLlegada=$_POST['fecha_llegada'];

    $numeroPedidos = $_POST['hidden-number-pedido'] - 1;
    // $numeroPedidos = $_POST['hidden-number-pedido']+1;
    


    $jsonPedido =json_encode(array(
        "idContenedor"=>$idContenedor,
        "idCliente"=>$idCliente,
        "naviera"=>$naviera,
        "destino"=>$destino,
        "fechaSalida"=>$fechaSalida,
        "fechaLlegada"=>$fechaLlegada,
    ));
    
    $idPedido = modeloPedido($jsonPedido,$db);
 

    for($i = 1; $i <= $numeroPedidos ; $i++ ){
        $jsonProducto =json_encode(array(
            "idPedido"=>$idPedido,
            "presentacion"=>$_POST['presentacion'.$i],
            "producto"=>$_POST['producto'.$i],
            "especie"=>$_POST['especie'.$i],
            "color"=>$_POST['color'.$i],
            "peso"=>$_POST['peso'.$i],
            "size"=>$_POST['size'.$i],
            "master"=>$_POST['master'.$i],
            "total"=>$_POST['total'.$i]
        ));
        modeloProducto($jsonProducto,$db);
    }  

    $actualizacion= "UPDATE contenedor SET status='ocupado' Where id_contenedor='$idContenedor'";
    mysqli_query($db,$actualizacion);

    echo "<script>swal('Guardado!', 'Pedido en camino', 'success');</script>";
    echo "<script>document.getElementById('formulario').reset();</script>";

    mysqli_close($db);
    
?>