<?php 
include('../conexiones/utils.php');

if($_POST) {
	if (isset($_POST['producto']) && isset($_POST['precio'])
	 && !empty($_POST['producto']) && !empty($_POST['precio'])) {

		$producto = $_POST['producto'];
		$precio = $_POST['precio'];

		$sql_insert = "INSERT INTO productosadmin
		(nombreproducto, precio)
		VALUES ('$producto','$precio')";
		if ($sql_insert ==true) {
			$sql_insert2 = "INSERT INTO productoscliente
			(producto)
			values ('$producto')";
			echo $sql_insert2;
		}

		echo $sql_insert;
		$conn->query($sql_insert);

		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			redirect('../admin.php');
		}
	} else {
		redirect('../admin.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../admin.php');
}