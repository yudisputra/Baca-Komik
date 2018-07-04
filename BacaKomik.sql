-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2018 at 04:50 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bacakomik`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `idchapter` int(11) NOT NULL,
  `judulchapter` varchar(255) NOT NULL,
  `volchapter` int(11) NOT NULL,
  `fk_idkomik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`idchapter`, `judulchapter`, `volchapter`, `fk_idkomik`) VALUES
(1, 'His Name Is Naruto', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `komik`
--

CREATE TABLE `komik` (
  `idkomik` int(11) NOT NULL,
  `namakomik` varchar(255) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `ringkasan` text NOT NULL,
  `cover` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komik`
--

INSERT INTO `komik` (`idkomik`, `namakomik`, `pengarang`, `status`, `ringkasan`, `cover`) VALUES
(1, 'Naruto', 'Kishimoto Masashi', 'Belum Tamat', '', 'naruto.jpg'),
(2, 'Bleach', 'Kubo Tite', 'Belum Tamat', '', ''),
(3, 'Detektif Conan', 'Gosho Aoyama. ', 'Belum Tamat', 'Belum Diisi', 'conan.jpg'),
(4, 'Attack on Titan', 'Hajime Isayama', 'Belum Tamat', 'Di suatu zaman yang tidak diketahui, umat manusia hampir punah karena sebagian dari umat manusia dimangsa oleh sebuah makhluk yang bernama Titan. Titan itu sendiri sebenarnya adalah manusia yang bisa berubah wujud menjadi raksasa berkat Ymir, nenek moyang mereka yang melakukan perjanjian dengan iblis. Setelah kematian Ymir, kekuatan semua titan yang ada dalam diri Ymir terpecah jadi 9 titan. Keturunan Ymir semuanya bisa menjadi raksasa, tersambung nasib dan memorinya dan dinamakan Suku Ymir, dan mendirikan negara bernama Eldia. Walau akhirnya mereka menjauh dari peradaban dan mengasingkan diri ke Pulau Paradis, mendirikan tembok besar dan mengurung diri di dalam tembok. Raja mencuci otak seluruh suku Ymir sehingga mereka mengira umat manusia telah punah kecuali mereka. Suku selain Ymir yang ikut ke dalam tembok tidak ikut tercuci otaknya. Umat manusia yang tersisa bertahan hidup di dalam sebuah daerah yang dikelilingi oleh tiga lapis tembok yang bernama (dimulai dari yang terluar) Tembok Maria, Tembok Rose, dan Tembok Sina, masing-masing tembok memiliki tinggi sekitar 50 meter yang tak mungkin diraih Titan yang hanya memiliki tinggi maksimal 15m. Pada tahun 845, terjadi suatu hal yang mengejutkan, tiada angin tiada hujan tiba tiba muncul seorang Titan yang bertinggi 60m Titan itu adalah Titan Kolosal. Dengan mudahnya Titan Kolosal menghancurkan pintu yang berada pada Tembok Maria yang menyebabkan banyak Titan yang bertinggi 8-15m bisa masuk ke dalam Tembok Maria dengan mudah, Hal ini menyebabkan penduduk Tembok Maria harus mengungsi ke wilayah Tembok Rose.', 'aot.jpg'),
(5, 'Hunter x Hunter', 'Yoshihiro Tagashi', 'Belum Tamat', 'Hunter × Hunter (????×???? Hant? Hant?) adalah serial manga karya Yoshihiro Togashi, yang bercerita tentang anak laki-laki berusia 12 tahun bernama Gon Freecss, dan usahanya untuk menemukan ayahnya, Ging Freecss. Ging adalah seorang Hunter, yang dalam cer', ''),
(6, 'Nisekoi', 'Naoshi Komi', 'Belum Tamat', 'Nisekoi (????) adalah sebuah serial manga Jepang karya Naoshi Komi, yang mengisahkan tentang Raku Ichij?, seorang putra pemimpin yakuza, yang terpaksa harus berpacaran dengan putri pemimpin gangster untuk menghindari perang geng. Berawal dari sebuah One-s', 'Nisekoi_Volume_1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`idchapter`),
  ADD KEY `fk_idkomik` (`fk_idkomik`);

--
-- Indexes for table `komik`
--
ALTER TABLE `komik`
  ADD PRIMARY KEY (`idkomik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `idchapter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komik`
--
ALTER TABLE `komik`
  MODIFY `idkomik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chapter`
--
ALTER TABLE `chapter`
  ADD CONSTRAINT `chapter_ibfk_1` FOREIGN KEY (`fk_idkomik`) REFERENCES `komik` (`idkomik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
