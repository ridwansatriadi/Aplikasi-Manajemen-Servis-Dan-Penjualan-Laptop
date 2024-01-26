-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 04:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_servis_laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `ID_Barang` int(11) NOT NULL,
  `Nama_Barang` varchar(225) NOT NULL,
  `ID_kategori` int(11) NOT NULL,
  `Harga_Modal` decimal(10,2) NOT NULL,
  `Harga_Jual` decimal(10,2) NOT NULL,
  `Stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`ID_Barang`, `Nama_Barang`, `ID_kategori`, `Harga_Modal`, `Harga_Jual`, `Stok`) VALUES
(5, 'asus vivo book', 2, 5000000.00, 6000000.00, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_barang_servis`
--

CREATE TABLE `tb_data_barang_servis` (
  `ID_Service` int(11) NOT NULL,
  `Serial_Barang` varchar(25) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `Tipe_Barang` varchar(225) NOT NULL,
  `Tanggal_Masuk` date NOT NULL,
  `Kondisi_Barang` varchar(225) NOT NULL,
  `Kelengkapan_Barang` varchar(225) NOT NULL,
  `solusi` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_data_barang_servis`
--

INSERT INTO `tb_data_barang_servis` (`ID_Service`, `Serial_Barang`, `barang_id`, `Tipe_Barang`, `Tanggal_Masuk`, `Kondisi_Barang`, `Kelengkapan_Barang`, `solusi`) VALUES
(7, 'GSh24', 5, 'Laptop', '2024-01-10', 'blue screen', 'carger, tas', 'instal ulang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_barang`
--

CREATE TABLE `tb_kategori_barang` (
  `ID_Kategori` int(11) NOT NULL,
  `Nama_Kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kategori_barang`
--

INSERT INTO `tb_kategori_barang` (`ID_Kategori`, `Nama_Kategori`) VALUES
(1, 'Spare part komputer'),
(2, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan_penjualan`
--

CREATE TABLE `tb_laporan_penjualan` (
  `ID_Laporan_Penjualan` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `ID_Transaksi_Penjualan` int(11) NOT NULL,
  `ID_Pelanggan` int(11) NOT NULL,
  `ID_Operator` int(11) NOT NULL,
  `Total_Transaksi` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_laporan_penjualan`
--

INSERT INTO `tb_laporan_penjualan` (`ID_Laporan_Penjualan`, `Tanggal`, `ID_Transaksi_Penjualan`, `ID_Pelanggan`, `ID_Operator`, `Total_Transaksi`) VALUES
(16, '2024-01-13', 5, 3, 2, 20000000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan_piutang`
--

CREATE TABLE `tb_laporan_piutang` (
  `ID_Laporan_Piutang` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `ID_Transaksi_Piutang` int(11) NOT NULL,
  `ID_Pelanggan` int(11) NOT NULL,
  `ID_Operator` int(11) NOT NULL,
  `Total_Hutang` decimal(10,2) NOT NULL,
  `Total_Pembayaran` decimal(10,2) NOT NULL,
  `Sisa_Hutang` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_laporan_piutang`
--

INSERT INTO `tb_laporan_piutang` (`ID_Laporan_Piutang`, `Tanggal`, `ID_Transaksi_Piutang`, `ID_Pelanggan`, `ID_Operator`, `Total_Hutang`, `Total_Pembayaran`, `Sisa_Hutang`) VALUES
(1, '2024-01-16', 3, 2, 2, 800000.00, 600000.00, 200000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan_servis`
--

CREATE TABLE `tb_laporan_servis` (
  `ID_Laporan_Servis` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `ID_Transaksi_Servis` int(11) NOT NULL,
  `ID_Pelanggan` int(11) NOT NULL,
  `ID_Operator` int(11) NOT NULL,
  `Total_Biaya` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_laporan_servis`
--

INSERT INTO `tb_laporan_servis` (`ID_Laporan_Servis`, `Tanggal`, `ID_Transaksi_Servis`, `ID_Pelanggan`, `ID_Operator`, `Total_Biaya`) VALUES
(1, '2024-01-16', 1, 2, 2, 3000000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tb_operator_sistem`
--

CREATE TABLE `tb_operator_sistem` (
  `ID_Operator` int(11) NOT NULL,
  `Nama` varchar(225) NOT NULL,
  `Username` varchar(225) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Level` varchar(35) NOT NULL,
  `Login_Terakhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_operator_sistem`
--

INSERT INTO `tb_operator_sistem` (`ID_Operator`, `Nama`, `Username`, `Password`, `Level`, `Login_Terakhir`) VALUES
(2, 'ridwan satriadi', 'admin', 'admin', 'admin', '2024-01-25 07:25:05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `ID_Pelanggan` int(11) NOT NULL,
  `Nama_Pelanggan` varchar(225) NOT NULL,
  `Alamat` varchar(225) NOT NULL,
  `Kontak` varchar(35) NOT NULL,
  `Email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`ID_Pelanggan`, `Nama_Pelanggan`, `Alamat`, `Kontak`, `Email`) VALUES
(2, 'agus', 'Lowang Sawak', '7147004774', 'agus@gmail.com'),
(3, 'asep', 'sukabumi', '085334212098', 'asepbumi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_servis`
--

CREATE TABLE `tb_status_servis` (
  `ID_Status` int(11) NOT NULL,
  `Nama_Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_status_servis`
--

INSERT INTO `tb_status_servis` (`ID_Status`, `Nama_Status`) VALUES
(1, 'Cencel'),
(2, 'Proses'),
(3, 'Selesai'),
(4, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_teknisi`
--

CREATE TABLE `tb_teknisi` (
  `ID_Teknisi` int(11) NOT NULL,
  `Nama_Teknisi` varchar(225) NOT NULL,
  `Almat` varchar(225) NOT NULL,
  `No_Telpon` varchar(35) NOT NULL,
  `Email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_teknisi`
--

INSERT INTO `tb_teknisi` (`ID_Teknisi`, `Nama_Teknisi`, `Almat`, `No_Telpon`, `Email`) VALUES
(1, 'Ridwan', 'Lowang Sawak', '082339515962', 'ridokdoang909@gmail.com'),
(2, 'asep', 'india', '082338654124', 'asep@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi_penjualan`
--

CREATE TABLE `tb_transaksi_penjualan` (
  `ID_Transaksi_Penjualan` int(11) NOT NULL,
  `Faktur` varchar(35) NOT NULL,
  `Tanggal` datetime NOT NULL,
  `ID_Pelanggan` int(11) NOT NULL,
  `ID_Operator` int(11) NOT NULL,
  `Total_Penjualan` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_transaksi_penjualan`
--

INSERT INTO `tb_transaksi_penjualan` (`ID_Transaksi_Penjualan`, `Faktur`, `Tanggal`, `ID_Pelanggan`, `ID_Operator`, `Total_Penjualan`) VALUES
(3, 'ASL9qm', '2024-01-26 00:00:00', 2, 2, 10000000.00),
(5, 'INDi38', '2024-01-16 00:00:00', 3, 2, 80000000.00),
(6, 'Phj2', '2024-01-30 00:00:00', 3, 2, 80000000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi_piutang`
--

CREATE TABLE `tb_transaksi_piutang` (
  `ID_Transaksi_Piutang` int(11) NOT NULL,
  `Faktur` varchar(30) NOT NULL,
  `Tanggal` datetime NOT NULL,
  `ID_Operator` int(11) NOT NULL,
  `Total_Hutang` decimal(10,2) NOT NULL,
  `Total_Pembayaran` decimal(10,2) NOT NULL,
  `Sisa_Hutang` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_transaksi_piutang`
--

INSERT INTO `tb_transaksi_piutang` (`ID_Transaksi_Piutang`, `Faktur`, `Tanggal`, `ID_Operator`, `Total_Hutang`, `Total_Pembayaran`, `Sisa_Hutang`) VALUES
(3, 'RfG42ij', '2024-01-23 00:00:00', 2, 800000.00, 500000.00, 300000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi_servis`
--

CREATE TABLE `tb_transaksi_servis` (
  `ID_Transaksi_Servis` int(11) NOT NULL,
  `Faktur` varchar(30) NOT NULL,
  `Tanggal` datetime NOT NULL,
  `ID_Pelanggan` int(11) NOT NULL,
  `ID_Operator` int(11) NOT NULL,
  `ID_Status` int(11) NOT NULL,
  `Total_Biaya` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_transaksi_servis`
--

INSERT INTO `tb_transaksi_servis` (`ID_Transaksi_Servis`, `Faktur`, `Tanggal`, `ID_Pelanggan`, `ID_Operator`, `ID_Status`, `Total_Biaya`) VALUES
(1, '$Gz87f7', '2024-01-13 00:00:00', 2, 2, 3, 10000000.00),
(5, '6nMj', '2024-01-24 00:00:00', 2, 2, 3, 2000000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`Username`, `Password`, `Role`) VALUES
('admin', 'admin', ''),
('admin', 'admin', 'admin\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`ID_Barang`);

--
-- Indexes for table `tb_data_barang_servis`
--
ALTER TABLE `tb_data_barang_servis`
  ADD PRIMARY KEY (`ID_Service`),
  ADD UNIQUE KEY `barang_id` (`barang_id`);

--
-- Indexes for table `tb_kategori_barang`
--
ALTER TABLE `tb_kategori_barang`
  ADD PRIMARY KEY (`ID_Kategori`);

--
-- Indexes for table `tb_laporan_penjualan`
--
ALTER TABLE `tb_laporan_penjualan`
  ADD PRIMARY KEY (`ID_Laporan_Penjualan`);

--
-- Indexes for table `tb_laporan_piutang`
--
ALTER TABLE `tb_laporan_piutang`
  ADD PRIMARY KEY (`ID_Laporan_Piutang`);

--
-- Indexes for table `tb_laporan_servis`
--
ALTER TABLE `tb_laporan_servis`
  ADD PRIMARY KEY (`ID_Laporan_Servis`);

--
-- Indexes for table `tb_operator_sistem`
--
ALTER TABLE `tb_operator_sistem`
  ADD PRIMARY KEY (`ID_Operator`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`ID_Pelanggan`);

--
-- Indexes for table `tb_status_servis`
--
ALTER TABLE `tb_status_servis`
  ADD PRIMARY KEY (`ID_Status`);

--
-- Indexes for table `tb_teknisi`
--
ALTER TABLE `tb_teknisi`
  ADD PRIMARY KEY (`ID_Teknisi`);

--
-- Indexes for table `tb_transaksi_penjualan`
--
ALTER TABLE `tb_transaksi_penjualan`
  ADD PRIMARY KEY (`ID_Transaksi_Penjualan`);

--
-- Indexes for table `tb_transaksi_piutang`
--
ALTER TABLE `tb_transaksi_piutang`
  ADD PRIMARY KEY (`ID_Transaksi_Piutang`);

--
-- Indexes for table `tb_transaksi_servis`
--
ALTER TABLE `tb_transaksi_servis`
  ADD PRIMARY KEY (`ID_Transaksi_Servis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `ID_Barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_data_barang_servis`
--
ALTER TABLE `tb_data_barang_servis`
  MODIFY `ID_Service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_kategori_barang`
--
ALTER TABLE `tb_kategori_barang`
  MODIFY `ID_Kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_laporan_penjualan`
--
ALTER TABLE `tb_laporan_penjualan`
  MODIFY `ID_Laporan_Penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_laporan_piutang`
--
ALTER TABLE `tb_laporan_piutang`
  MODIFY `ID_Laporan_Piutang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_laporan_servis`
--
ALTER TABLE `tb_laporan_servis`
  MODIFY `ID_Laporan_Servis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_operator_sistem`
--
ALTER TABLE `tb_operator_sistem`
  MODIFY `ID_Operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `ID_Pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_status_servis`
--
ALTER TABLE `tb_status_servis`
  MODIFY `ID_Status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_teknisi`
--
ALTER TABLE `tb_teknisi`
  MODIFY `ID_Teknisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_transaksi_penjualan`
--
ALTER TABLE `tb_transaksi_penjualan`
  MODIFY `ID_Transaksi_Penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_transaksi_piutang`
--
ALTER TABLE `tb_transaksi_piutang`
  MODIFY `ID_Transaksi_Piutang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_transaksi_servis`
--
ALTER TABLE `tb_transaksi_servis`
  MODIFY `ID_Transaksi_Servis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
