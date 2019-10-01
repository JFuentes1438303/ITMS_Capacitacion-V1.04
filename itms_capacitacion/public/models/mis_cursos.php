<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../../vendor/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/estilos.css">
	<link rel="stylesheet" href="../../css/simple-sidebar.css">
	<link rel="shortcut icon" href="../../files/img/ITMS2.ico">
	<title>Document</title>
</head>
<body>

		<div class="container div2 color2">
		<div class="row b_bottom">
			<div class="col-sm-3 color1">
				<img src="../../files/img/Logo ITMS.png" class="logo2">
			</div>
			<div class="col-sm-9 encabezado2">
				Mis cursos
			</div>
		</div>
<?php 	
	
	$conexion = new PDO ("mysql:host=localhost; dbname=itms_capacitacion", "root", "");

	$conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$conexion -> exec("SET CHARACTER SET utf8");

	$directorio = "../../cursos/";
	$documento = $_SESSION["documento"];
	$por_pagina = "5";
	$pagina_inicial = 1;

		if(isset($_GET["pagina"])){

			if ($_GET["pagina"] == "1") {
				
			}else{

				$pagina_inicial = $_GET["pagina"];
			}
		}else{

			$pagina_inicial = "1";
		}

	$inicio_registro = ($pagina_inicial - 1) * $por_pagina;

	/*Saber cuantos registros trae la consulta*/
	$sql = "SELECT * FROM archivos WHERE documento = '$documento'";


	$resultado = $conexion -> prepare($sql);

	$resultado -> execute(array());

	$num_registros = $resultado -> rowCount();

	$total_paginas = ceil($num_registros/$por_pagina);

	$resultado -> closeCursor();


	/*Mostrar los registros segun limite asignado*/
	$sql2 = "SELECT * FROM archivos WHERE documento = '$documento' LIMIT $inicio_registro, $por_pagina";

	$resultado2 = $conexion -> prepare($sql2);

	$resultado2 -> execute(array());

	while ($registro2 = $resultado2 -> fetch(PDO::FETCH_ASSOC)) {
		$nnombre = stripcslashes($registro2["nombre_archivo"]);
		$rruta = stripcslashes($registro2["ruta"]);
		$iid = stripcslashes($registro2["id_archivo"]);

		
		echo "<div class='row espacio'>";
			echo "<div class='col-sm-4 t_centro'>";
				echo "ID del archivo $iid";
			echo "</div>";
			echo"<div class='col-sm-4 t_centro'>";
				echo "<a href=\"".$directorio . $rruta."\" target='blanck' class='a_cursos' title='Abrir Archivo'>".$nnombre."<br></a>";
			echo "</div>";
			echo "<div class='col-sm-4 t_centro'>";
				echo "<a href='../models/eliminar_archivo.php?eliminar=".$registro2['id_archivo']."' class='btn btn-sm btn-outline-danger' onclick='eliminar()' title='Eliminar Archivo'><i class='fas fa-trash-alt'></i></a>";
			echo "</div>";
		echo "</div>";
	}

?>
<br>
<!-- <div class="row centro">
	<div class="">
		<a href="../views/home.php" class="links">Volver</a>
	</div>
	<div class="col-sm-3">
		<?php  
			echo "Total de registros: $num_registros";
		?>
	</div>
</div> -->
<br>
<!-- paginacion -->		
<div class="row centro">
	<?php 
		// for ($i=1; $i <= $total_paginas; $i++) { 
		// 	echo "<a class='page-link' href='?pagina=".$i."'>".$i."</a>";
		// } 

		// echo "<ul class='pagination'>";
		// echo "<li class='page-item'><a class='page-link' href='paginacion.php?pagina=1'>".'Primera'."</a></li>";
		// echo "<li class='page-item'>";
		
		// for ($i=1; $i <= $total_paginas; $i++) { 
		// 	echo "<li class='page-item'><a class='page-link' href='paginacion.php?pagina=".$i."'>".$i."</a>";
		// }

		// echo "<li class='page-item'><a class='page-link' href='paginacion.php?pagina= $total_paginas '>".' Ultima'."</a></li>";
		// echo "</ul>";

		$pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : '1';

		echo "<div class='row centro'>";
			echo "<ul class='pagination pag'>";

			if ($pagina_actual != 1) {
				echo "<li class='page-item'><a class='page-link' href='?pagina=".($pagina_actual-1)."'>".'Anterior'."</a>";
			}else{
				echo "<li class='page-item'><a class='btn page-link' disabled>".' Anterior'."</a>";
			}
			
			echo "<li class='page-item'>";
				
				for ($i=1; $i <= $total_paginas; $i++) { 
					if($pagina_actual == $i){
						echo "<li class='page-item'><a class='page-link mi_active' href='?pagina=".$i."'>".$i."</a>";
					}else{
						echo "<li class='page-item'><a class='page-link' href='?pagina=".$i."'>".$i."</a>";
					}
				}

				if ($pagina_actual != $total_paginas) {
					echo "<li class='page-item'><a class='page-link' href='?pagina=".($pagina_actual+1)." '>".' Siguiente'."</a>";
				}else{
					echo "<li class='page-item'><a class='btn page-link' disabled>".' Siguiente'."</a>";
				}
				echo "</ul>";
				echo "</div>";	
	?>
</div>
<br>	
</div>
<br>
<br>
<script src="../../vendor/js/bootstrap.bundle.min.js"></script>
<script src="../../vendor/jquery/jquery.js"></script>
<script src="https:kit.fontawesome.com/2c36e9b7b1.js"></script>
</body>
</html>
