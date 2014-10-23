<?php

	// Realizar una consulta MySQL
	$query = 'SELECT count(*) FROM contact';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        	$quantity = (int) reset($line);
	}


?>
