<?php
include "koneksidb.php";
session_start();

$username = $_SESSION["username"];
$email = $_POST["email"];
$nama = $_POST["nama"];
$nohp = $_POST["nohp"];

if(isset($_POST["editprofil"])) {

	$sql = " UPDATE admin SET a_nama= '" . $nama . "' , 
	    						a_nohp = '" . $nohp . "'
	    						WHERE a_username= '" .$username . "'";

	echo $sql; 

	$result = mysqli_query($conn, $sql);


	if ($conn->query($sql) === TRUE) {
	  echo " update data berhasil";
	  header("location: profile.php");
	  
	} else {
	  echo  "update data tidak berhasil";
	}
}
