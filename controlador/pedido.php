
<?php

    include('../modelo/pedido.php');
    function crearPedido($json){
        //$prueba = var_dump($json);
        
        $seInserto = crear($json);
        //echo $prueba;
    }

    $numeroPedidos = $_POST['hidden-number-pedido'];
    //$numeroPedidos = 7;
    for($i = 1; $i <= $numeroPedidos ; $i++ ){
        if($i == 1){
            $json =json_encode(array(
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
            $json =json_encode(array(
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
        
        /*$json = json_encode(array(
            "idContenedor"=>'contendedor'.$i,
            "idCliente"=>'cliente'.$i,
            "presentacion"=>'presentacion'.$i,
            "producto"=>'producto'.$i,
            "especie"=>'especie'.$i,
            "color"=>'color'.$i,
            "peso"=>'peso'.$i,
            "size"=>'size'.$i,
            "master"=>'master'.$i,
            "total"=>'total'.$i
        ));*/
        crearPedido($json);
    }
    
?>