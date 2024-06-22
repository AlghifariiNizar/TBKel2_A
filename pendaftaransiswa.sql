-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2024 pada 04.15
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaransiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `orang_tua`
--

CREATE TABLE `orang_tua` (
  `kk` char(20) NOT NULL,
  `nik` char(20) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `ayahpendidikan` varchar(20) NOT NULL,
  `ayahpekerjaan` varchar(30) NOT NULL,
  `ayahpenghasilan` varchar(25) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `ibupendidikan` varchar(25) NOT NULL,
  `ibupekerjaan` varchar(30) NOT NULL,
  `ibupenghasilan` varchar(25) NOT NULL,
  `telepon` char(20) NOT NULL,
  `ayahnik` char(20) NOT NULL,
  `ibunik` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `orang_tua`
--

INSERT INTO `orang_tua` (`kk`, `nik`, `nama_ayah`, `ayahpendidikan`, `ayahpekerjaan`, `ayahpenghasilan`, `nama_ibu`, `ibupendidikan`, `ibupekerjaan`, `ibupenghasilan`, `telepon`, `ayahnik`, `ibunik`) VALUES
('012345678', '12345678', 'Ayahnya Siswa', 'S1', 'TNI/Polri', '5.000.000-10.000.000', 'Ibunya Siswa', 'S1', 'PNS', '5.000.000-10.000.000', '0812345678910', '', ''),
('33344455666', '987654321', 'Ayah Siswa Dua', 'S2', 'Pensiun', '5.000.000-10.000.000', 'Ibu Siswa Dua', 'S1', 'Tidak Bekerja', '5.000.000-10.000.000', '08111222333444', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nik` char(20) NOT NULL,
  `password` char(20) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `jeniskelamin` enum('L','P') NOT NULL,
  `tempatlahir` varchar(30) NOT NULL,
  `tgllahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nik`, `password`, `namalengkap`, `jeniskelamin`, `tempatlahir`, `tgllahir`, `alamat`, `agama`, `role`) VALUES
('12345678', '12345678', 'Nama Siswa', 'L', 'Garut', '2012-12-14', 'Jalan Rumah Siswa', 'Islam', 'user'),
('987654321', '987654321', 'Siswa Dua', 'P', 'Tasikmalaya', '2011-06-16', 'Jalan Rumah Siswa Dua', 'Islam', 'user');

--
-- Trigger `siswa`
--
DELIMITER $$
CREATE TRIGGER `after_insert` AFTER INSERT ON `siswa` FOR EACH ROW begin
insert into users
set username = new.nik,
password = new.password,
role = new.role;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` char(20) NOT NULL,
  `password` char(20) NOT NULL,
  `role` enum('admin','user') DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `role`, `id`) VALUES
('admin', 'admin', 'admin', 1),
('456', 'nizar456', 'user', 2),
('123', 'nizar123', 'user', 3),
('1223', '123', 'user', 5),
('999', '999', 'user', 6),
('900', '900', 'user', 7),
('150', '150', 'user', 8),
('600', '', 'user', 9),
('1500', '1500', 'user', 10),
('1600', '1600', 'user', 11),
('1700', '170000', 'user', 12),
('1800', '170000', 'user', 13),
('1900', '1900', 'user', 14),
('600', '', 'user', 15),
('6000', '', 'user', 16),
('60000', '', 'user', 17),
('977', '977', 'user', 18),
('3205060708', 'siswa1', 'user', 19),
('12345678', '12345678', 'user', 20),
('987654321', '987654321', 'user', 21);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`kk`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD CONSTRAINT `orang_tua_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `siswa` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
