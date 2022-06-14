<!DOCTYPE html>
<html lang="zxx">
<?php

session_start();
if(!isset($_SESSION['pem_username'])){
    header("location: login.php");
}
require "../koneksidb.php";

$username = $_SESSION['pem_username'];
$idtrans = $_SESSION['idtransbaru'];
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nota- HaulHallyu Merch</title>
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
                            <h2 class="title"><span class="text-mark">Nota</span> Page</h2>
                        </div>
                        <ul class="breadcrumb-nav">
                            <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                            <li>Nota</li>
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
                            <h3>Detail Pesanan</h3>
                            <div class="table_page table-responsive">
                                <table>
                                    <!-- Start Wishlist Table Head -->
                                    <thead>
                                        <tr>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                        </tr>
                                    </thead> <!-- End Cart Table Head -->
                                    <tbody>
                                        <?php 
                                        
                                        $total = 0;
                                        //query ambil produk
                                        $tampil = mysqli_query($conn, "SELECT * from dilakukan WHERE id_transaksi='".$_SESSION['idtransbaru']."'");
                                        while($produk = mysqli_fetch_assoc($tampil)){
                                        ?>
                                        <tr>
                                            <?php
                                            $sql = "SELECT * from produk WHERE nama_produk='".$produk["nama_p"]."'";
                                            $result = mysqli_query($conn,$sql);
                                            $row = mysqli_fetch_array($result);
                                            $foto = $row['image'];
                                            ?>
                                            <td><img src="../image/penjual/<?= $foto; ?>" width="110px" height="90px"></a></td>
                                            <td> <?= $produk["nama_p"]; ?> <strong> x<?= $produk["jumlah_p"];; ?> </strong></td>
                                            <td>Rp. <?php echo number_format($produk['jumlah_p']*$produk['harga_p']); ?> </td>
                                        </tr>
                                        <?php
                                        // menghitung subtotal dan total pesanan
                                        $subtotal = $produk['jumlah_p']*$produk['harga_p'];
                                        $total+=$subtotal; 
                                        }
                                    
                                        ?> 
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <?php 
                                //query ambil ongkir
                                $resultr = mysqli_query($conn,"SELECT * from transaksi where id_transaksi='".$_SESSION['idtransbaru']."'");
                                $rowtr = mysqli_fetch_array($resultr);
                                $jumong = $rowtr['tarif'];                                        
                            ?>
                        </div>
                        <div class="table_desc">
                            <?php
                            //query select pembayaran buat ambil metode
                            $resultr = mysqli_query($conn,"SELECT * from pembayaran where id_transaksi='".$_SESSION['idtransbaru']."'");
                            $rowm = mysqli_fetch_array($resultr);
                            $idmet = $rowm['id_metode'];

                            ?>
                            <h3>Tagihan</h3>
                                <div class="table_page table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product_thumb">Detail Pembayaran</th>
                                                <th class="product_thumb">Harga</th>
                                            </tr>
                                        </thead> <!-- End Cart Table Head -->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Jenis Pembayaran
                                                </td>
                                                <td>
                                                    <?php 
                                                    echo $rowtr['jenispem']; ?> 
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    SubTotal
                                                </td>
                                                <td>
                                                    Rp. <?php 
                                                    echo number_format($total); ?> 
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Ongkir 
                                                </td>
                                                <td>
                                                    Rp. <?php 
                                                    echo number_format($jumong); ?> 
                                                    
                                                </td>
                                            </tr>
                                    
                                            <?php 
                                            if ($rowtr['jenispem'] === 'DP'){
                                                $totalakhir = $total+$jumong;
                                                
                                            ?>
                                            <tr>
                                                <td>
                                                    DP 50%
                                                </td>
                                                <td> Rp. 
                                                    <?php echo number_format($totalakhir-($totalakhir*50/100)); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong> Total Pembayaran </strong>
                                                </td>
                                                <td>
                                                    <strong> Rp. <?php 
                                                    echo number_format($totalakhir-($totalakhir*50/100)); ?> 
                                                    </strong>
                                                </td>
                                            </tr>
                                            <?php
                                            } else {
                                            ?>
                                            <tr>
                                                <td>
                                                    <strong> Total Pembayaran </strong>
                                                </td>
                                                <td>
                                                    <strong> Rp. <?php 
                                                    echo number_format($total+$jumong); ?> 
                                                    </strong>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                        <div class="card-text m-3">
                        <br>
                        <h3>Pembayaran </h3>
                            <?php                     
                                //query select metode bayar
                                $resulme = mysqli_query($conn,"SELECT * from metode_bayar where id_metode='$idmet'");
                                $rowb = mysqli_fetch_array($resulme);
                                $namab = $rowb['nama_metode'];
                                $ketb = $rowb['keterangan'];
                            ?>
                            <br> <h6>Silahkan lakukan pembayaran dengan metode pembayaran yang Anda pilih, yaitu <strong> <?php echo $namab; ?> </strong>.
                            </h6>
                            <br>
                            <h6>
                                Tata Cara Pembayaran
                            </h6>
                                <br>
                                <h6>
                                    1. Pilih Transfer.<br> 
                                    <br>2. Pilih <strong> <?php echo $ketb; ?> </strong> <br>
                                    <br>3. Masukkan no rekening <strong> 137-9087689-000 A/N HaulHallyu </strong> <br>
                                    <br>4. Masukkan nominal pembayaran <br>
                                </h6>
                                <form method="POST">
                                    <div class="order_button pt-15">
                                        <br>
                                        <button class="btn btn-sm btn-radius btn-default" name="riwayat">Lihat Riwayat Pesanan</button>
                                    </div>
                                </form>
                                <?php
                                if (isset($_POST['riwayat'])) {
                                    echo "<script>
                                            window.location ='riwayat.php'; 
                                          </script>";              
                                    
                                }
                                ?>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Cart Table -->
    </div> <!-- ...:::: End Wishlist Section:::... -->

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
    </script>

</body>

</html>