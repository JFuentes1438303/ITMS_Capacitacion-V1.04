<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="vendor/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="shortcut icon" href="files/img/ITMS2.ico">
		<title>Login ITMS Capacitacion</title>
	</head>

	<body>
		
		<div class="container div2 color2">
			<div class="row b_bottom">
				<div class="col-sm-3 color1">
					<img src="files/img/Logo ITMS.png" class="logo2">
				</div>
				<div class="col-sm-9 encabezado2">
					Inicio de sesión
				</div>
			</div>

			<form action="public/models/login.php" method="POST" name="form2">
				<div id="alerta"></div>

				<div class="row espacio centro">
					<div class="col-sm-3">
						<label for="documento" class="col-form-label labels">Documento</label>
					</div>
					<div class="col-sm-8" style="padding-right: 7%">
						<input type="text" name="documento" id="documento" class="form-control inputs" placeholder="documento.." autocomplete="off">
					</div>
				</div>

				<div class="row espacio centro">
					<div class="col-sm-3">
						<label for="password" class="col-form-label labels">Contraseña</label>
					</div>
					<div class="col-sm-8" style="padding-right: 7%">
						<input type="password" name="password" id="password" class="form-control inputs" placeholder="contraseña.." autocomplete="off">
					</div>
				</div>

				<div class="row espacio centro">
          			<button type="button" onclick="validar2();" class="btn btn-sm btn-outline-dark">
          				Iniciar sesión
          			</button>
        		</div>

        		<div class="row espacio centro">
        			<a href="public/views/registro.php" class="links">Registrarse</a>
        		</div>

        		<div class="row espacio centro">
        			<a href="public/views/reestablecer" class="links">¿Olvido la contraseña?</a>
        		</div>
				<br>
			</form>
		</div>

		<script type="text/javascript" src="vendor/js/validar2.js"></script>
	</body>
</html>