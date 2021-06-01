-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2021 pada 07.51
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kost`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hunian`
--

CREATE TABLE `hunian` (
  `id_hunian` int(15) NOT NULL,
  `nama_hunian` varchar(100) NOT NULL,
  `jenis_hunian` varchar(100) NOT NULL,
  `deskripsi_hunian` text NOT NULL,
  `status_hunian` varchar(100) NOT NULL,
  `harga_hunian` int(15) NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `hunian`
--

INSERT INTO `hunian` (`id_hunian`, `nama_hunian`, `jenis_hunian`, `deskripsi_hunian`, `status_hunian`, `harga_hunian`, `gambar`) VALUES
(14, 'Kontrakan coklat A01', 'Kontrakan', '2 Kamar tidur, 1 dapur, 1 kamar mandi, 1 ruang tamu, tempat parkiran', 'Sold Out', 200000, 'gambar1.jpg'),
(16, 'Kontrakan coklat A02', 'Kontrakan', '2 Kamar tidur, 1 dapur, 1 kamar mandi, 1 ruang tamu, tempat parkiran, ', 'Sold Out', 300000, 'gambar2.jpg'),
(17, 'Kontrakan abu-abu B01', 'Kontrakan', '2 Kamar tidur lengkap dengan kasur, 1 dapur, 1 kamar mandi, 1 ruang tamu', 'Available', 250000, 'gambar3.jpg'),
(18, 'Kontrakan abu-abu B02', 'Kontrakan', '2 Kamar tidur  + AC, 1 dapur, 1 kamar mandi, 1 ruang tamu', 'Available', 400000, 'gambar5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komplain`
--

CREATE TABLE `komplain` (
  `id_komplain` int(15) NOT NULL,
  `id_member` int(15) NOT NULL,
  `id_hunian` int(15) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `komplain`
--

INSERT INTO `komplain` (`id_komplain`, `id_member`, `id_hunian`, `perihal`, `isi`) VALUES
(11, 2, 14, 'dasdas', 'adsasdasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_hunian` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `harga_hunian` varchar(120) NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status_hunian` varchar(100) NOT NULL,
  `bukti_pembayaran` varchar(150) DEFAULT NULL,
  `status_pembayaran` varchar(150) NOT NULL,
  `durasi` varchar(150) NOT NULL,
  `bank` varchar(150) DEFAULT NULL,
  `nama_rekening` varchar(255) DEFAULT NULL,
  `nomor_rekening` varchar(255) DEFAULT NULL,
  `nominal_transfer` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `email`, `id_hunian`, `tanggal_mulai`, `harga_hunian`, `tanggal_kembali`, `status_hunian`, `bukti_pembayaran`, `status_pembayaran`, `durasi`, `bank`, `nama_rekening`, `nomor_rekening`, `nominal_transfer`) VALUES
(6, 'azmiiskandar0@gmail.com', 16, '2021-04-07', '300000', '2021-06-07', 'Belum Selesai', 'homes216_(1)2.png', 'Belum Lunas', '2 month', 'BRI', 'Moch Azmi Iskandar', '17700054', '600000'),
(7, 'ujangandi@gmail.com', 14, '2021-04-10', '200000', '2021-07-10', 'Belum Selesai', 'modern-interior-room-with-furniture-tv-room-dining-room-kitchen-3d-rendering.jpg', 'Lunas', '+3 month', 'BCA', 'Ujang Andi', '3129890819', '600000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(155) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `alamat`, `no_hp`, `status`, `role_id`) VALUES
(1, 'Administrator', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '082295153183', 'Admin', 1),
(2, 'Moch Azmi Iskandar', 'azmiiskandar0@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Tasikmalaya,kawalu,perun griya mitra batik E148', '+6282295153183', 'Mahasiswa', 2),
(4, 'Ujang Andi', 'ujangandi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Karang Anyar', '+628229515318', 'Mahasiswa', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `hunian`
--
ALTER TABLE `hunian`
  ADD PRIMARY KEY (`id_hunian`);

--
-- Indeks untuk tabel `komplain`
--
ALTER TABLE `komplain`
  ADD PRIMARY KEY (`id_komplain`),
  ADD KEY `id_member` (`id_member`,`id_hunian`),
  ADD KEY `id_hunian` (`id_hunian`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hunian`
--
ALTER TABLE `hunian`
  MODIFY `id_hunian` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `komplain`
--
ALTER TABLE `komplain`
  MODIFY `id_komplain` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
