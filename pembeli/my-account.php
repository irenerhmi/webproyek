<!DOCTYPE html>
<html lang="zxx">
<?php

session_start();
if(!isset($_SESSION['username'])){
    header("location: login.php");
}
require "../koneksidb.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HaulHallyu - Akun Saya</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Martup is Multipurpose eCommerce HTML Template, that's perfect for any kind of eCommerce websites such as fashion, furniture and many more.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/material-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="assets/css/plugins/venobox.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
<link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
<link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>

    <!-- .....:::::: Start Header Section - Dark Header :::::.... -->
    <?php require "header.php"; ?>
    <!-- .....:::::: End Header Section - Dark Header :::::.... -->

    <!-- .....:::::: Start Mobile Header Section :::::.... -->
    
    <!-- ...:::: End Add Cart Offcanvas Section:::... -->

    <!-- ...::: Strat Breadcrumb Section :::... -->
    <div class="breadcrumb-section">
        <div class="box-wrapper">
            <div class="breadcrumb-wrapper breadcrumb-wrapper--style-1 pos-relative">
                <div class="breadcrumb-bg">
                    <img src="../assets/images/breadcrumb/headerlogin.jpg" width="1920px" height="500px" alt="">
                </div>
                <div class="breadcrumb-content section-fluid-270">
                    <div class="breadcrumb-wrapper">
                        <div class="content">
                            <span class="title-tag">BEST DEAL FOREVER</span>
                            <h2 class="title"><span class="text-mark">Account</span> Page</h2>
                        </div>
                        <ul class="breadcrumb-nav">
                            <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                            <li>My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Breadcrumb Section :::... -->

    <!-- ...:::: Start Account Dashboard Section:::... -->
    <div class="account-dashboard section-fluid-270 section-top-gap-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href=""  class="nav-link btn btn-sm btn-default-outline  active">Akun Saya</a></li>
                            <li> <a href="#orders"  class="nav-link btn btn-sm btn-default-outline ">Lihat Pesanan Saya</a></li>
                            <li><a href="login.html" class="nav-link btn btn-sm btn-default-outline">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        <div class="tab-pane fade show active" >
                            <h3>Account details </h3>
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <form method="POST" action="user-action.php" enctype="multipart/form-data">
                                            <?php


                                            $sql = "select * from user where u_username='".$_SESSION['username']."'";

                                            $result = mysqli_query($conn,$sql);

                                            $row = mysqli_fetch_array($result);
                                            $temail = $row['u_email'];
                                            $tnama = $row['u_nama'];
                                            $tphone = $row['u_nohp'];
                                            $talamat = $row['u_alamat'];
                                            $tusername = $row['u_username'];
                                            $tpass = $row['u_password'];
                                            $timage = $row['u_image'];


                                            ?>
                                            <?php
                                            if ($timage != NULL){
                                            ?>

                                            <label class="default-form-box">Profile Picture </label>
                                                <img src="../image/pembeli/<?php echo $timage ?>" width="70px" height="70px" style="border-radius:50%;">
                                                <input type="file" name="imgprofile" value="../image/user/<?php echo $timage ?>">

                                            <?php 
                                            } else {
                                            ?>

                                            <label>Profile Picture </label><br>
                                                <img src="../image/pembeli/start.png" width="70px" height="70px" style="border-radius:50%;">
                                                <input type="file" name="imgprofile" value="../image/user/<?php echo $timage ?>">
                                            <?php } ?>


                                            <label> <br></label> 
                                            <div class="default-form-box mb-20">
                                                <label>Nama</label>
                                                <input type="text" name="nama" value="<?php echo $tnama; ?>">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Email</label>
                                                <input type="text" name="email" value="<?php echo $temail;?>">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Nomor Handphone</label>
                                                <input type="text" name="phone" value="<?php echo $tphone;?>">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat" value="<?php echo $talamat;?>">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Password</label>
                                                <input type="password" name="pass" placeholder="Masukkan Password">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Condfirm Password</label>
                                                <input type="password" name="rpass" name="rpass" placeholder="Confirm Password">
                                            </div>
                                            <div class="save_button mt-3">
                                                <button class="btn btn-sm btn-default-outline" name="submit1" onclick="save()" type="submit">Save</button>
                                            </div>
                                            <br>
                                            <div class="default-form-box mb-20">
                                                <label id="savsuc"><br></label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Account Dashboard Section:::... -->

    <!-- ...::: Strat Footer Section - Footer Dark :::... -->
    <?php require "footer.php"; ?>
    <!-- ...::: End Footer Section Section - Footer Dark :::... -->

    <!-- Scroll To button -->
    <div id="scroll-to-top" class="scroll-to-top"><span class="material-icons-outlined">expand_less</span></div>

    <!-- ::::::::::::::All JS Files here :::::::::::::: -->
    <!-- Global Vendor -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script>

    <!--Plugins JS-->
    <script src="assets/js/plugins/jquery.nice-select.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script>

    <!-- Minify Version -->
    <!-- <script src="assets/js/vendor/vendor.min.js"></script> -->
    <!-- <script src="assets/js/plugins/plugins.min.js"></script> -->

    <!--Main JS (Common Activation Codes)-->
    <script src="assets/js/main.js"></script>
    <!-- <script src="assets/js/main.min.js"></script> -->
    <script type="">
        function save(){
            document.getElementById("savsuc").innerHTML = "Perubahan Berhasil Tersimpan!";
        }
    </script>

</body>

</html>