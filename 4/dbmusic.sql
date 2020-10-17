-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2020 at 04:18 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmusic`
--

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `name_genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `name_genre`) VALUES
(1, 'Rock'),
(2, 'Pop'),
(4, 'Metal');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id_music` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `durasi` varchar(20) NOT NULL,
  `id_genre` int(11) NOT NULL,
  `id_singers` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id_music`, `title`, `durasi`, `id_genre`, `id_singers`, `photo`, `deskripsi`) VALUES
(1, 'Before You Go', '3:36', 2, 2, 'Lewis_Capaldi.png', '" Before You Go " adalah lagu oleh penyanyi-penulis lagu Skotlandia Lewis Capaldi , dirilis sebagai single dari edisi diperpanjang album studio debutnya Divinely Uninspired to a Hellish Extent pada 19 November 2019. Lagu itu tersedia setelah pemesanan di muka edisi diperpanjang. [1] Lagu itu dikirim ke stasiun radio AS pada 6 Januari 2020 sebagai single AS keduanya. Album ini mencapai nomor satu di Irish Singles Chart pada November 2019 dan UK Singles Chart pada Januari 2020, menjadi puncak tangga lagu kedua Capaldi di Inggris dan ketiga di Irlandia.'),
(2, 'Stairway to Heaven', '8:03', 1, 3, 'Stairwaytoheaven.jpg', '"Stairway to Heaven" adalah sebuah lagu oleh band rock band Led Zeppelin dari Inggris. Lagu ini dikarang oleh gitaris Jimmy Page dan penyanyi Robert Plant untuk album studio keempat band tersebut, Led Zeppelin IV. Stairway to Heaven dipilih sebagai lagu no. 3 pada tahun 2000 oleh VH1 dalam daftar mereka, 100 Lagu Terbesar.'),
(3, 'Welcome to the Family', '14::43', 4, 4, 'Welcom_to_the_Family.jpg', 'Welcome to the Family adalah album EP kedua dari band Amerika Serikat, Avenged Sevenfold. Album ini dirilis pada tanggal 21 Desember 2010. Album ini berisi lagu yaitu "Welcome to the Family", "4:00 AM", "Seize the Day (Live in Seattle)". Salah satu lagu, yaitu "4:00 AM" dijual di Amazon.com[1]. ');

-- --------------------------------------------------------

--
-- Table structure for table `singers`
--

CREATE TABLE `singers` (
  `id_singers` int(11) NOT NULL,
  `name_singers` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `singers`
--

INSERT INTO `singers` (`id_singers`, `name_singers`) VALUES
(1, 'Adam Levine'),
(2, 'Lewis Capaldi'),
(3, 'Led Zeppelin'),
(4, 'Avenged Sevenfold');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id_music`);

--
-- Indexes for table `singers`
--
ALTER TABLE `singers`
  ADD PRIMARY KEY (`id_singers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id_music` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `singers`
--
ALTER TABLE `singers`
  MODIFY `id_singers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
