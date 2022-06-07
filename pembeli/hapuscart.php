<?php 
include "../koneksidb.php";

$idproduk = mysqli_real_escape_string($conn, $_POST['idPro']);

$sql = "UPDATE keranjang SET c_flag = 0 where id_produk = '".$idproduk."'";

if ($conn->query($sql) === TRUE) {
	echo "Produk berhasil dihapus!";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


?>