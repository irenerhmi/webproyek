<?php
include "../koneksidb.php";
session_start();

//$username = $_POST["username"];
//$imgprofile = "../ava.jpg";
$username = $_SESSION["pem_username"];
$email = $_POST["email"];
$nama = $_POST["nama"];
$phone = $_POST["phone"];
$alamat = $_POST["alamat"];
$password = $_POST["pass"];
$rpassword = $_POST["rpass"];
$imgprofile = $_FILES["imgprofile"];

if ($password !== $rpassword) {
    echo "password tidak sama";
    die();
} 

$password = password_hash($password, PASSWORD_DEFAULT);

print_r($_POST);
print_r($_SESSION);


// Check if image file is a actual image or fake image
if(isset($_POST["submit1"])) {
  if ($_FILES['imgprofile']['name']!='') {
    $target_dir = "../image/pembeli/";
    $namafile =  "profileimg." . $username . "." .strtolower(pathinfo($imgprofile["name"], PATHINFO_EXTENSION)); 
    $target_file = $target_dir . $namafile;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($imgprofile["name"],PATHINFO_EXTENSION));
    //echo $imageFileType;
    $check = getimagesize($imgprofile["tmp_name"]);
    if($check !== false) {
      //echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }

    // Check file size
    if ($imgprofile["size"] > 1000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } 
    else {
      if (move_uploaded_file($imgprofile["tmp_name"], $target_file)) {
          $sql = " UPDATE user SET u_email='" . $email . "' , u_nama= '" . $nama . "' , u_nohp = '" . $phone . "' , u_alamat='" . $alamat . "' ,  u_image='" . $namafile . "' where u_username='" . $username . "' " ;
          echo $sql; 
          $result = mysqli_query($conn, $sql);

          if ($result === TRUE) {
            echo " update data berhasil";
            header("location: my-account.php");
          } 
          else {
            
            echo  "update data tidak berhasil";
          }
      }
    } 
  } else {
      $sql = " UPDATE user SET u_email='" . $email . "' , u_nama= '" . $nama . "' , u_nohp = '" . $phone . "' , u_alamat='" . $alamat . "' , u_password='" . $password . "' where u_username='" . $username . "' " ;
      echo $sql; 
      $result = mysqli_query($conn, $sql);

      if ($result === TRUE) {
        echo " update data berhasil";
        header("location: my-account.php"); 
      } 
      else {
        echo $sql; 
        echo  "update data tidak berhasil";
      }
  }
}


?>