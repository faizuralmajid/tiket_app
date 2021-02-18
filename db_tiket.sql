-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Feb 2021 pada 10.53
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
-- Struktur dari tabel `log_request`
--

CREATE TABLE `log_request` (
  `id` int(11) NOT NULL,
  `id_data` int(11) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
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
-- Dumping data untuk tabel `log_request`
--

INSERT INTO `log_request` (`id`, `id_data`, `id_user`, `username`, `user`, `status`, `kategori`, `sub_kategori`, `pj`, `grup`, `asset`, `count_asset`, `subject`, `body`, `created_date`, `done_date`, `start_date`, `end_date`) VALUES
(1, 7, '', '', 'Roy Suryo', 'Open', 'Data Center', 'Tambah Ubah DNS', 'Jajang Suharja', 'IT Support', '', '1', 'Random Text Generator', '<ol> <li><strong>ADUIAIDBAIBDABDBAD</strong></li> <li><strong>ADAIDNIADNIAND</strong></li> <li><strong>safasfas</strong></li></ol><p><strong>sfasdfadsfasd</strong></p><p><em><strong>asdfasdfadsf</strong></em></p>', '2021-01-03 14:26:06', NULL, '2021-01-22', '2021-01-28'),
(2, 6, '3', 'Roy', 'Roy Suryo', 'Open', 'Infrastruktur', 'reporting', 'Abdul Roji', 'Networking', '', '1', 'Random Text Generator', '<ol> <li><strong>ADUIAIDBAIBDABDBAD</strong></li> <li><strong>ADAIDNIADNIAND</strong></li> <li><strong>safasfas</strong></li></ol><p><strong>sfasdfadsfasd</strong></p><p><em><strong>asdfasdfadsf</strong></em></p>', '2021-01-31 07:01:14', NULL, '2021-01-25', '2021-01-21'),
(3, 4, '3', 'Roy', 'Roy Suryo', 'Open', 'Infrastruktur', 'core telepon', 'Jajang Suharja', 'Networking', '', '1', '&quot;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...', '<ol> <li><strong>ADUIAIDBAIBDABDBAD</strong></li> <li><strong>ADAIDNIADNIAND</strong></li> <li><strong>safasfas</strong></li></ol><p><strong>sfasdfadsfasd</strong></p><p><em><strong>asdfasdfadsf</strong></em></p>', '2021-01-31 07:01:33', NULL, '2021-01-16', '2021-01-13'),
(4, 5, '3', 'Roy', 'Roy Suryo', 'Open', 'Infrastruktur', 'core network', 'Jajang Suharja', 'IT Support', '', '1', 'Random Text Generator', '<ol> <li><strong>ADUIAIDBAIBDABDBAD</strong></li> <li><strong>ADAIDNIADNIAND</strong></li> <li><strong>safasfas</strong></li></ol><p><strong>sfasdfadsfasd</strong></p><p><em><strong>asdfasdfadsf</strong></em></p>', '2021-02-02 07:45:48', NULL, '2021-01-22', '2021-01-13');

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
(2, 'Infrastruktur'),
(5, 'Test'),
(6, 'Tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kota`
--

CREATE TABLE `master_kota` (
  `id` int(11) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `id_lokasi` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_kota`
--

INSERT INTO `master_kota` (`id`, `kota`, `id_lokasi`) VALUES
(2, 'tlosaaa', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_lokasi`
--

CREATE TABLE `master_lokasi` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_lokasi`
--

INSERT INTO `master_lokasi` (`id`, `lokasi`) VALUES
(3, 'Tus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_subkategori`
--

CREATE TABLE `master_subkategori` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `subkategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_subkategori`
--

INSERT INTO `master_subkategori` (`id`, `id_kategori`, `subkategori`) VALUES
(3, 1, 'Tambah Ubah DNS'),
(4, 1, 'Permintaan File Sharing'),
(5, 1, 'Provisioning Server Baru'),
(6, 1, 'Sarana Lainnya'),
(7, 1, 'Troubleshooting server'),
(8, 2, 'core cctv'),
(9, 2, 'core interkom'),
(10, 2, 'core network'),
(12, 2, 'core radio'),
(13, 2, 'core telepon'),
(14, 2, 'distribution network'),
(15, 2, 'layanan ess'),
(16, 2, 'layanan gps'),
(32, 5, 'asasdas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_asset`
--

CREATE TABLE `tbl_asset` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `nama_asset` varchar(20) NOT NULL,
  `bisnis` varchar(40) NOT NULL,
  `created_by` varchar(40) NOT NULL,
  `a` varchar(40) DEFAULT NULL,
  `b` varchar(40) DEFAULT NULL,
  `c` varchar(40) DEFAULT NULL,
  `d` varchar(40) DEFAULT NULL,
  `e` varchar(40) DEFAULT NULL,
  `f` varchar(40) DEFAULT NULL,
  `g` varchar(40) DEFAULT NULL,
  `h` varchar(40) DEFAULT NULL,
  `i` varchar(40) DEFAULT NULL,
  `j` varchar(40) DEFAULT NULL,
  `k` varchar(40) NOT NULL,
  `l` varchar(40) DEFAULT NULL,
  `m` varchar(40) DEFAULT NULL,
  `n` varchar(40) DEFAULT NULL,
  `o` varchar(40) DEFAULT NULL,
  `p` varchar(40) DEFAULT NULL,
  `q` varchar(40) DEFAULT NULL,
  `r` varchar(40) DEFAULT NULL,
  `s` varchar(40) DEFAULT NULL,
  `t` varchar(40) DEFAULT NULL,
  `u` varchar(40) DEFAULT NULL,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  `date3` date NOT NULL,
  `v` varchar(40) DEFAULT NULL,
  `w` varchar(40) DEFAULT NULL,
  `x` varchar(40) DEFAULT NULL,
  `y` varchar(40) DEFAULT NULL,
  `z` varchar(40) DEFAULT NULL,
  `aa` varchar(40) DEFAULT NULL,
  `ab` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_asset`
--

INSERT INTO `tbl_asset` (`id`, `type`, `jenis`, `nama_asset`, `bisnis`, `created_by`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`, `j`, `k`, `l`, `m`, `n`, `o`, `p`, `q`, `r`, `s`, `t`, `u`, `date1`, `date2`, `date3`, `v`, `w`, `x`, `y`, `z`, `aa`, `ab`) VALUES
(5, 'IT Assets', 'Access Point', 'Faizurrahman Allam M', '', 'Jajang Suharja', '---- Pilih Product ----', '', '', '', 'asfs', 'fasfsf', 'asfasf', 'asfasfas', 'fasfasfa', 'asfasf', 'fasfasfasf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-19', '2021-01-14', '2021-01-04', '', '', '', '', '', '', '');

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

--
-- Dumping data untuk tabel `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id`, `judul`, `isi`, `start_date`, `end_date`) VALUES
(1, 'Membuat Pengumuman', '<p>sadfadfasdfasdfasdfasdfasdf</p>\r\n', '2021-01-15', '2021-01-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_request`
--

CREATE TABLE `tbl_request` (
  `id` int(11) NOT NULL,
  `id_user` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
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

INSERT INTO `tbl_request` (`id`, `id_user`, `username`, `user`, `status`, `kategori`, `sub_kategori`, `pj`, `grup`, `asset`, `count_asset`, `subject`, `body`, `created_date`, `done_date`, `start_date`, `end_date`) VALUES
(2, '', '', 'Roy Suryo', 'Open', 'Data Center', 'Backup / Restore server', 'Jajang Suharja', 'Networking', 'Monitor', '1', 'LOGIN CPANEL (LIHAT USERNAME DAN PASSWORD)', '<ol>\r\n <li><strong>ADUIAIDBAIBDABDBAD</strong></li>\r\n <li><strong>ADAIDNIADNIAND</strong></li>\r\n <li><strong>safasfas</strong></li>\r\n</ol>\r\n\r\n<p><strong>sfasdfadsfasd</strong></p>\r\n\r\n<p><em><strong>asdfasdfadsf</strong></em></p>\r\n', '2021-01-02 12:57:21', NULL, '2021-01-20', '2021-01-14'),
(3, '', '', 'Roy Suryo', 'Open', 'Data Center', 'Install Aplikasi', 'Abdul Roji', 'IT Support', 'Monitor', '1', 'Mencoba Kembali', '<ol>\r\n <li><strong>ADUIAIDBAIBDABDBAD</strong></li>\r\n <li><strong>ADAIDNIADNIAND</strong></li>\r\n <li><strong>safasfas</strong></li>\r\n</ol>\r\n\r\n<p><strong>sfasdfadsfasd</strong></p>\r\n\r\n<p><em><strong>asdfasdfadsf</strong></em></p>\r\n', '2021-01-02 14:35:22', NULL, '2021-01-13', '2021-01-21'),
(4, '3', 'Roy', 'Roy Suryo', 'Open', 'Infrastruktur', '---- Pilih Sub Kategori ----', 'Jajang Suharja', 'Networking', 'Faizurrahman Allam M', '1', '&quot;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...', '<ol>\r\n <li><strong>ADUIAIDBAIBDABDBAD</strong></li>\r\n <li><strong>ADAIDNIADNIAND</strong></li>\r\n <li><strong>safasfas</strong></li>\r\n</ol>\r\n\r\n<p><strong>sfasdfadsfasd</strong></p>\r\n\r\n<p><em><strong>asdfasdfadsf</strong></em></p>\r\n', '2021-01-03 10:48:29', NULL, '2021-01-16', '2021-01-13'),
(5, '3', 'Roy', 'Roy Suryo', 'Close', 'Infrastruktur', 'core telepon', 'Abdul Roji Nanu', 'Networking', 'Faizurrahman Allam M', '1', 'Random Text Generator', '<ol>\r\n <li><strong>ADUIAIDBAIBDABDBAD</strong></li>\r\n <li><strong>ADAIDNIADNIAND</strong></li>\r\n <li><strong>safasfas</strong></li>\r\n</ol>\r\n\r\n<p><strong>sfasdfadsfasd</strong></p>\r\n\r\n<p><em><strong>asdfasdfadsf</strong></em></p>\r\n', '2021-01-03 11:04:50', NULL, '2021-01-22', '2021-01-13'),
(6, '3', 'Roy', 'Roy Suryo', 'Open', 'Infrastruktur', '---- Pilih Sub Kategori ----', 'Jajang Suharja', 'Networking', 'Faizurrahman Allam M', '1', 'Random Text Generator', '<ol>\r\n <li><strong>ADUIAIDBAIBDABDBAD</strong></li>\r\n <li><strong>ADAIDNIADNIAND</strong></li>\r\n <li><strong>safasfas</strong></li>\r\n</ol>\r\n\r\n<p><strong>sfasdfadsfasd</strong></p>\r\n\r\n<p><em><strong>asdfasdfadsf</strong></em></p>\r\n', '2021-01-03 11:07:05', NULL, '2021-01-25', '2021-01-21'),
(7, '', '', 'Roy Suryo', 'Close', 'Data Center', 'Sarana Lainnya', 'Jajang Suharja', 'Networking', 'Printer,Monitor', '2', 'Random Text Generator', '<p>Testing Update</p>\r\n\r\n<ol>\r\n <li>Percobaan 1</li>\r\n</ol>\r\n', '2021-01-03 11:08:54', NULL, '2021-01-22', '2021-01-28'),
(8, '', '', 'Roy Suryo', 'Open', 'Data Center', 'Permintaan File Sharing', 'Jajang Suharja', 'Networking', 'Monitor', '1', 'LOGIN CPANEL (LIHAT USERNAME DAN PASSWORD)', '<ol>\r\n <li><strong>ADUIAIDBAIBDABDBAD</strong></li>\r\n <li><strong>ADAIDNIADNIAND</strong></li>\r\n <li><strong>safasfas</strong></li>\r\n</ol>\r\n\r\n<p><strong>sfasdfadsfasd</strong></p>\r\n\r\n<p><em><strong>asdfasdfadsf</strong></em></p>\r\n', '2021-01-03 11:12:06', NULL, '2021-01-14', '2021-01-05'),
(9, '', '', 'Roy Suryo', 'Open', 'Infrastruktur', 'core cctv', 'Abdul Roji', 'Networking', 'Monitor', '1', 'LOGIN CPANEL (LIHAT USERNAME DAN PASSWORD)', '<ol>\r\n <li><strong>ADUIAIDBAIBDABDBAD</strong></li>\r\n <li><strong>ADAIDNIADNIAND</strong></li>\r\n <li><strong>safasfas</strong></li>\r\n</ol>\r\n\r\n<p><strong>sfasdfadsfasd</strong></p>\r\n\r\n<p><em><strong>asdfasdfadsf</strong></em></p>\r\n', '2021-01-03 11:15:02', NULL, '2021-02-03', '2021-01-14'),
(10, '', '', 'Roy Suryo', 'Tindak Lanjut', 'Data Center', 'Install Aplikasi', 'Abdul Roji', 'Networking', 'Monitor', '1', 'Mencoba Kembali', '<ol>\r\n <li><strong>ADUIAIDBAIBDABDBAD</strong></li>\r\n <li><strong>ADAIDNIADNIAND</strong></li>\r\n <li><strong>safasfas</strong></li>\r\n</ol>\r\n\r\n<p><strong>sfasdfadsfasd</strong></p>\r\n\r\n<p><em><strong>asdfasdfadsf</strong></em></p>\r\n', '2021-01-03 11:19:01', NULL, '2021-01-13', '2021-01-05'),
(11, '', '', 'Roy Suryo', 'Tindak Lanjut', 'Data Center', 'Backup / Restore server', 'Jajang Suharja', 'IT Support', 'Monitor', '1', 'Random Text Generator', '<ol>\r\n <li><strong>ADUIAIDBAIBDABDBAD</strong></li>\r\n <li><strong>ADAIDNIADNIAND</strong></li>\r\n <li><strong>safasfas</strong></li>\r\n</ol>\r\n\r\n<p><strong>sfasdfadsfasd</strong></p>\r\n\r\n<p><em><strong>asdfasdfadsf</strong></em></p>\r\n', '2021-01-03 11:19:58', NULL, '2021-01-20', '2021-01-01'),
(12, '', '', 'Roy Suryo', 'Close', 'Data Center', 'Troubleshooting server', 'Jajang Suharja', 'IT Support', 'Printer', '1', 'Random Text Generator', '<ol>\r\n <li><strong>ADUIAIDBAIBDABDBAD</strong></li>\r\n <li><strong>ADAIDNIADNIAND</strong></li>\r\n <li><strong>safasfas</strong></li>\r\n</ol>\r\n\r\n<p><strong>sfasdfadsfasd</strong></p>\r\n\r\n<p><em><strong>asdfasdfadsf</strong></em></p>\r\n', '2021-01-03 11:22:41', NULL, '2021-01-23', '2021-01-13'),
(13, '', '', 'Roy Suryo', 'Close', 'Data Center', 'Tambah Ubah DNS', 'Jajang Suharja', 'IT Support', 'Monitor', '1', 'LOGIN CPANEL (LIHAT USERNAME DAN PASSWORD)', '<ol>\r\n <li><strong>ADUIAIDBAIBDABDBAD</strong></li>\r\n <li><strong>ADAIDNIADNIAND</strong></li>\r\n <li><strong>safasfas</strong></li>\r\n</ol>\r\n\r\n<p><strong>sfasdfadsfasd</strong></p>\r\n\r\n<p><em><strong>asdfasdfadsf</strong></em></p>\r\n', '2021-01-03 11:24:00', NULL, '2021-01-19', '2021-01-20'),
(14, '', '', 'Roy Suryo', 'Tindak Lanjut', 'Data Center', 'Permintaan File Sharing', 'Abdul Roji', 'Networking', 'Printer,Monitor', '2', '&quot;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...', '<ol>\r\n <li><strong>ADUIAIDBAIBDABDBAD</strong></li>\r\n <li><strong>ADAIDNIADNIAND</strong></li>\r\n <li><strong>safasfas</strong></li>\r\n</ol>\r\n\r\n<p><strong>sfasdfadsfasd</strong></p>\r\n\r\n<p><em><strong>asdfasdfadsf</strong></em></p>\r\n', '2021-01-03 11:28:46', NULL, '2021-01-09', '2021-01-08'),
(15, '', '', 'Roy Suryo', 'Tindak Lanjut', 'Data Center', 'Sarana Lainnya', 'Abdul Roji', 'Networking', 'Printer,Monitor', '2', 'Random Text Generator', '<ol>\r\n <li><strong>ADUIAIDBAIBDABDBAD</strong></li>\r\n <li><strong>ADAIDNIADNIAND</strong></li>\r\n <li><strong>safasfas</strong></li>\r\n</ol>\r\n\r\n<p><strong>sfasdfadsfasd</strong></p>\r\n\r\n<p><em><strong>asdfasdfadsf</strong></em></p>\r\n', '2021-01-03 12:39:09', NULL, '2021-01-19', '2021-01-04'),
(16, '', '', 'Roy Suryo', 'Open', 'Infrastruktur', 'reporting', 'Jajang Suharja', 'IT Support', 'Printer,Monitor', '2', 'Random Text Generator', '<p>gasdgasdgasdgaadgasdgasdgasdgasdgadsg</p>\r\n\r\n<p>gasdgasdgasdgaadgasdgasdgasdgasdgadsggasdgasdgasdgaadgasdgasdgasdgasdgadsggasdgasdgasdgaadgasdgasdgasdgasdgadsg</p>\r\n', '2021-01-05 04:07:19', NULL, '2021-01-14', '2021-01-21'),
(17, '3', 'roy', 'Roy Suryo', 'Open', 'Data Center', 'Tambah Ubah DNS', 'Jajang Suharja', 'Networking', 'Printer,Monitor', '2', 'Random Text Generator', '<p>asfsdfads</p>\r\n', '2021-01-05 04:18:45', NULL, '2021-01-21', '2021-01-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_solusi`
--

CREATE TABLE `tbl_solusi` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `user` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `isi` text NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_solusi`
--

INSERT INTO `tbl_solusi` (`id`, `judul`, `user`, `created_date`, `isi`, `tujuan`, `end_date`) VALUES
(1, 'Membuat Solusi', 'abdul', '2021-01-16', '<p>dfgbsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>\r\n\r\n<p> </p>\r\n\r\n<ul>\r\n <li>dfgbsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</li>\r\n <li>dfgbsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaadfgbsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaadfgbsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaadfgbsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</li>\r\n <li>dfgbsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</li>\r\n <li>dfgbsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</li>\r\n</ul>\r\n', 'Teknisi', '2021-01-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level_akses` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `username`, `password`, `level_akses`, `created_date`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin', 'admin1234', 0, '2020-12-22 03:43:56'),
(2, 'Jajang Suharja', 'teknisi@gmail.com', 'jajang', '12345678', 1, '2020-12-22 04:03:57'),
(3, 'Roy Suryo', 'roy@gmail.com', 'roy', '12345678', 2, '2020-12-22 09:07:53'),
(4, 'Abdul Roji Nanu', 'abdul@gmail.com', 'abdul', '12345678', 1, '2020-12-22 12:58:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `log_request`
--
ALTER TABLE `log_request`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_kategori`
--
ALTER TABLE `master_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_kota`
--
ALTER TABLE `master_kota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_lokasi`
--
ALTER TABLE `master_lokasi`
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
-- AUTO_INCREMENT untuk tabel `log_request`
--
ALTER TABLE `log_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `master_kategori`
--
ALTER TABLE `master_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `master_kota`
--
ALTER TABLE `master_kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `master_lokasi`
--
ALTER TABLE `master_lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `master_subkategori`
--
ALTER TABLE `master_subkategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `tbl_asset`
--
ALTER TABLE `tbl_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_group`
--
ALTER TABLE `tbl_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_request`
--
ALTER TABLE `tbl_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_solusi`
--
ALTER TABLE `tbl_solusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
