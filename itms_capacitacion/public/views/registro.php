<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="../../vendor/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../css/estilos.css">
		<link rel="shortcut icon" href="../../files/img/ITMS2.ico">
		<title>Registro ITMS Capacitacion</title>
	</head>

	<body>

		<div class="container div2 color2">
			<div class="row b_bottom">
				<div class="col-sm-3 color1">
					<img src="../../files/img/Logo ITMS.png" class="logo2">
				</div>
				<div class="col-sm-9 encabezado2">
					Formulario de registro
				</div>
			</div>

			<form action="../models/registro.php" method="POST" name="form">
				<div id="alerta"></div>


				<div class="row espacio">
					<div class="col-sm-3 t_centro">
						<label for="tdocumento" class="col-form-label">Tipo de documento</label>
					</div>
					<div class="col-sm-3">
						<?php  
							include("../models/tipo_documento.php");
						?>
					</div>
					<div class="col-sm-3 t_centro">
						<label for="documento" class="col-form-label">Numero de documento</label>
					</div>
					<div class="col-sm-3">
						<input type="text" name="documento" id="documento" class="form-control inputs" placeholder="documento..">
					</div>
				</div>

				<div class="row espacio">
					<div class="col-sm-3 t_centro">
						<label for="nombres" class="col-form-label">Nombres</label>
					</div>
					<div class="col-sm-3">
						<input type="text" name="nombres" id="nombres" class="form-control inputs" placeholder="nombres..">
					</div>
					<div class="col-sm-3 t_centro">
						<label for="apellidos" class="col-form-label">Apellidos</label>
					</div>
					<div class="col-sm-3">
						<input type="text" name="apellidos" id="apellidos" class="form-control inputs" placeholder="apellidos..">
					</div>
				</div>

				<div class="row espacio">
					<div class="col-sm-3 t_centro">
						<label for="correo" class="col-form-label">Correo electrónico</label>
					</div>
					<div class="col-sm-8">
						<input type="text" name="correo" id="correo" class="form-control inputs" placeholder="email..">
					</div>
				</div>

				<div class="row espacio">
					<div class="col-sm-3 t_centro">
						<label for="password" class="col-form-label">Contraseña</label>
					</div>
					<div class="col-sm-8">
						<input type="password" name="password" id="password" class="form-control inputs" placeholder="contraseña..">
					</div>
				</div>

				<div class="row espacio">
					<div class="col-sm-3 t_centro">
						<label for="cpassword" class="col-form-label">Confirmar contraseña</label>
					</div>
					<div class="col-sm-8">
						<input type="password" name="cpassword" id="cpassword" class="form-control inputs" placeholder="confirmar contraseña..">
					</div>
				</div>

				<div class="row espacio centro">
          			<button type="button" onclick="validar();" class="btn btn-sm btn-outline-dark">
          				Registrarse
          			</button>
        		</div>

        		<div class="row espacio centro">
        			<a href="../../index.php" class="btn btn-sm btn-outline-danger">Volver</a>
        		</div>
        		<br>
			</form>
		</div>
		<br>
		<br>
		<script type="text/javascript" src="../../vendor/js/validar.js"></script>
	</body>
</html>