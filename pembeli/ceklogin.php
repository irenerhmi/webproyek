<?php
include "../koneksidb.php";

session_start();

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password1 = mysqli_real_escape_string($conn,$_POST['password']);
    $sql = "select * from user 
            where u_username='".$username."'";

    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $email = $row['u_email'];
    $phone = $row['u_nohp'];
    $alamat = $row['u_alamat'];
    $username = $row['u_username'];

    //echo $row['u_password'];

    if(mysqli_num_rows($result) > 0){
        $_SESSION['pem_username'] = $row['u_username'];
        $_SESSION['pem_name'] = $row['u_nama'];
        $_SESSION['pem_email'] = $row['u_email'];
        $_SESSION['pem_phone'] = $row['u_nohp'];
        $_SESSION['pem_alamat'] = $row['u_alamat'];
        $_SESSION['pem_image'] = $row['u_image'];     

        // cek password
        $hash = $row['u_password'];

        if(password_verify($password1, $hash) ){
            header ("location: index.php");
            //$_SESSION['grup'] = $row['gakses'];  
        }
        else {
            echo "salah pw";
            echo '<script> alert("Password salah!") </script>';

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
        //header ("location: login.php");

    }
} else {
    echo "<alert> 
    (Tidak masuk);
    </alert>";
}
?>