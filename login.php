<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="card mt-5 mb-5">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <img src="img/login.jpg" width="500">
                    </div>
                    <div class="col-sm-6">
                        <div class="card-body">
                            <h5>Silahkan Masukkan Username dan Password untuk Login</h5>
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
                            <form method="post" action="cek_login2.php">
                                <div class="form-group mt-5">
                                    <label>Username</label>
                                    <i class="bi bi-person-fill"></i>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                                <div class="form-group mt-4">
                                    <label>Jika belum memiliki akun silahkan klik ini</label>
                                    <a href="daftar.php" class="btn btn-warning">Daftar akun</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>