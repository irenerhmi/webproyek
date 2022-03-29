<?php  
require 'fungsi.php';

$metode = query("SELECT * FROM metode_bayar WHERE id_metode= '".$_GET['m_id']."'")[0];

if( isset($_POST["editmet"]) ){

    if( editmet($_POST) > 0) {
        header ("location: metode.php");
    } 
    else {
        echo "Error"; }
}
?>

<!DOCTYPE html>
<html>   
    <?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location: loginform.php");
    }
    ?>


    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Bank</title>
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
                        <h1 class="mt-4">Bank</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Setting</li>
                            <li class="breadcrumb-item active">Bank</li>
                            <li class="breadcrumb-item active">Edit Bank</li>
                        </ol>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center">Edit Bank</h4>
                            </div>
                            <form action="" method="post">
                                <div class="card-body">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="hidden" name="m_id" value="<?= $metode["id_metode"]; ?>">
                                            <label for="">Nama Metode Bayar</label>
                                            <input type="text" name="nama" class="form-control" required value="<?= $metode["nama_metode"]?>">
                                            <label for="">Keterangan</label>
                                            <input type="text" name="keterangan" class="form-control" required value="<?= $metode["keterangan"]?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="col">
                                        <button type="submit" name="editmet" class="btn btn-primary btn-block"><i class="fa fa-save" aria-hidden="true"></i> Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <?php require "footer.php"; ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>