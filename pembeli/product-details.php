<!DOCTYPE html>
<html lang="zxx">
<?php

session_start();
if(!isset($_SESSION['username'])){
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
                                <h2 class="title"><?php echo $tnamapro; ?></h2>
                                <div class="bottom">
                                    <ul class="review-star">
                                        <li class="fill"><span class="material-icons">star</span></li>
                                        <li class="fill"><span class="material-icons">star</span></li>
                                        <li class="fill"><span class="material-icons">star</span></li>
                                        <li class="fill"><span class="material-icons">star</span></li>
                                        <li class="fill"><span class="material-icons">star_half</span></li>
                                    </ul>
                                    <!--<Button onclick="Toggle1()" id="btnh1" class="btn"><i class="fas fa-heart"></i></Button>-->
                                    
                                </div>
                                <br>
                                <a onclick="Toggle1()" id="btnh1" class="wishlist"><i class="fa-solid fa-heart"> 
                                </i></a>
                                <p id="texwish" class="section-title">Masukkan ke Wishlist</p> 

                                <span class="price">Rp. <?php echo number_format($thargapro); ?></span>
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
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="top-slider-buttons">
                                <!-- If we need navigation buttons -->
                                <div class="slider-buttons">
                                    <div class="slider-button button-prev"><span class="material-icons">arrow_left</span></div>
                                    <div class="slider-button button-next"><span class="material-icons">arrow_right</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-item-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Slider main container -->
                            <div class="product-slider-3grids-1row">
                                <div class="swiper-container">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <!-- Start Product Single Item - Style 1 -->
                                        <div class="product-single-item-style-1 swiper-slide">
                                            <a href="product-details-default.html" class="image img-responsive">
                                                <img class="img-fluid" src="assets/images/products/default/product-default-style-1-img-5.webp" alt="">
                                                <ul class="tooltip-tag-items">
                                                    <li class="color-yellow">15%</li>
                                                </ul>
                                            </a>
                                            <div class="content">
                                                <div class="top">
                                                    <span class="catagory">WOMEN</span>
                                                    <h4 class="title"><a href="product-details-default.html">Star Women pants</a></h4>
                                                    <span class="price">$200.00 <del>$300.00</del></span>
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
                                                        <a href="cart.html" class="btn cart-btn">Add to cart</a>
                                                        <a href="wishlist.html" class="btn wishlist-btn"><span class="material-icons">favorite_border</span></a>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- End Product Single Item - Style 1 -->
                                        <!-- Start Product Single Item - Style 1 -->
                                        <div class="product-single-item-style-1 swiper-slide">
                                            <a href="product-details-default.html" class="image img-responsive">
                                                <img class="img-fluid" src="assets/images/products/default/product-default-style-1-img-4.webp" alt="">
                                            </a>
                                            <div class="content">
                                                <div class="top">
                                                    <span class="catagory">WOMEN</span>
                                                    <h4 class="title"><a href="product-details-default.html">Slightly jackets XL Cool </a></h4>
                                                    <span class="price">$350.00</span>
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
                                                        <a href="cart.html" class="btn cart-btn">Add to cart</a>
                                                        <a href="wishlist.html" class="btn wishlist-btn"><span class="material-icons">favorite_border</span></a>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- End Product Single Item - Style 1 -->
                                        <!-- Start Product Single Item - Style 1 -->
                                        <div class="product-single-item-style-1 swiper-slide">
                                            <a href="product-details-default.html" class="image img-responsive">
                                                <img class="img-fluid" src="assets/images/products/default/product-default-style-1-img-6.webp" alt="">
                                                <ul class="tooltip-tag-items">
                                                    <li class="color-green">15%</li>
                                                </ul>
                                            </a>
                                            <div class="content">
                                                <div class="top">
                                                    <span class="catagory">Bag</span>
                                                    <h4 class="title"><a href="product-details-default.html">Distracted XL bag</a></h4>
                                                    <span class="price">$1200.00 <del>$1500.00</del></span>
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
                                                        <a href="cart.html" class="btn cart-btn">Add to cart</a>
                                                        <a href="wishlist.html" class="btn wishlist-btn"><span class="material-icons">favorite_border</span></a>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- End Product Single Item - Style 1 -->
                                        <!-- Start Product Single Item - Style 1 -->
                                        <div class="product-single-item-style-1 swiper-slide">
                                            <a href="product-details-default.html" class="image img-responsive">
                                                <img class="img-fluid" src="assets/images/products/default/product-default-style-1-img-1.webp" alt="">
                                                <ul class="tooltip-tag-items">
                                                    <li class="color-green">15%</li>
                                                </ul>
                                            </a>
                                            <div class="content">
                                                <div class="top">
                                                    <span class="catagory">MEN</span>
                                                    <h4 class="title"><a href="product-details-default.html">Man's Outdoor Shirt</a></h4>
                                                    <span class="price">$355.00 <del>$400.00</del></span>
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
                                                        <a href="cart.html" class="btn cart-btn">Add to cart</a>
                                                        <a href="wishlist.html" class="btn wishlist-btn"><span class="material-icons">favorite_border</span></a>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- End Product Single Item - Style 1 -->
                                        <!-- Start Product Single Item - Style 1 -->
                                        <div class="product-single-item-style-1 swiper-slide">
                                            <a href="product-details-default.html" class="image img-responsive">
                                                <img class="img-fluid" src="assets/images/products/default/product-default-style-1-img-2.webp" alt="">
                                            </a>
                                            <div class="content">
                                                <div class="top">
                                                    <span class="catagory">WOMEN</span>
                                                    <h4 class="title"><a href="product-details-default.html">Women Summer deal</a></h4>
                                                    <span class="price">$550.00</span>
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
                                                        <a href="cart.html" class="btn cart-btn">Add to cart</a>
                                                        <a href="wishlist.html" class="btn wishlist-btn"><span class="material-icons">favorite_border</span></a>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- End Product Single Item - Style 1 -->
                                        <!-- Start Product Single Item - Style 1 -->
                                        <div class="product-single-item-style-1 swiper-slide">
                                            <a href="product-details-default.html" class="image img-responsive">
                                                <img class="img-fluid" src="assets/images/products/default/product-default-style-1-img-3.webp" alt="">
                                            </a>
                                            <div class="content">
                                                <div class="top">
                                                    <span class="catagory">WOMEN</span>
                                                    <h4 class="title"><a href="product-details-default.html">Women Luxury Party</a></h4>
                                                    <span class="price">$1050.00</span>
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
                                                        <a href="cart.html" class="btn cart-btn">Add to cart</a>
                                                        <a href="wishlist.html" class="btn wishlist-btn"><span class="material-icons">favorite_border</span></a>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- End Product Single Item - Style 1 -->
                                    </div>
                                </div>
                            </div>
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
    <script>
    //    First Like Button   
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

    </script>
    <script type="">
        function imageZoom(imgID, resultID) {
          var img, lens, result, cx, cy;
          img = document.getElementById(imgID);
          result = document.getElementById(resultID);
          /*create lens:*/
          lens = document.createElement("DIV");
          lens.setAttribute("class", "img-zoom-lens");
          /*insert lens:*/
          img.parentElement.insertBefore(lens, img);
          /*calculate the ratio between result DIV and lens:*/
          cx = result.offsetWidth / lens.offsetWidth;
          cy = result.offsetHeight / lens.offsetHeight;
          /*set background properties for the result DIV:*/
          result.style.backgroundImage = "url('" + img.src + "')";
          result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
          /*execute a function when someone moves the cursor over the image, or the lens:*/
          lens.addEventListener("mousemove", moveLens);
          img.addEventListener("mousemove", moveLens);
          /*and also for touch screens:*/
          lens.addEventListener("touchmove", moveLens);
          img.addEventListener("touchmove", moveLens);
          function moveLens(e) {
            var pos, x, y;
            /*prevent any other actions that may occur when moving over the image:*/
            e.preventDefault();
            /*get the cursor's x and y positions:*/
            pos = getCursorPos(e);
            /*calculate the position of the lens:*/
            x = pos.x - (lens.offsetWidth / 2);
            y = pos.y - (lens.offsetHeight / 2);
            /*prevent the lens from being positioned outside the image:*/
            if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
            if (x < 0) {x = 0;}
            if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
            if (y < 0) {y = 0;}
            /*set the position of the lens:*/
            lens.style.left = x + "px";
            lens.style.top = y + "px";
            /*display what the lens "sees":*/
            result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
          }
          function getCursorPos(e) {
            var a, x = 0, y = 0;
            e = e || window.event;
            /*get the x and y positions of the image:*/
            a = img.getBoundingClientRect();
            /*calculate the cursor's x and y coordinates, relative to the image:*/
            x = e.pageX - a.left;
            y = e.pageY - a.top;
            /*consider any page scrolling:*/
            x = x - window.pageXOffset;
            y = y - window.pageYOffset;
            return {x : x, y : y};
          }
        }
    </script>

</body>

</html>