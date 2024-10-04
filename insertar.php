<?php
/*$conexion = mysql_connect("localhost", "root", "", "bd_pruebas");*/
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$fecha = $_POST['fecha'];

/*if ($_FILES['archivo']) {
	$nombre_base = basename($_FILES["archivo"]["name"]);
	$nombre_final = date("m-d-y"). "-". date("H-i-s"). "-". $nombre_base;
	$ruta = "archivo/" . $nombre_final;
	$subirarchivo = move_uploaded_file($_FILES['archivo']["tmp_name"], $ruta);
	if ($subirarchivo) {
		$insertarSQL = "INSERT INTO informes(nombre, apellidos, fecha, archivo) VALUES ('$nombre', '$apellidos', '$fecha', '$ruta')";
		$resultado = mysql_query($conexion, $insertarSQL);
		if ($resultado) {
			echo "<script>alert('Se ha enviado su informe'); window.location='FormularioRegistro.html'</script>";
		}else {
			print("Errormessage: %s\n", mysql_error($conexion));
		}
	}
}else {
	echo "Error al subir archivo";
}*/

if (empty($nombre) || empty($apellidos) || empty($fecha)) {
	echo "Por favor, rellene todos los campos.";
}else {
	echo "¡Gracias por enviar su registro! La tarea fue realizada de manera correcta";
}
?>