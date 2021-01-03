-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2021 pada 01.18
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tiket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kategori`
--

CREATE TABLE `master_kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_kategori`
--

INSERT INTO `master_kategori` (`id`, `kategori`) VALUES
(1, 'Data Center'),
(2, 'Infrastruktur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_subkategori`
--

CREATE TABLE `master_subkategori` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `subkategori` varchar(40) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_subkategori`
--

INSERT INTO `master_subkategori` (`id`, `id_kategori`, `subkategori`, `id_user`) VALUES
(1, 1, 'Backup / Restore server', 1),
(2, 1, 'Install Aplikasi', 1),
(3, 1, 'Tambah Ubah DNS', 1),
(4, 1, 'Permintaan File Sharing', 1),
(5, 1, 'Provisioning Server Baru', 1),
(6, 1, 'Sarana Lainnya', 1),
(7, 1, 'Troubleshooting server', 1),
(8, 2, 'core cctv', 2),
(9, 2, 'core interkom', 2),
(10, 2, 'core network', 2),
(11, 2, 'core paging', 2),
(12, 2, 'core radio', 0),
(13, 2, 'core telepon', 2),
(14, 2, 'distribution network', 2),
(15, 2, 'layanan ess', 2),
(16, 2, 'layanan gps', 2),
(17, 2, 'reporting', 2),
(26, 2, 'layanan gps', 2),
(27, 2, 'reporting', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_asset`
--

CREATE TABLE `tbl_asset` (
  `id` int(11) NOT NULL,
  `nama_asset` varchar(20) NOT NULL,
  `serial` varchar(40) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `biaya` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `created_by` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_asset`
--

INSERT INTO `tbl_asset` (`id`, `nama_asset`, `serial`, `lokasi`, `biaya`, `type`, `jenis`, `created_by`) VALUES
(1, 'Printer', '1235123523', 'Jakarta', 'Rp 50.000.000', 'Hardware', 'Tinta', 'admin'),
(2, 'Monitor', '1235123523', 'Jakarta', 'Rp 50.000.000', 'Hardware', 'Tinta', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_group`
--

CREATE TABLE `tbl_group` (
  `id` int(11) NOT NULL,
  `nama_group` varchar(30) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_group`
--

INSERT INTO `tbl_group` (`id`, `nama_group`, `created_date`) VALUES
(1, 'IT Support', '2021-01-01 13:09:52'),
(2, 'Networking', '2021-01-01 13:09:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `isi` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_request`
--

CREATE TABLE `tbl_request` (
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `sub_kategori` varchar(40) NOT NULL,
  `pj` varchar(30) NOT NULL,
  `grup` varchar(40) NOT NULL,
  `asset` varchar(50) NOT NULL,
  `count_asset` varchar(2) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `done_date` datetime DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_request`
--

INSERT INTO `tbl_request` (`id`, `user`, `status`, `kategori`, `sub_kategori`, `pj`, `grup`, `asset`, `count_asset`, `subject`, `body`, `created_date`, `done_date`, `start_date`, `end_date`) VALUES
(1, 'Admin', 'open', '1', '1', 'Admin', 'Same Daya Services', 'Printer', 'PM', 'Wasassbdoasd', 'sadgasdgasdvtasdtavs', '2020-12-22 09:19:25', NULL, '0000-00-00', '0000-00-00'),
(2, 'Roy Suryo', 'Open', 'Data Center', 'Backup / Restore server', 'Jajang Suharja', 'Networking', 'Monitor', '2', 'LOGIN CPANEL (LIHAT USERNAME DAN PASSWORD)', '&lt;p&gt;Testing&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n &lt;li&gt;Yakin&lt;/li&gt;\r\n &lt;li&gt;Yakin&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Mau Makan&lt;/strong&gt;&lt;/p&gt;\r\n', '2021-01-02 12:57:21', NULL, '2021-01-20', '2021-01-14'),
(3, 'Roy Suryo', 'Open', 'Data Center', 'Install Aplikasi', 'Abdul Roji', 'IT Support', 'Monitor', '2', 'Mencoba Kembali', '&lt;p&gt;&lt;strong&gt;Ponorogo&lt;/strong&gt; - &lt;/p&gt;\r\n\r\n&lt;p&gt;Seorang bidan di Puskesmas Nailan, Kecamatan Slahung meninggal &lt;a href=&quot;https://www.detik.com/tag/terpapar-covid_19&quot;&gt;terpapar COVID-19&lt;/a&gt;. Tak lama berselang, ayah dan ibunya juga meninggal terpapar COVID-19.&lt;/p&gt;\r\n\r\n&lt;p&gt;Bupati Ponorogo Ipong Muchlissoni menjelaskan, awalnya bidan yang diketahui bernama Endang Mutyaningsih tersebut sempat dirawat selama tiga hari di ICU RSU Muhammadiyah Ponorogo. Ia mengeluhkan demam, batuk, sesak napas dan gambaran rontgent pneumoni bilateral.&lt;/p&gt;\r\n\r\n&lt;p&gt;&quot;Setelah tiga hari dirawat beliau meninggal dunia pada Selasa (29/12/2020) lalu,&quot; tutur Ipong kepada wartawan, Sabtu (2/1/2021).&lt;/p&gt;\r\n', '2021-01-02 14:35:22', NULL, '2021-01-13', '2021-01-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_solusi`
--

CREATE TABLE `tbl_solusi` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `user` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `isi` text NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level_akses` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `level_akses`, `created_date`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin', 0, '2020-12-22 03:43:56'),
(2, 'Jajang Suharja', 'teknisi@gmail.com', '12345', 1, '2020-12-22 04:03:57'),
(3, 'Roy Suryo', 'roy@gmail.com', '12345', 2, '2020-12-22 09:07:53'),
(4, 'Abdul Roji', 'abdul@gmail.com', '12345', 1, '2020-12-22 12:58:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `master_kategori`
--
ALTER TABLE `master_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_subkategori`
--
ALTER TABLE `master_subkategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_asset`
--
ALTER TABLE `tbl_asset`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_request`
--
ALTER TABLE `tbl_request`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_solusi`
--
ALTER TABLE `tbl_solusi`
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
-- AUTO_INCREMENT untuk tabel `master_kategori`
--
ALTER TABLE `master_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `master_subkategori`
--
ALTER TABLE `master_subkategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tbl_asset`
--
ALTER TABLE `tbl_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_group`
--
ALTER TABLE `tbl_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_request`
--
ALTER TABLE `tbl_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_solusi`
--
ALTER TABLE `tbl_solusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
