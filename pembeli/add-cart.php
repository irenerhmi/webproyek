<?php
include "../koneksidb.php";
session_start();
 
    $idproduk = mysqli_real_escape_string($conn, $_POST['idPro']);
    $namaproduk = mysqli_real_escape_string($conn, $_POST['namaPro']);
    $qtyproduk = mysqli_real_escape_string($conn, $_POST['qtyPro']);
    $username = $_SESSION["username"];

    $sqlcek = "SELECT * FROM keranjang where id_produk = '".$idproduk."' and c_flag=1 and u_username = '".$username."'";
    $hit = mysqli_query($conn, $sqlcek);
    $row = mysqli_fetch_array($hit);
    $count = $hit->num_rows;

    if ($count>=1) {
        $qtyup = $row['qty'];
    	$qtyup += 1;
    	$sqlup = "UPDATE keranjang SET qty= '".$qtyup."' WHERE id_produk = '".$idproduk."' and u_username = '".$username."'";
    	if(mysqli_query($conn, $sqlup)) {
            echo 'Jumlah produk berhasil ditambahkan ke keranjang!';
	    } else {
            echo 'Jumlah produk gagal ditambahkan ke keranjang!';
	    }

    }else if($count == 0){
 
	 	$sql = "INSERT INTO keranjang(id_produk, nama_produk, qty, c_flag, u_username) VALUES('" . $idproduk. "', '" . $namaproduk . "', '" . $qtyproduk . "', 1, '".$username."')";
	    if(mysqli_query($conn, $sql)) {
	    	echo 'Produk berhasil dimasukkan ke keranjang!';
	    } else {
            echo 'Produk gagal dimasukkan ke keranjang!';	   
        }
	 
	}



?>