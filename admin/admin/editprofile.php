<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: login.php");
}

require "fungsi.php";

?>

<!DOCTYPE html>
<html>   
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>My Account</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-1/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php require "navbar.php"; ?>
        <div id="layoutSidenav">
            <?php require "sidebar.php"; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">My Account</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">My Account</li>
                            <li class="breadcrumb-item active">Edit Profil</li>
                        </ol>
                    </div>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-5">
                                <div id="accordion">
                                    <div class="card-body">
                                        <div class="font-weight-bold">
                                            <?php

                                                $sql = "SELECT * FROM admin WHERE a_username = '".$_SESSION['username']."'";

                                                $result = mysqli_query($conn,$sql);

                                                $row = mysqli_fetch_array($result);
                                                $email = $row['a_email'];
                                                $nama = $row['a_nama'];
                                                $nohp = $row['a_nohp'];
                                                $username = $row['a_username'];

                                            ?>
                                            <p><i class="far fa-envelope"></i><span class="font-weight-bold"> <?php echo $email ?></span></p>
                                            <p><i class="far fa-user-circle"></i><span class="font-weight-bold"> <?php echo $username ?></span></p>
                                        </div>
                                        <form action="aksi-edit.php" method="post">
                                            <div class="form-group">
                                                <label for="">Nama Lengkap</label>
                                                <input type="text" name="nama" class="form-control" value="<?php echo $nama ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">No HP</label>
                                                <input type="text" name="nohp" class="form-control" value="<?php echo $nohp ?>">
                                            </div>
                                            <div class="col">
                                                <button type="submit" name="editprofil" class="btn btn-primary btn-block"><i class="fa fa-save" aria-hidden="true"></i> Simpan</button>
                                            </div>
                                        </form>
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