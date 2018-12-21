
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

    $numeroPedidos = $_POST['hidden-number-pedido'];
    // $numeroPedidos = $_POST['hidden-number-pedido'];
    


    $jsonPedido =json_encode(array(
        "idContenedor"=>$idContenedor,
        "idCliente"=>$idCliente,
        "naviera"=>$naviera,
        "destino"=>$destino,
        "fechaSalida"=>$fechaSalida,
        "fechaLlegada"=>$fechaLlegada,
    ));
    
    $idPedido = modeloPedido($jsonPedido,$db);
 

    for($i = 0; $i < $numeroPedidos ; $i++ ){
        if ($i==0){
            $jsonProducto =json_encode(array(
                "idPedido"=>$idPedido,
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
        }
        modeloProducto($jsonProducto,$db);
    }  

    $actualizacion= "UPDATE contenedor SET status='ocupado' Where id_contenedor='$idContenedor'";
    mysqli_query($db,$actualizacion);
    
    echo "<script>
    swal({ title: \"Guardado!\", text: \"Pedido en camino\", icon: \"success\"})
    .then(
            function(){ 
                console.log('entro');
                location.reload();
            }
        );
    </script>";
    echo "<script>document.getElementById('formulario').reset();</script>";

    mysqli_close($db);
    
?>