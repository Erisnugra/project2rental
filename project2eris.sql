-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2023 pada 14.03
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2eris`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_customer`
--

CREATE TABLE `data_customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(15) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_customer`
--

INSERT INTO `data_customer` (`id_customer`, `nama`, `jenis_kelamin`, `alamat`, `id_user`) VALUES
(1, 'asdf', 'Laki-laki', 'jl subang kabup', 11),
(2, 'aku', 'Laki-laki', 'kp kdung gede', 11),
(3, 'Eris', 'Laki-laki', 'Garuts', 11),
(4, 'Udin', 'Laki-laki', 'Subang', 11),
(5, 'Sumanto', 'Perempuan', 'Jakarta', 11),
(6, 'budi', 'Laki-laki', 'subang', 11),
(7, 'eris', 'Laki-laki', 'garut6', 11),
(8, 'asep', 'Laki-laki', 'subang', 11),
(9, 'rahma', 'Perempuan', 'subang', 11),
(10, 'Penyewa', 'Laki-laki', 'subang', 11),
(11, 'bu nur', 'Perempuan', 'subang', 14),
(12, 'gggaga', 'Laki-laki', 'hshs', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_merk`
--

CREATE TABLE `data_merk` (
  `id_merk` int(10) NOT NULL,
  `merk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_merk`
--

INSERT INTO `data_merk` (`id_merk`, `merk`) VALUES
(1, 'Suzuki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mobil`
--

CREATE TABLE `data_mobil` (
  `id_mobil` int(10) NOT NULL,
  `nama_merk` varchar(10) NOT NULL,
  `nama_mobil` varchar(15) NOT NULL,
  `warna_mobil` varchar(10) NOT NULL,
  `jumlah_kursi` varchar(10) NOT NULL,
  `no_polisi` varchar(10) NOT NULL,
  `tahun_beli` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `status` enum('Ditolak','Disetujui') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_mobil`
--

INSERT INTO `data_mobil` (`id_mobil`, `nama_merk`, `nama_mobil`, `warna_mobil`, `jumlah_kursi`, `no_polisi`, `tahun_beli`, `harga`, `gambar`, `id_user`, `status`) VALUES
(25, 'Yamaha', 'fd', 'dfd', '21', 'dfd', '12', 122121, '1687482612_f06631b83a904a5331be.jpg', 7, NULL),
(26, 'Toyota', 'mobil2', 'putih', '3', 'A 536 DS', '2012', 200000, '1687491188_b516d130085cf52d940c.jpg', 7, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pembayaran`
--

CREATE TABLE `data_pembayaran` (
  `id_bayar` int(10) NOT NULL,
  `jenis_bayar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_pembayaran`
--

INSERT INTO `data_pembayaran` (`id_bayar`, `jenis_bayar`) VALUES
(2, 'cash');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_perjalanan`
--

CREATE TABLE `data_perjalanan` (
  `id_perjalanan` int(11) NOT NULL,
  `kota_asal` varchar(15) NOT NULL,
  `kota_tujuan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_perjalanan`
--

INSERT INTO `data_perjalanan` (`id_perjalanan`, `kota_asal`, `kota_tujuan`) VALUES
(1, 'dfd', 'bekasi'),
(2, 'subang', 'bekasi'),
(3, 'Garus', 'Subang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pesanan`
--

CREATE TABLE `data_pesanan` (
  `id_pesanan` int(10) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `id_mobil` int(11) DEFAULT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `total_harga` int(20) NOT NULL,
  `status` enum('MelakukanPembayaran','PembayaranSelesai','PembayaranDibatalkan','Disetujui','PembayaranDitolak','Selesai') NOT NULL,
  `jenis_bayar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_pesanan`
--

INSERT INTO `data_pesanan` (`id_pesanan`, `id_user`, `id_customer`, `id_mobil`, `tanggal_pinjam`, `tanggal_kembali`, `total_harga`, `status`, `jenis_bayar`) VALUES
(5, 11, 6, 25, '2023-06-24', '2023-06-25', 122121, 'Selesai', 'Tunai'),
(8, 11, 9, 25, '2023-06-26', '2023-06-27', 122121, 'Disetujui', 'Tunai'),
(9, 11, 10, 26, '2023-06-27', '2023-06-28', 200000, '', 'Tunai'),
(10, 14, 11, 26, '2023-06-30', '2023-07-01', 200000, 'Disetujui', 'Tunai'),
(11, 15, 12, 26, '2023-07-02', '2023-07-03', 200000, '', 'Tunai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(2, '2023-05-18-070821', 'App\\Database\\Migrations\\Users', 'default', 'App', 1684460941, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` enum('Admin','Penyedia Jasa','Penyewa') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `name`, `role`, `created_at`, `updated_at`) VALUES
(3, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Eris ', 'Admin', '2023-05-19 02:02:40', '2023-05-19 02:02:40'),
(7, 'adminjasa', '827ccb0eea8a706c4c34a16891f84e7b', 'penyedia jasa', 'Penyedia Jasa', '2023-05-30 09:16:27', '2023-05-30 09:16:27'),
(11, 'user', '827ccb0eea8a706c4c34a16891f84e7b', 'penyewa', 'Penyewa', '2023-06-13 15:59:27', '2023-06-13 15:59:27'),
(13, 'penyedia', '827ccb0eea8a706c4c34a16891f84e7b', 'penyedia jasa', 'Penyedia Jasa', NULL, NULL),
(14, 'penyewa', '827ccb0eea8a706c4c34a16891f84e7b', 'bu nur', 'Penyewa', NULL, NULL),
(15, 'penyewa2', '202cb962ac59075b964b07152d234b70', 'bu sari', 'Penyewa', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_customer`
--
ALTER TABLE `data_customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `data_merk`
--
ALTER TABLE `data_merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indeks untuk tabel `data_mobil`
--
ALTER TABLE `data_mobil`
  ADD PRIMARY KEY (`id_mobil`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `data_pembayaran`
--
ALTER TABLE `data_pembayaran`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indeks untuk tabel `data_perjalanan`
--
ALTER TABLE `data_perjalanan`
  ADD PRIMARY KEY (`id_perjalanan`);

--
-- Indeks untuk tabel `data_pesanan`
--
ALTER TABLE `data_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_user` (`id_user`,`id_customer`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_mobil` (`id_mobil`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_customer`
--
ALTER TABLE `data_customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `data_merk`
--
ALTER TABLE `data_merk`
  MODIFY `id_merk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `data_mobil`
--
ALTER TABLE `data_mobil`
  MODIFY `id_mobil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `data_pembayaran`
--
ALTER TABLE `data_pembayaran`
  MODIFY `id_bayar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_perjalanan`
--
ALTER TABLE `data_perjalanan`
  MODIFY `id_perjalanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_pesanan`
--
ALTER TABLE `data_pesanan`
  MODIFY `id_pesanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_customer`
--
ALTER TABLE `data_customer`
  ADD CONSTRAINT `data_customer_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_mobil`
--
ALTER TABLE `data_mobil`
  ADD CONSTRAINT `data_mobil_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_pesanan`
--
ALTER TABLE `data_pesanan`
  ADD CONSTRAINT `data_pesanan_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `data_customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_pesanan_ibfk_3` FOREIGN KEY (`id_mobil`) REFERENCES `data_mobil` (`id_mobil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_pesanan_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
