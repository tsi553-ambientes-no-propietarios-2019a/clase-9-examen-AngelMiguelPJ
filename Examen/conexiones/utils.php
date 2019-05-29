<?php 
session_start();
$conn = new mysqli('localhost', 'root', '', 'examen');
if($conn->connect_error) {
	echo 'Existió un error en la conexión ' . $conn->connect_error;
	exit;
}
function redirect($url) {
	header('Location: ' . $url);
	exit;
}


function getproductosadmin($conn) {
	$user_id = $_SESSION['productosadmin']['id'];
	$sql = "SELECT *
		FROM productosadmin";
		$res = $conn->query($sql);
		$productos = [];
		if($res->num_rows > 0) {
			while ($row = $res->fetch_assoc()) {
				$productos[] = $row;
			}
		}
		return $productos;
}

function getproductoscliente($conn) {
	$user_id = $_SESSION['productoscliente']['cliente'];
	$sql = "SELECT producto
		FROM productoscliente";
		$res = $conn->query($sql);
		$producto = [];
		if($res->num_rows > 0) {
			while ($row = $res->fetch_assoc()) {
				$producto[] = $row;
			}
		}
		return $producto;
}

function getproductos($conn) {
	$user_id = $_SESSION['usuarios']['id'];
	$sql = "SELECT nombreproducto
		FROM productosadmin";
		$res = $conn->query($sql);
		$producto = [];
		if($res->num_rows > 0) {
			while ($row = $res->fetch_assoc()) {
				$producto[] = $row;
			}
		}
		return $producto;
}


?>