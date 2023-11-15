-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 08:45 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `Id_Anggota` varchar(20) NOT NULL,
  `Nama_Anggota` varchar(30) NOT NULL,
  `JK_Anggota` varchar(10) NOT NULL,
  `Alamat_Anggota` varchar(20) NOT NULL,
  `E-mail` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Tanggal_Daftar` varchar(20) NOT NULL,
  `No_Hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`Id_Anggota`, `Nama_Anggota`, `JK_Anggota`, `Alamat_Anggota`, `E-mail`, `Status`, `Tanggal_Daftar`, `No_Hp`) VALUES
('AG00001', 'Null Jamil', 'Perempuan', 'Subang', 'nulljamil@gmail.com', 'Aktif', '15 Nov 2023', '089604347289');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `Judul_Buku` varchar(25) NOT NULL,
  `Deskripsi` varchar(1000) NOT NULL,
  `ISBN` varchar(20) NOT NULL,
  `ISBN_13` varchar(20) NOT NULL,
  `Kategori` varchar(50) NOT NULL,
  `Pengarang` varchar(20) NOT NULL,
  `Penerbit` varchar(20) NOT NULL,
  `Tahun_Penerbitan` varchar(20) NOT NULL,
  `Jumlah` varchar(20) NOT NULL,
  `Harga` varchar(15) NOT NULL,
  `Stok` varchar(20) NOT NULL,
  `Diterima_Pada` varchar(20) NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`Judul_Buku`, `Deskripsi`, `ISBN`, `ISBN_13`, `Kategori`, `Pengarang`, `Penerbit`, `Tahun_Penerbitan`, `Jumlah`, `Harga`, `Stok`, `Diterima_Pada`, `Status`) VALUES
('Azzamine', 'Novel Azzamine mengisahkan tentang perjalanan cinta Azzam dan Jasmine yang bermula dari perjodohan', 'IS00001', 'AAA123', 'Novel Romance', 'Sophie Aulia', 'Bukune', '2022', '10', '99.000', '20', 'Februari', 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `Id_Peminjaman` varchar(10) NOT NULL,
  `Id_Anggota` varchar(10) NOT NULL,
  `Id_Petugas` varchar(10) NOT NULL,
  `ISBN` varchar(10) NOT NULL,
  `Tgl_Pinjam` varchar(20) NOT NULL,
  `Jatuh_Tempo` varchar(20) NOT NULL,
  `Jumlah_Buku` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`Id_Peminjaman`, `Id_Anggota`, `Id_Petugas`, `ISBN`, `Tgl_Pinjam`, `Jatuh_Tempo`, `Jumlah_Buku`, `Status`) VALUES
('IPJN00001', 'GA00001', 'IPGS00001', 'IS00001', '15 Nov 2023', '20 Nov 2023', '2', 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `Id_Pengembalian` varchar(20) NOT NULL,
  `Id_Anggota` varchar(20) NOT NULL,
  `Id_Petugas` varchar(20) NOT NULL,
  `ISBN` varchar(20) NOT NULL,
  `Id_Peminjaman` varchar(20) NOT NULL,
  `Jumlah_Buku` varchar(15) NOT NULL,
  `Judul_Buku` varchar(15) NOT NULL,
  `Jatuh_Tempo` varchar(20) NOT NULL,
  `Hilang` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`Id_Pengembalian`, `Id_Anggota`, `Id_Petugas`, `ISBN`, `Id_Peminjaman`, `Jumlah_Buku`, `Judul_Buku`, `Jatuh_Tempo`, `Hilang`) VALUES
('IPGB00001', 'GA00001', 'IPS00001', 'IS00001', 'IPMJ00001', '2', 'Azzamine', '20 Nov 2023', '1');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `Id_Petugas` varchar(20) NOT NULL,
  `Nama_Petugas` varchar(20) NOT NULL,
  `Tanggal_Daftar` varchar(15) NOT NULL,
  `Alamat_Petugas` varchar(20) NOT NULL,
  `JK_Petugas` varchar(20) NOT NULL,
  `E-mail` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`Id_Petugas`, `Nama_Petugas`, `Tanggal_Daftar`, `Alamat_Petugas`, `JK_Petugas`, `E-mail`, `Status`) VALUES
('IPST00001', 'Rania Dwi Darma', '15 Nov 2023', 'Subang', 'Perempuan', 'raniadwi@gmail.com', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`Id_Anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`ISBN`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`Id_Peminjaman`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`Id_Pengembalian`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`Id_Petugas`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
