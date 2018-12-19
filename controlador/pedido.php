/*
<?php
echo ('hola');
/*

    function imprimirJSON($json){
        $prueba = var_dump($json);
        echo $prueba;
    }
    //$numeroPedidos = $_POST['hidden-number-pedido'];
    $numeroPedidos = 4;
    for($i = 1; $i <= $numeroPedidos ; $i++ ){
        // json_encode(array(

        //     "idContenedor"=>$_POST['idContenedor'],
        //     "idCliente"=>$_POST['idContenedor'],
        //     "numeroReferecia"=>$_POST['num_referencia'.$i],
        //     "naviera"=>'naviera',
        //     "destino"=>$_POST['destino'],
        //     "fechaSalida"=>$_POST['salida'],
        //     "fechaLlegada"=>$_POST['llegada']
        //     "idContenedor"=>$_POST['idContenedor'],
        //     "presentacion"=>$_POST['presentacion'.$i],
        //     "producto"=>$_POST['producto'.$ii],
        //     "especie"=>$_POST['especie'.$i],
        //     "color"=>$_POST['color'.$i],
        //     "peso"=>$_POST['peso'.$i],
        //     "size"=>$_POST['size'.$i],
        //     "master"=>$_POST['master'.$i],
        //     "total"=>$_POST['total'.$i]
        // ));
        $json = json_encode(array(
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
        ));
        imprimirJSON($json);
    }
    */
?>
