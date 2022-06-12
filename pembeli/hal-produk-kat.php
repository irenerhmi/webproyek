<!DOCTYPE html>
<html lang="zxx">
<?php

session_start();
if(!isset($_SESSION['pem_username'])){
    header("location: login.php");
}
require "../koneksidb.php";

$username = $_SESSION['pem_username'];
$idkat = $_GET['id'];

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Detail Pesanan- HaulHallyu Merch</title>
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
                            <h2 class="title"><span class="text-mark">Produk Kategori <?php 
                            $sql = "SELECT * from kategori where id_kategori='".$idkat."' AND k_flag=1";
                            $result = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_array($result);
                            $namakat = $row['nama_kat'];

                            echo $namakat;?></span> Page</h2>
                        </div>
                        <ul class="breadcrumb-nav">
                            <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                            <li>Produk Kategori <?php echo $namakat ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Breadcrumb Section :::... -->

    <!-- ...:::: Start Wishlist Section:::... -->
     <div class="shop-list-section section-fluid-270 section-top-gap-100">
        <div class="box-wrapper">
            <div class="shop-list-wrapper">
                <div class="container-fluid">
                    <div class="row flex-column-reverse flex-lg-row">
                        <div class="col-xl-3 col-lg-3">
                            <!-- Start Sidebar Area -->
                            <div class="siderbar-section">
                                <!-- Start Single Sidebar Widget -->
                                <div class="sidebar-single-widget">
                                    <h6 class="sidebar-title title-border title-border">Categories</h6>
                                    <div class="sidebar-content">
                                        <div class="filter-type-select">
                                            <?php
                                            $ambil = mysqli_query($conn, "SELECT * from kategori WHERE k_flag=1");
                                            while($pecah = mysqli_fetch_assoc($ambil)){
                                            ?>
                                            <ul>
                                                <li>
                                                    <label class="checkbox-default" for="catagory_1">
                                                        <a href="hal-produk-kat.php?id=<?php echo $pecah['id_kategori']; ?>"><?php echo $pecah['nama_kat']; ?></a>
                                                    </label>
                                                </li>
                                                <br>
                                            </ul>
                                            <?php 
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div> <!-- End Single Sidebar Widget -->
                            </div> <!-- End Sidebar Area -->
                        </div>
                        <div class="col-xl-8 offset-xl-1 col-lg-9">
                            <ul class="product-shop-filter-info">
                                <li class="prduct-item-traking">
                                    <span>
                                        Showing 
                                        <?php
                                        $sql = "SELECT count(id_produk) as jumlahprod from produk where p_flag=1 and id_kategori='".$idkat."' order by id_produk desc";
                                        $result = mysqli_query($conn,$sql);
                                        $row = mysqli_fetch_array($result);
                                        echo $row['jumlahprod'] ;
                                        ?> results
                                    </span>
                                </li>
                            </ul>
                            <div class="product-shop-list-items">
                                <div class="row mb-n25">
                                    <?php 
                                    $perpage = 9; //jumlah produk perhalaman
                                    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;

                                    $start = ($page > 1) ? ($page * $perpage) - $perpage : 0;

                                    $result = mysqli_query($conn, "SELECT * FROM produk where p_flag=1 and id_kategori='".$idkat."'");
                                    $total = mysqli_num_rows($result);

                                    $pages = ceil($total/$perpage);

                                    $ambil = $conn->query("SELECT * from produk where p_flag = 1 and id_kategori='".$idkat."' "); ?>
                                    <?php while($perproduk = $ambil->fetch_assoc()){?>
                                    <div class="col-md-6 col-12 mb-25">
                                        <!-- Start Product Single Item - Style 1 -->
                                        <div class="product-single-item-style-1">
                                            <a href="product-details.php?id=<?php echo $perproduk['id_produk'];?>" class="image img-responsive">
                                                <img class="img-fluid" src="../image/penjual/<?php echo $perproduk['image'] ?>" alt="">
                                                <!--<ul class="tooltip-tag-items">
                                                    <li class="color-green">15%</li>
                                                </ul>-->
                                            </a>
                                            <div class="content">
                                                <div class="top">
                                                    <span class="catagory">MEN</span>
                                                    <h4 class="title"><a href="product-details.php?id=<?php echo $perproduk['id_produk'];?>"><?php echo $perproduk['nama_produk'] ?></a></h4>
                                                    <span class="price">Rp. <?php echo number_format($perproduk['harga']) ?></span>
                                                </div>
                                                <div class="bottom">
                                                    <ul class="review-star">
                                                        <li class="fill"><span class="material-icons">star</span></li>
                                                        <li class="fill"><span class="material-icons">star</span></li>
                                                        <li class="fill"><span class="material-icons">star</span></li>
                                                        <li class="fill"><span class="material-icons">star</span></li>
                                                        <li class="fill"><span class="material-icons">star_half</span></li>
                                                    </ul>
                                                    <div class="product-event-items">
                                                    <form method="POST">
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
                                                        <a class="btn cart-btn" onclick="sukcart(<?php echo $perproduk['id_produk']; ?>)">Add To Cart</a>
                                                        <a class="btn wishlist-btn" onclick="sukwish(<?php echo $perproduk['id_produk']; ?>)"><span class="material-icons">favorite_border</span></a>
                                                    </form>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- End Product Single Item - Style 1 -->
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <!-- Start Pagination -->
                            <div class="d-flex justify-content-center">
                                <ul class="page-pagination">
                                    <?php for($i=1; $i<=$pages; $i++){ ?>
                                        <li>
                                            <a href="?halaman=<?php echo $i?>"><?php echo $i?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <!-- End Pagination -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Shop List Section:::... --> <!-- ...:::: End Wishlist Section:::... -->

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
    <script>
        function delwish(idnih) {

            var idPro=idnih; 
 
            if(idPro=='') {
                alert("Please fill all fields.");
                return false;
                console.log('kosong');
            } else {
                console.log(idPro);
            }
 
            $.ajax({
                type: "POST",
                url: "hapuswish.php",
                data: {
                    idPro: idnih
                },
                cache: false,
                success: function(data) {
                    alert(data);
                }
            });
                 
        location.reload();
 
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