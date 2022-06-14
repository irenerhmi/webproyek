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
    <title>News -HaulHallyu</title>
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
                            <h2 class="title"><span class="text-mark">News</span> Page</h2>
                        </div>
                        <ul class="breadcrumb-nav">
                            <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                            <li>News</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Breadcrumb Section :::... -->

    <!-- ...::: Strat Blog-List Section :::... -->
    <div class="blog-list-section section-fluid-270 section-top-gap-100">
        <div class="box-wrapper">
            <div class="blog-list-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-xl-5">
                                    <!-- Start Section Wrapper -->
                                    <div class="section-wrapper">
                                        <div class="section-content section-content-gap-60">
                                            <h2 class="section-title fw-bold">News</h2>
                                            <p>Artikel terkini seputar industri hiburan K-pop.</p>
                                        </div>
                                    </div>
                                    <!-- End Section Wrapper -->
                                </div>
                            </div>
                            <!-- Start Blog List Wrapper -->
                            <div class="blog-list-wrapper">
                                <div class="row mb-n50">
                                    <?php $ambil = $conn->query("SELECT * from artikel"); ?>
                                    <?php while($perproduk = $ambil->fetch_assoc()){?>
                                    <div class="col-xl-4 col-sm-6 mb-50">
                                        <!-- Start Blog List Single Item -->
                                        <div class="blog-list-single-item">
                                            <a href="isinews.php?idart=<?php echo $perproduk['id_artikel'];?>" class="image img-responsive">
                                                <img src="../image/artikel/<?php echo $perproduk['imageart'];?>" width="435px" height="350px" alt="">
                                            </a>
                                            <div class="post-meta">
                                                <a href="#" class="catagory">K-pop</a>
                                                <a class="date"><?php echo $perproduk['tanggal']; ?></a>
                                            </div>
                                            <div class="content">
                                                <h4 class="title"><a href="isinews.php?idart=<?php echo $perproduk['id_artikel'];?>"><?php echo $perproduk['nama_art']; ?></a></h4>
                                            </div>

                                            <a class="author"><?php echo $perproduk['penulis']; ?></a>
                                        </div>
                                        <!-- End Blog List Single Item -->
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- End Blog List Wrapper -->

                            <!-- Start Pagination -->
                            <div class="d-flex justify-content-center">
                                <ul class="page-pagination">
                                    <li class="icon-direction icon-direction--prev"><a href="#"><span class="material-icons-outlined">arrow_left</span></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>...</li>
                                    <li><a href="#">10</a></li>
                                    <li class="icon-direction icon-direction--next"><a href="#"><span class="material-icons-outlined">arrow_right</span></a></li>
                                </ul>
                            </div>
                            <!-- End Pagination -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Blog-List Section :::... -->

    <!-- ...::: Strat Subscribe Section :::... -->
    
    <!-- ...::: End Subscribe Section :::... -->

    <!-- ...::: Strat Footer Section - Footer Dark :::... -->
    <?php require "footer.php";?>
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