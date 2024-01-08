-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2023 pada 03.45
-- Versi server: 5.1.41
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_stall`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cover`
--

CREATE TABLE `cover` (
  `cover_id` tinyint(50) NOT NULL,
  `identitas_cover` varchar(100) NOT NULL,
  `master_dies_id` varchar(50) NOT NULL,
  `ukuran_cover` varchar(11) NOT NULL,
  `mesh_cover` varchar(50) NOT NULL,
  `layer_cover` varchar(50) NOT NULL,
  `status_cover` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `cover`
--

INSERT INTO `cover` (`cover_id`, `identitas_cover`, `master_dies_id`, `ukuran_cover`, `mesh_cover`, `layer_cover`, `status_cover`) VALUES
(22, 'C-NIG(200,500,1000)/1/V/23', '46', '3395MM', '70', '2', 'Terpasang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cylinder`
--

CREATE TABLE `cylinder` (
  `cylinder_id` int(100) NOT NULL,
  `identitas_cylinder` varchar(100) NOT NULL,
  `panjang_cylinder` int(100) NOT NULL,
  `diameter_cylinder` int(100) NOT NULL,
  `keliling_cylinder` int(100) NOT NULL,
  `cover_id` int(50) NOT NULL,
  `tanggal_cover_terpasang` date NOT NULL,
  `kondisi_cylinder` varchar(50) NOT NULL,
  `lokasi_cylinder` varchar(50) NOT NULL,
  `status_cylinder` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `cylinder`
--

INSERT INTO `cylinder` (`cylinder_id`, `identitas_cylinder`, `panjang_cylinder`, `diameter_cylinder`, `keliling_cylinder`, `cover_id`, `tanggal_cover_terpasang`, `kondisi_cylinder`, `lokasi_cylinder`, `status_cylinder`) VALUES
(28, '00001', 1780, 1186, 3730, 21, '2023-05-18', '', '', 'Terpasang'),
(27, '00002', 1900, 1100, 3455, 0, '0000-00-00', '', '', 'Tidak Terpasang Cover'),
(33, '00010', 1900, 1250, 3925, 0, '0000-00-00', 'Baik', 'Getas Pejaten', 'Tidak Terpasang Cover'),
(24, '00003', 1780, 1186, 3730, 0, '0000-00-00', '', '', 'Tidak Terpasang Cover'),
(25, '00004', 1900, 1186, 3736, 0, '0000-00-00', '', '', 'Tidak Terpasang Cover'),
(26, '00005', 1780, 1186, 3730, 0, '0000-00-00', '', '', 'Tidak Terpasang Cover'),
(29, '00006', 1900, 1156, 3630, 0, '0000-00-00', '', '', 'Tidak Terpasang Cover'),
(30, '00007', 1780, 1077, 3382, 22, '2023-05-18', '', '', 'Terpasang'),
(31, '00008', 1780, 1100, 3455, 0, '0000-00-00', '', '', 'Tidak Terpasang Cover'),
(32, '00009', 1780, 1156, 3630, 0, '0000-00-00', '', '', 'Tidak Terpasang Cover'),
(34, '00011', 1900, 1186, 3736, 0, '0000-00-00', 'Baik', 'Getas Pejaten', 'Tidak Terpasang Cover'),
(35, '00012', 1780, 1100, 3455, 0, '0000-00-00', 'Baik', 'Getas Pejaten', 'Tidak Terpasang Cover'),
(36, '00013', 1900, 1156, 3638, 0, '0000-00-00', 'Baik', 'Getas Pejaten', 'Tidak Terpasang Cover'),
(37, '00014', 1780, 1100, 3455, 0, '0000-00-00', 'Baik', 'Getas Pejaten', 'Tidak Terpasang Cover'),
(38, '00015', 1780, 1100, 3455, 0, '0000-00-00', 'Baik', 'Getas Pejaten', 'Tidak Terpasang Cover'),
(39, '00016', 1780, 1100, 3455, 0, '0000-00-00', 'Baik', 'Getas Pejaten', 'Tidak Terpasang Cover'),
(40, '00017', 1780, 1100, 3455, 0, '0000-00-00', 'Baik', 'Getas Pejaten', 'Tidak Terpasang Cover'),
(41, '00018', 1780, 1222, 3840, 0, '0000-00-00', 'Baik', 'Getas Pejaten', 'Tidak Terpasang Cover'),
(42, '00019', 1900, 1222, 3840, 0, '0000-00-00', 'Baik', 'PM3', 'Tidak Terpasang Cover'),
(43, '00020', 1780, 1222, 3840, 0, '0000-00-00', 'Baik', 'Getas Pejaten', 'Tidak Terpasang Cover'),
(44, '00021', 1780, 1040, 3268, 0, '0000-00-00', 'Baik', 'Getas Pejaten', 'Tidak Terpasang Cover'),
(45, '00022', 1780, 1040, 3268, 0, '0000-00-00', 'Baik', 'Getas Pejaten', 'Tidak Terpasang Cover'),
(46, '00023', 1780, 1186, 3730, 0, '0000-00-00', 'Baik', 'Getas Pejaten', 'Tidak Terpasang Cover'),
(47, '00024', 1900, 1222, 3840, 0, '0000-00-00', 'Baik', 'Getas Pejaten', 'Tidak Terpasang Cover'),
(48, '00025', 1780, 1100, 3455, 0, '0000-00-00', 'Baik', 'Getas Pejaten', 'Tidak Terpasang Cover'),
(49, '00026', 1900, 1373, 4312, 0, '0000-00-00', 'Baik', 'Getas Pejaten', 'Tidak Terpasang Cover'),
(50, '00027', 1900, 1100, 3455, 0, '0000-00-00', 'Baik', 'PM3', 'Tidak Terpasang Cover'),
(51, '00028', 1780, 1186, 3730, 0, '0000-00-00', 'Sangat Baik', 'PM3', 'Tidak Terpasang Cover');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang`
--

CREATE TABLE `gudang` (
  `gudang_id` int(10) NOT NULL,
  `nama_gudang` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `gudang`
--

INSERT INTO `gudang` (`gudang_id`, `nama_gudang`) VALUES
(1, 'PM3'),
(2, 'Getas Pejaten'),
(3, 'PM10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_pemasangan_cover_cylinder`
--

CREATE TABLE `log_pemasangan_cover_cylinder` (
  `log_id` int(10) NOT NULL,
  `cover_id` int(50) NOT NULL,
  `cylinder_id` int(50) NOT NULL,
  `tanggal_pasang_cover` date NOT NULL,
  `tanggal_lepas_cover` date NOT NULL,
  `kondisi_cover` varchar(50) NOT NULL,
  `tanggal_validasi_pm10` datetime NOT NULL,
  `status_validasi_pm10` varchar(50) NOT NULL,
  `tanggal_validasi_pm3` datetime NOT NULL,
  `status_validasi_pm3` varchar(50) NOT NULL,
  `lokasi_cover` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `log_pemasangan_cover_cylinder`
--

INSERT INTO `log_pemasangan_cover_cylinder` (`log_id`, `cover_id`, `cylinder_id`, `tanggal_pasang_cover`, `tanggal_lepas_cover`, `kondisi_cover`, `tanggal_validasi_pm10`, `status_validasi_pm10`, `tanggal_validasi_pm3`, `status_validasi_pm3`, `lokasi_cover`) VALUES
(30, 22, 30, '2023-05-18', '0000-00-00', 'Sangat Baik', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'PM10'),
(29, 21, 28, '2023-05-18', '0000-00-00', 'Sangat Baik', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'PM10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_dies`
--

CREATE TABLE `master_dies` (
  `master_dies_id` tinyint(10) NOT NULL,
  `identitas_master_dies` varchar(50) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `revisi_ke` int(10) NOT NULL,
  `tanggal_pembuatan` date NOT NULL,
  `tanggal_approve` date NOT NULL,
  `bahan_dies` varchar(50) NOT NULL,
  `ukuran_dies` varchar(50) NOT NULL,
  `desain_gambar` varchar(50) NOT NULL,
  `keterangan_desain_gambar` varchar(50) NOT NULL,
  `kode_pr_hs_tm` varchar(50) NOT NULL,
  `jum_pasang` varchar(50) NOT NULL,
  `aplikasi` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `master_dies`
--

INSERT INTO `master_dies` (`master_dies_id`, `identitas_master_dies`, `nama_produk`, `revisi_ke`, `tanggal_pembuatan`, `tanggal_approve`, `bahan_dies`, `ukuran_dies`, `desain_gambar`, `keterangan_desain_gambar`, `kode_pr_hs_tm`, `jum_pasang`, `aplikasi`) VALUES
(24, 'D-AG1.2/1/I/23', 'KU Argentina 100 (Evita Peron EP)', 1, '2023-01-16', '0000-00-00', 'Kuningan', '40x50 MM', 'Evita Peron EP', 'Wajah Evita Peron tampak depan', 'TM', '1', 'C'),
(23, 'D-AG1.2/1/X/22', 'KU Argentina 100 (Evita Peron)', 0, '2022-10-07', '0000-00-00', 'Kuningan', '40x50 MM', 'Evita Peron', 'Wajah Evita Peron tampak depan', 'TM', '1', 'C'),
(22, 'D-AG10.1/3/I/23', 'KU Argentina 1000 (Burung Hornero)', 2, '2023-01-09', '0000-00-00', 'Kuningan', '40x50 MM', 'Burung Hornero', 'Kepala burung hornero', 'TM', '1', 'C'),
(20, 'D-AG10.1/1/II/22', 'KU Argentina 1000 (Burung Hornero)', 0, '2022-11-12', '0000-00-00', 'Kuningan', '40x50 MM', 'Burung Hornero', 'Kepala burung hornero', 'HS', '1', 'C'),
(21, 'D-AG10.1/2/I/23', 'KU Argentina 1000 (Burung Hornero)', 1, '2023-01-04', '0000-00-00', 'Kuningan', '40x50 MM', 'Burung Hornero', 'Kepala burung hornero', 'HS', '1', 'C'),
(25, 'D-AG2.2/1/X/22', 'KU Argentina 200 (MG-JA)', 0, '2022-10-17', '0000-00-00', 'Kuningan', '40x50 MM', 'MG-JA', 'MG-JA', 'TM', '1', 'C'),
(26, 'D-AG2.2/2/I/22', 'KU Argentina 200 (MG-JA)', 1, '2023-01-13', '0000-00-00', 'Kuningan', '40x50 MM', 'MG-JA', 'MG-JA', 'TM', '1', 'C'),
(27, 'D-AG5.2/1/X/22', 'KU Argentina 500 (MV-MB)', 0, '2022-10-07', '0000-00-00', 'Kuningan', '40x50 MM', 'MV-MB', 'MV-MB', 'TM', '1', 'C'),
(28, 'D-AG5.2/2/II/23', 'KU Argentina 500 (MV-MB)', 1, '2023-01-04', '0000-00-00', 'Kuningan', '40x50 MM', 'MV-MB', 'MV-MB', 'TM', '1', 'C'),
(29, 'D-AG5.2/3/I/23', 'KU Argentina 500 (MV-MB)', 2, '2023-01-07', '0000-00-00', 'Kuningan', '40x50 MM', 'MV-MB', 'MV-MB', 'TM', '1', 'C'),
(30, 'D-AG10.2/1/X/22', 'KU Argentina 1000 (JSM)', 0, '2022-10-17', '0000-00-00', 'Kuningan', '40x50 MM', 'JSM', 'JSM', 'HS', '1', 'C'),
(31, 'D-AG10.2/1/IX/22', 'KU Argentina 1000 (JSM)', 1, '2022-09-30', '0000-00-00', 'Kuningan', '40x50 MM', 'JSM', 'JSM', 'TM', '1', 'C'),
(32, 'D-AG10.2/3/I/23', 'KU Argentina 1000 (JSM)', 2, '2023-01-17', '0000-00-00', 'Kuningan', '40x50 MM', 'JSM', 'JSM', 'TM', '1', 'C'),
(33, 'D-ME2.1/1/V/22', 'KU Meksiko 200 (Lonceng)', 0, '2022-05-13', '0000-00-00', 'Kuningan', '40x50 MM', 'Lonceng', 'Lonceng (200)', 'HS', '1', 'C'),
(34, 'D-ME2.1/2/VIII/22', 'KU Meksiko 200 (Lonceng)', 1, '2022-08-08', '0000-00-00', 'Kuningan', '40x50 MM', 'Lonceng (200)', 'Lonceng (200)', 'HS', '1', 'C'),
(35, 'D-ME2.1/3/XII/22', 'KU Meksiko 200 (Lonceng)', 2, '2022-12-07', '0000-00-00', 'Kuningan', '40x50 MM', 'Lonceng', 'Lonceng (200)', 'TM', '1', 'C'),
(36, 'D-ME2.1/4/XII/22', 'KU Meksiko 200 (Lonceng)', 3, '2022-12-21', '0000-00-00', 'Kuningan', '40x50 MM', 'Lonceng', 'Lonceng (200)', 'TM', '1', 'C'),
(37, 'D-ME5.1/1/V/22', 'KU Meksiko 500 (B Juarez)', 0, '2022-05-13', '0000-00-00', 'Kuningan', '40x50 MM', 'B. Juarez', 'Wajah B. Juarez', 'HS', '1', 'C'),
(38, 'D-ME5.1/2/VIII/22', 'KU Meksiko 500 (B Juarez)', 1, '2022-08-08', '0000-00-00', 'Kuningan', '40x50 MM', 'B. Juarez', 'B. Juarez (Denom 500)', 'TM', '1', 'C'),
(39, 'D-ME5.1/2/XII/22', 'KU Meksiko 500 (B Juarez)', 2, '2022-12-09', '0000-00-00', 'Kuningan', '40x50 MM', 'B. Juarez', 'B. Juarez (Denom 500)', 'TM', '1', 'C'),
(45, ' D-NG2.1/3/VIII/22 ', 'KU Nigeria 200', 2, '2022-08-07', '0000-00-00', 'Kuningan', '50 x 55x 14mm', 'Ahmadu Bello', 'Wajah Ahmadu Bello', 'TM', '1', 'C'),
(44, ' D-NG2.1/2/VI/22 ', 'KU Nigeria 200', 1, '2022-06-17', '0000-00-00', 'Kuningan', '50 x 55x 14mm', 'Ahmadu Bello', 'Wajah Ahmadu Bello', 'TM', '1', 'C'),
(43, ' D-NG2.1/1/II/22 ', 'KU Nigeria 200', 0, '2022-02-22', '0000-00-00', 'Kuningan', '50x55x14mm', 'Ahmadu Bello', 'Wajah Ahmadu Bello', 'HS', '1', 'C'),
(46, ' D-NG2.1/4/IV/23 ', 'KU Nigeria 200', 3, '2023-04-27', '2023-05-07', 'Kuningan', '50 x 55x 14mm', 'Ahmadu Bello', 'Wajah Ahmadu Bello', 'PR', '1', 'C'),
(47, ' D-NG.5.1/1/II/22 ', 'KU Nigeria 500', 0, '2022-02-22', '0000-00-00', 'Kuningan', '40x50x14mm', 'Nnamdi Azikiwe', 'Wajah Nnamdi Azikiwe', 'HS', '1', 'C'),
(48, ' D-NG.5.1/2/VI/22 ', 'KU Nigeria 500', 1, '2022-06-06', '0000-00-00', 'Kuningan', '40x50x14mm', 'Nnamdi Azikiwe', 'Wajah Nnamdi Azikiwe', 'TM', '1', 'C'),
(49, ' D-NG.5.1/3/VI/22 ', 'KU Nigeria 500', 2, '2022-05-23', '0000-00-00', 'Kuningan', '40x50x14mm', 'Nnamdi Azikiwe', 'Wajah Nnamdi Azikiwe', 'TM', '1', 'C'),
(50, ' D-NG.5.1/4/VI/22 ', 'KU Nigeria 500', 3, '2022-06-27', '0000-00-00', 'Kuningan', '40x50x14mm', 'Nnamdi Azikiwe', 'Wajah Ahmadu Bello', 'TM', '1', 'C'),
(54, ' D-NG.5.1/5/VI/23 ', 'KU Nigeria 500', 4, '0022-05-12', '2023-05-11', 'Kuningan', '40x50x14mm', 'Nnamdi Azikiwe', 'Wajah Nnamdi Azikiwe', 'PR', '1', 'C'),
(52, ' D-NG.10.1/1/II/22 ', 'KU Nigeria 1000', 0, '2022-02-22', '0000-00-00', 'Kuningan', '40x50x14mm', 'KU nigeria 1000', 'KU nigeria 1000', 'HS', '1', 'C'),
(53, ' D-NG.10.1/2/VII/22 ', 'KU Nigeria 1000', 1, '0022-07-12', '0000-00-00', 'Kuningan', '40x50x14mm', 'KU nigeria 1000', 'KU nigeria 1000', 'TM', '1', 'C'),
(55, ' D-NG.10.1/4/V/23 ', 'KU Nigeria 1000', 3, '2022-05-04', '2023-05-14', 'Kuningan', '40x50x14mm', 'KU nigeria 1000', 'KU nigeria 1000', 'PR', '1', 'C'),
(56, 'D-SER.BGL/1/I/2013', 'NJS', 0, '2013-05-08', '0000-00-00', 'Kuningan', '200x200x14MM', 'Awan Gedung Text Melingkar', 'Awan Gedung Text Melingkar', 'PR', '1', 'C'),
(57, 'D-SER.BGL/2/V/2017', 'NJS (versi acuan china)', 0, '2017-05-08', '0000-00-00', 'Kuningan', '200x200x14MM', 'Awan Gedung Text Melingkar', 'Awan Gedung Text Melingkar', 'PR', '1', 'C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasangan_cylinder_mesin`
--

CREATE TABLE `pemasangan_cylinder_mesin` (
  `pemasangan_id` int(50) NOT NULL,
  `cylinder_id` int(50) NOT NULL,
  `cover_id` int(50) NOT NULL,
  `tanggal_pasang_mesin` date NOT NULL,
  `tanggal_lepas_mesin` date NOT NULL,
  `tonase_cover` varchar(50) NOT NULL,
  `alasan_pelepasan` varchar(100) NOT NULL,
  `status_pemasangan_mesin` varchar(50) NOT NULL,
  `created_pemasangan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemusnahan`
--

CREATE TABLE `pemusnahan` (
  `pemusnahan_id` int(50) NOT NULL,
  `nomor_dokumen_pemusnahan` varchar(50) NOT NULL,
  `cover_id` int(50) NOT NULL,
  `tanggal_pemusnahan` date NOT NULL,
  `file_bukti` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman_cylinder`
--

CREATE TABLE `pengiriman_cylinder` (
  `pengiriman_id` int(50) NOT NULL,
  `nomor_dokumen` varchar(50) NOT NULL,
  `cylinder_id` varchar(50) NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `tanggal_terima` date NOT NULL,
  `asal_pengiriman` varchar(50) NOT NULL,
  `tujuan_pengiriman` varchar(50) NOT NULL,
  `nomor_kendaraan` varchar(50) NOT NULL,
  `sopir` varchar(50) NOT NULL,
  `mengetahui` varchar(50) NOT NULL,
  `status_pengiriman` varchar(50) NOT NULL,
  `created_pengiriman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tingkatan_user`
--

CREATE TABLE `tingkatan_user` (
  `level_user` int(10) NOT NULL,
  `bagian` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tingkatan_user`
--

INSERT INTO `tingkatan_user` (`level_user`, `bagian`) VALUES
(1, 'admin'),
(2, 'watermark'),
(3, 'produksi'),
(4, 'QC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `level_user`) VALUES
(6, 'pm3', '$2y$10$KmvlnPhz5r4BOx429gyxZ.UkhtCQ2uMUuGIzKvBHRBrD51YW6HDP6', 3),
(4, 'admin', '$2y$10$eVThPVxjeJY/uA.f9LHS4OMZIlDsOpRgG/rSLqgZU6bvOJIov6KlK', 1),
(5, 'wm', '$2y$10$0dJtFNDxc3kX2mGvoh5VTer8M9qPD8/Y4mtK05918jlBCLuADDq92', 2),
(7, 'qc10', '$2y$10$AxgF6dFKH2OQp8JkVMXn0ujoxwv7xkB3Fx2ge7RhJg/M/I3ifMuVi', 4),
(8, 'qc3', '$2y$10$7bCqWvOC9NuGC64tHNIqkucVeUa1Dp97pxdJRZHGYqPU4HyLUqKuG', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cover`
--
ALTER TABLE `cover`
  ADD PRIMARY KEY (`cover_id`);

--
-- Indeks untuk tabel `cylinder`
--
ALTER TABLE `cylinder`
  ADD PRIMARY KEY (`cylinder_id`);

--
-- Indeks untuk tabel `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`gudang_id`);

--
-- Indeks untuk tabel `log_pemasangan_cover_cylinder`
--
ALTER TABLE `log_pemasangan_cover_cylinder`
  ADD PRIMARY KEY (`log_id`);

--
-- Indeks untuk tabel `master_dies`
--
ALTER TABLE `master_dies`
  ADD PRIMARY KEY (`master_dies_id`),
  ADD UNIQUE KEY `id_master_dice` (`identitas_master_dies`),
  ADD KEY `identitas_master_dice` (`identitas_master_dies`);

--
-- Indeks untuk tabel `pemasangan_cylinder_mesin`
--
ALTER TABLE `pemasangan_cylinder_mesin`
  ADD PRIMARY KEY (`pemasangan_id`);

--
-- Indeks untuk tabel `pemusnahan`
--
ALTER TABLE `pemusnahan`
  ADD UNIQUE KEY `id_pemusnahan` (`pemusnahan_id`);

--
-- Indeks untuk tabel `pengiriman_cylinder`
--
ALTER TABLE `pengiriman_cylinder`
  ADD PRIMARY KEY (`pengiriman_id`);

--
-- Indeks untuk tabel `tingkatan_user`
--
ALTER TABLE `tingkatan_user`
  ADD PRIMARY KEY (`level_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cover`
--
ALTER TABLE `cover`
  MODIFY `cover_id` tinyint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `cylinder`
--
ALTER TABLE `cylinder`
  MODIFY `cylinder_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `gudang`
--
ALTER TABLE `gudang`
  MODIFY `gudang_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `log_pemasangan_cover_cylinder`
--
ALTER TABLE `log_pemasangan_cover_cylinder`
  MODIFY `log_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `master_dies`
--
ALTER TABLE `master_dies`
  MODIFY `master_dies_id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `pemasangan_cylinder_mesin`
--
ALTER TABLE `pemasangan_cylinder_mesin`
  MODIFY `pemasangan_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `pemusnahan`
--
ALTER TABLE `pemusnahan`
  MODIFY `pemusnahan_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengiriman_cylinder`
--
ALTER TABLE `pengiriman_cylinder`
  MODIFY `pengiriman_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tingkatan_user`
--
ALTER TABLE `tingkatan_user`
  MODIFY `level_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
