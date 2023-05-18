-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2023 pada 08.39
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokohp_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `smartphone`
--

CREATE TABLE `smartphone` (
  `id` int(11) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `ram` int(11) NOT NULL,
  `internal` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `smartphone`
--

INSERT INTO `smartphone` (`id`, `tipe`, `merk`, `ram`, `internal`, `harga`, `gambar`) VALUES
(1, 'Samsung Galaxy A34', 'Somsang', 8, 128, 4999000, 'samsung-galaxy-a34.jpg'),
(2, 'Samsung Galaxy A54', 'Samsung', 8, 128, 5999000, 'samsung-galaxy-a54.jpg'),
(3, 'Samsung Galaxy S23', 'Samsung', 8, 128, 12999000, 'samsung-galaxy-s23.jpg'),
(4, 'Google Pixel 5', 'Google Pixel', 8, 128, 7999000, 'google-pixel-5.jpg'),
(5, 'Google Pixel 6', 'Google Pixel', 6, 128, 8999000, 'google-pixel-6.jpg'),
(6, 'Google Pixel 7', 'Google Pixel', 8, 256, 14999000, 'google-pixel-7.jpg'),
(7, 'Asus Zenfone 9', 'Asus', 8, 256, 11999000, 'asus-zenfone-9.jpg'),
(8, 'Asus ROG Phone 5', 'Asus', 8, 256, 15999000, 'asus-rog-phone-5.jpg'),
(9, 'Asus ROG Phone 6', 'Asus', 8, 256, 16999000, 'asus-rog-phone-6.jpg'),
(10, 'Apple Iphone 12 Pro', 'Apple Iphone', 4, 128, 16999000, 'apple-iphone-12-pro.jpg'),
(11, 'Apple Iphone 13 Pro', 'Apple Iphone', 6, 128, 18999000, 'apple-iphone-13-pro.jpg'),
(12, 'Apple Iphone 14 Plus', 'Apple Iphone', 4, 128, 20999000, 'apple-iphone-14-pro.jpg'),
(17, 'Apple iPhone 11 Pro', 'Apple Iphone', 4, 128, 9999000, '64311e9792015.jpg'),
(24, 'Samsung Galaxy S22 ', 'Samsung', 8, 256, 9499999, '645de1b3a7fe7.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'admin', '$2y$10$jhI4fCgKPRWFzsng14yVuOjvO/b2b9E0Vi2QqJqb9649czp0i8tQG'),
(4, 'ilkha', '$2y$10$LsqnYfR4BxsVem.qWvF0OuzMnKtppfUFTSiJPLEnxpR.os2jElFHq'),
(5, 'syahrul', '$2y$10$6pJCF89Q.42p3bTp35.PauIP7F/uBaN4woA6gkoHgM6Tv5GhF7KZK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `smartphone`
--
ALTER TABLE `smartphone`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `smartphone`
--
ALTER TABLE `smartphone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
