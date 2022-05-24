<?php

include "../koneksidb.php";

$request = $_SERVER['REQUEST_METHOD'];

switch ($request) {
	case 'GET':

		$query = mysqli_query($conn, "SELECT * FROM keranjang")->num_rows;

		echo json_encode($query);

		break;
		
	default:

		break;
}



?>