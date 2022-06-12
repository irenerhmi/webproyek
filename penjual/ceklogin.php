<?php
include "../koneksidb.php";

session_start();

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn,$_POST['s_username']);
    $password1 = mysqli_real_escape_string($conn,$_POST['s_password']);
    $sql = "select * from seller
            where s_username='".$username."'";
            
    echo "test";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $email = $row['s_email'];
    $phone = $row['s_nohp'];
    $alamat = $row['s_alamat'];
    $username = $row['s_username'];
    
    //print_r($_SESSION);
    //echo $row['u_password'];

    if(mysqli_num_rows($result) > 0){
        $_SESSION['username'] = $row['s_username'];
        $_SESSION['name'] = $row['s_nama'];
        $_SESSION['email'] = $row['s_email'];
        $_SESSION['phone'] = $row['s_nohp'];
        $_SESSION['alamat'] = $row['s_alamat'];
        $_SESSION['image'] = $row['s_image'];     
    print_r($_SESSION);
        // cek password
        $hash = $row['s_password'];

        if(password_verify($password1, $hash) ){
            header ("location: index.php");
            //$_SESSION['grup'] = $row['gakses'];  
        }
        else {
            echo "salah password";
            echo '<script> alert("Password salah!") </script>';
            header ("location: register.php");
        }

        //if($_SESSION['grup'] == 0)
        //    header("location: admin/dashadmin.php");
        //elseif($_SESSION['grup'] == 1)
        //    header("location: seller/dashseller.php");
        //else
        //    header("location: user/dashuser.php");
    } 
    else {
        echo '<script> alert("username atau password salah") </script>';
        header ("location: login.php");

    }
}
?>