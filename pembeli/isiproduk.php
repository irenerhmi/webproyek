<!DOCTYPE html>
<html lang="zxx">
<?php

session_start();
require "../koneksidb.php";


?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Martup - Multipurpose eCommerce HTML Template</title>
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
                    <img src="../assets/images/breadcrumb/headerlogin.jpg" width=1900px height=500px alt="">
                </div>
                <div class="breadcrumb-content section-fluid-270">
                    <div class="breadcrumb-wrapper">
                        <div class="content">
                            <h2 class="title"><span class="text-mark">Isi Produk</span></h2>
                        </div>
                        <ul class="breadcrumb-nav">
                            <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Breadcrumb Section :::... -->

    <!-- ...:::: Start Customer Login Section :::... -->
    <div class="customer-login section-fluid-270 section-top-gap-100">
        <div class="container-fluid">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h3>Masukkan Informasi Produk</h3>
                        <form action="cekproduk.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                            <div class="default-form-box">
                                <label for="inputGambar">Gambar Produk</label>
                                <input name="image" type="file" id="image">
                            </div>
                            <div class="default-form-box">
                                <label>Nama Produk</label>
                                <input name="nama_produk" type="text" placeholder="Masukkan Nama Produk">
                            </div>
                            <div class="default-form-box">
                                <label>Pilih Kategori</label>
                                <input type="text" name="kategori" list="listkat" placeholder="Pilih Kategori Produk">
                                <datalist id="listkat">
                                    <select name="id_ongkir" class="form-control">
                                        <option value="">Pilih Kategori</option>
                                        <?php
                                        $ambil = $conn->query("SELECT * from kategori WHERE k_flag=1");
                                        while($pecah = $ambil->fetch_assoc()){
                                        ?>                                      
                                        <option value="<?php echo $pecah['id_kategori'] ?>">
                                            <?php echo $pecah['nama_kat']?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </datalist>
                            </div>
                            <div class="default-form-box">
                                <label>Deskripsi</label>
                                <input name="deskripsi" type="text" placeholder="Masukkan Deskripsi">
                            </div>
                            <div class="default-form-box">
                                <label>Berat (kg)</label>
                                <input name="berat" type="number" placeholder="Masukkan Berat">
                            </div>
                            <div class="default-form-box">
                                <label>Jumlah</label>
                                <input name="jumlah" type="number" placeholder="Masukkan Jumlah Barang">
                            </div>
                            <div class="default-form-box">
                                <label>Status</label>
                                <input name="status" type="text" placeholder="Masukkan Status Pembayaran">
                            </div>
                            <div class="default-form-box">
                                <label>Tipe Pembayaran</label>
                                <input name="pembayaran" type="text" placeholder="Masukkan Tipe Pembayaran">
                            </div>
                            <div class="default-form-box">
                                <label>Harga (Rp.)</label>
                                <input name="harga" type="number" placeholder="Masukkan Harga Produk">
                            </div>
                            <div class="login_submit">
                                <button name="submit" class="btn btn-black" type="submit" value="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <!--login area start-->

                <!--register area start-->
                <!--register area end-->
            </div>
        </div>
    </div> <!-- ...:::: End Customer Login Section :::... -->

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