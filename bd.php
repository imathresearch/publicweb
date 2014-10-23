<?php


	// Conectando, seleccionando la base de datos
	$link = mysql_connect('localhost', 'root', '943793072')
    		or die('No se pudo conectar: ' . mysql_error());
	
	mysql_select_db('imathcloudweb') or die('No se pudo seleccionar la base de datos');


?>

