<?php
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