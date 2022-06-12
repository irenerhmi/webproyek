<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: login.php");
}

require "../koneksidb.php";
?>
<?php
$idtrans = $_GET['id'];
$tglterima = date("Y-m-d");

$sql = "UPDATE transaksi SET status_trans='Pesanan Diterima' WHERE id_transaksi='$idtrans' ";

if (mysqli_query($conn, $sql) === TRUE) {

	 echo "<script>
            window.alert('Pesanan Diterima');
            window.location='riwayat.php';
          </script>";

} else {
    
    echo  $sql;
}
echo "<script>
        window.location('riwayat.php');
      </script>";
?>