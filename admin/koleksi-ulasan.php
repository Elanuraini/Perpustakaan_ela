<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ulasan Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .bi-star-fill {
            color: orange;
        }
    </style>

</head>

<body class="hold-transition login-page" style="background-color: #44454F;">
    <div class="container">
        <div class="content mt-3">
            <div class="card bg-secondary bg-gradient">
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="d-flex justify-content-end align-items-center">
                            <a class="navbar-brand text-white me-auto" style="font-size: 1.5em;"><strong>Aplikasi E-Perpus</strong></a>
                            <a href="index.php" class="btn text-light">Dashboard</a>
                            <a href="kategori-buku.php" class="btn text-light">Kategori Buku</a>
                            <a href="buku.php" class="btn text-light">Buku</a>
                            <a href="user.php" class="btn text-light">Users</a>
                            <!-- <a href="#" class="btn text-light">Peminjaman</a> -->
                            <a href="koleksi-ulasan.php" class="btn text-light">Ulasan Buku</a>
                            <a href="generate.php" class="btn text-light">Laporan Peminjaman</a>
                            <a href="../logout.php" class="btn text-light">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <br>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-secondary mt-3">Ulasan Buku</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="?page=ulasan_tambah" class=""></a>
                        <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                            <thead>
                                <thead class="table table-secondary">
                                    <tr>
                                        <th>No</th>
                                        <th>User</th>
                                        <th>Buku</th>
                                        <th>Ulasan</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                include '../koneksi.php';
                                $query = mysqli_query($koneksi, "SELECT * FROM ulasanbuku, user, buku
                                            WHERE ulasanbuku.id_user=user.id_user
                                            AND ulasanbuku.id_buku=buku.id_buku
                                            ORDER BY id_ulasan ASC");

                                while ($data = mysqli_fetch_array($query)) {
                                    // Mendapatkan nilai rating dari database
                                    $rating = $data['rating'];

                                    // Menentukan jumlah bintang yang diisi
                                    $filledStars = $rating;

                                    // Menentukan jumlah bintang yang tidak diisi
                                    $emptyStars = 5 - $rating;
                                ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $data['username']; ?></td>
                                        <td><?php echo $data['judul']; ?></td>
                                        <td><?php echo $data['ulasan']; ?></td>
                                        <td>
                                            <?php
                                            // Menampilkan bintang yang diisi
                                            for ($i = 0; $i < $filledStars; $i++) {
                                                echo '<i class="bi bi-star-fill"></i>';
                                            }
                                            // Menampilkan bintang yang tidak diisi
                                            for ($i = 0; $i < $emptyStars; $i++) {
                                                echo '<i class="bi bi-star"></i>';
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <!-- footer -->
        <div class="content mt-3 fixed-bottom">
            <p class="text-center text-white" style="background-color: #595A5B;"> Aplikasi Perpustakaan Digital | 2024 </p>
        </div>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>