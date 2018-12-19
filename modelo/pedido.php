<?php

    function crear($json){
        $pedido = json_decode($json);
        //print_r($array);

        //echo $array[id_contenedor];
        echo $pedido->idContenedor;

        /*foreach ($array as $elemento) {
            echo $elemento, "\n";
        }*/

        
            
    }
        


?>