<!DOCTYPE html>
<html lang="zxx">
<?php

session_start();
if(!isset($_SESSION['pem_username'])){
    header("location: login.php");
}
require "../koneksidb.php";
$id = $_GET['id'];
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Produk Detail - HaulHallyu Merchandise</title>
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
    <!-- .....:::::: End Header Section - Dark Header :::::.... -->

    <!-- .....:::::: Start Mobile Header Section :::::.... -->
    
    <!-- ...:::: End Add Cart Offcanvas Section:::... -->

    <!-- ...::: Strat Breadcrumb Section :::... -->
    <div class="breadcrumb-section">
        <div class="box-wrapper">
            <div class="breadcrumb-wrapper breadcrumb-wrapper--style-1 pos-relative">
                <div class="breadcrumb-bg">
                    <img src="../assets/images/breadcrumb/headerlogin.jpg" width="1920px" height="500px"  alt="">
                </div>
                <div class="breadcrumb-content section-fluid-270">
                    <div class="breadcrumb-wrapper">
                        <div class="content">
                            <span class="title-tag">BEST DEAL FOREVER</span>
                            <h2 class="title"><span class="text-mark">Product</span> Details</h2>
                        </div>
                        <ul class="breadcrumb-nav">
                            <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                            <li>Product Details Default</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Breadcrumb Section :::... -->

    <!-- ...::: Strat Product Gallery Section :::... -->
    <div class="product-gallery-info-section section-fluid-270 section-top-gap-100">
        <div class="box-wrapper">
            <div class="product-gallery-info-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <?php
                        $result = mysqli_query($conn,"SELECT * from produk WHERE id_produk='$id'");
                        $row = mysqli_fetch_array($result);
                        $tid = $row['id_produk'];
                        $tnamapro = $row['nama_produk'];
                        $tdeskripsi = $row['deskripsi'];
                        $thargapro = $row['harga'];
                        $tstok = $row['stok'];
                        $timgpro = $row['image'];                                         
                        ?>
                        <div class="col-xxl-8 col-lg-6">
                            <!-- Start Product Gallert - Tab Style -->
                            <div class="product-gallery product-gallery--style-tab">
                                <div class="row flex-md-row flex-column-reverse">
                                    <div class="col-md-3">
                                        <!-- Start Product Thumbnail -->
                                        <ul class="product-thumbnail-image nav">
                                            <li class="nav-item">
                                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#img-1" type="button">
                                                    <span class="thumb">
                                                        <img id="imgID" class="img-fluid" src="../image/penjual/<?php echo $timgpro; ?>" alt="">
                                                    </span>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#img-2" type="button">
                                                    <span class="thumb">
                                                        <img id="myimage" class="img-fluid" src="../image/penjual/<?php echo $timgpro; ?>" alt="">
                                                    </span>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#img-3" type="button">
                                                    <span class="thumb">
                                                        <img id="myimage" class="img-fluid" src="../image/penjual/<?php echo $timgpro; ?>" alt="">
                                                    </span>
                                                </button>
                                            </li>
                                        </ul>
                                        <!-- End Product Thumbnail -->
                                    </div>
                                    <div class="col-md-9">
                                        <!-- Start Product Large Image -->
                                        <div class="product-large-image tab-content">
                                            <div class="tab-pane fade show active" id="img-1" role="tabpanel">
                                                <div id="resultID" class="image">
                                                    <img class="img-fluid" src="../image/penjual/<?php echo $timgpro; ?>" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="img-2" role="tabpanel">
                                                <div id="myresult" class="image">
                                                    <img class="img-fluid" src="../image/penjual/<?php echo $timgpro; ?>" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="img-3" role="tabpanel">
                                                <div id="myresult" class="image">
                                                    <img class="img-fluid" src="../image/penjual/<?php echo $timgpro; ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product Large Image -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Gallert - Tab Style -->
                        </div>
                        <div class="col-xxl-4 col-lg-6">
                            <!-- Start Product Content -->
                            
                            <div class="product-content">
                                <span class="catagory">Album</span>
                                <h2 class="title"><?php echo $tnamapro; ?></h2>
                                <form actiom="add-wish.php" method="POST">
                                <div class="bottom">
                                    <ul class="review-star">
                                        <li class="fill"><span class="material-icons">star</span></li>
                                        <li class="fill"><span class="material-icons">star</span></li>
                                        <li class="fill"><span class="material-icons">star</span></li>
                                        <li class="fill"><span class="material-icons">star</span></li>
                                        <li class="fill"><span class="material-icons">star_half</span></li>
                                    </ul>
                                    <a class="fa-regular fa-heart" onclick="sukwish(<?php echo $tid; ?>)"> Masukkan ke Wishlist</i></a>
                                    <!--<Button onclick="Toggle1()" id="btnh1" class="btn"><i class="fas fa-heart"></i></Button>-->
                                    
                                </div>
                                <br><span class="price">Rp. <?php echo number_format($thargapro); ?><del></del><br></span>
                                </form>
                                <div class="product-variables">
                                    <!-- Start Product Single Variable -->
                                    <div class="product-variable-color">
                                        <h6 class="title">Stock: <?php echo $tstok; ?> pcs</h6><br>
                                    </div>
                                    <!-- End Product Single Variable -->

                                    <form actiom="add-cart.php" method="POST">
                                    <ul class="variable-items">
                                        <li class="variable-single-items">
                                            <a onclick="sukcart(<?php echo $tid; ?>)" class="btn btn-sm btn-default">Add To Cart</a>
                                            <input type="hidden" name="idpro" id="idpro" value="<?php echo $tid; ?>">
                                            <input type="hidden" name="namapro" id="namapro" value="<?php echo $tnamapro; ?>"><br>
                                            <input type="hidden" name="qtypro" id="qtypro" value=1>
                                            <input type="hidden" name="stokpro" id="stokpro" value="
                                            <?php 

                                                if($stok>0){
                                                    echo "Produk Tersedia";
                                                } else if($stok==0){
                                                    echo "Produk Habis";
                                                }
                                                ?>
                                            ">
                                            <br>
                                        </li>
                                    </ul>
                                    </form>
                                </div>
                                <form actiom="add-cart.php" method="POST">
                                    <br>
                                    <input type="hidden" name="idpro" id="idpro" value="<?php echo $id; ?>">
                                    <input type="hidden" name="namapro" id="namapro" value="<?php echo $tnamapro; ?>"><br>
                                    <!--<input type="button" id="btnh2"><i class="fa-solid fa-cart-shopping">
                                        <span id="texwish2" class="section-title">test</span> 
                                    </i></input>-->
                                        <!--<input type="button" id="btnh2">Add to Cart-->

                                </form>
                            </div>

                            <!-- End Product Content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Product Gallery Section :::... -->

    <!-- ...::: Strat Product Description Section :::... -->
    <div class="product-description-section  section-fluid-270 section-top-gap-100">
        <div class="box-wrapper">
            <div class="product-description-wrapper">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="product-description-content">
                                <h6 class="title">Description</h6>
                                <p><?php echo $tdeskripsi; ?></p>

                                <div class="social-links">
                                    <span class="text">Share:</span>
                                    <div class="items">
                                        <a href="https://example.com/"><img class="icon-svg" src="assets/images/icons/icon-facebook-f-dark.svg" alt=""></a>
                                        <a href="https://example.com/"><img class="icon-svg" src="assets/images/icons/icon-twitter-dark.svg" alt=""></a>
                                        <a href="https://example.com/"><img class="icon-svg" src="assets/images/icons/icon-pinterest-p-dark.svg" alt=""></a>
                                        <a href="https://example.com/"><img class="icon-svg" src="assets/images/icons/icon-dribbble-dark.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Product Description Section :::... -->

    <!-- ...::: Strat Product Section :::... -->
    <div class="product-item-section  section-fluid-270 section-top-gap-100">
        <div class="box-wrapper">
            <div class="section-wrapper">
                <div class="container-fluid">
                    <div class="row justify-content-between align-items-center flex-warp section-content-gap-60">
                        <div class="col-xxl-4 col-lg-5 col-md-6 col-sm-8 col-auto me-5">
                            <div class="section-content">
                                <h2 class="section-title">Related Products</h2>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="top-slider-buttons">
                                <!-- If we need navigation buttons -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-item-wrapper">
                <div class="swiper-container">
                    <div class="row g-5">
                        <?php $ambil = $conn->query("SELECT * from produk where p_flag = 1 AND status='PO' limit 3"); ?>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: Strat Product Section :::... -->

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
    <script>
    //    Wishlist Button   
       var btnvar1 = document.getElementById('btnh1');

       function Toggle1(){
                if (btnvar1.style.color =="red") {
                    btnvar1.style.color = "navy"
                    document.getElementById("texwish").innerHTML = "Masukkan ke wishlist";
                }
                else{
                    btnvar1.style.color = "red"
                    document.getElementById("texwish").innerHTML = "Berhasil dimasukkan ke wishlist!";
                }
       }

    // Add Cart Button 
        var btnvar2 = document.getElementById('btnh2');

       function Toggle2(){
                if (btnvar2.style.color =="red") {
                    btnvar2.style.color = "navy"
                    document.getElementById("texwish2").innerHTML = "Masukkan ke keranjang";
                }
                else{
                    btnvar2.style.color = "red"
                    document.getElementById("texwish2").innerHTML = "Berhasil dimasukkan ke keranjang!";
                }
       }

       $(document).ready(function() {
 
            $("#btnh2").click(function() {
 
                var idPro = $("#idpro").val();
                var namaPro = $("#namapro").val();
                var qtyPro = $("#qtypro").val();
                var message = $("#message").val();
 
                if(idPro==''||namaPro==''||qtyPro=='') {
                    alert("Please fill all fields.");
                    return false;
                }
 
                $.ajax({
                    type: "POST",
                    url: "add-cart.php",
                    data: {
                        idPro: idPro,
                        namaPro: namaPro,
                        qtyPro: qtyPro
                    },
                    cache: false,
                    success: function(data) {
                        alert(data);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                });
                 
            });
 
        });
    </script>

</body>

</html>