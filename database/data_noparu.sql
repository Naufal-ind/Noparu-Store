-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2023 pada 04.50
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_noparu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_form`
--

CREATE TABLE `user_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'naufal_indw', 'naufalindw@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(2, 'noparu', 'naufalindiarto17@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(3, 'Naofumi', 'fallbayroin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(4, 'Kamijou Touma', 'fallbayroin@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'user'),
(5, 'liam', 'liam@gmail.com', 'fad0ddeaf893ff0497d5da12db264526', 'user'),
(6, 'Rani Rahmawati', 'ranri@gmail.com', '7aa676a6a96b04ab5b7b8ca0107e5f79', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
