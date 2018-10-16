<?php
	$mysqli = mysqli_connect("localhost","root","","registro");
	$mysqli->set_charset('utf8');

	if (!$mysqli) {
		echo 'Error al intentar conectar con la base de datos';
	} else {
		$nombre = $_POST['Nombre'];
		$apellidos = $_POST['Apellido'];
		$correo = $_POST['Correo'];
		$deporte = $_POST['Deporte'];
		$sexo = $_POST['Sexo'];
		$referencia = $_POST['Referencia'];
		$posicion = $_POST['Posición'];
		
        echo $nombre;
		echo $apellidos;
		echo $correo;
		echo $deporte;
		echo $sexo;
		echo $referencia;
		echo $posicion;




		//$posicion = Posición de fut, 
		if(isset($_POST['posfut'])){ $posicion = $_POST['posfut']; }
		

		if(isset($posicion)){
				$query = "INSERT into registro (Nombre, Apellido, Correo, Deporte, Sexo, Referencia, Posicion) 
				values ('$nombre', '$apellidos', '$correo', '$deporte', '$sexo', '$referencia', '$posicion')";
		} else {
				$query = "INSERT into registro (Nombre, Apellido, Correo, Deporte, Sexo, Referencia) 
				values ('$nombre', '$apellidos', '$correo', '$deporte', '$sexo', '$referencia')";
		}
			
			$insertar = $mysqli->query($query);

			if ($mysqli->affected_rows) {
				header('location: index.html');
			} else { header('location: error.php'); }

}	

?>


