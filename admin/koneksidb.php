<?php
$servername = "localhost";
$username ="root";
$password ="";
$dbname = "webmerch";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
?>