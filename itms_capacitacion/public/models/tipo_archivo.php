<select class="form-control inputs" name="tarchivo" id="tarchivo">
	<option value="Seleccione.." selected="on">Seleccione..</option>

	<?php 
		include("conexion.php");
		$sql = "SELECT * FROM tipo_archivo";
			if(!$result = $db ->query($sql)){
				die ('Hay un error en la consulta [' .$db->error .']');
			}
			while($row = $result->fetch_assoc()){
				$iid_tipo_archivo= stripcslashes($row["id_tipo_archivo"]);
				$aarchivo = stripcslashes($row["archivo"]);
				echo"<option value=$iid_tipo_archivo>$aarchivo</option>";
			}
	?>

</select>