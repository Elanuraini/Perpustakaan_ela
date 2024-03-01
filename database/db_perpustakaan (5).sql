-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 04:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT 'default.jpeg',
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_kategori`, `judul`, `image`, `penulis`, `penerbit`, `tahun_terbit`, `deskripsi`) VALUES
(16, 10, ' Five Nights At Freddy`S Graphic Novel #1: The Silver Eyes', 'Taddy-bear.jpg', 'Saya Imelita', 'Gramedia', 2005, 'Boneka freddy adalah boneka yang sangat kejam dan jahat dia merupakan boneka pembunuh yang suka dengan anak kecil'),
(17, 11, 'Legenda Putri  Dyung', 'Duyung.jpg', 'Dian K', 'Bhuana Ilmu Populer', 2022, 'Seorang ibu yang amat menyayangi anak-anaknya, dimarahi oleh suaminya karena memberikan semua ikan pada anak-anaknya dan tak menyisakan untuk suaminya. Terlalu sedih, si ibu pun meninggalkan rumah. Dia berjalan ke pantai, dan tanpa sadar terus berjalan ke tengah lautan. Apa yang terjadi pada ibu itu kemudian? Akankah suami dan anak-anaknya mencari ...'),
(18, 14, 'The Odd 1S Out The First Sequel', 'sas.jpg', 'James Rallison ', 'Penguin Us', 31, 'For those of you who are looking for activities to fill your spare time, then reading this book can be one of the right references. This book is very suitable to be read when you are late because the story presented is very funny and interesting.\r\n\r\nBagi anda yang sedang mencari aktivitas untuk mengisi waktu luang, maka membaca buku ini dapat menjadi salah satu referensi yang tepat. Buku ini sangat cocok dibaca dikala suntuk karena cerita yang disajikan sangat lucu dan menarik.'),
(19, 15, ' English Classics: The Tell Tale Heart And Other Stories', 'misteri.jpg', 'EDGAR ALLAN POE', 'Gramedia Pustaka Utama', 29, 'And Darkness and Decay and the Red Death held illimitable dominion over all”\r\n\r\n'),
(20, 16, ' 12 Rules For Life: An Antidote To Chaos', 'psikologi.jpg', 'Jordan B. Peterson', 'Random House US', 20, 'Dalam buku 12 Rules For Life: An Antidote To Chaos, Dr. Peterson melakukan kajian secara luas dalam membahas disiplin, kebebasan, petualangan, dan tanggung jawab. Ia kemudian menyaring kebijaksanaan dunia menjadi 12 aturan praktis dan mendalam untuk kehidupan. Buku ini akan membantu untuk mengembangkan diri Anda menjadi versi terbaik yang tidak pernah Anda bayangkan sebelumnya.\r\n'),
(21, 19, 'Virgin River Novel #1: Virgin River', 'rom1.jpg', 'Robyn Carr', 'Harper Collins Us', 29, 'The Virgin River books are so compelling--I connected instantly with the characters and just wanted more and more and more.\" --#1 New York Times bestselling author Debbie Macomber\r\n\r\nWelcome back to Virgin River with the book that inspired the hit Netflix series...\r\n\r\nWanted: Midwife/nurse practitioner in Virgin River, population six hundred. Make a difference against a backdrop of towering California redwoods and crystal clear rivers. Rent-free cabin included.'),
(22, 22, 'Harry Potter And The Order Of The Phoenix', 'fantasi.jpg', 'J.K. Rowling', 'Sinar Star Book', 2, 'Harry Potter and the Order of the Phoenix\" is the fifth novel in the phenomenal series written by J.K. Rowling. The story continues the adventures of Harry Potter, a young wizard who struggles against darkness and evil forces threatening the wizarding world.'),
(23, 20, 'Diary Of A Wimpy Kid #17: Diper Overload', 'kom1.jpg', 'Jeff Kinney', 'Gramedia Pustaka Utama', 8, 'Monday I always thought I wanted to be rich and famous, but now Im starting to wonder if fame and fortune are worth all the hassle. In sure it would be areat to be a celebrity, because itd be nice to get the rock star treatrment and see your name in lights.\r\n\r\nWhen he decides to tag along with his brother Rodrick’s band, Löded Diper, Greg doesn’t realize what he’s getting into. But he soon learns that late nights, unpaid gigs, fighting between band members, and money troubles are all part of the rock ’n’ roll lifestyle.\r\n\r\n'),
(24, 11, 'Jangan Cuek!', 'fik2.jpg', 'Jiaathe', ' Penerbit Sinar angsa', 29, '“Bisa gak sih kamu jangan cuek sama aku?!”\r\n“Ribet, mau putus?”\r\n\r\nMengejar cinta pacarnya sendiri? Ini yang dialami Jihan Diana.\r\nFaegan Dirgantara bukanlah tipikal manusia dingin dan juga hemat bicara seperti di novel-novel. Sejatinya Faegan adalah laki-laki humoris dan juga hangat. Namun sikapnya berubah drastis jika sudah di hadapan Jihan, kekasihnya.\r\n\r\nAlasannya sederhana. Karena Faegan membenci Jihan, gadis cerewet, pemaksa, dengan sikap arogan yang menyebalkan.'),
(25, 12, 'Lampor: Cerpen Pilihan ', '3011949.jpg', 'Joni Ariadinata ,  Seno Gumira Ajidarma ,  Agus Noor', 'Gramedia', 1994, 'Mulai menulis cerita pendek pada pertengahan tahun 1993. Karya-karyanya disiarkan di beberapa media massa; di antaranya majalah Horison, Matra, Basis, Jurnal Kebudayaan Kalam, Bahana (Brunei Darussalam), serta harian Kompas, Republika, Media Indonesia, Suara Pembaruan, The Jakarta Post, Pikiran Rakyat, Jawa Pos, Bernas, dan lain sebagainya.  Karyanya dalam bentuk antologi adalah: Lampor (Kompas, 1994), Guru Tarno (Bigraf, 1995), Negeri Bayang Bayang (DKS, 1996), Candramawa (Pustaka Nusatama, 1996), Pistol Perdamaian (Kompas, 1996), Gerbong (Pustaka Pelajar, 1998), Aceh Mendesah dalam Nafasku (KaSUHA, Banda Aceh, 1999), dan Embun Tajjali (AksaraIndonesia, 2000); sedangkan esainya dalam antologi Begini Begini Begitu (Pustaka Pelajar, 1997).  Kumpulan Cerita Pendek tunggalnya, Kali Mati (1999), Kastil Angin Menderu (2000), Air Kaldera (2000), dan Malaikat Tak Datang Malam Hari (2004). Kini menetap di Jogjakarta, menulis dan melukis.'),
(27, 12, 'basis data', '3011949.jpg', 'pak kukuh', 'erlangga', 2024, 'pelajaran basis adata sagat menyenagkan\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku`
--

CREATE TABLE `kategoribuku` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategoribuku`
--

INSERT INTO `kategoribuku` (`id_kategori`, `nama_kategori`) VALUES
(12, 'Cerpen'),
(13, 'Horor'),
(14, 'Komedi'),
(15, 'Misteri'),
(16, 'Psikologi'),
(17, 'Sastra'),
(18, 'Non Fiksi'),
(19, 'Romantis'),
(20, 'Komik 2'),
(22, 'Fantasi');

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku_relasi`
--

CREATE TABLE `kategoribuku_relasi` (
  `id_kategoribuku` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `koleksipribadi`
--

CREATE TABLE `koleksipribadi` (
  `id_koleksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `koleksipribadi`
--

INSERT INTO `koleksipribadi` (`id_koleksi`, `id_user`, `id_buku`) VALUES
(1, 16, 17),
(2, 16, 18),
(3, 20, 18),
(4, 20, 20),
(5, 20, 22),
(6, 21, 22),
(15, 20, 17),
(16, 20, 18),
(21, 20, 19),
(22, 20, 22),
(23, 20, 23),
(24, 20, 24),
(25, 20, 19),
(27, 20, 19),
(28, 20, 21),
(29, 20, 21),
(30, 20, 22);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_peminjaman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_user`, `id_buku`, `tanggal_peminjaman`, `tanggal_pengembalian`, `status_peminjaman`) VALUES
(1, 8, 10, '2024-01-29', '2024-01-31', 'proses'),
(2, 16, 17, '2024-02-17', '2024-02-24', 'dikembalikan'),
(3, 16, 18, '2024-02-17', '2024-02-24', 'dipinjam'),
(5, 20, 20, '2024-02-21', '2024-02-28', 'telat'),
(6, 20, 22, '2024-02-22', '2024-02-29', 'dikembalikan'),
(7, 21, 22, '2024-02-22', '2024-02-29', 'dipinjam'),
(8, 20, 17, '2024-02-23', '2024-03-01', 'dipinjam'),
(9, 20, 18, '2024-02-23', '2024-03-01', 'dipinjam'),
(10, 20, 21, '2024-02-29', '2024-03-07', 'dipinjam'),
(11, 20, 22, '2024-02-29', '2024-03-07', 'dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `ulasanbuku`
--

CREATE TABLE `ulasanbuku` (
  `id_ulasan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ulasanbuku`
--

INSERT INTO `ulasanbuku` (`id_ulasan`, `id_user`, `id_buku`, `ulasan`, `rating`) VALUES
(1, 16, 17, 'untuk cerita legenda putri duyung ini sangat bekesan bagi saya, di dalam ceritanya menceritakan seorang ibu yang amat mencintai anak-anaknya.', 4),
(2, 20, 18, 'bagus banget sieh ceritanya', 4),
(3, 21, 22, 'Top Markotop', 5),
(5, 20, 20, '', 0),
(6, 20, 18, '', 0),
(7, 20, 18, 'Ceritanya sangat asik dan tidak membosankan.', 3),
(8, 20, 22, 'untuk buku nya sangat menyenagkan', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `level` enum('admin','petugas','peminjam') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `nama_lengkap`, `alamat`, `level`) VALUES
(15, 'sinta', '21232f297a57a5a743894a0e4a801fc3', 'sinta@gmail.com', 'Irmanda Dwi Sinta', 'Gading Rejo', 'admin'),
(16, 'dyah', '55f3894bc5fc71fead8412d321c2952c', 'Dyah@gmail.com', 'Dyah Ivadatul', 'Besuki', 'peminjam'),
(17, 'ela', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'Ela@gmail.com', 'Ela Nur Aini', 'Sukorno', 'petugas'),
(18, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'lala@gmail.com', 'Imelita Putri ', 'Semboro', 'admin'),
(19, 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'tata@gmail.com', 'Amrita Nur Fatihah', 'Balung', 'petugas'),
(20, 'peminjam', '55f3894bc5fc71fead8412d321c2952c', 'bila@gmail.com', 'Ailsa Nabila', 'Jember', 'peminjam'),
(21, 'eka', '79ee82b17dfb837b1be94a6827fa395a', 'eka@gmail.com', 'Eka ', 'Sidorejo', 'peminjam'),
(22, 'tata', '202cb962ac59075b964b07152d234b70', 'ali@gmail.com', 'amrita nur fatihah', 'jember', 'peminjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  ADD PRIMARY KEY (`id_kategoribuku`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  ADD PRIMARY KEY (`id_koleksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  MODIFY `id_kategoribuku` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  MODIFY `id_koleksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  ADD CONSTRAINT `kategoribuku_relasi_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `kategoribuku_relasi_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategoribuku` (`id_kategori`);

--
-- Constraints for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  ADD CONSTRAINT `koleksipribadi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `koleksipribadi_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);

--
-- Constraints for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD CONSTRAINT `ulasanbuku_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `ulasanbuku_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
