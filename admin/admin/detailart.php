<?php  
require 'fungsi.php';
$artikel = query("SELECT * FROM artikel WHERE id_artikel='".$_GET['id']."'");
?>

<!DOCTYPE html>
<html>   
    <?php
    session_start();
    ?>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Artikel</title>
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
                        <h1 class="mt-4">Kelola Artikel</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Pengaturan</li>
                            <li class="breadcrumb-item active">Artikel</li>
                        </ol>
                        <?php
                            $sql = "SELECT * FROM artikel";

                            $result = mysqli_query($conn,$sql);

                            $row = mysqli_fetch_array($result);
                                foreach( $artikel as $row):
                            
                        ?>
                        <div class="card">
                            <div class="card-header mb-2">
                                <p><img src="assets/img/<?php echo $row['imageart'];?>" style="display: block; margin: auto;" width="500"></p><br>
                                <h2><?php echo $row['nama_art'];?></h2>
                                <div class="card-body">
                                <p class="breadcrumb-item active"><?php echo $row['penulis'];?> <br> <?php echo $row['tanggal'];?></p>
                                <p><?php echo $row['isiart'];?></p>
                                <a href="editart.php?idart=<?php echo $row['id_artikel'];?>" class="btn btn-warning"><i class="fa fa-pen" aria-hidden="true"></i> Edit</a><br>
                            </div>
                        </div>
                        <?php endforeach; ?>
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