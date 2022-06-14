<?php
include "../koneksidb.php";
session_start();
 
    $idproduk = mysqli_real_escape_string($conn, $_POST['idPro']);
    $rating = mysqli_real_escape_string($conn, $_POST['rating']);
    $review = mysqli_real_escape_string($conn, $_POST['review']);
    $username = $_SESSION["pem_username"];

    $sql = "INSERT INTO mereview(nilai, isi, id_produk, u_username) VALUES ('".$rating."', '".$review."', '" . $_SESSION['idrevs'] . "', '" . $_SESSION['pem_username'] . "')";

    $resultrt = mysqli_query($conn,$sql);

    if ($resultrt === TRUE) {
        
        $sql1 = "UPDATE transaksi SET status_trans = 'Pesanan Selesai' WHERE id_transaksi = '".$_SESSION['idtransrevs']."'";

        $resulty = mysqli_query($conn,$sql1);

        if ($resulty === TRUE) {

            echo 'Review berhasil dimasukkan!';

        } else {

          echo $sql1;

        }
        
    } else {

        echo $sql;
    }


?>