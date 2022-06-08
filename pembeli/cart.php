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
    <title>Keranjang - HaulHalyu</title>
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
    <?php require "header.php";?>

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
                            <h2 class="title"><span class="text-mark">Cart</span> Page</h2>
                        </div>
                        <ul class="breadcrumb-nav">
                            <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Breadcrumb Section :::... -->

    <!-- ...:::: Start Cart Section:::... -->
    <div class="cart-section section-fluid-270 section-top-gap-100">
        <!-- Start Cart Table -->
        <div class="cart-table-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="table_page table-responsive">
                                <table>
                                    <!-- Start Cart Table Head -->
                                <?php 
                                $sqlcek = "SELECT * FROM keranjang";
                                $hit = mysqli_query($conn, $sqlcek);
                                $count = $hit->num_rows;
                                if ($count>=1) { ?>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_total">Total</th>
                                        </tr>
                                    </thead> <!-- End Cart Table Head -->
                                    <tbody>
                                        <!-- Start Cart Single Item-->
                                        <?php 
                                        /*echo "<pre>";
                                        print_r($_SESSION['cart']);
                                        echo "<pre>";*/
                                        
                                            # code...
                                        $total = 0;
                                        
                                        $ambil = $conn->query("SELECT p.id_produk as produkid, k.id_produk as produkidk, p.harga as harga, p.image as image, k.qty as quantity, k.nama_produk as nama
                                            from keranjang k
                                            join produk p
                                            WHERE k.id_produk=p.id_produk and k.c_flag=1");
                                        while($pecah = $ambil->fetch_assoc()){                                 
                                            $subtotal = $pecah['harga']*$pecah['quantity'];
                                    
                                    
                                        ?> 
                                        <form actiom="hapuscart.php" method="POST">   
                                            <tr>
                                                <td class="product_remove">
                                                    <a onclick="delcart(<?php echo $pecah['produkidk']; ?>)">
                                                        <img src="assets/images/icons/icon-trash.svg" alt="">
                                                    </a>
                                                </td>
                                                <td class="product_thumb"><a href="product-details.php?id=<?php echo $pecah['produkidk'];?>"><img src="../image/penjual/<?= $pecah['image']; ?>" width="320px" height="400px" alt=""></a></td>
                                                <td class="product_name"><a href="<?php echo $pecah['produkidk']?>"><?php echo $pecah['nama']?></a></td>
                                                <td class="product-price">Rp. <?php echo number_format($pecah['harga']); ?></td><input type="hidden" name="iprice" value="<?php echo number_format($pecah['harga']); ?>">
                                                <td class="product_quantity"><label><?php echo $pecah['quantity']; ?></label> <input class="iquantity" value="<?php echo $pecah['quantity']; ?>" type="hidden" name="iquantity"  onchange="subTotal()"></td>
                                                <td class="product_total">Rp. <?php echo number_format($subtotal); ?></td>
                                                <input class="itotal product_total" type="hidden" value="<?php echo $subtotal; ?>"></td>
                                            </tr> <!-- End Cart Single Item-->
                                        </form>
                                    </tbody>
                                    <?php 
                                    $total+=$subtotal;
                                    };
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Cart Table -->

        <!-- Start Coupon Start -->
        <div class="coupon_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Total</p>
                                    <p class="cart_amount">Rp. <?php echo number_format($total); ?></p>
                                </div>
                                <div class="checkout_btn">
                                    <button type="button" onclick="cobaganti()" class="btn btn-sm btn-radius btn-default" href="">Proceed to Checkout</button>
                                </div>
                                <?php } else {
                                  
                                ?>
                                    
                                   <div class="text-center m-5">
                                        <h5>Belum ada Barang</h5>
                                   </div>

                            <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Coupon Start -->
    </div> <!-- ...:::: End Cart Section:::... -->

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
    <script >
        function cobaganti(){
            document.getElementById("lalacoba").innerHTML = "Bisa";
        }

        function subTotal(){
            document.getElementByClassName("iprice").innerHTML;
            var iquantity = document.getElementByClassName("iquantity").innerHTML
            var itotal = document.getElementByClassName("itotal").innerHTML

            for (i =0;i<iprice.length;i++) {
                //document.getElementByClassName("itotal").innerText=(iprice[i].value)*(iquantity[i].value);
                document.getElementByClassName("itotal").innerText=(document.getElementByClassName("iquantity").value)*( document.getElementByClassName("itotal").value);
            }


        }

        function delcart(idnih) {

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
                url: "hapuscart.php",
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
    </script>
    <!-- <script src="assets/js/main.min.js"></script> -->

</body>

</html>