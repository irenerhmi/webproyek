<?php
session_start();
if(!isset($_SESSION['pem_username'])){
    header("location: login.php");
}

require "../koneksidb.php";

?>
<?php
$idtrans = $_GET['id'];

// $ambil = $conn->query("SELECT * from produk where id_jenis=1 limit 6"); 
// while($perproduk = $ambil->fetch_assoc()){

$tampil = mysqli_query($conn,"SELECT * from dilakukan WHERE id_transaksi='".$idtrans."'");
while ($produk = mysqli_fetch_assoc($tampil)){
	$idpro= $produk['id_produk'];
	$jumlah = $produk['jumlah_p'];

	$stok = mysqli_query($conn, "UPDATE produk SET stok=stok + $jumlah where id_produk='".$idpro."'");

	if ($stok === TRUE) {

		$strans = "UPDATE transaksi SET status_trans='Pesanan Dibatalkan' WHERE id_transaksi='$idtrans' ";

		$sql1 = mysqli_query($conn, $strans);

		if ($sql1 === TRUE) {
			
				echo "<script>
		            window.alert('Pesanan Telah Dibatalkan');
		            window.location='riwayat.php';
		          </script>";

		} else {
		    
		    echo  $strans;
		}

	} else {
		echo $stok;
	}
}
echo "<script>
        window.location('riwayat.php');
      </script>";
?>