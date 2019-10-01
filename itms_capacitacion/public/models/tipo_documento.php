<select class="form-control inputs" name="tdocumento" id="tdocumento">
	<option value="Seleccione.." selected="on">Seleccione..</option>

	<?php 
		include("conexion.php");
		$sql = "SELECT * FROM tipo_documento";
			if(!$result = $db ->query($sql)){
				die ('Hay un error en la consulta [' .$db->error .']');
			}
			while($row = $result->fetch_assoc()){
				$iid_tipo_documento = stripcslashes($row["id_tipo_documento"]);
				$ttipo_documento = stripcslashes($row["tipo_documento"]);
				echo"<option value=$iid_tipo_documento>$ttipo_documento</option>";
			}
	?>
</select>