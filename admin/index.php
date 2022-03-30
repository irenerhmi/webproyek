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
        <title>Dashboard</title>
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
                        <h1 class="mt-4">Dashboard HaulHallyu</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><i class="fas fa-home"></i> Home</li>
                        </ol>
                        <div class="card">
                            <div class="card-header mb-2">
                                <p class="card bg-primary text-white mb-4">
                                    &nbsp; Welcome at Admin Dashboard!
                                </p>
                                <div class="card-body">
                                <p class="">
                                     Hallo! Selamat datang! <br> <br>
                                     Anda berada di Area Admin untuk mengelola website Prebens. Gunakan menu yang berada disamping unutk mengelola website. Hubungi pihak Admin jika ada beberapa yang kurang dimengerti.
                                </p>
                            </div>
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