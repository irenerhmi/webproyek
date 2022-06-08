<?php
include "../koneksidb.php";
 
    $idproduk = mysqli_real_escape_string($conn, $_POST['idPro']);
    $namaproduk = mysqli_real_escape_string($conn, $_POST['namaPro']);
    $qtyproduk = mysqli_real_escape_string($conn, $_POST['stokPro']);

    $sqlcek = "SELECT * FROM wishlist where id_produk = '".$idproduk."' and w_flag=1";
    $hit = mysqli_query($conn, $sqlcek);
    $row = mysqli_fetch_array($hit);
    $count = $hit->num_rows;

    if ($count>=1) {
        echo "Produk sudah dimasukkan ke wishlist";

    }else if($count == 0){
 
	 	$sql = "INSERT INTO wishlist(id_produk, nama_produk, qty, w_flag) VALUES('" . $idproduk. "', '" . $namaproduk . "', '" . $qtyproduk . "', 1)";
	    if(mysqli_query($conn, $sql)) {
	    	echo 'Produk berhasil dimasukkan ke wishlist!';
	    } else {
            echo 'Produk gagal dimasukkan ke wishlist!';
            /*echo "Error: " . $sql . "" . mysqli_error($conn);*/
	    }
	 
	}



?>