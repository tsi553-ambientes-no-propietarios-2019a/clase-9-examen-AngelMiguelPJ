<?php 
include('../conexiones/utils.php');

if($_POST) {
	if ( && isset($_POST['cantidad'])
	 &&  !empty($_POST['cantidad'])) {

		
		$cantidad = $_POST['cantidad'];

		$sql_insert = "INSERT INTO productos
		(cantidad)
        VALUES ('$cantidad')";
        
        $sql_select = "SELECT nombreproducto from productos";

		echo $sql_insert;
		$conn->query($sql_insert);

		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			redirect('../home_tienda.php');
		}
	} else {
		redirect('../new_product.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../new_product.php');
}