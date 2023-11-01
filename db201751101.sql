-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Okt 2023 pada 02.53
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db201751101`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pmb_201751101`
--

CREATE TABLE `pmb_201751101` (
  `kode_pmb` int(11) NOT NULL,
  `periode_pmb` int(11) NOT NULL,
  `jumlah_pmb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pmb_201751101`
--

INSERT INTO `pmb_201751101` (`kode_pmb`, `periode_pmb`, `jumlah_pmb`) VALUES
(1, 2019, 300),
(2, 2020, 400),
(3, 2021, 500),
(4, 2022, 700);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pmb_201751101`
--
ALTER TABLE `pmb_201751101`
  ADD PRIMARY KEY (`kode_pmb`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pmb_201751101`
--
ALTER TABLE `pmb_201751101`
  MODIFY `kode_pmb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
