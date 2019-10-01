<?php  

	class Login{
		public function validar($documento, $password){

			session_start();

			include("conexion.php");

			$sql = "SELECT * FROM usuarios WHERE documento = '$documento'";

			$cont = "0";

			if(!$result = $db ->query($sql)){
				die ('Ya existe un registro con ese documento [' .$db->error .']');
			}

			while ($row = $result -> fetch_assoc()) {

				$ddocumento = stripslashes($row["documento"]);
				$ppassword = stripslashes($row["password"]);
				$nnombres = stripslashes($row["nombres"]);
				$aapellidos = stripslashes($row["apellidos"]);

				$cont = $cont + 1;

				$_SESSION["nombres"] = $nnombres;
				$_SESSION["apellidos"] = $aapellidos;
 			}

 			if ($cont != "0" && $ppassword == $password) {
 				
 				$_SESSION["documento"] = $ddocumento;
 				$_SESSION["usuario"] = "1";
 				header("Location: ../views/home.php");
 			}else{

 				include("../views/alerts/alerta_d_login.html");
 			}
		}
	}

	$nuevo = new Login();
	$nuevo -> validar($_POST["documento"], $_POST["password"]);

?>