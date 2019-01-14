<?php 
  require '../vendor/autoload.php';

  //llamamos a la clase Html2Pdf
  use Spipu\Html2Pdf\Html2Pdf;

  // recoger el contenido de otro documento
  ob_start();
  require_once '../controlador/pedidoProducto.php';
  $html = ob_get_clean();

  $html2pdf = new Html2Pdf('P','A4','es','true','UTF-8');
  $html2pdf->writeHTML($html);
  $html2pdf->output();

  // echo "hola";
?>