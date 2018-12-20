<?php

  $dbname = "catabre";//variable para el nombre de la base de datos
	$host = "localhost"; //variable para el nombre del servidor
	$dbpass = ""; //variable para la clave del servidor
	$dbuser = "root"; //variable para el usuario del servidor
	
	$db = mysqli_connect($host,$dbuser,$dbpass, $dbname) or die ("no pudo conectarse con el manejador");;

?>
