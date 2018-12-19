<?php
mysql_connect ("localhost","root","") or die 
("no pudo conectarse con el manejador".mysql_error());

mysql_select_db("catabre") or die 
("no pudo conectarse con el manejador".mysql_error());
mysql_query("SET NAMES 'utf8'");   
?>