<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location: login.php");
    }

    require "fungsi.php";

    $sql = "SELECT * FROM produk WHERE id_produk='".$_GET['id_produk']."'";

    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result);
    $id = $row['id_produk'];
    $namaprod = $row['nama_produk'];
    $deskripsi = $row['deskripsi'];
    $berat = $row['berat'];
    $harga = $row['harga'];
    $stok = $row["stok"]; 
    $image =$row['image'];
    $idsup = $row['id_supplier'];
    $idkat = $row['id_kategori'];
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
                        <h1 class="mt-4">Detail Produk</h1>
                    </div>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-5">
                                <div id="accordion">
                                    <div class="card">
                                      <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            <p><img src="assets/img/<?=$image; ?>" width="300"></p><br>
                                            <p><span class="fw-bold">ID Produk: </span>
                                                #<?php echo $id; ?></p>
                                            <p><span class="fw-bold">Nama Produk: </span>
                                                <?php echo $namaprod; ?></p>
                                            <p><div class="fw-bold">Deskripsi: </div>
                                                <?php echo $deskripsi; ?>
                                            <p><span class="fw-bold"><br>Berat: </span>
                                                <?php echo $berat; ?> kg
                                            <p><span class="fw-bold">Harga: </span>
                                                <?php echo "Rp.",number_format($harga,2,",",".");?></p>
                                            <p><span class="fw-bold">Stok: </span>
                                                <?php echo $stok; ?></p>
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