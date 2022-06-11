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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
<link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
<link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>

    <!-- .....:::::: Start Header Section - Dark Header :::::.... -->
    <?php require "header.php"; ?>
    <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!--  .....::::: Start Wishlist Offcanvas Section :::::.... -->

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
                            <h2 class="title"><span class="text-mark">Checkout</span> Page</h2>
                        </div>
                        <ul class="breadcrumb-nav">
                            <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Breadcrumb Section :::... -->

    <!-- ...:::: Start Checkout Section:::... -->
    <div class="checkout-section section-fluid-270 section-top-gap-100">
        <div class="container-fluid">
            <div class="row">
                <!-- User Quick Action Form -->
                <div class="col-12">
                    <div class="user-actions accordion">
                        <div id="checkout_login" class="collapse" data-bs-parent="#checkout_login">
                            <div class="checkout_info">
                                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing &amp; Shipping section.</p>
                                <form action="#">
                                    <div class="form_group default-form-box">
                                        <label>Username or email <span>*</span></label>
                                        <input type="text">
                                    </div>
                                    <div class="form_group default-form-box">
                                        <label>Password <span>*</span></label>
                                        <input type="password">
                                    </div>
                                    <div class="form_group group_3 default-form-box">
                                        <button class="btn btn-sm btn-radius btn-default" type="submit">Login</button>
                                        <label class="checkbox-default">
                                            <input type="checkbox">
                                            <span>Remember me</span>
                                        </label>
                                    </div>
                                    <a href="#">Lost your password?</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="user-actions accordion">
                        <h3>
                            <a class="Returning" href="#checkout_coupon" data-bs-toggle="collapse" aria-expanded="true">Click here to enter your code</a>

                        </h3>
                        <div id="checkout_coupon" class="collapse checkout_coupon" data-bs-parent="#checkout_coupon">
                            <div class="checkout_info">
                                <form action="#">
                                    <input placeholder="Coupon code" type="text">
                                    <button class="btn btn-sm btn-radius btn-default" type="submit">Apply coupon</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Quick Action Form -->
            </div>
            <!-- Start User Details Checkout Form -->
            <form method="post">
                <div class="checkout_form">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <?php
                            $sql = "select * from user where u_username = '".$_SESSION['username']."' ";

                            $result = mysqli_query($conn, $sql);

                            $row = mysqli_fetch_array($result);

                            $nama = $row['u_nama'];
                            $email = $row['u_email'];
                            $alamat = $row['u_alamat'];
                            $nomor = $row['u_nohp'];
                            ?>
                                <h3>Billing Details</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="default-form-box">
                                            <label>Nama Lengkap <span>*</span></label>
                                            <input type="text" id="name" value="<?php echo $nama;?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="default-form-box">
                                            <label>Email <span>*</span></label>
                                            <input type="text" value="<?php echo $email; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="default-form-box">
                                            <label>Nomor Handphone </label>
                                            <input type="number" value="<?php echo $nomor; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="default-form-box">
                                            <label>Tempat </label>
                                            <input type="text" placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="default-form-box">
                                            <label>Alamat </label>
                                            <input type="text" name="alamatpeng" value="<?php echo $alamat; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="default-form-box">
                                            <label>Provinsi </label>
                                            <select class="form-control" id="nama_provinsi" name="nama_provinsi">
                                                <option>-- Pilih Provinsi--</option>
                                                <?php
                                                    foreach ($data->rajaongkir->results as $provinsi) {
                                                        echo '<option>-- '.$provinsi->province.'--</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="order-notes">
                                            <label for="order_note">Order Notes</label>
                                            <textarea id="order_note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                                <h3>Your order</h3>
                                <div class="order_table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $total = 0;

                                           $ambil = $conn->query("SELECT p.id_produk as produkid, k.id_produk as produkidk, p.harga as harga, p.image as image, k.qty as quantity, k.nama_produk as nama, k.u_username as uname
                                                from keranjang k
                                                join produk p
                                                WHERE k.id_produk=p.id_produk and k.c_flag=1  AND k.u_username='".$username."'");
                                            while($pecah = $ambil->fetch_assoc()){                                 
                                                $subtotal = $pecah['harga']*$pecah['quantity'];
                                            ?>
                                            <tr>
                                                <td> <?php echo $pecah['nama']; ?> <strong>  x<?php echo $pecah['quantity'];?></strong></td>
                                                <td> <?php echo $pecah['harga']; ?></td>
                                            </tr>
                                        </tbody>
                                            <?php 
                                            $total+=$subtotal;
                                            }
                                            ?>
                                        <tfoot>
                                            <tr>
                                                <th>Subtotal</th>
                                                <td>
                                                    <?php 
                                                    echo number_format($total);
                                                    ?>
                                                </td>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment_method">
                                    <div class="default-form-box">
                                        <label>Nama Ekspedisi </label>
                                            <select name="ekspedisi" class="form-control">
                                                <option value="">Pilih Ekspedisi</option>          
                                                <option value="JNT">
                                                    JNT
                                                </option>
                                                <option value="JNE">
                                                    JNE
                                                </option>
                                                <option value="SiCepat">
                                                    SiCepat
                                                </option>
                                            </select>
                                        <br>
                                    </div>
                                    <div class="default-form-box">
                                        <br> <label>Ongkos Kirim </label>
                                            <select name="ongkir" class="form-control">
                                                <option value="">Pilih Ongkos Kirim</option>
                                                <?php
                                                $ambil = mysqli_query($conn, "SELECT * from ongkir");
                                                while($pecah = mysqli_fetch_assoc($ambil)){
                                                ?>                                      
                                                <option value="<?php echo $pecah['tarif'] ?>">
                                                    <?php echo $pecah['daerah']?> - 
                                                    Rp. <?php echo number_format($pecah['tarif'])?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        <br>
                                    </div>
                                    <div class="default-form-box">
                                        <br> <label>Metode Pembayaran</label>
                                            <select name="id_metode" class="form-control">
                                                <option value="">Pilih Metode Pembayaran</option>
                                                <?php
                                                $ambil = mysqli_query($conn, "SELECT * from metode_bayar");
                                                while($pecah = mysqli_fetch_assoc($ambil)){
                                                ?>                                      
                                                <option value="<?php echo $pecah['id_metode'] ?>">
                                                    <?php echo $pecah['nama_metode']?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        <br>
                                    </div>
                                <div class="payment_method">
                                    <div class="order_button"><br>
                                        <button class="btn btn-sm btn-radius btn-default" name="checkout">Proceed to Payment</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div> <!-- Start User Details Checkout Form -->
            </form>
            <?php
                            if (isset($_POST['checkout'])) 
                            {

                                $id_pelanggan = $_SESSION['username'];
                                $alamat = $_POST['alamatpeng'];
                                $ongkir = $_POST['ongkir'];
                                $metode = $_POST['id_metode'];
                                $namaeks = $_POST['ekspedisi'];
                                $tanggal_trans =  date("Y-m-d");

                                $totaltrans = 0;
                                $totaltrans = $total + $ongkir;

                                //menyimpan data ke table transaski
                                $resulttr = mysqli_query($conn,"INSERT INTO transaksi (tgl_transaksi, status_trans, tarif, total_trans, u_username) VALUES ('" . $tanggal_trans . "', 'Menunggu Pembayaran', '" . $ongkir . "', '" . $totaltrans . "', '" . $id_pelanggan . "')");

                                /*$sql = "INSERT INTO transaksi (tgl_transaksi, status_trans, tarif, total_trans, u_username) VALUES ('" . $tanggal_trans . "', 'Menunggu Pembayaran', '" . $ongkir . "', '" . $totaltrans . "', '" . $id_pelanggan . "')";

                                if ($conn->query($sql) === TRUE) {
                                    echo "berhasil";
                                } else {
                                    echo "Error: " . $sql . "<br>" . $conn->error;
                                }*/

                                //menyimpan data ke table detail dilakukan
                                $id_baru = mysqli_insert_id($conn); 
                                $_SESSION['idtransbaru'] = $id_baru;

                                //menambahkan data produk biar harganya fix
                                $ambil = $conn->query("SELECT p.id_produk as produkid, k.id_produk as produkidk, p.harga as harga, p.image as image, k.qty as quantity, k.nama_produk as nama, k.u_username as uname
                                                from keranjang k
                                                join produk p
                                                WHERE k.id_produk=p.id_produk and k.c_flag=1  AND k.u_username='".$username."'");
                                while($pecah = $ambil->fetch_assoc()){ 
                                    $id = $pecah['produkidk'];
                                    $namat = $pecah['nama'];
                                    echo $namat;
                                    echo $id;
                                    $hargat = $pecah['harga'];
                                    $qty = $pecah['quantity'];

                                    $dilakukan = "INSERT INTO dilakukan (nama_p, harga_p, id_transaksi, id_produk, jumlah_p, u_username) VALUES ('" . $namat . "','" . $hargat . "', '" . $id_baru . "', '" . $id . "', '" . $qty . "', '" . $id_pelanggan . "')";
                                    $resultd = mysqli_query($conn,$dilakukan);
                                    
                                    if ($resultd === TRUE){

                                        $stok = mysqli_query($conn, "UPDATE produk SET stok=stok - $qty where id_produk='".$id."'");

                                        if ($stok === TRUE) {
                                            echo "<script>
                                                window.alert(' checkout berhasil!')
                                              </script>";

                                        } else {

                                            echo $stok;
                                        }
                                        
                                    } else {

                                        echo $dila;
                                    }
                                };

                                // menyimpan data ke table pembayaran
                                $resultpb = mysqli_query($conn,"INSERT INTO pembayaran (jml_bayar, id_metode, id_transaksi) VALUES ('" . $totaltrans . "','" . $metode . "','" . $id_baru . "')");

                                $id_bayarbar = mysqli_insert_id($conn); 
                                $_SESSION['idtbayarbar'] = $id_bayarbar;

                                // menyimpan data ke table pengiriman
                                $resultpb = mysqli_query($conn,"INSERT INTO pengiriman (nama_ekspedisi, status_peng, alamatpeng, id_bayar) VALUES ('" . $namaeks . "','Belum Dikirim', '" . $alamat . "' , '" . $id_bayarbar . "')");

                                // unset($_SESSION['cart'][$_GET['id']]);
                                echo "<script>
                                        window.location ='nota.php'; 
                                      </script>"; 
                                
                            }
                        ?>
        </div>
    </div><!-- ...:::: End Checkout Section:::... -->

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
    <script>
        $(document).ready(function(){
            $('#provinsi').change(function(){
            //Mengambil value dari option select provinsi kemudian parameternya dikirim menggunakan ajax
            var prov = $('#provinsi').val();
                  $.ajax({
                    type: 'GET',
                    url: 'dataprovinsi.php',
                    data :  'prov_id=' + prov,
                    success: function(hasil_provinsi){
                      alert('berhasil');
                    },
                    error: function(xhr, status, error) {
                        alert('gagal');
                    }
                  });
            });
        });
    </script>

      <!--$("select[name=nama_provinsi]").on("change", function(){
            // Ambil id_provinsi ynag dipilih (dari atribut pribadi)
            var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
            $.ajax({
              type: 'post',
              url: 'datadistrik.php',
              data: 'id_provinsi='+id_provinsi_terpilih,
              success:function(hasil_distrik){
                $("select[name=nama_distrik]").html(hasil_distrik);
              }
            })
          }); -->

</body>

</html>