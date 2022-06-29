<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location: login.php");
    }

    require "fungsi.php";
?>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard Admin Prebens</title>
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
                        <h1 class="mt-4">My Account</h1>
                    </div>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-5">
                                <div id="accordion">
                                    <div class="card">
                                      <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            <?php


                                                $sql = "SELECT * FROM admin WHERE a_username='".$_SESSION['username']."'";

                                                $result = mysqli_query($conn,$sql);

                                                $row = mysqli_fetch_array($result);
                                                $email = $row['a_email'];
                                                $nama = $row['a_nama'];
                                                $nohp = $row['a_nohp'];
                                                $user = $row['a_username'];

                                            ?>
                                            <p><span class="font-weight-bold"><?php echo $nama ?> (<?php echo $user ?>)</span></p>
                                            <p><i class="fas fa-phone"></i> <span class="font-weight-bold"><?php echo $nohp ?></span></p>
                                            <p><i class="fas fa-envelope"></i> <span class="font-weight-bold"><?php echo $email ?></span></p>
                                            <a href="editprofile.php?username=<?= $_SESSION['username'];?>" class="btn btn-warning"><i class="fa fa-pen" aria-hidden="true"></i> Sunting</a>
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
        </div>
    </body>
</html>