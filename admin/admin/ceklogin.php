<?php
require "fungsi.php";

session_start();

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $sql = "select * from admin where a_username='".$username."' and a_password='".$password."'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result)> 0){
        $_SESSION['username'] = $row['a_username'];
        $_SESSION['nama'] = $row['a_nama'];
        $_SESSION['nohp'] = $row['a_nohp'];
        $_SESSION['email'] = $row['a_email'];
        $_SESSION['password'] = $row['a_password'];

        header("location: index.php");

    }
    else {
        echo "username or password salah";
    }
}
?>