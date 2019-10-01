<?php  
	
	class Archivo{
		public function subir($nombre){

			session_start();
			
			$documento = $_SESSION['documento'];
			$ruta = "../../cursos/";
			$nombre_archivo = $_POST['nombre'];
			$tipo_archivo = $_FILES['archivo']['type'];
			$tamaño_archivo = $_FILES['archivo']['size'];

			opendir($ruta);

			$destino = $ruta.$_FILES['archivo']['name'];

			$ruta_archivo = $_FILES['archivo']['name'];

			$ruta = copy($_FILES['archivo']['tmp_name'],$destino);

			include("../models/conexion.php");

			$sql = "SELECT * FROM archivos WHERE documento = '$documento'";

			if(!$result = $db ->query($sql)){
				die ('Error al buscar los datos [' .$db->error .']');
			}

			while ($row = $result -> fetch_assoc()) {
				$nnombre = stripcslashes($row["nombre_archivo"]);
				$rruta = stripcslashes($row["ruta"]);
			}

			if ($rruta == $ruta_archivo) {
				
				include("../views/alerts/alerta_d_archivo.html");

			}else{

				$sql2 = "INSERT INTO archivos (nombre_archivo, ruta, tipo, tamaño, documento) VALUES ('$nombre_archivo','$ruta_archivo', '$tipo_archivo', '$tamaño_archivo', '$documento')";

				if(!$result2 = $db ->query($sql2)){
					die ('Error al insertar los datos [' .$db->error .']');
				}

				// include("../views/alerts/alerta_s_archivo.html");
				header("Location: ../views/mis_cursos.php");
			}
		}
	}

	$nuevo = new Archivo();
	$nuevo -> subir($_POST['nombre']);
?>

