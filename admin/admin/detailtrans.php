<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location: login.php");
    }

    require "fungsi.php";

    $sql = "SELECT * FROM pembayaran WHERE id_transaksi='".$_GET['id']."'";

    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result);
    $id_bayar = $row['id_bayar'];
    $tanggal = $row['tgl_bayar'];
    $jumlah = $row['jml_bayar'];
    $bukti = $row['bukti_bayar'];
    $idmet = $row['id_metode'];
    $id_transaksi =$row['id_transaksi'];
?>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Detail Transaksi</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php require "navbar.php"; ?>
        <div id="layoutSidenav">
            <?php require "sidebar.php"; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Detail Transaksi #<?php echo $id_transaksi ?></h1>
                    </div>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-5">
                                <div id="accordion">
                                    <div class="card">
                                      <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            <p><span class="fw-bold"> ID Bayar: </span>
                                                #<?php echo $id_bayar ?></p>
                                            <p><span class="fw-bold"> Tanggal Bayar: </span>
                                                <?php echo $tanggal ?></p>
                                            <p><span class="fw-bold"> Bank: </span>
                                                <?php 

                                                    $metode = "SELECT  * FROM metode_bayar WHERE id_metode='$idmet'";
                                                    $result = mysqli_query($conn,$metode);
                                                    $baris = mysqli_fetch_array($result);
                                                    $bank = $baris['nama_metode']; 

                                                    echo $bank; ?>
                                            <p><span class="fw-bold"> Jumlah: </span>
                                                <?php echo "Rp.",number_format($jumlah,2,",",".");?></p>
                                            <p><img src="assets/img/<?=$bukti; ?>" width="300"></p>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php require "footer.php"; ?>
            </div>
    </body>
</html>