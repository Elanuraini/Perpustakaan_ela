<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-12 mx-auto">
            <div class="card-body p-0">

                <!-- Nested Row within Card Body -->

                <body class="hold-transition login-page" style="background-color: #44454F;">
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block"><img src="img/registrasi.png" alt=""></div>
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Silahkan isi Data Form untuk Pendaftaran</h1>
                                    <?php
                                    // Cek apakah terdapat parameter pesan yang dikirimkan dari halaman proses_daftar.php
                                    if (isset($_GET['pesan_register'])) {
                                        $pesan = $_GET['pesan_register'];
                                        if ($pesan == "gagal_register") {
                                            echo '<div class="alert alert-danger" role="alert">
                                                Gagal mendaftar. Username atau Password sudah digunakan.
                                            </div>';
                                        } elseif ($pesan == "info_daftar") {
                                            echo '<div class="alert alert-success" role="alert">
                                            Berhasil mendaftar. Silakan login.
                                        </div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <form method="post" action="proses_daftar.php">
                                    <div class="form-group mt-4">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" class="form-control">
                                    </div>
                                    <div class="form-group mt-4">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control">
                                    </div>
                                    <div class="form-group mt-4 row">
                                        <div class="col-sm-6">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                        <!-- <div class="form-group mt-4">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control">
                            </div> -->
                                        <div class="form-group mt-4">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat" class="form-control">
                                        </div>
                                        <div class="form-group mt-4">
                                            <button type="submit" class="btn btn-secondary btn-user btn-block">Register</button>
                                        </div>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="index.php">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>