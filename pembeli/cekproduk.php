<?php

include "../koneksidb.php";

session_start();

    $nama_produk = $_POST["nama_produk"];
    $deskripsi = $_POST["deskripsi"];
    $berat = $_POST["berat"];
    $stok = $_POST["jumlah"];
    $status = $_POST["status"];
    $pembayaran = $_POST["pembayaran"];
    $harga = $_POST["harga"];
    $image = $_FILES["image"];
    $kategori = $_POST["kategori"];


    $target_dir = "../image/penjual/";
    $namafile = "jual.".$nama_produk.".".strtolower(pathinfo($image["name"], PATHINFO_EXTENSION));
    $target_file = $target_dir.$namafile;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($image["name"],PATHINFO_EXTENSION));


    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($image["tmp_name"]);
      if($check !== false) {
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
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
    } else {
      if (move_uploaded_file($image["tmp_name"], $target_file)) {
        $sql = "INSERT INTO produk (nama_produk,deskripsi,berat,stok,harga,status,pembayaran,image,p_flag,id_kategori,s_username) VALUES ('".$nama_produk."','".$deskripsi."','".(int)$berat."','".(int)$stok."','".(int)$harga."','".$status."','".$pembayaran."','".$namafile."',1,'".(int)$kategori."','nana')";
        /*$result = mysqli_query($conn, $sql);*/

        if ($conn->query($sql) === TRUE) {
            echo "<script>
                    window.alert('produk berhasil diinput'); 
                    window.location ='isiproduk.php'; 
                  </script>";
            } 

            else {
              echo "<script>
                    window.alert('produk gagal diinput'); 
                
                  </script>";
            }
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
    }

        /* if ($conn->query($sql) === TRUE) {
          echo "Update data berhasil";
          header("location: ajukanjual.php");
        
        } else {
            echo "Update data tidak berhasil";
        }

      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    } */
?>