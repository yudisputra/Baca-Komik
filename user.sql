-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 02:31 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `namauser` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `fotoprofile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `namauser`, `password`, `nickname`, `email`, `gender`, `tanggalLahir`, `fotoprofile`) VALUES
(1, 'Yudistira Eka Putra', 'f6441d3ffe756334505c5d2a0bfe5f9e', 'AdminYudis', '', '', '0000-00-00', ''),
(2, 'refly_ilham', '202cb962ac59075b964b07152d234b70', 'FlyFly', 'darkside988@gmail.com', 'Laki-laki', '1997-12-22', ''),
(3, 'dalang_pelo', '81dc9bdb52d04dc20036dbd8313ed055', 'Dalang Pelo', 'dalangpelo@gmail.com', 'laki-laki', '1996-12-12', ''),
(4, 'melondoto', 'ab4faaf4ef042009aca229972ee3c6be', 'MelonMoba', 'melondoto@gmail.com', 'Laki-laki', '1989-12-01', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
