<?php

	$presentacion=$_POST['presentacion'];
	$tipo_producto=$_POST['tipo_producto'];
	$especie=$_POST['especie1'];
	$color=$_POST['color'];
	$peso=$_POST['peso'];
	$tamanio=$_POST['tamanio'];
	$master=$_POST['master'];
	$total=$_POST['total'];
	foreach($_POST as $campo => $valor){
		echo $valor.'<br>';
	}
?>