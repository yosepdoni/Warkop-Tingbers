-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2023 pada 10.30
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtingbers`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `idAkun` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jeniskelamin` enum('pria','wanita') NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`idAkun`, `nama`, `jeniskelamin`, `username`, `password`) VALUES
(1, 'Admin', 'pria', 'Admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbarang`
--

CREATE TABLE `tbbarang` (
  `id` int(8) NOT NULL,
  `nm_brg` varchar(50) NOT NULL,
  `hrg` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbbarang`
--

INSERT INTO `tbbarang` (`id`, `nm_brg`, `hrg`) VALUES
(1, 'Kopi', 5000),
(2, 'gula', 15000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpengeluaran`
--

CREATE TABLE `tbpengeluaran` (
  `id` int(12) NOT NULL,
  `tgl` date NOT NULL,
  `nm_brg` varchar(50) NOT NULL,
  `qty` int(8) NOT NULL,
  `hrg` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbpengeluaran`
--

INSERT INTO `tbpengeluaran` (`id`, `tgl`, `nm_brg`, `qty`, `hrg`) VALUES
(1, '2023-05-06', 'kopi', 10, 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtransaksi`
--

CREATE TABLE `tbtransaksi` (
  `id` int(11) NOT NULL,
  `nm_brg` varchar(50) NOT NULL,
  `hrg` int(15) NOT NULL,
  `qty` int(15) NOT NULL,
  `tgl` date NOT NULL,
  `total` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtransaksiview`
--

CREATE TABLE `tbtransaksiview` (
  `id` int(11) NOT NULL,
  `nm_brg` varchar(50) NOT NULL,
  `hrg` int(15) NOT NULL,
  `qty` int(15) NOT NULL,
  `tgl` date NOT NULL,
  `total` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`idAkun`);

--
-- Indeks untuk tabel `tbbarang`
--
ALTER TABLE `tbbarang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbpengeluaran`
--
ALTER TABLE `tbpengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbtransaksiview`
--
ALTER TABLE `tbtransaksiview`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `idAkun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbbarang`
--
ALTER TABLE `tbbarang`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbpengeluaran`
--
ALTER TABLE `tbpengeluaran`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbtransaksiview`
--
ALTER TABLE `tbtransaksiview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
