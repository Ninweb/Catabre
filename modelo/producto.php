<?php

function crearProducto($json,$db){

        $producto = json_decode($json);
        


        
        //PRODUCTO
        /*
        $producto->idPedido;
        $producto->presentacion;
        $producto->producto;
        $producto->especie;
        $producto->color;
        $producto->peso;
        $producto->size;
        $producto->master;
        $producto->total;*/
        
        $sql = "INSERT INTO producto VALUES (NULL,'$producto->idPedido', '$producto->presentacion','$producto->producto','$producto->especie','$producto->color','$producto->peso','$producto->size','$producto->master','$producto->total')";
  
        if (mysqli_query($db, $sql)) {
            $mensaje = "Se guardo exitoxamente el producto\n";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
           
        }

        
        
        
        return $mensaje;
            
    }

?>