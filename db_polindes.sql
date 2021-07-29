-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jul 2021 pada 05.03
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_polindes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bayi`
--

CREATE TABLE `tbl_bayi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `berat_lahir` varchar(11) NOT NULL,
  `panjang_lahir` varchar(11) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `alamat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_bayi`
--

INSERT INTO `tbl_bayi` (`id`, `nama`, `tgl_lahir`, `jenis_kelamin`, `berat_lahir`, `panjang_lahir`, `nama_ibu`, `nama_ayah`, `anak_ke`, `alamat`) VALUES
(8, 'M. Afif', '2021-05-15', 'Laki-Laki', '2 KG', '46,1 CM', 'Hidayanti', 'Faizin', 2, 'Dusun Penarukan Daya'),
(13, 'Rizki Hasan', '2021-03-14', 'Laki-Laki', '2,5 KG', '45,4 CM', 'Karniati', 'Suparman', 2, 'Dusun Bakong'),
(14, 'M. Rizky M.Y', '2021-03-14', 'Laki-Laki', '3Kg', '46,1 Cm', 'Sari', 'Arifin', 1, 'Dusun Gubuk Raden'),
(15, 'Atin Rusianti', '2021-10-19', 'Perempuan', '2,9 km', '45 cm', 'Suniah', 'Akhmad', 3, 'Dusun Penarukan Daya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bidan`
--

CREATE TABLE `tbl_bidan` (
  `id` int(11) NOT NULL,
  `nama_bidan` varchar(50) NOT NULL,
  `jadwal_praktek` varchar(25) NOT NULL,
  `no_tlpn` text NOT NULL,
  `alamat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_bidan`
--

INSERT INTO `tbl_bidan` (`id`, `nama_bidan`, `jadwal_praktek`, `no_tlpn`, `alamat`) VALUES
(6, 'Oniq', 'Senin-minggu jam 08.00-21', '2147483647', 'Lombok Tengah'),
(8, 'Nunung', 'Hari senin jam 08.00-03.0', '081917407888', 'Jl.Gunung Tembora');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ibuhamil`
--

CREATE TABLE `tbl_ibuhamil` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `usia_kehamilan` varchar(25) NOT NULL,
  `taksiran_persalinan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_ibuhamil`
--

INSERT INTO `tbl_ibuhamil` (`id`, `nama_lengkap`, `nama_suami`, `tgl_periksa`, `umur`, `alamat`, `usia_kehamilan`, `taksiran_persalinan`) VALUES
(10, 'Oktaviana', 'Firman', '2020-02-11', 26, 'Dusun Penarukan Daya', '4 minggu', '2021-10-06'),
(11, 'Maisaroh', 'Rudi', '2021-03-05', 24, 'Dusun Kelebut', '20 Minggu', '2021-09-16'),
(12, 'Herlina', 'Ansori', '2020-04-01', 37, 'Dusun Bakong', '10 minggu', '2021-10-28'),
(13, 'Nurmiati', 'Martono', '2020-05-10', 26, 'Dusun Gubuk Raden', '15 minggu', '2021-01-19'),
(14, 'Ranika', 'Indra', '2021-07-08', 27, 'Gerung', '10 minggu', '2021-07-24'),
(22, 'a', 'Hafif', '2021-07-08', 23, 'Jl.Gunung Tembora', '5 minggu', '2021-07-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ibumelahirkan`
--

CREATE TABLE `tbl_ibumelahirkan` (
  `id` int(11) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `cara_persalinan` varchar(11) NOT NULL,
  `kondisi_ibu` varchar(11) NOT NULL,
  `berat_bayi` varchar(11) NOT NULL,
  `panjang_bayi` varchar(11) NOT NULL,
  `kondisi_bayi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ibumelahirkan`
--

INSERT INTO `tbl_ibumelahirkan` (`id`, `nama_ibu`, `nama_suami`, `umur`, `alamat`, `cara_persalinan`, `kondisi_ibu`, `berat_bayi`, `panjang_bayi`, `kondisi_bayi`) VALUES
(1, 'Rahma', 'Salman', 32, 'Dusun Bakong', 'Normal', 'sehat', '2 kg', '40,1 cm', 'Sehat'),
(12, 'Herlina', 'Leman', 25, 'Dusun Penarukan Daya', 'Normal', 'Sehat', '2,9 kg', '45 cm', 'Sehat'),
(13, 'Widawati', 'Suleman', 32, 'Dusun Kelebut', 'Normal', 'Sehat', '3 Kg', '40,1 cm', 'Prematur'),
(14, 'Rubiatun', 'Muhtar', 30, 'Dusun Penarukan Daya', 'Normal', 'Sehat', '3,3 kg', '41,1 cm', 'Sehat'),
(15, 'Zahra', 'Khalid', 27, 'Gerung', 'normal', 'sehat', '2,9 km', '41,1 cm', 'sehat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kb`
--

CREATE TABLE `tbl_kb` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `jumlah_anak` int(11) NOT NULL,
  `jenis_kontrasepsi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kb`
--

INSERT INTO `tbl_kb` (`id`, `nama`, `nama_suami`, `jumlah_anak`, `jenis_kontrasepsi`) VALUES
(3, 'Fitri Yanti', 'Sukri', 2, 'Pil KB'),
(8, 'Rosmiawati', 'Samidah', 1, 'Suntik'),
(9, 'Ratna', 'Zidan', 1, 'Pil KB'),
(10, 'Ernawati', 'Holid', 2, 'Implan'),
(11, 'Ismawati', 'Baharudin', 1, 'Implan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peserta`
--

CREATE TABLE `tbl_peserta` (
  `id` int(11) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `no_tlpn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_peserta`
--

INSERT INTO `tbl_peserta` (`id`, `tgl_daftar`, `nama_ibu`, `tgl_lahir`, `umur`, `alamat`, `no_tlpn`) VALUES
(1, '2021-05-04', 'Fitri Yanti', '1997-05-10', 25, 'Dusun Kelebut', '081917407888'),
(7, '2020-12-27', 'Rosniawati', '2000-03-21', 21, 'Dusun Penarukan Daya', '087758312911'),
(8, '2021-06-08', 'Ratna', '1995-11-05', 26, 'Dusun Bakong', '08733456801'),
(9, '2020-09-05', 'Ernawati', '1985-12-05', 36, 'Dusun Penarukan Daya', '083129675443'),
(10, '2021-01-21', 'Ismawati', '1994-07-08', 27, 'Dusun Penarukan Daya', '083129675443');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`) VALUES
(5, 'admin', 'admin@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_bayi`
--
ALTER TABLE `tbl_bayi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_bidan`
--
ALTER TABLE `tbl_bidan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_ibuhamil`
--
ALTER TABLE `tbl_ibuhamil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_ibumelahirkan`
--
ALTER TABLE `tbl_ibumelahirkan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_ibu` (`nama_ibu`);

--
-- Indeks untuk tabel `tbl_kb`
--
ALTER TABLE `tbl_kb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_bayi`
--
ALTER TABLE `tbl_bayi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_bidan`
--
ALTER TABLE `tbl_bidan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_ibuhamil`
--
ALTER TABLE `tbl_ibuhamil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tbl_ibumelahirkan`
--
ALTER TABLE `tbl_ibumelahirkan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_kb`
--
ALTER TABLE `tbl_kb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
