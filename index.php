<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>

<body>

    <!-- bagian menu login -->
    <div class="container mt-5">
        <!-- <div class="alert alert-info"> -->

        <!-- latar belakang warna login -->

        <body class="hold-transition login-page" style="background-color: #44454F;">
            <div class="container mt-7">
                <div class="row">
                    <div class="row justify-content-md-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">Silahkan Masukkan Username dan Password untuk Login</h4>
                                    <!-- <img src="logo-spp.png" width="100%" alt="">
                    <img src="" width="1000%" alt=""> -->
                                </div>

                                <?php
                                if (isset($_GET['pesan'])) {
                                    if ($_GET['pesan'] == "gagal") {
                                        echo "<div class='alert alert-danger'>Username dan Password tidak sesuai !</div>";
                                    }
                                }
                                if (isset($_GET['pesan'])) {
                                    if ($_GET['pesan'] == "info_login") {
                                        echo "<div class='alert alert-warning'>Maaf anda belum Login !</div>";
                                    }
                                }
                                if (isset($_GET['pesan'])) {
                                    if ($_GET['pesan'] == "info_logout") {
                                        echo "<div class='alert alert-success'>Anda berhasil logout !</div>";
                                    }
                                }
                                if (isset($_GET['pesan'])) {
                                    if ($_GET['pesan'] == "info_daftar") {
                                        echo "<div class='alert alert-success'>Anda berhasil daftar silahkan login !</div>";
                                    }
                                }
                                ?>
                                <div class="card-body">
                                    <form method="post" action="cek_login2.php">
                                        <div class="form-group mb-3">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control" required>
                                        </div>
                                        <div class="form-group mb-2">
                                            <button type="submit" class="btn btn-info"> LOGIN </button>
                                            <div class="form-group mt-2">
                                                <label>Jika belum memiliki akun silahkan klik ini</label>
                                                <a href="daftar.php" class="btn btn-secondary">Daftar akun</a>
                                            </div>  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <script src="js/bootstrap.bundle.min.js"></script>
        </body>

</html>