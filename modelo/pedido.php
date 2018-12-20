<?php
    
    function crearPedido($json,$db){
        echo "<script>alert('soy una alerta');</script>";
        
        $pedido = json_decode($json);
        

        //PEDIDO
        /*
        $pedido->idCliente;
        $pedido->idContenedor;
        $pedido->numeroReferecia;
        $pedido->fechaSalida;
        $pedido->fechaLlegada;*/

        $sql = "INSERT INTO pedido VALUES (NULL,$pedido->idCliente, $pedido->idContenedor,$pedido->numeroReferecia,$pedido->fechaSalida,$pedido->fechaLlegada)";
        mysqli_query($db,$sql);
    
        if (mysqli_query($db, $sql)) {
            echo "Se guardo exitoxamente el pedidos";
            mysqli_close($db);
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
            mysqli_close($db);
        }

        
    }
        

    
?>