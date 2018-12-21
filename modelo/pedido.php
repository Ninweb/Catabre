<?php
    
    function crearPedido($json,$db){
        
        $pedido = json_decode($json);
        

        //PEDIDO
        /*
        $pedido->idCliente;
        $pedido->idContenedor;
        $pedido->numeroReferecia;
        $pedido->naviera;
        $pedido->fechaSalida;
        $pedido->fechaLlegada;*/

        //puede  ser que en versiones mas recientes se coloquen las variables sin comillas
        $sql = "INSERT INTO pedido VALUES (NULL,'$pedido->idCliente', '$pedido->idContenedor','1111','$pedido->naviera','$pedido->destino','$pedido->fechaSalida','$pedido->fechaLlegada')";
  
    
        if (mysqli_query($db, $sql)) {
            echo "Se guardo exitoxamente el pedidos\n";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
           
        }

        $id=mysqli_insert_id($db);
        
        
        return $id;
    }
        

    
?>