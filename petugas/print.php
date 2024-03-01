<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan-Peminjaman-Buku.xls");
?>
<h5>Laporan Peminjaman Buku</h5>
                            <hr>
                            <table border ="2" class="table table-striped table-bordered">
                                <tr class="fw-bold">
                                    <td>No</td>
                                    <td>Nama Lengkap</td>
                                    <td>Judul</td>
                                    <td>Tanggal Peminjaman</td>
                                    <td>Tanggal Pengembalian</td>
                                    <td>Status Peminjaman</td>
                                </tr>
                                <?php
                               include '../koneksi.php';
                               $no = 1;
                               $query = mysqli_query($koneksi,"SELECT * FROM peminjaman, buku, user WHERE peminjaman.id_user=user.id_user AND peminjaman.id_buku=buku.id_buku ORDER BY tanggal_peminjaman ASC");
                               while($row = mysqli_fetch_array($query)){
                               ?>
                
                                <tr>
                                  <td><?php echo $no++; ?></td>
                                  <td><?php echo $row['nama_lengkap'];?></td>
                                  <td><?php echo $row['judul'];?></td>
                                  <td><?php echo $row['tanggal_peminjaman'];?></td>
                                  <td><?php echo $row['tanggal_pengembalian'];?></td>
                                  <td><?php echo $row['status_peminjaman'];?></td>
                                 
                                </tr> 
                                
                                <?php  } ?>
                            </table>
