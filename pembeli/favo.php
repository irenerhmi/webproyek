<?php
session_start();


//jika barang sudah ada
if(isset($_SESSION['favo'][$_GET['id']]))
	$_SESSION['favo'][$_GET['id']]+=$_GET['qty'];

//jika barang blm ada
else
	$_SESSION['favo'][$_GET['id']]=1;





//pindah ke halaman cart
echo "<script>
        history.back(); 
      </script>";
?>
