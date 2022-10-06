-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Okt 2022 pada 17.39
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_b_203040107`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(100) NOT NULL,
  `judul_buku` varchar(600) NOT NULL,
  `penulis` varchar(500) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul_buku`, `penulis`, `tahun_terbit`, `gambar`) VALUES
(1, 'Bulan', 'Tere Liye', 2015, 'bulan.jpg'),
(2, 'Bumi', 'Tere Liye', 2014, 'bumi.jpg'),
(3, 'Hujan', 'Tere Liye', 2016, 'hujan.jfif'),
(4, 'Komet', 'Tere Liye', 2018, 'komet.jfif'),
(5, 'Matahari', 'Tere Liye', 2016, 'matahari.jfif'),
(6, 'Pergi', 'Tere Liye', 2018, 'pergi.jfif'),
(7, 'Pulang', 'Tere Liye', 2015, 'pulang.jpg'),
(8, 'Selena', 'Tere Liye', 2020, 'selena.jfif'),
(9, 'Si Anak Badai', 'Tere Liye', 2018, 'si anak badai.jfif'),
(10, 'Si Anak Pintar', 'Tere Liye', 2018, 'si anak pintar.jfif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
