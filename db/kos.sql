-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2024 pada 19.42
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
-- Database: `kos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123'),
(2, 'admin1', '12345678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kos`
--

CREATE TABLE `data_kos` (
  `id_kos` int(11) NOT NULL,
  `untuk` varchar(10) NOT NULL,
  `namakos` varchar(50) NOT NULL,
  `alamatkos` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `jumlahkamar` int(11) NOT NULL,
  `luas` varchar(10) NOT NULL,
  `km` varchar(10) NOT NULL,
  `kasur` varchar(50) NOT NULL,
  `tv` varchar(10) NOT NULL,
  `ac` varchar(10) NOT NULL,
  `gambar_kos` varchar(225) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `data_kos`
--

INSERT INTO `data_kos` (`id_kos`, `untuk`, `namakos`, `alamatkos`, `harga`, `jumlahkamar`, `luas`, `km`, `kasur`, `tv`, `ac`, `gambar_kos`, `username`) VALUES
(8, 'Laki-Laki', 'Kos Oplosan', 'Jalan Bima 1 no 45', '2 jt', 8, '3x3', 'Luar', 'Ono Tinggine', 'Ada', 'Ada', 'https://papikost.com/images/property/713_302746617.jpg', 'Erwin24'),
(9, 'Laki-Laki', 'Kos Keep Smile', 'Jalan Nakula no 5', '1 jt', 5, '3x3', 'Luar', 'Ono Tinggine', 'Tidak', 'Tidak', 'https://papikost.com/images/property/478_968253603.jpg', 'Erwin24'),
(10, 'Perempuan', 'Kos Idola', 'Jalan Nakula no 6', '3 jt', 6, '3x3', 'Luar', 'Springbed', 'Tidak', 'Tidak', 'https://papikost.com/images/property/1159_419404414.jpg', 'AgungCemungut'),
(11, 'Perempuan', 'Kos Mantap', 'Jalan Arjuna no 40', '1 jt', 4, '3x3', 'Luar', 'Ono Tinggine', 'Tidak', 'Tidak', 'https://papikost.com/images/property/45_194510566.jpg', 'Sofia'),
(12, 'Laki-Laki', 'Kos Larang', 'Jalan Sadewa no 3', '4 jt', 12, '3x3', 'Luar', 'Ambrol', 'Tidak', 'Tidak', 'https://papikost.com/images/property/154_918860465.jpg', 'Erga'),
(13, 'Laki-Laki', 'Oplosan Versi Baru', 'Jalan Nakula Raya no 46', '2 jt', 5, '3x3', 'Dalam', 'Springbed', 'Ada', 'Tidak', 'https://papikost.com/images/property/191_372771292.jpg', 'Erwin24'),
(14, 'Perempuan', 'Kos Bang Jali', 'Jalan Arjuna no 23', '1 jt', 20, '4x3', 'Dalam', 'Ono Tinggine', 'Ada', 'Ada', 'https://papikost.com/images/property/202_111191244.jpg', 'fadhelunyu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_order`
--

CREATE TABLE `data_order` (
  `id_order` int(11) NOT NULL,
  `id_kos` int(11) NOT NULL,
  `namapemesan` varchar(50) NOT NULL,
  `alamatpemesan` varchar(50) NOT NULL,
  `telppemesan` varchar(12) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `data_order`
--

INSERT INTO `data_order` (`id_order`, `id_kos`, `namapemesan`, `alamatpemesan`, `telppemesan`, `comment`, `waktu`) VALUES
(6, 8, 'Paiman', 'Semarang', '08995212356', 'aku pesen yang ini bos', '2014-01-01 17:17:16'),
(7, 8, 'Fadhel', 'Semarang', '08995212334', 'aku sing iki wae yo bro, tutupen botolmu tutupen oplosanmu', '2014-01-02 13:03:51'),
(8, 8, 'agung', 'puspogiwang', '079868547', 'pak, saya pesan yang ini... terimakasih', '2014-01-02 13:50:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tempatl` varchar(50) NOT NULL,
  `tanggall` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `nama`, `username`, `password`, `tempatl`, `tanggall`, `alamat`, `notelp`, `email`) VALUES
(1, 'Agung Rachmatullah', 'AgungCemungut', 'agung', 'Semarang', '2003-12-16', 'Jalan Nakulo Semarang', '085740123456', 'agung@yahoo.com'),
(4, 'Erwin Rizki', 'ad', 'admin', 'Rembang', '2013-07-24', 'Lasem Rembang', '085740123456', 'erwinrizki24@gmail.com'),
(5, 'Erga Aprina Sari', 'Erga', 'erga', 'Semarang', '1993-12-18', 'Jalan Nakulo', '085724222333', 'erga@gmail.com'),
(6, 'Sofia Listyaningrum', 'Sofia', 'oplosan', 'Semarang', '1993-10-12', 'Jalan Arjuna no 41', '089922345123', 'sofia@gmail.com'),
(8, 'niam', 'iam', '123', 'jepara', '2014-01-06', 'jepara', '085675764758', 'niam@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kos`
--
ALTER TABLE `data_kos`
  ADD PRIMARY KEY (`id_kos`);

--
-- Indeks untuk tabel `data_order`
--
ALTER TABLE `data_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_kos`
--
ALTER TABLE `data_kos`
  MODIFY `id_kos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `data_order`
--
ALTER TABLE `data_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
