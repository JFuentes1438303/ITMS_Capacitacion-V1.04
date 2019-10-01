<?php  
	session_start();
	$_SESSION["nombres"] = "";
	$_SESSION["apellidos"] = "";
	$_SESSION["usuario"] = "0";
	header("Location: ../../index.php");
?>