-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2018 at 03:41 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `idchapter` int(11) NOT NULL,
  `judulchapter` varchar(255) NOT NULL,
  `volchapter` int(11) NOT NULL,
  `tanggalrilis` date NOT NULL,
  `jum` int(11) NOT NULL,
  `fk_idkomik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`idchapter`, `judulchapter`, `volchapter`, `tanggalrilis`, `jum`, `fk_idkomik`) VALUES
(1, 'His Name Is Naruto', 1, '2007-10-19', 0, 1),
(2, 'Sang Pencabut Nyawa', 1, '2007-10-14', 0, 2),
(3, 'Holmes Jaman Heisei', 1, '2007-10-16', 0, 3),
(4, 'Untuk Dirimu 2000 tahun lagi', 1, '2011-01-24', 0, 4),
(5, 'Hari Keberangkatan', 1, '2007-10-17', 0, 5),
(6, 'Janji', 1, '2011-11-06', 0, 6),
(7, 'Konohamaru!', 2, '2007-10-19', 0, 1),
(8, 'Uchiha Sasuke', 3, '2007-10-19', 0, 1),
(9, 'Hatake Kakashi', 4, '2007-10-19', 0, 1),
(10, 'Kecerobohan adalah musuh terbesarmu', 5, '2007-10-19', 0, 1),
(11, 'Permulaan', 2, '2007-10-14', 0, 2),
(12, 'Orihime Inoue', 3, '2007-10-14', 0, 2),
(13, 'Detektif yang mengecil', 2, '2007-10-16', 0, 3),
(14, 'Detektif yang tak berguna', 3, '2007-10-16', 0, 3),
(15, 'Di Hari Itu', 2, '2011-01-24', 0, 4),
(16, 'Malam Perpisahan', 3, '2011-01-24', 0, 4),
(17, 'Di Dalam Badai', 2, '2007-10-17', 0, 5),
(18, 'Pertanyaan Terakhir', 3, '2007-10-17', 0, 5),
(19, 'Pertanyaan', 2, '2011-11-12', 0, 6),
(20, 'Yang Pertama', 3, '2011-11-22', 0, 6),
(21, 'Di Hamparan Sakura', 1, '2018-06-26', 81, 7),
(22, 'Si Gadis dan Kucing Biru', 2, '2018-07-03', 47, 7),
(23, 'Para Petualang', 3, '2018-07-10', 29, 7),
(24, 'The Seven Deadly Sins ( 7 Dosa Mematikan )', 1, '2012-10-24', 57, 8),
(25, 'Yakumo-san Mengajak Makan', 1, '2016-12-12', 40, 9),
(26, 'Yakumo-san Membeli Rice Cooker', 2, '2016-12-13', 26, 9);

-- --------------------------------------------------------

--
-- Table structure for table `favorit`
--

CREATE TABLE `favorit` (
  `iduser` int(25) NOT NULL,
  `idkomik_favorite` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorit`
--

INSERT INTO `favorit` (`iduser`, `idkomik_favorite`) VALUES
(1, 7),
(1, 6),
(2, 7);

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
  `tanggalkomik` date NOT NULL,
  `cover` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komik`
--

INSERT INTO `komik` (`idkomik`, `namakomik`, `pengarang`, `status`, `ringkasan`, `tanggalkomik`, `cover`) VALUES
(1, 'Naruto', 'Kishimoto Masashi', 'Belum Tamat', 'Cerita dimulai ketika seekor monster rubah ekor sembilan atau disebut Kyuubi menyerang Konoha, sebuah desa shinobi yang terletak di negara Api. Kekacauan terjadi di desa Konoha dan korban banyak berjatuhan. Akhirnya ada seseorang yang berhasil melenyapkan Kyuubi dengan menyegel sebagian chakra Kyuubi itu ke tubuhnya sendiri dan sisanya disegel ke tubuh Naruto, orang yang berhasil menyegel monster rubah ekor sembilan itu dikenal sebagai Yondaime Hokage, Hokage ke-4 atau Minato Namikaze yang tidak lain adalah ayah dari Naruto. Penyegelan itu menggunakan jurus Dewa Kematian sehingga risikonya adalah kematian Hokage ke-4 sendiri. Dua belas tahun kemudian, diceritakan seorang anak bernama Naruto Uzumaki yang sering membuat onar di desa Konoha. Naruto melakukan hal itu karena menginginkan perhatian dari penduduk desa yang menjauhinya karena rubah di tubuhnya atau disebut sebagai wadah monster berekor atau Jinchuuriki. Naruto tidak mengetahui hal itu, karena Hokage ke-3 melarang penduduk desa Konoha menceritakan serangan Kyuubi tersebut.', '0000-00-00', 'naruto.jpg'),
(2, 'Bleach', 'Kubo Tite', 'Belum Tamat', 'Bleach bercerita tentang Ichigo Kurosaki, seorang pelajar SMA yang memiliki kemampuan untuk melihat roh, dan juga Rukia Kuchiki, seorang shinigami (dewa kematian) yang pada suatu hari bertemu dengan Ichigo sewaktu sedang memburu roh jahat yang disebut hollow. Pada saat Rukia bertarung melawan hollow tersebut, ia terluka dan oleh sebab itu ia tidak memiliki jalan lain selain memindahkan kekuatan shinigami-nya kepada Ichigo. Sejak saat inilah petualangan Ichigo dan Rukia dimulai.Mereka berdua bertualang mencari dan melawan para hollow dan melaksanakan ritual konsou untuk para arwah gentayangan. Dengan ritual ini, para arwah gentayangan menerima pembersihan dan mereka dapat dikirim ke Soul Society (Masyarakat Roh). Bagian awal dari cerita ini difokuskan kepada karakter-karakter dan masa lalu mereka, dan bukan terfokus pada dunia pekerjaan shinigami. Seiring jalannya cerita, hal-hal seperti kehidupan shinigami di Soul Society mulai terungkap sedikit demi sedikit.Serial anime Bleach ditayangkan setiap hari Rabu di stasiun televisi TV Tokyo dan juga stasiun-stasiun yang terafiliasi.Serial ini diproduseri oleh TV Tokyo, Dentsu, dan Studio Pierrot, dan disutradarai oleh Noriyuki Abe.\r\n', '0000-00-00', 'bleach.jpg'),
(3, 'Detektif Conan', 'Gosho Aoyama. ', 'Belum Tamat', 'Shinichi Kudo, detektif siswa SMA yang memiliki kemampuan dalam menganalisa kasus-kasus kriminal sehingga disebut sebagai Penyelamat Kepolisian Jepang. Namun ia terkena suatu masalah besar ketika tiba-tiba dirinya menjadi mengecil setelah meminum obat misterius (yang kemudian diketahui adalah racun berkode APTX 4869) yang dicekoki oleh sepasang pria berjubah hitam misterius dengan codename Gin dan Vodka. Saat kejadian itu Shinichi dan Ran Mouri sedang berkencan di Tropical Land, kemudian Shinichi bertemu dengan dua orang yang mencurigakan, dan Shinichi pun membuntuti mereka, karena keasyikan mengintip transaksi gelap yang dilakukan Vodka dengan seorang usahawan, tanpa sadar Shinichi dipukul oleh Gin, dan dicekoki obat misterius yang dimaksud untuk membunuh Shinichi.Namun ternyata obat tersebut tidak membunuh Shinichi, melainkan terjadi efek samping dari obat tersebut yang mengakibatkan tubuhnya mengecil seperti bocah berusia tujuh tahun.Shinichi, kemudian atas saran dari Profesor Agasa, mengganti namanya menjadi Conan Edogawa, (nama Conan berdasarkan tulisan romaji dari pengarang buku detektif terkenal Sherlock Holmes, Sir Arthur Conan Doyle, dan Edogawa Ranpo) mulai mencari tahu seluk beluk lelaki organisasi misterius tersebut, pada akhirnya Conan tinggal rumah teman sejak kecilnya, Ran Mouri yang tidak mengetahui jati diri sang detektif.', '0000-00-00', 'conan.jpg'),
(4, 'Attack on Titan', 'Hajime Isayama', 'Belum Tamat', 'Di suatu zaman yang tidak diketahui, umat manusia hampir punah karena sebagian dari umat manusia dimangsa oleh sebuah makhluk yang bernama Titan. Titan itu sendiri sebenarnya adalah manusia yang bisa berubah wujud menjadi raksasa berkat Ymir, nenek moyang mereka yang melakukan perjanjian dengan iblis. Setelah kematian Ymir, kekuatan semua titan yang ada dalam diri Ymir terpecah jadi 9 titan. Keturunan Ymir semuanya bisa menjadi raksasa, tersambung nasib dan memorinya dan dinamakan Suku Ymir, dan mendirikan negara bernama Eldia. Walau akhirnya mereka menjauh dari peradaban dan mengasingkan diri ke Pulau Paradis, mendirikan tembok besar dan mengurung diri di dalam tembok. Raja mencuci otak seluruh suku Ymir sehingga mereka mengira umat manusia telah punah kecuali mereka. Suku selain Ymir yang ikut ke dalam tembok tidak ikut tercuci otaknya. Umat manusia yang tersisa bertahan hidup di dalam sebuah daerah yang dikelilingi oleh tiga lapis tembok yang bernama (dimulai dari yang terluar) Tembok Maria, Tembok Rose, dan Tembok Sina, masing-masing tembok memiliki tinggi sekitar 50 meter yang tak mungkin diraih Titan yang hanya memiliki tinggi maksimal 15m. Pada tahun 845, terjadi suatu hal yang mengejutkan, tiada angin tiada hujan tiba tiba muncul seorang Titan yang bertinggi 60m Titan itu adalah Titan Kolosal. Dengan mudahnya Titan Kolosal menghancurkan pintu yang berada pada Tembok Maria yang menyebabkan banyak Titan yang bertinggi 8-15m bisa masuk ke dalam Tembok Maria dengan mudah, Hal ini menyebabkan penduduk Tembok Maria harus mengungsi ke wilayah Tembok Rose.', '0000-00-00', 'aot.jpg'),
(5, 'Hunter x Hunter', 'Yoshihiro Tagashi', 'Belum Tamat', 'Hunter x hunter adalah film anime serial , yang menceritakan tentang hunter , hunter adalah seseorang yang mempunyai kekuatan ten , ren , zatsu , hatsu jika 4 kekuatan itu digabungkan akan menjadi nen , seseorang dikatakan hunter secara resmi dikarnakan mempunyai lisensi hunter di anime ini menceritakan tentang anak kecil yang bernama gon yang mempunyai cita-cita menjadi pro hunter seperti ayahnya ging yang sudah menjadi pro hunter , saat petualangannya dimulai gon bertemu teman yaitu kurapika dari klan kurtaa dan leorio yang bercita-cita menjadi hunter dokter Saat dimulai nya ujian hunter gon bertemu teman lagi yaitu killua ia adalah anak dari pemburu bayaran yang tinggal di gunung tetapi gon belum menyadarinya , saat setelah lulus ujian hunter mereka ber empat gon , killua , kurapika , leorio melanjutkan petualangan mereka sebagai hunter Gon berencana mencari ayahnya apapun yang terjadi killia berencana mengikuti gon apapun alasannya kurapika berencana membunuh semua anggota genei ryodan\r\nleorio berencana menjadi dokter.', '0000-00-00', 'hxh.jpg'),
(6, 'Nisekoi', 'Naoshi Komi', 'Belum Tamat', 'Nisekoi (????) adalah sebuah serial manga Jepang karya Naoshi Komi, yang mengisahkan tentang Raku Ichij?, seorang putra pemimpin yakuza, yang terpaksa harus berpacaran dengan putri pemimpin gangster untuk menghindari perang geng. Berawal dari sebuah One-s', '0000-00-00', 'Nisekoi_Volume_1.jpg'),
(7, 'Eden Zero', 'Hiro Mashima', 'Belum Tamat', 'Eden''s Zero, sebuah komik fantasy dimana robot memiliki kesadaran layaknya manusia. Rebecca, seorang gading yang berpetualang suatu hari sampai di sebuah kerajaan bernama Kerajaan Granbell. Sudah 100 tahun sejak manusia terakhir datang di kerajaan tersebut. Hampir semua penduduk dikerajaan itu adalah robot, kecuali seorang anak bernama Shiki. Suatu hari, semua robot di kerajaan Grandbell berniat untuk membunuh Rebecca, apakah yang akan terjadi berikutnya?', '0000-00-00', 'Edens-Zero.jpg'),
(8, 'Nanatsu No Taizai', 'Suzuki Nakaba', 'Ongoing', 'Pada awal cerita manga ini ialah seorang putri Elizabeth yang kabur dari istana dengan harapan menemukan anggota dari Nanatsu no Taizai. Putri Elizabeth melihat perlakuan Ksatria Suci yang keterlaluan dan menyimpulkan bahwa pengkhianatan yang dilakukan oleh Nanatsu no Taizai dahulu ialah kebohongan yang dibuat oleh Ksatria Suci. Setelah bertualang sendirian dengan memakai pakaian Zirah, Elizabeth akhirnya pinsan di sebuat kedai milik seorang lelaki pendek dengan peliaraan babinya yang bisa berbicara.', '2012-10-23', 'nanatsu1.png'),
(9, 'Yakumo-san wa Ezuke ga Shitai', 'Satomi U', 'Ongoing', 'Bercerita tentang kehidupan seorang janda yang suka memberi makan tetangganya', '2016-12-12', 'yakumo.jpg');

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
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`idchapter`);

--
-- Indexes for table `komik`
--
ALTER TABLE `komik`
  ADD PRIMARY KEY (`idkomik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `idchapter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `komik`
--
ALTER TABLE `komik`
  MODIFY `idkomik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
