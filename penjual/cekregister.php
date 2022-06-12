<?php
include "../koneksidb.php";

if (isset($_POST['submit'])) {
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = test_input($_POST["username"]);
    $email = test_input($_POST["email"]);
    $nama = test_input($_POST["name"]);
    $password = test_input($_POST["password"]);
    $phone = test_input($_POST["phone"]);
    $alamat = test_input($_POST["alamat"]);

    // cek uname sudah ada tau belum
    //$result = mysqli_query($conn, "SELECT s_username FROM seller where username = '$username'");

    //if (mysqli_fetch_assoc($result)) {
        //echo "<script>
                //alert ('username sudah terdaftar')
              //</script>";
        //return false;
    //}

    // enkripsi password

    // algoritma nya pake algoritma default: alg yg dipilih scr default sm php akan selalu berubah kalo ada pengamanan baru

    $password = password_hash($password, PASSWORD_DEFAULT);


    $sql = "INSERT INTO seller (s_username, s_email, s_nama, s_nohp, s_password, s_alamat) VALUES ('" . $username . "','" . $email . "', '" . $nama . "', '" . $phone . "', '" . $password . "', '" . $alamat . "')";

    if ($conn->query($sql) === TRUE) {
        header ("location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}
?>