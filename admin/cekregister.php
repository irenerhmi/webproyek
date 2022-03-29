<?php
include "fungsi.php";

session_start();

if(isset($_POST['submit'])) {
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = test_input($_POST["username"]);
    $email = test_input($_POST["email"]);
    $nama = test_input($_POST["nama"]);
    $password = test_input($_POST["password"]);
    $nohp = test_input($_POST["nohp"]);

    $pass = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO admin (a_username, a_email, a_nama, a_password, a_nohp) VALUES ('" . $username . "','" . $email . "', '" . $nama . "', '" . $password . "', '" . $nohp . "')";

    if ($conn->query($sql) === TRUE) {
        header("location: login.php");

        echo '<script language="text/javascript">';
        echo 'alert("message successfully sent")';
        echo '</script>';
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}
?>