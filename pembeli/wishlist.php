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
    <title>Wishlist - HaulHallyu Merch</title>
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
                    <img src="assets/images/breadcrumb/breadcrumb-img-product-details-page.webp" alt="">
                </div>
                <div class="breadcrumb-content section-fluid-270">
                    <div class="breadcrumb-wrapper">
                        <div class="content">
                            <span class="title-tag">BEST DEAL FOREVER</span>
                            <h2 class="title"><span class="text-mark">Wishlist</span> Page</h2>
                        </div>
                        <ul class="breadcrumb-nav">
                            <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                            <li>Wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Breadcrumb Section :::... -->

    <!-- ...:::: Start Wishlist Section:::... -->
    <div class="wishlist-section section-fluid-270 section-top-gap-100">
        <!-- Start Cart Table -->
        <div class="wishlish-table-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="table_page table-responsive">
                                <table>
                                    <!-- Start Wishlist Table Head -->
                                    <?php if (isset($_SESSION['favo'])) { ?>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_stock">Quantity</th>
                                            <th class="product_addcart">Add To Cart</th>
                                        </tr>
                                    </thead> <!-- End Cart Table Head -->
                                    <tbody>
                                        <!-- Start Wishlist Single Item-->
                                        <?php 
                                        /*echo "<pre>";
                                        print_r($_SESSION['cart']);
                                        echo "<pre>";*/
                                        
                                            # code...
                                        $total = 0;
                                        foreach ($_SESSION['keranjang'] as $id => $qty):
                                        
                                        $ambil = $conn->query("SELECT * from produk WHERE id_produk='$id'");
                                        $pecah = $ambil->fetch_assoc();                                  
                                        $subtotal = $pecah['harga']*$qty;
                                        
                                    
                                        ?>      
                                        <tr>
                                            <td class="product_remove"><a href="hapuscart.php?id=<?= $id; ?>"><img src="assets/images/icons/icon-trash.svg" alt=""></a></td>
                                            <td class="product_thumb"><a href="product-details.php?id=<?php echo $pecah['id_produk'];?>"><img src="../image/penjual/<?= $pecah['image']; ?>" width="320px" height="400px" alt=""></a></td>
                                            <td class="product_name"><a href="<?php echo $pecah['id_produk']?>"><?php echo $pecah['nama_produk']?></a></td>
                                            <td class="product-price">Rp. <?php echo number_format($pecah['harga']); ?></td><input type="hidden" name="iprice" value="<?php echo number_format($pecah['harga']); ?>">
                                            <td class="product_quantity"><label><?= $qty; ?></label> <input class="iquantity" value="<?= $qty; ?>" type="hidden" name="iquantity"></td>
                                            <td class="product_addcart"><a href="cart.html" class="btn btn-sm btn-radius btn-default">Add To Cart</a></td>
                                        </tr> <!-- End Wishlist Single Item-->
                                    </tbody>
                                    <?php $total+=$subtotal; ?>
                                    <?php endforeach?> 
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } 
            else { 
            ?>
            <!-- Start Cart Table -->
            <div class="text-center m-5">
                <h5>Belum ada Barang</h5>
            </div>
            <?php }?>
        </div> <!-- End Cart Table -->
    </div> <!-- ...:::: End Wishlist Section:::... -->

    <!-- ...::: Strat Footer Section - Footer Dark :::... -->
    <footer class="footer-section footer-section-style-2 section-top-gap-120">
        <div class="box-wrapper">
            <div class="footer-wrapper section-fluid-270">
                <div class="container-fluid">
                    <!-- Start Footer Top  -->
                    <div class="footer-top">
                        <div class="footer-top-left">
                            <div class="footer-contact-items">
                                <a class="icon-left" href="tel:+12345678910"><img class="icon-svg" src="assets/images/icons/icon-ios-call-dark.svg" alt="">+123 4567 8910</a>
                                <a class="icon-left" href="mailto:demo@example.com"><img class="icon-svg" src="assets/images/icons/icon-mail-open-dark.svg" alt="">demo@example.com</a>
                            </div>
                        </div>
                        <div class="footer-top-right">
                            <div class="footer-social">
                                <a href="https://www.facebook.com/" target="_blank" rel="noopener"><img class="icon-svg" src="assets/images/icons/icon-facebook-f-dark.svg" alt=""></a>
                                <a href="https://twitter.com/" target="_blank" rel="noopener"><img class="icon-svg" src="assets/images/icons/icon-twitter-dark.svg" alt=""></a>
                                <a href="https://www.pinterest.com/" target="_blank" rel="noopener"><img class="icon-svg" src="assets/images/icons/icon-pinterest-p-dark.svg" alt=""></a>
                                <a href="https://dribbble.com/" target="_blank" rel="noopener"><img class="icon-svg" src="assets/images/icons/icon-dribbble-dark.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer Top  -->

                    <!-- Start Footer Center  -->
                    <div class="footer-center d-none">
                        <div class="footer-widgets-items">
                            <!-- Start Footer Widget Single Item -->
                            <div class="footer-widgets-single-item footer-widgets-single-item--dark">
                                <h5 class="title">Product</h5>
                                <ul class="footer-nav">
                                    <li><a href="#">Shop Vendor</a></li>
                                    <li><a href="#">Product House</a></li>
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="#">Delivery Areas</a></li>
                                    <li><a href="#">Delivery Cost</a></li>
                                </ul>
                            </div>
                            <!-- End Footer Widget Single Item -->
                            <!-- Start Footer Widget Single Item -->
                            <div class="footer-widgets-single-item footer-widgets-single-item--dark">
                                <h5 class="title">Offer</h5>
                                <ul class="footer-nav">
                                    <li><a href="#">Shop Vendor</a></li>
                                    <li><a href="#">Product House</a></li>
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="#">Delivery Areas</a></li>
                                    <li><a href="#">Delivery Cost</a></li>
                                </ul>
                            </div>
                            <!-- End Footer Widget Single Item -->
                            <!-- Start Footer Widget Single Item -->
                            <div class="footer-widgets-single-item footer-widgets-single-item--dark">
                                <h5 class="title">Information</h5>
                                <ul class="footer-nav">
                                    <li><a href="#">Shop Vendor</a></li>
                                    <li><a href="#">Product House</a></li>
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="#">Delivery Areas</a></li>
                                    <li><a href="#">Delivery Cost</a></li>
                                </ul>
                            </div>
                            <!-- End Footer Widget Single Item -->
                            <!-- Start Footer Widget Single Item -->
                            <div class="footer-widgets-single-item footer-widgets-single-item--dark">
                                <h5 class="title">About</h5>
                                <ul class="footer-nav">
                                    <li><a href="#">Shop Vendor</a></li>
                                    <li><a href="#">Product House</a></li>
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="#">Delivery Areas</a></li>
                                    <li><a href="#">Delivery Cost</a></li>
                                </ul>
                            </div>
                            <!-- End Footer Widget Single Item -->
                        </div>
                    </div>
                    <!-- End Footer Center  -->

                    <!-- Start Footer Center  -->
                    <div class="footer-center">
                        <div class="footer-widgets-items">
                            <!-- Start Footer Widget Single Item -->
                            <div class="footer-widgets-single-item footer-widgets-single-item--dark">
                                <h5 class="title">Product</h5>
                                <h5 class="collapsed-title collapsed" data-bs-toggle="collapse" data-bs-target="#dividerId-1">Product</h5>
                                <div id="dividerId-1" class="widget-collapse-body collapse">
                                    <ul class="footer-nav">
                                        <li><a href="contact.html">Shop Vendor</a></li>
                                        <li><a href="contact.html">Product House</a></li>
                                        <li><a href="contact.html">Categories</a></li>
                                        <li><a href="contact.html">Delivery Areas</a></li>
                                        <li><a href="contact.html">Delivery Cost</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Footer Widget Single Item -->
                            <!-- Start Footer Widget Single Item -->
                            <div class="footer-widgets-single-item footer-widgets-single-item--dark">
                                <h5 class="title">Offer</h5>
                                <h5 class="collapsed-title collapsed" data-bs-toggle="collapse" data-bs-target="#dividerId-2">Offer</h5>
                                <div id="dividerId-2" class="widget-collapse-body collapse">
                                    <ul class="footer-nav">
                                        <li><a href="contact.html">Shop Vendor</a></li>
                                        <li><a href="contact.html">Product House</a></li>
                                        <li><a href="contact.html">Categories</a></li>
                                        <li><a href="contact.html">Delivery Areas</a></li>
                                        <li><a href="contact.html">Delivery Cost</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Footer Widget Single Item -->
                            <!-- Start Footer Widget Single Item -->
                            <div class="footer-widgets-single-item footer-widgets-single-item--dark">
                                <h5 class="title">Information</h5>
                                <h5 class="collapsed-title collapsed" data-bs-toggle="collapse" data-bs-target="#dividerId-3">Information</h5>
                                <div id="dividerId-3" class="widget-collapse-body collapse">
                                    <ul class="footer-nav">
                                        <li><a href="contact.html">Shop Vendor</a></li>
                                        <li><a href="contact.html">Product House</a></li>
                                        <li><a href="contact.html">Categories</a></li>
                                        <li><a href="contact.html">Delivery Areas</a></li>
                                        <li><a href="contact.html">Delivery Cost</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Footer Widget Single Item -->
                            <!-- Start Footer Widget Single Item -->
                            <div class="footer-widgets-single-item footer-widgets-single-item--dark">
                                <h5 class="title">About</h5>
                                <h5 class="collapsed-title collapsed" data-bs-toggle="collapse" data-bs-target="#dividerId-4">About</h5>
                                <div id="dividerId-4" class="widget-collapse-body collapse">
                                    <ul class="footer-nav">
                                        <li><a href="contact.html">Shop Vendor</a></li>
                                        <li><a href="contact.html">Product House</a></li>
                                        <li><a href="contact.html">Categories</a></li>
                                        <li><a href="contact.html">Delivery Areas</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Footer Widget Single Item -->
                        </div>
                    </div>
                    <!-- End Footer Center  -->

                    <!-- Start Footer Bottom -->
                    <div class="footer-bottom">
                        <p class="copyright-text copyright-text--dark">&copy; 2021 Mart Up. Made with <span class="material-icons">favorite</span> by <a href="https://hasthemes.com/" target="_blank" rel="noopener noreferrer">Codecarnival</a></p>
                        <a href="#" class="payment-logo"><img class="img-fluid" src="assets/images/company-logo/payment-logo.png" alt=""></a>
                    </div>
                    <!-- End Footer Bottom -->
                </div>
            </div>
        </div>
    </footer>
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
    <script type="text/javascript">
        
    </script>

</body>

</html>