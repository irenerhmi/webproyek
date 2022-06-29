<?php  
require 'fungsi.php';

if( isset($_POST["editart"]) ){

    if( editart($_POST) > 0) {
        header ("location: artikel.php");
    } 
    else {
        echo "Error"; }
}
?>
<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location: login.php");
    }
    ?>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tentang Kami</title>
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
                        <h1 class="mt-4">Setting</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><i class="fas fa-exclamation-circle"></i> Tentang Kami</li>
                        </ol>
                        <?php
                            $sql = "SELECT * FROM artikel";

                            $result = mysqli_query($conn,$sql);

                            $row = mysqli_fetch_array($result);
                        ?>
                        <div class="card">
                            <div class="card-header mb-2">
                                <h3><?php echo $row['nama_art']; ?></h3>
                                <form action="" method="post">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="">Edit Isi Artikel</label><br>
                                            <p class="breadcrumb-item active"><?php echo $row['penulis'];?> <br> <?php echo $row['tanggal'];?></p>
                                            <textarea rows="40" type="text" name="artikel" class="form-control"><?php echo $row['isiart']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="col">
                                            <button type="submit" name="editart" class="btn btn-primary btn-block"><i class="fa fa-save" aria-hidden="true"></i> Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <?php require "footer.php"; ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>