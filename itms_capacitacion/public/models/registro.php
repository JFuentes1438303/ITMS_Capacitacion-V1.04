<?php  

	class Registro{
		public function registrar($tdocumento, $documento, $nombres, $apellidos, $correo, $password){

			include("conexion.php");

			$cont = "0";

			$sql = "SELECT * FROM usuarios WHERE documento = '$documento'";

			if(!$result = $db ->query($sql)){
				die ('Ya existe un registro con ese documento [' .$db->error .']');
			}

			while($row = $result -> fetch_assoc()){
				$ddocumento = stripcslashes($row["documento"]);
				$cont = $cont + 1;
			}

			if ($cont == "0") {
				
				include("../views/alerts/alerta_s_registro.html");

				$sql2 = "INSERT INTO usuarios (tipo_documento, documento, nombres, apellidos, correo, password) VALUES ('$tdocumento', '$documento', '$nombres', '$apellidos', '$correo', '$password')";

				if(!$result2 = $db->query($sql2)){
 					die('Hay un error corriendo en la consulta [' . $db->error . ']');
				}
				
			}else{
				include("../views/alerts/alerta_d_registro.html");
			}
		}
	}

	$nuevo = new Registro();
	$nuevo -> registrar($_POST["tdocumento"], $_POST["documento"], $_POST["nombres"], $_POST["apellidos"], $_POST["correo"], $_POST["password"]);

?>