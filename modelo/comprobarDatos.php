<?php
   include ("../../modelo/conexion.php");

   $email = $_POST['email'];

   $get_email = "SELECT * FROM usuarios WHERE "
?>