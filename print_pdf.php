<?php 
  require './vendor/autoload.php';

  //llamamos a la clase Html2Pdf
  use Spipu\Html2Pdf\Html2Pdf;

  // recoger el contenido de otro documento
  ob_start();
  require_once 'print_view.php';
  $html = ob_get_clean();

  $html2pdf = new Html2Pdf('P','A4','es','true','UTF-8');
  $html2pdf->writeHTML($html);
  $html2pdf->output();

  echo "hola";
?>

<!-- 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <style>
            #header {
                display: flex;
            }

            #pedido {
                display: flex;
                background: #eaeaea; 
            }
        </style>
    </head>
    <body>
        <div id="header">
            <div id="logo">
                <img src="../vista/logo/logo-dark.jpg"/>
            </div>

            <div id="datos_empresa">
                <p>Grupo Catabre</p>
                <p>Maracaibo, Venezuela</p>
            </div>

            <div id="numPedido">
                <p>Pedido: <?php echo $codigo_pedido; ?></p>
            </div>
        </div>

        <div id="contenido">
            <div id="datos_contenedor">
                <p>Contenedor: <?php echo $idContenedor ?></p>
                <p>Destino: <?php echo $destino ?></p>
                <p>Fecha de salida: <?php echo $fechaSalida ?></p>
                <p>Fecha de llegada: <?php echo $fechaLlegada ?></p>
            </div>
        </div>

        <div id="pedido">
        <?php 
                for($j = 0; $j < $numeroPedidos ; $j++ ){
                    if ($j==0){
                        // $jsonProducto =json_encode(array(
            ?>
                            <div id="izquierda">
                                <p>Presentacion: <?php echo $_POST['presentacion']; ?> </p>
                                <p>Especie: <?php echo $_POST['especie']; ?> </p>
                                <p>Peso: <?php echo $_POST['peso']; ?> </p>
                                <p>Master: <?php echo $_POST['master']; ?> </p>
                            </div>

                            <div id="derecha">
                                <p>Producto: <?php echo $_POST['producto']; ?> </p>
                                <p>Color: <?php echo $_POST['color']; ?> </p>
                                <p>Tamaño: <?php echo $_POST['size']; ?> </p>
                                <p>Total: <?php echo $_POST['total']; ?> </p>
                            </div>
            <?php                
                        // ));
                    }else{        
                        // $jsonProducto =json_encode(array(
            ?>
                            <div id="izquierda">
                                <p>Presentacion: <?php echo $_POST['presentacion'.$j]; ?> </p>
                                <p>Especie: <?php echo $_POST['especie'.$j]; ?> </p>
                                <p>Peso: <?php echo $_POST['peso'.$j]; ?> </p>
                                <p>Master: <?php echo $_POST['master'.$j]; ?> </p>
                            </div>

                            <div id="derecha">
                                <p>Producto: <?php echo $_POST['producto'.$j]; ?> </p>
                                <p>Color: <?php echo $_POST['color'.$j]; ?> </p>
                                <p>Tamaño: <?php echo $_POST['size'.$j]; ?> </p>
                                <p>Total: <?php echo $_POST['total'.$j]; ?> </p>
                            </div>
            <?php
                        // ));
                    }
                    // modeloProducto($jsonProducto,$db);
                }  
            ?>
      
    </body>
</html> -->