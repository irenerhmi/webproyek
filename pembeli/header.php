<div>
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
                            <button class="header-action-item header-action-wishlist" data-bs-toggle="offcanvas" data-bs-target="#wishlistOffcanvas"><img src="assets/images/icons/icon-heart-light.svg" alt=""><span class="count-tag">
                                <?php
                                $sqlcek1 = "SELECT * FROM wishlist where w_flag = 1";
                                $hit1 = mysqli_query($conn, $sqlcek1);
                                $countw = $hit1->num_rows;

                                if ($countw > 0) {
                                    echo $countw;
                                } else {
                                    echo "0";
                                }
                                ?>
                            </span></button>
                            <button class="header-action-item header-action-wishlist" data-bs-toggle="offcanvas" data-bs-target="#addcartOffcanvas"><img src="assets/images/icons/icon-shopping-bag-light.svg" alt=""><span class="count-tag">
                                <?php
                                $sqlcek = "SELECT * FROM keranjang where c_flag = 1";
                                $hit = mysqli_query($conn, $sqlcek);
                                $count = $hit->num_rows;

                                if ($count > 0) {
                                    echo $count;
                                } else {
                                    echo "0";
                                }
                                ?>
                            </span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- .....:::::: End Header Section - Dark Header :::::.... -->

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
            <?php
                    $total = 0;
                                        
                $ambil = $conn->query("SELECT p.id_produk as produkid, p.harga as harga, p.image as image, w.qty as quantity, w.nama_produk as nama, w.w_flag as flag
                    from wishlist w
                    join produk p
                    WHERE w.w_flag=1 AND w.id_produk=p.id_produk");      
                while($pecah = $ambil->fetch_assoc()){

            ?>
            <br>
            <ul class="offcanvas-products-list">
                <li class="single-item">
                    <div class="box">
                        <a href="" class="image">
                            <img src="../image/penjual/<?= $pecah['image']; ?>" alt="" class="offcanvas-wishlist-image">
                        </a>
                        <div class="content">
                            <a href="" class="title"><?php echo $pecah['nama']; ?></a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity"><?php echo $pecah['quantity']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="item-delete text-right">
                        <a href="hapuswish.php?id=<?= $id; ?>"><img src="assets/images/icons/icon-trash.svg" alt=""></a>
                    </div>
                </li>
            </ul>
            <?php }?> 
            <div class="offcanvas-action-link">
                <a href="wishlist.php" class="btn">View wishlist</a>
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
            <?php
                    $total = 0;
                                        
                $ambil = $conn->query("SELECT p.id_produk as produkid, p.harga as harga, p.image as image, k.qty as quantity, k.nama_produk as nama, k.c_flag as flag
                    from keranjang k
                    join produk p
                    WHERE k.c_flag=1 AND k.id_produk=p.id_produk");      
                while($pecah = $ambil->fetch_assoc()){                                  
                    $subtotal = $pecah['harga']*$pecah['quantity'];

            ?>
            <br>
            <ul class="offcanvas-products-list">
                <li class="single-item">
                    <div class="box">
                        <a href="" class="image">
                            <img src="../image/penjual/<?= $pecah['image']; ?>" alt="" class="offcanvas-wishlist-image">
                        </a>
                        <div class="content">
                            <a href="" class="title"><?php echo $pecah['nama']; ?></a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity"><?php echo $pecah['quantity']; ?> x </span>
                                <span class="offcanvas-wishlist-item-details-price"><?php echo $pecah['harga']*$pecah['quantity']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="item-delete text-right">
                        <a href="hapuscart.php?id=<?= $id; ?>"><img src="assets/images/icons/icon-trash.svg" alt=""></a>
                    </div>
                </li>
            </ul>
            <?php $total+=$subtotal; ?>
            <?php }?> 
            <div class="offcanvas-action-link">
                <a href="cart.php" class="btn">Lihat Cart</a>
                <a href="checkout.php" class="btn">Checkout</a>
            </div>
        </div>
    </div>
</div>