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
    <title>HaulHallyu Merch</title>
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

    <script src="https://kit.fontawesome.com/5fd8a6de94.js" crossorigin="anonymous"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
<link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
<link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>

    <!-- .....:::::: Start Header Section - Dark Header :::::.... -->
    <?php require "header.php"; ?>
    <!-- ...:::: End Add Cart Offcanvas Section:::... -->

    <!-- ...::: Strat Hero Slider Section :::... -->
    <div class="hero-slider-section hero-slider-dark">
        <div class="box-wrapper">
            <div class="hero-slider-wrapper">
                <div class="hero-slider">
                    <!-- Slider main container -->
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <!-- Start Hero Slider Single Item -->
                            <div class="hero-slider-single-item--style-2 swiper-slide">
                                <div class="image">
                                    <img class="img-fluid" src="../assets/images/breadcrumb/headerlogin.jpg" alt="">
                                </div>
                                <div class="image-shape"></div>
                                <div class="content-box section-fluid-270">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-7 col-md-8">
                                                <div class="content-fluid">
                                                    <span class="title-tag"> </span>
                                                    <h2 class="title">Belanja merchandise <br>K-pop dengan <span class="text-mark">HaulHayul</span></h2>
                                                    <p></p>
                                                    <a href="product-details-default.html" class="btn btn-lg btn-default">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-slider-shape hero-slider-top-shape"><img class="img-fluid" src="assets/images/icons/hero-slider-2-top-shape.svg" alt=""></div>
                                <div class="hero-slider-shape hero-slider-bottom-shape"><img class="img-fluid" src="assets/images/icons/hero-slider-2-bottom-shape.svg" alt=""></div>
                            </div>
                            <!-- End Hero Slider Single Item -->
                            <!-- Start Hero Slider Single Item -->
                            <div class="hero-slider-single-item--style-2 swiper-slide">
                                <div class="image">
                                    <img class="img-fluid" src="assets/images/hero-slider/hero-slider-style-2-img-2.png" alt="">
                                </div>
                                <div class="image-shape"></div>
                                <div class="content-box section-fluid-270">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-7 col-md-8">
                                                <div class="content">
                                                    <span class="title-tag">BEST DEAL FOREVER</span>
                                                    <h2 class="title">It's elegant to <span class="text-mark">look</span> & value of <span class="text-mark">Price</span></h2>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                                    <a href="product-details-default.html" class="btn btn-lg btn-default">GET IT NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-slider-shape hero-slider-top-shape"><img class="img-fluid" src="assets/images/icons/hero-slider-2-top-shape.svg" alt=""></div>
                                <div class="hero-slider-shape hero-slider-bottom-shape"><img class="img-fluid" src="assets/images/icons/hero-slider-2-bottom-shape.svg" alt=""></div>
                            </div>
                            <!-- End Hero Slider Single Item -->
                            <!-- Start Hero Slider Single Item -->
                            
                            <!-- End Hero Slider Single Item -->
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Hero Slider Section:::... -->

    <!-- ...::: Strat Banner Portrait Section Section :::... -->
    
    <!-- ...::: End Banner Portrait Section Section :::... -->

    <!-- ...::: Strat Shipping Section :::... -->
   
    <!-- ...::: End Shipping Section :::... -->

    <!-- ...::: Strat Banner Mixed Section Section :::... -->
    
    <!-- ...::: End Banner Mixed Section Section :::... -->

    <!-- ...::: Strat Product Tab Item Section :::... -->
    <div class="product-tab-items-section section-fluid-270 section-top-gap-100">
        <div class="box-wrapper">
            <div class="section-wrapper">
                <div class="container-fluid">
                    <div class="row justify-content-center flex-warp">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-7 col-10">
                            <div class="section-content section-content-gap-60 text-center">
                                <h2 class="section-title">Coming Soon</h2>
                                <p>Produk yang akan segera hadir</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-tab-item-wrapper">
                <div class="container">
                    <div class="row g-5">
                        <?php $ambil = $conn->query("SELECT * from produk where p_flag = 1 AND status='PO' limit 6"); ?>
                        <?php while($perproduk = $ambil->fetch_assoc()){?>
                        <div class="col-4">
                            <!-- Start Tab Content Items -->
                            <div class="tab-content">
                                <!-- Start Tab Content Single Item -->
                                <div class="tab-pane show active tab-animate" >
                                                        <!-- Start Product Single Item - Style 2 -->
                                                        <div class="product-single-item-style-2">
                                                            <div class="image img-responsive">
                                                                <a href="product-details.php?id=<?php echo $perproduk['id_produk'];?>"><img class="img-fluid" src="../image/penjual/<?php echo $perproduk['image'] ?>" alt=""></a>
                                                                <a  class="event-btn"><i id="menu-icon" class="fa-regular fa-heart" onclick="sukwish(<?php echo $perproduk['id_produk']; ?>)"></i></a>
                                                                <p id="fav" onclick="favsuc()"></p>
                                                            </div>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">
                                                                        <?php
                                                                        $kat = $perproduk['id_kategori'];

                                                                        if ($kat == 1) {
                                                                            echo 'Album';
                                                                        } else if ($kat == 2){
                                                                            echo 'Lightstick';
                                                                        } else if ($kat == 3){
                                                                            echo 'Clothes';
                                                                        } else if ($kat == 4){
                                                                            echo 'Unofficial Merchandise';
                                                                        }  
                                                                        ?>
                                                                    </span>
                                                                    <h4 class="title"><a href="product-details.php?id=<?php echo $perproduk['id_produk'];?>"><?php echo $perproduk['nama_produk'] ?></a></h4>
                                                                    <span class="price">Rp <?php echo number_format($perproduk['harga']) ?></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <form actiom="add-cart.php" method="POST">
                                                                        <input type="hidden" name="idpro" id="idpro" value="<?php echo $perproduk['id_produk']; ?>">
                                                                        <input type="hidden" name="namapro" id="namapro" value="<?php echo $perproduk['nama_produk']; ?>"><br>
                                                                        <input type="hidden" name="qtypro" id="qtypro" value=1>
                                                                        <input type="hidden" name="stokpro" id="stokpro" value="<?php 
                                                                        $stok = $perproduk['stok'];

                                                                        if($stok>0){
                                                                            echo "Produk Tersedia";
                                                                        } else if($stok==0){
                                                                            echo "Produk Habis";
                                                                        }
                                                                        ?>">
                                                                        <br>
                                                                        <a class="event-btn" onclick="sukcart(<?php echo $perproduk['id_produk']; ?>)"><span class="material-icons">add_shopping_cart</span></a>
                                                                    </form>                  
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 2 -->
                                                    </div>
                                                        <!-- End Product Single Item - Style 2 -->
                                </div>
                                <!-- End Tab Content Single Item -->
                            </div>
                            <!-- End Tab Content Items -->
                            <?php } ?>
                            <div class="d-flex justify-content-center">
                                <a href="shop-grid-sidebar-left.html" class="btn btn-md btn-default btn-section-bottom">View All Product</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ...::: End Product Tab Item Section :::... -->

    <!-- ...::: Strat Product Tab Item Section :::... -->
    <div class="product-tab-items-section section-fluid-270 section-top-gap-100">
        <div class="box-wrapper">
            <div class="section-wrapper d-none">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-7 col-md-8 col-sm-10">
                            <div class="section-content section-content-gap-60 text-center">
                                <h2 class="section-title fw-normal">Hurry! <br> Get your <span class="fw-bold">product</span> now</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="container-fluid">
                    <div class="row justify-content-center flex-warp">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-7 col-10">
                            <div class="section-content section-content-gap-60 text-center">
                                <h2 class="section-title">Produk Ready Stock</h2>
                                <p>Pilih Produk Favoritmu yang Sedang Ready Stock.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-tab-item-wrapper">
                <div class="container">
                    <div class="row g-5">
                        <?php $ambil = $conn->query("SELECT * from produk where p_flag = 1 AND status LIKE 'Ready%' limit 6"); ?>
                        <?php while($perproduk = $ambil->fetch_assoc()){?>
                        <div class="col-4">
                            <!-- Start Tab Content Items -->
                            <div class="tab-content">
                                <!-- Start Tab Content Single Item -->
                                <div class="tab-pane show active tab-animate" >
                                                        <!-- Start Product Single Item - Style 2 -->
                                                        <div class="product-single-item-style-2">
                                                            <div class="image img-responsive">
                                                                <a href="product-details-default.html"><img class="img-fluid" src="../image/penjual/<?php echo $perproduk['image'] ?>" alt=""></a>
                                                                <a  class="event-btn"><i id="menu-icon" class="fa-regular fa-heart" onclick="sukwish(<?php echo $perproduk['id_produk']; ?>)"></i></a>
                                                            </div>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">
                                                                    <?php
                                                                        $kat = $perproduk['id_kategori'];

                                                                        if ($kat == 1) {
                                                                            echo 'Album';
                                                                        } else if ($kat == 2){
                                                                            echo 'Lightstick';
                                                                        } else if ($kat == 3){
                                                                            echo 'Clothes';
                                                                        } else if ($kat == 4){
                                                                            echo 'Unofficial Merchandise';
                                                                        }  
                                                                    ?>
                                                                    </span>
                                                                    <h4 class="title"><a href="product-details.php?id=<?php echo $perproduk['id_produk'];?>"><?php echo $perproduk['nama_produk'] ?></a></h4>
                                                                    <span class="price">Rp <?php echo number_format($perproduk['harga']) ?></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <form actiom="add-cart.php" method="POST">
                                                                        <input type="hidden" name="idpro" id="idpro" value="<?php echo $perproduk['id_produk']; ?>">
                                                                        <input type="hidden" name="namapro" id="namapro" value="<?php echo $perproduk['nama_produk']; ?>"><br>
                                                                        <input type="hidden" name="qtypro" id="qtypro" value=1><input type="hidden" name="stokpro" id="stokpro" value="<?php 
                                                                        $stok = $perproduk['stok'];

                                                                        if($stok>0){
                                                                            echo "Produk Tersedia";
                                                                        } else if($stok==0){
                                                                            echo "Produk Habis";
                                                                        }
                                                                        ?>">
                                                                        <br>
                                                                        <a class="event-btn" onclick="sukcart(<?php echo $perproduk['id_produk']; ?>)"><span class="material-icons">add_shopping_cart</span></a>
                                                                    </form>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 2 -->
                                                    </div>
                                                        <!-- End Product Single Item - Style 2 -->
                                </div>
                                <!-- End Tab Content Single Item -->
                            </div>
                            <!-- End Tab Content Items -->
                            <?php } ?>
                            <div class="d-flex justify-content-center">
                                <a href="shop-grid-sidebar-left.html" class="btn btn-md btn-default btn-section-bottom">View All Product</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ...::: End Product Tab Item Section :::... -->

    <!-- ...::: Strat Product Tab Item Section :::... -->
    <div class="product-tab-items-section section-fluid-270 section-top-gap-100">
        <div class="box-wrapper">
            <div class="section-wrapper d-none">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-7 col-md-8 col-sm-10">
                            <div class="section-content section-content-gap-60 text-center">
                                <h2 class="section-title fw-normal">Hurry! <br> Get your <span class="fw-bold">product</span> now</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="container-fluid">
                    <div class="row justify-content-center flex-warp">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-7 col-10">
                            <div class="section-content section-content-gap-60 text-center">
                                <h2 class="section-title">Produk Pre-Order</h2>
                                <p>Pilih Produk Favoritmu yang Sedang Open Pre-order.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-tab-item-wrapper">
                <div class="container">
                    <div class="row g-5">
                        <?php $ambil = $conn->query("SELECT * from produk where p_flag = 1 AND status='PO' limit 6"); ?>
                        <?php while($perproduk = $ambil->fetch_assoc()){?>
                        <div class="col-4">
                            <!-- Start Tab Content Items -->
                            <div class="tab-content">
                                <!-- Start Tab Content Single Item -->
                                <div class="tab-pane show active tab-animate" >
                                                        <!-- Start Product Single Item - Style 2 -->
                                                        <div class="product-single-item-style-2">
                                                            <div class="image img-responsive">
                                                                <a href="product-details-default.html"><img class="img-fluid" src="../image/penjual/<?php echo $perproduk['image'] ?>" alt=""></a>
                                                                <a  class="event-btn"><i id="menu-icon" class="fa-regular fa-heart" onclick="sukwish(<?php echo $perproduk['id_produk']; ?>)"></i></a>
                                                            </div>
                                                            <div class="content">
                                                                <div class="top">
                                                                    <span class="catagory">
                                                                    <?php
                                                                        $kat = $perproduk['id_kategori'];

                                                                        if ($kat == 1) {
                                                                            echo 'Album';
                                                                        } else if ($kat == 2){
                                                                            echo 'Lightstick';
                                                                        } else if ($kat == 3){
                                                                            echo 'Clothes';
                                                                        } else if ($kat == 4){
                                                                            echo 'Unofficial Merchandise';
                                                                        }  
                                                                    ?>
                                                                    </span>
                                                                    <h4 class="title"><a href="product-details.php?id=<?php echo $perproduk['id_produk'];?>"><?php echo $perproduk['nama_produk'] ?></a></h4>
                                                                    <span class="price">Rp <?php echo number_format($perproduk['harga']) ?></span>
                                                                </div>
                                                                <div class="bottom">
                                                                    <form actiom="add-cart.php" method="POST">
                                                                        <input type="hidden" name="idpro" id="idpro" value="<?php echo $perproduk['id_produk']; ?>">
                                                                        <input type="hidden" name="namapro" id="namapro" value="<?php echo $perproduk['nama_produk']; ?>"><br>
                                                                        <input type="hidden" name="qtypro" id="qtypro" value=1><input type="hidden" name="stokpro" id="stokpro" value="<?php 
                                                                        $stok = $perproduk['stok'];

                                                                        if($stok>0){
                                                                            echo "Produk Tersedia";
                                                                        } else if($stok==0){
                                                                            echo "Produk Habis";
                                                                        }
                                                                        ?>">
                                                                        <br>
                                                                        <a class="event-btn" onclick="sukcart(<?php echo $perproduk['id_produk']; ?>)"><span class="material-icons">add_shopping_cart</span></a>
                                                                    </form>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!-- End Product Single Item - Style 2 -->
                                                    </div>
                                                        <!-- End Product Single Item - Style 2 -->
                                </div>
                                <!-- End Tab Content Single Item -->
                            </div>
                            <!-- End Tab Content Items -->
                            <?php } ?>
                            <div class="d-flex justify-content-center">
                                <a href="shop-grid-sidebar-left.html" class="btn btn-md btn-default btn-section-bottom">View All Product</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ...::: End Product Tab Item Section :::... -->

    <!-- ...::: Strat Banner Card Section Section :::... -->
    
    <!-- ...::: End Banner Card Section Section :::... -->

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
    <script src="assets/js/main.min.js"></script>
    <script type="">
        let changeIcon = function(icon) {
            icon.classList.toggle('fa-solid fa-heart')
        }

        var btnvar2 = document.getElementById('btnh2');

       function Toggle2(){
                if (btnvar2.style.color =="red") {
                    btnvar2.style.color = "navy"
                }
                else{
                    btnvar2.style.color = "red";
                }
       }

        function sukcart(idnih) {

            var idPro=idnih; 
            var namaPro=document.getElementById('namapro');  
            var qtyPro=document.getElementById('qtypro');   
            var message=document.getElementById('message'); 
 
            if(idPro==''||namaPro==''||qtyPro=='') {
                alert("Please fill all fields.");
                return false;
                console.log('kosong');
            } else {
                console.log(idPro);
            }
 
            $.ajax({
                type: "POST",
                url: "add-cart.php",
                data: {
                    idPro: idnih,
                    namaPro: namaPro.value,
                    qtyPro: qtyPro.value
                },
                cache: false,
                success: function(data) {
                    alert(data);
                }
            });
                 
        location.reload();
 
        }

        function sukwish(idnih) {

            var idPro=idnih; 
            var namaPro=document.getElementById('namapro');  
            var stokPro=document.getElementById('stokpro');   
            var message=document.getElementById('message'); 
 
            if(idPro==''||namaPro==''||stokPro=='') {
                alert("Please fill all fields.");
                return false;
                console.log('kosong');
            } else {
                console.log(idPro);
            }
 
            $.ajax({
                type: "POST",
                url: "add-wish.php",
                data: {
                    idPro: idnih,
                    namaPro: namaPro.value,
                    stokPro: stokPro.value
                },
                cache: false,
                success: function(data) {
                    alert(data);
                }
            });
                 
        location.reload(); 
 
        }
    </script>

</body>

</html>