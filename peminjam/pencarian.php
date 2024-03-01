<?php
include '../koneksi.php';

if (isset($_GET['keyword'])) {
  $keyword = $_GET['keyword'];

  $query = "SELECT * FROM buku WHERE judul LIKE '%$keyword%'";
  $result = mysqli_query($koneksi, $query);
} else {
  // Tampilkan semua buku jika tidak ada keyword pencarian
  $query = "SELECT * FROM buku";
  $result = mysqli_query($koneksi, $query);
}

?>

<!-- ... (bagian HTML header) ... -->

<!-- Daftar Hasil Pencarian -->
<div class="row mt-3">
  <?php
  while ($row = mysqli_fetch_array($result)) {
    // ... (bagian card buku, sesuai dengan kode sebelumnya) ...
  }
  ?>
</div>

<!-- ... (bagian modal pinjam buku dan footer) ... -->

<!-- Tutup koneksi database jika sudah tidak diperlukan -->
<?php mysqli_close($koneksi); ?>
