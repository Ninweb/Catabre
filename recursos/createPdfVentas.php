<?php 
   require('../vendor/autoload.php');
   require('conect-db.php');

   //llamamos a la clase Html2Pdf
   use Spipu\Html2Pdf\Html2Pdf;

   //para crear pdf llamando a un html externo   
   ob_start();
   require_once('nombre_archivo');
   $html = ob_get_clean();


   //parametros: papel-A4, idioma(español)-true, UTF-8
   $html2pdf = new Html2Pdf('P','A4','es','true','UTF-8');
   $html2pdf->writeHTML($html);
   //nombre por default del archivo
   $html2pdf->output('reporte_ventas.pdf');   
   

   /*
   //parametros: papel-A4, idioma(español)-true, UTF-8
   $html2pdf = new Html2Pdf('P','A4','es','true','UTF-8');
   $html2pdf->writeHTML('
      <p>Hola mundo!</p>
   ');
   //nombre por default del archivo
   $html2pdf->output('reporte_ventas.pdf');
   */
?>