-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2023 at 02:02 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcucikendaraan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `idPegawai` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `JK` enum('l','p') NOT NULL,
  `Alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`idPegawai`, `Nama`, `JK`, `Alamat`) VALUES
(1, 'Rafie Pradipta', 'l', 'Bojong Depok Baru');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE `tblcustomer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `alamat` varchar(25) DEFAULT NULL,
  `nomor_plat` varchar(20) DEFAULT NULL,
  `id_mobil` int(11) DEFAULT NULL,
  `id_motor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`id_customer`, `nama`, `no_hp`, `alamat`, `nomor_plat`, `id_mobil`, `id_motor`) VALUES
(1, 'Rafie Pradipta', '085693405490', 'Bojong Depok Baru', 'F 1697 KO', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbljeniscuci`
--

CREATE TABLE `tbljeniscuci` (
  `id_jeniscucian` int(11) NOT NULL,
  `jenis_cucian` varchar(20) DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbljeniscuci`
--

INSERT INTO `tbljeniscuci` (`id_jeniscucian`, `jenis_cucian`, `biaya`) VALUES
(1, 'Cuci Ekstra', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `tblmobil`
--

CREATE TABLE `tblmobil` (
  `id_mobil` int(11) NOT NULL,
  `type_mobil` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmobil`
--

INSERT INTO `tblmobil` (`id_mobil`, `type_mobil`) VALUES
(1, 'Avanza'),
(2, 'Jazz');

-- --------------------------------------------------------

--
-- Table structure for table `tblmotor`
--

CREATE TABLE `tblmotor` (
  `id_motor` int(11) NOT NULL,
  `type_motor` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmotor`
--

INSERT INTO `tblmotor` (`id_motor`, `type_motor`) VALUES
(1, 'Vario'),
(2, 'Beat');

-- --------------------------------------------------------

--
-- Table structure for table `tblpendaftaran`
--

CREATE TABLE `tblpendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `no_antri` varchar(20) DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `id_jeniscucian` int(11) DEFAULT NULL,
  `tgl_pendaftaran` date DEFAULT NULL,
  `jam_pendaftaran` time DEFAULT NULL,
  `total_biaya` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaksi`
--

CREATE TABLE `tbltransaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pendaftaran` int(11) DEFAULT NULL,
  `no_nota` varchar(10) DEFAULT NULL,
  `tangal` date DEFAULT NULL,
  `bayar` int(11) DEFAULT NULL,
  `kembali` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_pencuci` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$QlmGkn7EnWKbWXFCZDXAluSTbEvniDWOmpN/dCm7MWkbAJaXshN..');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vwcustomer`
-- (See below for the actual view)
--
CREATE TABLE `vwcustomer` (
`id_customer` int(11)
,`nama` varchar(20)
,`no_hp` varchar(20)
,`alamat` varchar(25)
,`nomor_plat` varchar(20)
,`id_mobil` int(11)
,`id_motor` int(11)
,`type_mobil` varchar(20)
,`type_motor` varchar(20)
);

-- --------------------------------------------------------

--
-- Structure for view `vwcustomer`
--
DROP TABLE IF EXISTS `vwcustomer`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwcustomer`  AS SELECT `c`.`id_customer` AS `id_customer`, `c`.`nama` AS `nama`, `c`.`no_hp` AS `no_hp`, `c`.`alamat` AS `alamat`, `c`.`nomor_plat` AS `nomor_plat`, `c`.`id_mobil` AS `id_mobil`, `c`.`id_motor` AS `id_motor`, `mb`.`type_mobil` AS `type_mobil`, `mt`.`type_motor` AS `type_motor` FROM ((`tblcustomer` `c` join `tblmobil` `mb` on(`c`.`id_mobil` = `mb`.`id_mobil`)) join `tblmotor` `mt` on(`c`.`id_motor` = `mt`.`id_motor`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idPegawai`);

--
-- Indexes for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD PRIMARY KEY (`id_customer`),
  ADD KEY `id_mobil` (`id_mobil`),
  ADD KEY `id_motor` (`id_motor`);

--
-- Indexes for table `tbljeniscuci`
--
ALTER TABLE `tbljeniscuci`
  ADD PRIMARY KEY (`id_jeniscucian`);

--
-- Indexes for table `tblmobil`
--
ALTER TABLE `tblmobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `tblmotor`
--
ALTER TABLE `tblmotor`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indexes for table `tblpendaftaran`
--
ALTER TABLE `tblpendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_jeniscucian` (`id_jeniscucian`);

--
-- Indexes for table `tbltransaksi`
--
ALTER TABLE `tbltransaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `idPegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbljeniscuci`
--
ALTER TABLE `tbljeniscuci`
  MODIFY `id_jeniscucian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblmobil`
--
ALTER TABLE `tblmobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblmotor`
--
ALTER TABLE `tblmotor`
  MODIFY `id_motor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpendaftaran`
--
ALTER TABLE `tblpendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbltransaksi`
--
ALTER TABLE `tbltransaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD CONSTRAINT `tblcustomer_ibfk_1` FOREIGN KEY (`id_mobil`) REFERENCES `tblmobil` (`id_mobil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblcustomer_ibfk_2` FOREIGN KEY (`id_motor`) REFERENCES `tblmotor` (`id_motor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblpendaftaran`
--
ALTER TABLE `tblpendaftaran`
  ADD CONSTRAINT `tblpendaftaran_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `tblcustomer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblpendaftaran_ibfk_2` FOREIGN KEY (`id_jeniscucian`) REFERENCES `tbljeniscuci` (`id_jeniscucian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbltransaksi`
--
ALTER TABLE `tbltransaksi`
  ADD CONSTRAINT `tbltransaksi_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `tblpendaftaran` (`id_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
