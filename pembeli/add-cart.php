<?php
include "../koneksidb.php";
 
    $idproduk = mysqli_real_escape_string($conn, $_POST['idPro']);
    $namaproduk = mysqli_real_escape_string($conn, $_POST['namaPro']);
    $qtyproduk = mysqli_real_escape_string($conn, $_POST['qtyPro']);
    $sqlcek = "SELECT * FROM keranjang where id_produk = '".$idproduk."'";
    $hit = mysqli_query($conn, $sqlcek);
    $row = mysqli_fetch_array($hit);
    $count = $hit->num_rows;
    $qtyup = $row['qty'];
    echo $count;

    if ($count>=1) {
    	$qtyup += 1;
    	$sqlup = "UPDATE keranjang SET qty= '".$qtyup."' WHERE id_produk = '".$idproduk."'";
    	if(mysqli_query($conn, $sqlup)) {
	     echo '1';
	    } else {
	       echo "Error: " . $sqlup . "" . mysqli_error($conn);
	    }

    }else if($count == 0){
 
	 	$sql = "INSERT INTO keranjang(id_produk, nama_produk, qty) VALUES('" . $idproduk. "', '" . $namaproduk . "', '" . $qtyproduk . "')";
	    if(mysqli_query($conn, $sql)) {
	    	echo 'bisa';
	    } else {
	       echo "Error: " . $sql . "" . mysqli_error($conn);
	    }
	 
	}



?>