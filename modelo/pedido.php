<?php
    
    function crearPedido($json,$db){
        
        $pedido = json_decode($json);
        

        //PEDIDO
        /*
        $pedido->idCliente;
        $pedido->idContenedor;
        $pedido->numeroReferecia;
        $pedido->fechaSalida;
        $pedido->fechaLlegada;*/
        echo $pedido->fechaSalida."</br>";
        echo $pedido->fechaLlegada."</br>";
        //puede  ser que en versiones mas recientes se coloquen las variables sin comillas
        $sql = "INSERT INTO pedido VALUES (NULL,'$pedido->idCliente', '$pedido->idContenedor','$pedido->numeroReferecia','$pedido->fechaSalida','$pedido->fechaLlegada')";
  
    
        if (mysqli_query($db, $sql)) {
            echo "Se guardo exitoxamente el pedidos";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
           
        }

        mysqli_close($db);
    }
        

    
?>