-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jun 2022 pada 09.15
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodata_diri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_diri`
--

CREATE TABLE `data_diri` (
  `id_utama` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Tempat` varchar(50) NOT NULL,
  `Tgl_lahir` varchar(50) NOT NULL,
  `Jenis_Kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `Gol_Darah` varchar(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `RT_RW` varchar(30) NOT NULL,
  `Kel_Desa` varchar(50) NOT NULL,
  `Kecamatan` varchar(30) NOT NULL,
  `Agama` varchar(30) NOT NULL,
  `Status_Perkawinan` varchar(30) NOT NULL,
  `Pekerjaan` varchar(30) NOT NULL,
  `Kewarganegaraan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keahlian`
--

CREATE TABLE `keahlian` (
  `id` int(11) NOT NULL,
  `id_utama` int(11) NOT NULL,
  `nama_keahlian` varchar(20) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `id_utama` int(11) NOT NULL,
  `riwayat_pendidikan` varchar(50) NOT NULL,
  `nama_pendidikan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id_utama`);

--
-- Indeks untuk tabel `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_data_diri` (`id_utama`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_data_diri` (`id_utama`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id_utama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT untuk tabel `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2565;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `keahlian`
--
ALTER TABLE `keahlian`
  ADD CONSTRAINT `keahlian_ibfk_1` FOREIGN KEY (`id_utama`) REFERENCES `data_diri` (`id_utama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `pendidikan_ibfk_1` FOREIGN KEY (`id_utama`) REFERENCES `data_diri` (`id_utama`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
