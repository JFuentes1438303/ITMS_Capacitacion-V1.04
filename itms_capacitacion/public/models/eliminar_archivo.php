<?php  
	
	session_start();
	include("conexion.php");

	$id = $_GET['eliminar'];
	$documento = $_SESSION["documento"];

	$sql = "SELECT * FROM archivos WHERE documento = '$documento'";

	if(!$result = $db ->query($sql)){
		die ('Error al buscar los datos [' .$db->error .']');
	}

	while ($row = $result -> fetch_assoc()) {

		$iid = stripslashes($row["id_archivo"]);
		$nnombre = stripslashes($row["nombre_archivo"]);
		$rruta = stripslashes($row["ruta"]);
		$ddocumento = stripslashes($row["documento"]);

	}
		// if (!unlink("../../cursos/" .$rruta)) {
		// 	echo "No se pudo eliminar el archivo del servidor.";
		// }

	$sql2 = "DELETE FROM archivos WHERE id_archivo = $id";

	if(!$result2 = $db ->query($sql2)){
		die ('Error al buscar los datos [' .$db->error .']');
	}

	header("Location: ../views/mis_cursos.php");

?>