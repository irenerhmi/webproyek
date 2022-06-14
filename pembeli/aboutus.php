<!DOCTYPE html>
<html lang="zxx">
<?php

session_start();
if(!isset($_SESSION['pem_username'])){
    header("location: login.php");
}
require "../koneksidb.php";

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About Us - Haulhalyu</title>
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

    <!-- .....:::::: Start Header Section - Light Header :::::.... -->
    <?php require "header.php"; ?>
    <!-- ...:::: End Add Cart Offcanvas Section:::... -->

    <!-- ...::: Strat Breadcrumb Section :::... -->
    <div class="breadcrumb-section">
        <div class="box-wrapper">
            <div class="breadcrumb-wrapper breadcrumb-wrapper--style-2 breadcrumb-bg pos-relative">
                <div class=""></div>
                <div class="breadcrumb-content section-fluid-270">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-md-7">
                                <div class="content text-center">
                                    <?php
                                    $sql = "SELECT * from about_us where id_about=1";
                                    $result = mysqli_query($conn,$sql);
                                    $row = mysqli_fetch_array($result);

                                    ?>
                                    <div class="logo"><img src="assets/images/logo/logo-large.svg" alt=""></div>
                                    <p><?php echo $row['informasi']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Breadcrumb Section :::... -->

    <!-- ...::: Strat About Hero Section :::... -->
    <div class="about-hero-image">
        <div class="box-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="about-hero-img text-center">
                            <img class="img-fluid" src="../image/pembeli/about.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End About Hero Section :::... -->

    <!-- ...::: Strat About Section :::... -->
    <div class="about-section section-fluid-270 section-top-gap-100">
        <div class="section-wrapper">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center">
                    <div class="col-10 col-lg-6 col-xl-4 col-xxl-5">
                        <div class="section-content">
                            <?php
                            $sql = "SELECT * from about_us where id_about=1";
                            $result = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_array($result);

                            ?>
                            <span class="title-tag m-0">BEST DEAL FOREVER</span>
                            <h2 class="section-title-stylish">
                                About <span>HaulHallyu</span>
                            </h2>
                            <p><?php echo $row['informasi']; ?></p>
                        </div>
                    </div>
                    <div class="col-10 col-lg-6 col-xl-7 col-xxl offset-xl-1">
                        <div class="image">
                            <img src="../image/pembeli/about1.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End About Section :::... -->

    <!-- ...::: Strat Shipping Section :::... -->
    <div class="shipping-section section-fluid-270 section-top-gap-100">
        <div class="box-wrapper">
            <div class="section-wrapper">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-6 col-md-8 col-sm-10">
                            <div class="section-content section-content-gap-60 text-center">
                                <h2 class="section-title fw-bold">Kelebihan Layanan Kami</h2>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Shipping Wrapper -->
            <div class="shipping-wrapper">
                <div class="container-fluid">
                    <div class="row justify-content-center justify-content-sm-start mb-n40">
                        <div class="col-lg-3 col-sm-6 col-12 mb-40">
                            <!-- Start Shipping Single Items -->
                            <div class="shipping-single-item--style-2">
                                <div class="icon">
                                    <img class="img-fluid" src="assets/images/icons/shipping-icon-4.svg" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="title">Keamanan Pembayaran</h4>
                                    <p>Uang akan disalurkan setelah pesanan diterima</p>
                                </div>
                            </div>
                            <!-- Start Shipping Single Items -->
                        </div>
                        <div class="col-lg-3 offset-xl-1 col-sm-6 col-12 mb-40">
                            <!-- Start Shipping Single Items -->
                            <div class="shipping-single-item--style-2">
                                <div class="icon">
                                    <img class="img-fluid" src="assets/images/icons/shipping-icon-5.svg" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="title">Produk Terkini</h4>
                                    <p>Memiliki produk-produk terkini yang sedang rilis</p>
                                </div>
                            </div>
                            <!-- Start Shipping Single Items -->
                        </div>
                        <div class="col-lg-3 offset-xl-1 col-sm-6 col-12 mb-40">
                            <!-- Start Shipping Single Items -->
                            <div class="shipping-single-item--style-2">
                                <div class="icon">
                                    <img class="img-fluid" src="assets/images/icons/shipping-icon-6.svg" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="title">Pemantauan Status Pesanan Real Time</h4>
                                    <p>Dapat memantau status pesanan secar areal time</p>
                                </div>
                            </div>
                            <!-- Start Shipping Single Items -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Shipping Wrapper -->
        </div>
    </div>
    <!-- ...::: End Shipping Section :::... -->

    <!-- ...::: Strat Company Logo Section Section :::... -->
    
    <!-- ...::: Strat Company Logo Section Section :::... -->

    <!-- ...::: Strat Subscribe Section :::... -->
    
    <!-- ...::: End Subscribe Section :::... -->

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

</body>

</html>