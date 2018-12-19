<?php
<<<<<<< HEAD

// mysqli_connect("localhost","root","") or die ("no pudo conectarse con el manejador".mysql_error());


// mysqli_select_db("catabre") or die ("no pudo conectarse con el manejador".mysql_error());

  $dbname = "catabre";//variable para el nombre de la base de datos
	$host = "localhost"; //variable para el nombre del servidor
	$dbpass = ""; //variable para la clave del servidor
	$dbuser = "root"; //variable para el usuario del servidor
	
	$db = mysqli_connect($host,$dbuser,$dbpass) or die ("no pudo conectarse con el manejador2"); //("No se pudo conectar con la Base de Datos.");
	mysqli_select_db($db,$dbname) or die ("no pudo conectarse con el manejador"); //("No se pudo conectar a la DB.");

?>
=======
$servername = "localhost";
$username = "root";
$password = "";
$bd = "catabre";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

} 

mysqli_select_db( $conn, $bd ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

?>
>>>>>>> b72c2886b2f3eea6372c37facc34cbf69f77798a
