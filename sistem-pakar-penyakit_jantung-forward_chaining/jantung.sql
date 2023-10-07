-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 11:24 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jantung`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `idGejala` int(5) NOT NULL,
  `kodeGejala` varchar(100) NOT NULL,
  `gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`idGejala`, `kodeGejala`, `gejala`) VALUES
(1, 'P001', 'nyeri dada'),
(2, 'P002', 'bahu kiri terasa tidak enak'),
(3, 'P003', 'keringat dingin'),
(4, 'P004', 'sesak nafas'),
(5, 'P005', 'gangguan pencernaan'),
(6, 'P006', 'mual'),
(7, 'P007', 'detak jantung tidak teratur'),
(8, 'P008', 'pusing'),
(9, 'P009', 'kaki bengkak'),
(10, 'P010', 'jantung berdebar-debar'),
(11, 'P011', 'mudah lelah\r\n'),
(12, 'P012', 'nyeri didaerah dada tengah'),
(13, 'P013', 'mudah berkeringat'),
(14, 'P014', 'dada mengencang'),
(15, 'P015', 'pembengkakan pada jantung'),
(16, 'P016', 'kelainan fungsi jantung'),
(17, 'P017', 'pendarahan dari hidung'),
(18, 'P018', 'wajah kemerahan'),
(19, 'P019', 'batuk'),
(20, 'P020', 'sakit perut'),
(21, 'P021', 'detak jantung cepat'),
(22, 'P022', 'nyeri didaerah lengan kiri'),
(23, 'P023', 'punggung terasa tidak enak'),
(24, 'P024', 'sakit kepala');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(5) NOT NULL,
  `kodePenyakit` varchar(100) NOT NULL,
  `namaPenyakit` varchar(100) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `kodePenyakit`, `namaPenyakit`, `solusi`) VALUES
(1, 'R01', 'jantung koroner', 'Berhenti merokok, Mengurangi atau berhenti, mengonsumsi minuman beralkohol, Mengonsumsi makanan bergizi lengkap dan seimbang, Mengelola stres dengan baik, Menjaga berat badan ideal, Berolahraga secara teratur'),
(2, 'R02', 'penyakit otot jantung', 'Untuk meningkatkan sirkulasi darah dan memperkuat jantung, lakukan latihan fisik atau olahraga secara teratur. Olahraga rutin dibarengi dengan pola akan sehat juga dapat membantu menjaga berat badan ideal. Konsultasikan dengan dokter Anda mengenai program olahraga yang cocok sesuai kondisi fisik Anda.'),
(3, 'R03', 'penyakit jantung iskemik', 'Iskemia dapat dicegah dengan menghindari risiko terjadinya aterosklerosis. Pencegahan tersebut berupa perubahan gaya hidup, seperti: Mengonsumsi makanan sehat, bergizi lengkap, dan seimbang'),
(4, 'R04', 'gagal jantung', 'Terlibat dalam olahraga teratur setiap hari, Berhenti merokok, Mengobati tekanan darah tinggi dengan obat-obatan seperti beta blocker, diet rendah sodium, dan gaya hidup aktif, Menurunkan kadar kolesterol, Tidak minum alkohol atau menggunakan narkoba.'),
(5, 'R05', 'penyakit jantung hipertensi', 'memeriksa tekanan darah secara teratur; menjaga berat badan ideal; mengurangi konsumsi garam; jangan merokok; berolahraga secara teratur; hidup secara teratur; mengurangi stress; jangan terburu-buru; dan menghindari makanan berlemak.'),
(6, 'R06', 'penyakit katup jantung', 'Belum ada pengobatan penyakit katup jantung yang tepat untuk menyembuhkan gangguan jantung ini. Namun, perubahan gaya hidup dan bantuan obat mampu membantu mengobati gejalanya dan memperpanjang jangka hidup'),
(7, 'R07', 'kardiomegali atau jantung hipertrofik', 'Untuk mengatasi kardiomegali yang disebabkan oleh tekanan darah tinggi atau gagal jantung, dokter jantung dapat meresepkan obat ACE inhibitors, seperti captopril, atau obat penghambat beta (beta blockers), seperti bisoprolol');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `id` int(5) NOT NULL,
  `P001` tinyint(1) DEFAULT NULL,
  `P002` tinyint(1) DEFAULT NULL,
  `P003` tinyint(1) DEFAULT NULL,
  `P004` tinyint(1) DEFAULT NULL,
  `P005` tinyint(1) DEFAULT NULL,
  `P006` tinyint(1) DEFAULT NULL,
  `P007` tinyint(1) DEFAULT NULL,
  `P008` tinyint(1) DEFAULT NULL,
  `P009` tinyint(1) DEFAULT NULL,
  `P010` tinyint(1) DEFAULT NULL,
  `P011` tinyint(1) DEFAULT NULL,
  `P012` tinyint(1) DEFAULT NULL,
  `P013` tinyint(1) DEFAULT NULL,
  `P014` tinyint(1) DEFAULT NULL,
  `P015` tinyint(1) DEFAULT NULL,
  `P016` tinyint(1) DEFAULT NULL,
  `P017` tinyint(1) DEFAULT NULL,
  `P018` tinyint(1) DEFAULT NULL,
  `P019` tinyint(1) DEFAULT NULL,
  `P020` tinyint(1) DEFAULT NULL,
  `P021` tinyint(1) DEFAULT NULL,
  `P022` tinyint(1) DEFAULT NULL,
  `P023` tinyint(1) DEFAULT NULL,
  `P024` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`id`, `P001`, `P002`, `P003`, `P004`, `P005`, `P006`, `P007`, `P008`, `P009`, `P010`, `P011`, `P012`, `P013`, `P014`, `P015`, `P016`, `P017`, `P018`, `P019`, `P020`, `P021`, `P022`, `P023`, `P024`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
(2, 0, 0, 0, 1, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(4, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0),
(6, 1, 0, 0, 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(7, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`idGejala`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `idGejala` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
