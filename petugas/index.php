<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") {
	header("location:../index.php?pesan=info_login");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Petugas</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>

<body>

	<body class="hold-transition login-page" style="background-color: #595A5B;">
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
								<!-- <a href="user.php" class="btn text-light">Users</a> -->
								<!-- <a href="#" class="btn text-light">Peminjaman</a> -->
								<a href="generate.php" class="btn text-light">Laporan Peminjaman</a>
								<a href="../logout.php" class="btn text-light">Logout</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="content mt-3">
				<div class="row">
					<div class="col-sm-3">
						<div class="card">
							<?php
							include '../koneksi.php';
							$dp = mysqli_query($koneksi, "SELECT COUNT(*) total FROM buku");
							$rp = mysqli_fetch_assoc($dp);
							?>
							<div class="card-body bg-primary-subtle text-center">
								<h3> Data Buku </h3>
								<h2> <?php echo $rp['total']; ?> </h2>
								<hr>
								<a href="buku.php" class="btn btn-dark btn-sm">Lihat Data</a>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="card">
							<?php
							include '../koneksi.php';
							$dp = mysqli_query($koneksi, "SELECT COUNT(*) total FROM kategoribuku");
							$a = mysqli_fetch_assoc($dp);
							?>
							<div class="card-body bg-secondary-subtle text-center">
								<h3> Kategori Buku </h3>
								<h2> <?php echo $a['total']; ?> </h2>
								<hr>
								<a href="kategori-buku.php" class="btn btn-dark btn-sm">Lihat Data</a>
							</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="card">
							<?php
							include '../koneksi.php';
							$dp = mysqli_query($koneksi, "SELECT COUNT(*) total FROM peminjaman");
							$c = mysqli_fetch_assoc($dp);
							?>
							<div class="card-body bg-primary-subtle text-center">
								<h3> Peminjaman </h3>
								<h2> <?php echo $c['total']; ?> </h2>
								<hr>
								<a href="generate.php" class="btn btn-dark btn-sm">Lihat Data</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="content mt-3">
				<div class="card">
					<div class="card-body mt-4">
						<table class="table table-striped">
							<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
							<tr>
								<td width="200">Nama</td>
								<td width="1">:</td>
								<td><?php echo $_SESSION['username']; ?></td>
							</tr>
							<tr>
								<td width="200">Level User</td>
								<td width="1">:</td>
								<td><?php echo $_SESSION['level']; ?></td>
							</tr>
							<tr>
								<td width="200">tanggal Login</td>
								<td width="1">:</td>
								<td><?php echo date('l, d m Y'); ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>


			<!-- footer -->
			<div class="content mt-3 fixed-bottom">
				<p class="text-center text-white" style="background-color: #595A5B;"> Aplikasi Perpustakaan Digital | 2024 </p>
			</div>

		</div>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

	</body>

</html>