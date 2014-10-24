<?php


	// Conectando, seleccionando la base de datos
	$link = mysql_connect('mysql', '40709_contactos', '943793072')
    		or die('No se pudo conectar: ' . mysql_error());
	
	mysql_select_db('imathresearch_imathcloudweb') or die('No se pudo seleccionar la base de datos');


?>

