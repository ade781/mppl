-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2024 pada 14.37
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drashoes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(255) DEFAULT NULL,
  `email_admin` varchar(255) DEFAULT NULL,
  `password_admin` varchar(255) DEFAULT NULL,
  `role_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `email_admin`, `password_admin`, `role_admin`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(7, 'worker', 'worker123@gmail.com', 'worker', 'worker'),
(8, 'mencoba', 'radikal@gmail.com', 'mencoba123', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_cust` int(11) NOT NULL,
  `username_cust` varchar(255) DEFAULT NULL,
  `email_cust` varchar(255) NOT NULL,
  `password_cust` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_cust`, `username_cust`, `email_cust`, `password_cust`) VALUES
(1, 'daniel', 'danielgagg21@gmail.com', 'cipet2004'),
(3, 'ridho', 'ridhoillahi@gmail.com', 'harus69'),
(4, 'abadi', 'abadi123@gmail.com', 'abadi'),
(5, 'oscar', 'fileas123@gmail.com', 'oscar123'),
(6, 'arif', 'arif1123@gmail.com', 'arif123'),
(7, 'arif', 'arif123@gmail.com', 'cipet2004');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id_orders` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_cust` int(11) NOT NULL,
  `id_pricelist` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id_orders`, `id_admin`, `id_cust`, `id_pricelist`) VALUES
(1, 1, 1, 1),
(2, 7, 3, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pricelist`
--

CREATE TABLE `pricelist` (
  `id_pricelist` int(11) NOT NULL,
  `nama_pricelist` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `linkfoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pricelist`
--

INSERT INTO `pricelist` (`id_pricelist`, `nama_pricelist`, `harga`, `linkfoto`) VALUES
(1, 'Fast', 35000, '../img/deep.jpg'),
(2, 'Fast Clean', 25000, '../img/fast.jpg'),
(3, 'Hard Clean', 45000, '../img/hard.jpg'),
(4, 'Premium Clean', 50000, '../img/premium.jpg'),
(5, 'Unyellowing', 20000, '../img/unyellowing.jpg'),
(6, 'Recolour White', 40000, '../img/white.jpg'),
(7, 'Recolour Black', 40000, '../img/black.jpg'),
(8, 'Polish-Leather', 35000, '../img/polish.jpg'),
(9, 'Reglue', 20000, '../img/reglue.jpg'),
(10, 'Depth Hard', 100000, '../img/hard.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`),
  ADD KEY `fk_admin` (`id_admin`),
  ADD KEY `fk_cust` (`id_cust`),
  ADD KEY `fk_pricelist` (`id_pricelist`);

--
-- Indeks untuk tabel `pricelist`
--
ALTER TABLE `pricelist`
  ADD PRIMARY KEY (`id_pricelist`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cust` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pricelist`
--
ALTER TABLE `pricelist`
  MODIFY `id_pricelist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `fk_cust` FOREIGN KEY (`id_cust`) REFERENCES `customer` (`id_cust`),
  ADD CONSTRAINT `fk_pricelist` FOREIGN KEY (`id_pricelist`) REFERENCES `pricelist` (`id_pricelist`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
