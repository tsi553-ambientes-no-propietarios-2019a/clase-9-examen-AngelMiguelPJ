<?php 
include('../conexiones/utils.php');

if($_POST) {
	if (isset($_POST['name']) && isset($_POST['type']) && isset($_POST['username']) && isset($_POST['password'])
	 && !empty($_POST['name']) && !empty($_POST['type']) && !empty($_POST['username'])&& !empty($_POST['password'])) {


	/*---------------------------------------------------------------------------------------- */
		$name = $_POST['name'];
		$type = $_POST['type'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql_insert = "INSERT INTO usuarios
		(nombre, rol, nombreusuario , clave)
		VALUES ('$name','$type','$username', MD5('$password'))";

		if ($type == 'Vestimenta') {

			$sql_insert2 =  "INSERT INTO productos
			(cliente)
			VALUES ('$username')";
			echo $sql_insert2;
			$conn->query($sql_insert2);
	
			if ($conn->error) {
				echo 'Ocurrió un error ' . $conn->error;
			} else {
				redirect('../index.php');
			}
		}

		echo $sql_insert;
		$conn->query($sql_insert);

		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			redirect('../index.php');
		}
	} else {
		redirect('../registro.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../registro.php');
}