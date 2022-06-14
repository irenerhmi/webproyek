<!DOCTYPE html>
<html lang="zxx">
<?php

session_start();
if(!isset($_SESSION['pem_username'])){
    header("location: login.php");
}
require "../koneksidb.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HaulHallyu - Riwayat Pesanans</title>
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

    <!-- .....:::::: Start Mobile Header Section :::::.... -->
    
    <!-- ...:::: End Add Cart Offcanvas Section:::... -->

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
                            <h2 class="title"><span class="text-mark">Riwayat</span> Page</h2>
                        </div>
                        <ul class="breadcrumb-nav">
                            <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                            <li>My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Breadcrumb Section :::... -->

    <!-- ...:::: Start Account Dashboard Section:::... -->
    <div class="account-dashboard section-fluid-270 section-top-gap-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="my-account.php"  class="nav-link btn btn-sm btn-default-outline">Akun Saya</a></li>
                            <li> <a href="" class="nav-link btn btn-sm btn-default-outline active ">Lihat Pesanan Saya</a></li>
                            <li><a href="login.php" class="nav-link btn btn-sm btn-default-outline">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        <div class="tab-pane fade show active">
                                <!-- Tab Panes Pesanan Pending -->
                                <h4>Pesanan Pending</h4>
                                <div class="table_page table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Tgl Transaksi</th>
                                                <th>Status</th>
                                                <th>Detail</th>
                                                <th>Jenis Pembayaran</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $nomor = 1;
                                            $idpel = $_SESSION['pem_username'];
                                            $ambil = mysqli_query($conn, "SELECT * from transaksi where u_username = '".$_SESSION['pem_username']."' AND status_trans='Menunggu Pembayaran'"); 
                                            while($perproduk = mysqli_fetch_assoc($ambil)){

                                            ?>
                                            <tr>
                                                <td><?php echo $nomor; ?></td>
                                                <td><?php echo $perproduk['tgl_transaksi']; ?></td>
                                                <td><span class="success"><?php echo $perproduk['status_trans']; ?></span></td>
                                                <td><a href="notaj.php?id=<?php echo $perproduk['id_transaksi']; ?>" name="nota">Lihat Detail Pesanan</a></td>
                                                <td><?php echo $perproduk['jenispem']; ?></td>
                                                <td> Rp. 
                                                    <?php 
                                                    if ($perproduk['jenispem'] === 'DP'){
                                                        $totalakhir = $perproduk['total_trans']-($perproduk['total_trans']*50/100);
                                                        echo number_format($totalakhir); ?>

                                                    <?php
                                                    } else {
                                                        echo number_format($perproduk['total_trans']); 
                                                    }
                                                    ?>
                                                        
                                                </td>
                                                <td>
                                                    <a href="bayar.php?id=<?php echo $perproduk['id_transaksi']; ?>" class="btn btn-danger" name="bayar">Bayar</a><br><br>
                                                    <a href="batal.php?id=<?php echo $perproduk['id_transaksi']; ?>" class="btn btn-dark" name="batal">Batalkan</a>
                                                </td>
                                            </tr>
                                            <?php 
                                            $nomor++;
                                            } 
                                            ?> 
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Tab Panes Pesanan Menunggu Konfirmasi -->
                                <br>
                                <br>
                                <h4>Pesanan Full Payment</h4>
                                <div class="table_page table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Tgl Transaksi</th>
                                                <th>Status</th>
                                                <th>Detail</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $nomor = 1;
                                            $idpel = $_SESSION['pem_username'];
                                            $ambil = mysqli_query($conn, "SELECT * from transaksi where u_username = '".$_SESSION['pem_username']."' AND status_trans='Menunggu Konfirmasi' AND jenispem='Full Payment' OR u_username = '".$_SESSION['pem_username']."' AND status_trans='Menunggu Pengiriman' AND jenispem='Full Payment' "); 
                                            while($perproduk = mysqli_fetch_assoc($ambil)){
                                            ?>
                                            <tr>
                                                <td><?php echo $nomor; ?></td>
                                                <td><?php echo $perproduk['tgl_transaksi']; ?></td>
                                                <td><span class="success"><?php echo $perproduk['status_trans']; ?></span></td>
                                                <td><a href="detail.php?id=<?php echo $perproduk['id_transaksi']; ?>" name="nota">Lihat Detail Pesanan</a></td>
                                                <td>
                                                    Rp. 
                                                    <?php 
                                                    if ($perproduk['jenispem'] === 'DP'){
                                                        $totalakhir = $perproduk['total_trans']-($perproduk['total_trans']*50/100);
                                                        echo number_format($totalakhir); ?>

                                                    <?php
                                                    } else {
                                                        echo number_format($perproduk['total_trans']); 
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php 
                                            $nomor++;
                                            } 
                                            ?>   
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Tab Panes Pesanan Menunggu Pelunasan -->
                                <br>
                                <br>
                                <h4>Pesanan Pelunasan</h4>
                                <div class="table_page table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Tgl Transaksi</th>
                                                <th>Status</th>
                                                <th>Detail</th>
                                                <th>Total</th>
                                                <th>Batas Pelunasan</th>
                                                <th>Pelunasan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $nomor = 1;
                                            $idpel = $_SESSION['pem_username'];
                                            $ambil = mysqli_query($conn, "SELECT * from transaksi where 
                                                u_username = '".$_SESSION['pem_username']."' AND status_trans='Menunggu Pengiriman' AND jenispem='DP' OR u_username = '".$_SESSION['pem_username']."' AND status_trans='Menunggu Konfirmasi Pelunasan' AND jenispem='DP' OR u_username = '".$_SESSION['pem_username']."' AND status_trans='Menunggu Konfirmasi' AND jenispem='DP' "); 
                                            while($perproduk = mysqli_fetch_assoc($ambil)){
                                            ?>
                                            <tr>
                                                <td><?php echo $nomor; ?></td>
                                                <td><?php echo $perproduk['tgl_transaksi']; ?></td>
                                                <td><span class="success"><?php echo $perproduk['status_trans']; ?></span></td>
                                                <td><a href="detail.php?id=<?php echo $perproduk['id_transaksi']; ?>" name="nota">Lihat Detail Pesanan</a></td>
                                                <td>
                                                    Rp. 
                                                    <?php 
                                                    if ($perproduk['jenispem'] === 'DP'){
                                                        $totalakhir = $perproduk['total_trans']-($perproduk['total_trans']*50/100);
                                                        echo number_format($totalakhir); ?>

                                                    <?php
                                                    } else {
                                                        echo number_format($perproduk['total_trans']); 
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php

                                                    $sqlpem = mysqli_query($conn,"SELECT * from pembayaran where id_transaksi='".$perproduk['id_transaksi']."' ");
                                                    $rowpem = mysqli_fetch_array($sqlpem);
                                                    $tglpem = $rowpem['tgl_bayar'];

                                                    $tgl2 = date('Y-m-d', strtotime('+30 days', strtotime($tglpem))); //operasi penjumlahan tanggal sebanyak 30 hari
                                                    echo $tgl2; //print tanggal


                                                    ?> 
                                                </td>
                                                <td>
                                                    <?php
                                                    if ($perproduk['status_trans'] === 'Menunggu Pengiriman'){
                                                    ?>
                                                        <a href="pelunasan.php?id=<?php echo $perproduk['id_transaksi']; ?>" class="btn btn-danger" name="bayar">Pelunasan</a>
                                                    <?php
                                                    } else if ($perproduk['status_trans'] === 'Menunggu Konfirmasi Pelunasan') {
                                                    ?>
                                                        <span class="success">Pelunasan Diproses</span>
                                                    <?php
                                                    } else if ($perproduk['status_trans'] === 'Menunggu Konfirmasi') {
                                                    ?>
                                                        <span class="success">Menunggu Konfirmasi Pembayaran DP</span>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php 
                                            $nomor++;
                                            } 
                                            ?>   
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Tab panes Riwayat Diproses -->
                                <br>
                                <br>
                                <h4>Pesanan Diproses</h4>
                                <div class="table_page table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Tgl Transaksi</th>
                                                <th>Status</th>
                                                <th>Detail</th>
                                                <th>Resi Pengiriman</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <form action="diterima.php" method="POST">
                                        <tbody>
                                            <?php 

                                            $nomor = 1;
                                            //$idpel = $_SESSION['id_pelanggan'];
                                            $ambil = mysqli_query($conn, "SELECT * from transaksi where u_username = '".$_SESSION['pem_username']."' AND status_trans='Pesanan Dikirim'"); 
                                            while($perproduk = mysqli_fetch_assoc($ambil)){

                                                $sqlb = "SELECT * FROM pembayaran WHERE id_transaksi='".$perproduk['id_transaksi']."'";
                                                $ambil2 = mysqli_query($conn, $sqlb); 
                                                $rowsl2 = mysqli_fetch_array($ambil2);
                                                $idbay = $rowsl2['id_bayar'];

                                                $sqlp = "SELECT * FROM pengiriman WHERE id_bayar='".$idbay."'";
                                                $ambil3 = mysqli_query($conn, $sqlp); 
                                                $rowsl3 = mysqli_fetch_array($ambil3);
                                                $idkir = $rowsl3['buktipeng'];
                                                $ekspedisi = $rowsl3['nama_ekspedisi'];
                                            ?>
                                            <tr>
                                                <td><?php echo $nomor; ?></td>
                                                <td><?php echo $perproduk['tgl_transaksi']; ?></td>
                                                <td><span class="success"><?php echo $perproduk['status_trans']; ?></span></td>
                                                <td><a href="detail.php?id=<?php echo $perproduk['id_transaksi']; ?>"  name="nota">Lihat Detail Pesanan</a></td>
                                                <td><?php echo $ekspedisi; ?><br><?php echo $idkir; ?></td>
                                                <td>Rp. <?php echo number_format($perproduk['total_trans']); ?></td>
                                                <td>
                                                    <a href="https://www.cekresi.com" class="btn btn-danger" name="diterima">Lacak</a><br>
                                                    <a href="diterima.php?id=<?php echo $perproduk['id_transaksi']; ?>" class="btn btn-dark" name="diterima">Diterima</a>
                                                </td>
                                            </tr>
                                            <?php 
                                            $nomor++;
                                            } 
                                            ?>   
                                        </tbody>
                                        </form>
                                    </table>
                                </div>

                                <!-- Tab panes Riwayat Pesanan Diterima -->
                                <br>
                                <br>
                                <h4>Pesanan Diterima</h4>
                                <div class="table_page table-responsive">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Tgl Transaksi</th>
                                            <th>Status</th>
                                            <th>Detail</th>
                                            <th>Total</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>                                    
                                        <tbody>
                                            <?php 
                                            $nomor = 1;
                                            //$idpel = $_SESSION['id_pelanggan'];
                                            $ambil = mysqli_query($conn, "SELECT * from transaksi where u_username = '".$_SESSION['pem_username']."' AND status_trans='Pesanan Diterima'"); 
                                            while($perproduk = mysqli_fetch_assoc($ambil)){
                                            ?>
                                            <tr>
                                                <td><?php echo $nomor; ?></td>
                                                <td><?php echo $perproduk['tgl_transaksi']; ?></td>
                                                <td><span class="success"><?php echo $perproduk['status_trans']; ?></span></td>
                                                <td><a href="detail.php?id=<?php echo $perproduk['id_transaksi']; ?>" name="nota">Lihat Detail Pesanan</a></td>
                                                <td>Rp. <?php echo number_format($perproduk['total_trans']); ?></td>
                                                <td><a href="notareview.php?id=<?php echo $perproduk['id_transaksi']; ?>" class="btn btn-danger" name="review">Beri Review</a></td>
                                            </tr>
                                            <?php 
                                            $nomor++;
                                            } 
                                            ?>   
                                        </tbody>
                                    </table>
                                </div>


                                <!-- Tab panes Riwayat Pesanan Selesai -->
                                <br>
                                <br>
                                <h4>Pesanan Selesai</h4>
                                <div class="table_page table-responsive">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Tgl Transaksi</th>
                                            <th>Status</th>
                                            <th>Detail</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>                                    
                                        <tbody>
                                            <?php 
                                            $nomor = 1;
                                            //$idpel = $_SESSION['id_pelanggan'];
                                            $ambil = mysqli_query($conn, "SELECT * from transaksi where u_username = '".$_SESSION['pem_username']."' AND status_trans='Pesanan Selesai'"); 
                                            while($perproduk = mysqli_fetch_assoc($ambil)){
                                            ?>
                                            <tr>
                                                <td><?php echo $nomor; ?></td>
                                                <td><?php echo $perproduk['tgl_transaksi']; ?></td>
                                                <td><span class="success"><?php echo $perproduk['status_trans']; ?></span></td>
                                                <td><a href="detail.php?id=<?php echo $perproduk['id_transaksi']; ?>" name="nota">Lihat Detail Pesanan</a></td>
                                                <td>Rp. <?php echo number_format($perproduk['total_trans']); ?></td>
                                            </tr>
                                            <?php 
                                            $nomor++;
                                            } 
                                            ?>   
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Tab panes Riwayat Dibatalkan -->
                                <br>
                                <br>
                                <h4>Pesanan Dibatalkan</h4>
                                <div class="table_page table-responsive">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Detail</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>                                    
                                    <tbody>
                                        <?php 
                                        $nomor = 1;
                                        //$idpel = $_SESSION['id_pelanggan'];
                                        $ambil = mysqli_query($conn, "SELECT * from transaksi where u_username = '".$_SESSION['pem_username']."' AND status_trans='Pesanan Dibatalkan'"); 
                                        while($perproduk = mysqli_fetch_assoc($ambil)){
                                        ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $perproduk['tgl_transaksi']; ?></td>
                                            <td><span class="success"><?php echo $perproduk['status_trans']; ?></span></td>
                                            <td><a href="detail.php?id=<?php echo $perproduk['id_transaksi']; ?>"  name="nota">Lihat Detail Pesanan</a></td>
                                            <td>Rp. <?php echo number_format($perproduk['total_trans']); ?></td>
                                        </tr>
                                        <?php 
                                        $nomor++;
                                        } 
                                        ?>   
                                    </tbody>
                                    </table>
                                </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Account Dashboard Section:::... -->

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
        function save(){
            document.getElementById("savsuc").innerHTML = "Perubahan Berhasil Tersimpan!";
        }
    </script>

</body>

</html>