-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Feb 2024 pada 14.29
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silsilah_keluarga2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluarga`
--

CREATE TABLE `keluarga` (
  `nama` varchar(20) NOT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `ortu` varchar(20) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keluarga`
--

INSERT INTO `keluarga` (`nama`, `jenis_kelamin`, `ortu`, `status`) VALUES
('Budi', 'L', NULL, 'Utama'),
('Dede', 'L', 'Budi', 'Anak'),
('Dewi', 'P', 'Budi', 'Anak'),
('Dodi', 'L', 'Budi', 'Anak'),
('Farah', 'P', 'Dedi', 'Cucu'),
('Feri', 'L', 'Dedi', 'Cucu'),
('Gandi', 'L', 'Dodi', 'Cucu'),
('Gugus', 'L', 'Dodi', 'Cucu'),
('Hana', 'P', 'Dede', 'Cucu'),
('Hani', 'P', 'Dede', 'Cucu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
