<!DOCTYPE html>
<html lang="zxx">

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
    <header class="header-section pos-absolute dark-bg sticky-header d-none d-lg-block section-fluid-270">
        <div class="header-wrapper pos-relative">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <!-- Start Header Logo -->
                        <a href="index.php" class="header-logo">
                            <img class="img-fluid" src="assets/images/logo/logo-dark-theme.png" alt="">
                        </a>
                        <!-- End Header Logo -->
                    </div>
                    <div class="col-auto d-flex align-items-center">
                        <div class="header-event">
                            <!-- Start Menu event -->
                            <div class="menu-event dropdown">
                                <button class="main-menu-event dropdown-toggle" data-bs-toggle="dropdown"><img src="assets/images/icons/icon-open-menu.svg" alt=""><span>Menu</span><img src="assets/images/icons/icon-arrow-drop-down.svg" alt=""></button>
                                <ul class="mainmenu-nav dropdown-menu">
                                    <li class="menu-items">
                                        <a href="index.php">Home </a>
                                    </li>
                                    <li class="menu-items">
                                        <a href="#">Kategori <span class="material-icons">arrow_right</span></a>
                                        <div class="has-dropdown megamenu">
                                            <div class="menu-content">
                                                <!--<h6 class="title">Shop Page</h6>-->
                                                <ul class="submenu">
                                                    <li><a href="shop-grid-sidebar-left.html">Album </a></li>
                                                    <li><a href="shop-grid-sidebar-right.html">Lightstick </a></li>
                                                    <li><a href="shop-grid-sidebar-full-width-3-column.html">Clothes </a></li>
                                                    <li><a href="shop-grid-sidebar-full-width-3-column.html">Unofficial Merchandise </a></li>
                                                </ul>
                                            </div>                                            
                                        </div>
                                    </li>
                                    <li class="menu-items">
                                        <a href="blog-list-left-sidebar.html">News</a>
                                    </li>
                                    <li class="menu-items">
                                        <a href="#">Profile <span class="material-icons">arrow_right</span></a>
                                        <div class="has-dropdown">
                                            <div class="menu-content">
                                                <ul class="submenu">
                                                    <li><a href="my-account.php">My Profile</a></li>
                                                    <li><a href="faq.html">Riwayat Pesanan</a></li>
                                                    <li><a href="logout.php">Log Out</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-items"><a href="contact.html">About Us</a></li>
                                </ul>
                            </div>
                            <div class="search-event">
                                <input class="header-search" type="search" placeholder="Search">
                                <button class="header-search-btn" type="submit"><img src="assets/images/icons/icon-search.svg" alt=""></button>
                            </div>
                            <!-- End Menu event -->
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-action">
                            <button class="header-action-item header-action-wishlist" ><img src="assets/images/icons/icon-heart-light.svg" alt=""><span class="count-tag">0</span></button>
                            <button class="header-action-item header-action-wishlist" ><img src="assets/images/icons/icon-shopping-bag-light.svg" alt=""><span class="count-tag">0
                            </span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- ...:::: End Add Cart Offcanvas Section:::... -->

    
    <!-- .....:::::: Start Mobile Header Section :::::.... -->
    <div class="mobile-header d-block d-lg-none">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="mobile-logo">
                        <a href="index.html"><img src="assets/images/logo/logo-light-theme.png" alt=""></a>
                    </div>
                </div>

                <div class="col-auto">
                    <div class="mobile-action-link text-end d-flex ">
                        <button data-bs-toggle="offcanvas" data-bs-target="#toggleMenu"><span class="material-icons">menu</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .....:::::: Start MobileHeader Section :::::.... -->

    <!--  .....::::: Start Offcanvas Mobile Menu Section :::::.... -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="toggleMenu">
        <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="d-flex justify-content-center ">
                <a href="wishlist.html" class="header-action-item header-action-wishlist"><img src="assets/images/icons/icon-heart-dark.svg" alt=""><span class="count-tag">01</span></a>
                <a href="cart.html" class="header-action-item header-action-wishlist"><img src="assets/images/icons/icon-shopping-bag-dark.svg" alt=""><span class="item-count item-count--light">02 ITEMS</span></a>
            </div>

            <div class="header-event mobile-search my-5">
                <div class="search-event">
                    <input class="header-search" type="search">
                    <button class="header-search-btn" type="submit"><img src="assets/images/icons/icon-search.svg" alt=""></button>
                </div>
            </div>

            <!-- Start Offcanvas Mobile Menu Wrapper -->
            <div class="offcanvas-mobile-menu-wrapper">
                <!-- Start Mobile Menu  -->
                <div class="mobile-menu-bottom">
                    <!-- Start Mobile Menu Nav -->
                    <div class="offcanvas-menu">
                        <ul>
                            <li>
                                <a href="#"><span>Home</span></a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span>Shop</span></a>
                                <ul class="mobile-sub-menu">
                                    <li>
                                        <a href="#">Shop Page</a>
                                        <ul class="mobile-sub-menu">
                                            <li><a href="shop-grid-sidebar-left.html">Left Sidebar</a></li>
                                            <li><a href="shop-grid-sidebar-right.html">Right Sidebar</a></li>
                                            <li><a href="shop-grid-sidebar-full-width-3-column.html">Shop Full Width</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="mobile-sub-menu">
                                    <li>
                                        <a href="#">Product Page</a>
                                        <ul class="mobile-sub-menu">
                                            <li><a href="product-details-default.html">Product Default</a></li>
                                            <li><a href="product-details-group.html">Product Group</a></li>
                                            <li><a href="product-details-left-sidebar.html">Product Left Sidebar</a></li>
                                            <li><a href="product-details-right-sidebar.html">Product Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="mobile-sub-menu">
                                    <li>
                                        <a href="#">Others Page</a>
                                        <ul class="mobile-sub-menu">
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="compare.html">Compare</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="my-account.html">MyAccount</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span>Blogs</span></a>
                                <ul class="mobile-sub-menu">
                                    <li>
                                        <a href="#">Blog List</a>
                                        <ul class="mobile-sub-menu">
                                            <li><a href="blog-list-3-grid-full-width.html">Grid 3 Full Width</a></li>
                                            <li><a href="blog-list-4-grid-full-width.html">Grid 4 Full Width</a></li>
                                            <li><a href="blog-list-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="mobile-sub-menu">
                                    <li>
                                        <a href="#">Blog Details</a>
                                        <ul class="mobile-sub-menu">
                                            <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="blog-details-right-sidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span>Pages</span></a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="about.html"><span>About Us</span></a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="error.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html"><span>Contact</span></a>
                            </li>
                        </ul>
                    </div> <!-- End Mobile Menu Nav -->
                </div> <!-- End Mobile Menu -->

                <!-- Start Mobile contact Info -->
                <div class="mobile-contact-info text-center">
                    <ul class="social-link">
                        <li><a href="https://www.facebook.com/" target="_blank" rel="noopener"><img class="icon-svg" src="assets/images/icons/icon-facebook-f-dark.svg" alt=""></a>
                        </li>
                        <li><a href="https://twitter.com/" target="_blank" rel="noopener"><img class="icon-svg" src="assets/images/icons/icon-twitter-dark.svg" alt=""></a>
                        </li>
                        <li><a href="https://www.pinterest.com/" target="_blank" rel="noopener"><img class="icon-svg" src="assets/images/icons/icon-pinterest-p-dark.svg" alt=""></a></li>
                        <li><a href="https://dribbble.com/" target="_blank" rel="noopener"><img class="icon-svg" src="assets/images/icons/icon-dribbble-dark.svg" alt=""></a></li>
                    </ul>
                </div>
                <!-- End Mobile contact Info -->

            </div> <!-- End Offcanvas Mobile Menu Wrapper -->
        </div>
    </div>
    <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!--  .....::::: Start Wishlist Offcanvas Section :::::.... -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="wishlistOffcanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Wishlist</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="offcanvas-products-list">
                <li class="single-item">
                    <div class="box">
                        <a href="" class="image">
                            <img src="assets/images/products/small/product-small-1.webp" alt="" class="offcanvas-wishlist-image">
                        </a>
                        <div class="content">
                            <a href="" class="title">Tops</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$100.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-delete text-right">
                        <a href="#"><img src="assets/images/icons/icon-trash.svg" alt=""></a>
                    </div>
                </li>
                <li class="single-item">
                    <div class="box">
                        <a href="" class="image">
                            <img src="assets/images/products/small/product-small-2.webp" alt="" class="offcanvas-wishlist-image">
                        </a>
                        <div class="content">
                            <a href="" class="title">Leggings</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-delete text-right">
                        <a href="#"><img src="assets/images/icons/icon-trash.svg" alt=""></a>
                    </div>
                </li>
                <li class="single-item">
                    <div class="box">
                        <a href="" class="image">
                            <img src="assets/images/products/small/product-small-3.webp" alt="" class="offcanvas-wishlist-image">
                        </a>
                        <div class="content">
                            <a href="" class="title">Casual Shirt</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$65.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-delete text-right">
                        <a href="#"><img src="assets/images/icons/icon-trash.svg" alt=""></a>
                    </div>
                </li>
            </ul>
            <div class="offcanvas-action-link">
                <a href="wishlist.html" class="btn">View wishlist</a>
            </div>
        </div>
    </div>
    <!-- ...:::: End Wishlist Offcanvas Section:::... -->

    <!--  .....::::: Start Add Cart Offcanvas Section :::::.... -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="addcartOffcanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Add Cart</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="offcanvas-products-list">
                <li class="single-item">
                    <div class="box">
                        <a href="" class="image">
                            <img src="../image/penjual/<?= $pecah['image']; ?>" alt="" class="offcanvas-wishlist-image">
                        </a>
                        <div class="content">
                            <a href="" class="title"></a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity"></span>
                                <span class="offcanvas-wishlist-item-details-price"></span>
                            </div>
                        </div>
                    </div>
                    <div class="item-delete text-right">
                        <a href="hapuscart.php?id=<?= $id; ?>"><img src="assets/images/icons/icon-trash.svg" alt=""></a>
                    </div>
                </li>
            </ul>
            <div class="offcanvas-action-link">
                <a href="cart.php" class="btn">Lihat Cart</a>
                <a href="checkout.php" class="btn">Checkout</a>
            </div>
        </div>
    </div>

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
                            <span class="title-tag">BEST DEAL FOREVER</span>
                            <h2 class="title"><span class="text-mark"> Register</span> Page</h2>
                        </div>
                        <ul class="breadcrumb-nav">
                            <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                            <li>Register</li>
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
                
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register" data-aos="fade-up" data-aos-delay="200">
                        <h3>Register</h3>
                        <form action="cekregister.php" method="POST" autocomplete="off">
                            <div class="default-form-box">
                                <label>Username</label>
                                <input name="username" type="text" placeholder="Masukkan Username">
                            </div>
                            <div class="default-form-box">
                                <label>Email address</label>
                                <input name="email" type="email" placeholder="Masukkan Email">
                            </div>
                            <div class="default-form-box">
                                <label>Name</label>
                                <input name="name" type="text" placeholder="Masukkan Nama">
                            </div>
                            <div class="default-form-box">
                                <label>Phone</label>
                                <input name="phone" type="text" placeholder="Masukkan Nomor Telfon">
                            </div>
                            <div class="default-form-box">
                                <label>Passwords</label>
                                <input name="password" type="password" placeholder="password">
                            </div>
                            <div class="default-form-box">
                                <label>Alamat</label>
                                <input name="alamat" type="text" placeholder="Masukkan Alamat">
                            </div>
                            <div class="login_submit">
                                <button class="btn btn-sm btn-radius btn-default" name="submit" type="submit" value="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
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