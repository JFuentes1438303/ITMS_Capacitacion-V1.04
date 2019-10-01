<?php

	$servidor = 'localhost';
	$usuario = 'root';
	$contraseña = '';
	$database = 'itms_capacitacion';

	$db = new mysqli($servidor, $usuario, $contraseña, $database);

	$db -> set_charset("utf8");

	if($db->connect_error){
		    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_error . ") " . $mysqli->connect_error;
	}

?>