-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 01:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmash_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `idInvoice` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `noTelp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggalPemesanan` datetime NOT NULL,
  `batasPembayaran` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`idInvoice`, `nama`, `alamat`, `noTelp`, `email`, `tanggalPemesanan`, `batasPembayaran`) VALUES
(2, 'asd', 'asd', '09394934', 'asdasd@gmail.com', '2022-06-12 07:52:02', '2022-06-13 07:52:02'),
(3, 'Ahmad', 'jalan luduk ombo nomer 12', '09873839472', 'ahmadc4hy4@gmail.com', '2022-06-12 08:26:14', '2022-06-13 08:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kasir`
--

CREATE TABLE `tb_kasir` (
  `id` int(11) NOT NULL,
  `namaPelanggan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `hidden` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kasir`
--

INSERT INTO `tb_kasir` (`id`, `namaPelanggan`, `tanggal`, `keterangan`, `total`, `bayar`, `kembalian`, `hidden`) VALUES
(1, 'saya', '2022-06-09', 'keterangan ', 470, 500000, 30, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `idLaporan` int(11) NOT NULL,
  `namaPemesan` varchar(50) NOT NULL,
  `jenisLaporan` varchar(30) NOT NULL,
  `barangTerbeli` varchar(50) NOT NULL,
  `totalHarga` int(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tanggalPemesanan` date NOT NULL,
  `tanggalDibuat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_laporan`
--

INSERT INTO `tb_laporan` (`idLaporan`, `namaPemesan`, `jenisLaporan`, `barangTerbeli`, `totalHarga`, `keterangan`, `tanggalPemesanan`, `tanggalDibuat`) VALUES
(1, 'subagyo', 'Service Ditempat', 'barang 1', 450000, 'ini keterangan', '2022-06-08', '2022-06-12 00:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `idLayanan` int(11) NOT NULL,
  `jenisLayanan` varchar(20) NOT NULL,
  `jenisService` varchar(20) NOT NULL,
  `namaPelanggan` varchar(50) NOT NULL,
  `noWA` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `dusun` varchar(50) NOT NULL,
  `tipeKendaraan` varchar(50) NOT NULL,
  `kilometer` varchar(20) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `seri` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `transmisi` varchar(50) NOT NULL,
  `jenisBensin` varchar(20) NOT NULL,
  `platNomor` varchar(20) NOT NULL,
  `jenisKendala` varchar(50) NOT NULL,
  `totalHarga` int(20) NOT NULL,
  `tanggalPemesanan` datetime NOT NULL,
  `jadwalBooking` date NOT NULL DEFAULT current_timestamp(),
  `verifikasi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`idLayanan`, `jenisLayanan`, `jenisService`, `namaPelanggan`, `noWA`, `alamat`, `provinsi`, `kota`, `kecamatan`, `desa`, `dusun`, `tipeKendaraan`, `kilometer`, `merk`, `seri`, `warna`, `transmisi`, `jenisBensin`, `platNomor`, `jenisKendala`, `totalHarga`, `tanggalPemesanan`, `jadwalBooking`, `verifikasi`) VALUES
(1, 'Reguler', 'Ringan', 'nama saya', '092222222', 'jalan hayam muruk nomer 1234', 'Jatim', 'jember', 'pondok gede', 'indah', 'telengsari', 'matic', '203 kilometer', 'brio', 'osd 12393', 'Hijau', 'aki', 'solar', 'P 2933 RI', 'susah menyala', 0, '2022-06-12 00:00:00', '0000-00-00', 'Sudah Terverifikasi'),
(2, 'Ditempat', 'Berat', 'nama saya', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'manual', '1203 kilometer', 'spioer', 'KAD 434', 'Abu-abu', 'asd', 'bio solar', 'DK 3293 K', ' tidak menyala', 0, '2022-06-12 00:00:00', '2022-06-06', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_midtrans`
--

CREATE TABLE `tb_midtrans` (
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `order_id` varchar(20) NOT NULL,
  `gross_amount` int(11) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `transaction_time` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `va_number` varchar(50) NOT NULL,
  `pdf_url` varchar(255) NOT NULL,
  `status_code` varchar(5) NOT NULL,
  `noTelp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_midtrans`
--

INSERT INTO `tb_midtrans` (`nama`, `alamat`, `order_id`, `gross_amount`, `payment_type`, `transaction_time`, `bank`, `va_number`, `pdf_url`, `status_code`, `noTelp`, `email`) VALUES
('asd', 'asd', '186595092', 120000, 'bank_transfer', '2022-06-12 07:52:00', 'bca', '87933524039', 'https://app.sandbox.midtrans.com/snap/v1/transactions/bfa40037-3106-4162-8ae5-af6343b81cec/pdf', '201', '09394934', 'asdasd@gmail.com'),
('Ahmad', 'jalan luduk ombo nomer 12', '77988668', 120000, 'bank_transfer', '2022-06-12 08:26:13', 'bca', '87933225864', 'https://app.sandbox.midtrans.com/snap/v1/transactions/4570d660-a690-4d7c-8563-d29a47a6acaf/pdf', '201', '09873839472', 'ahmadc4hy4@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `idPesanan` int(11) NOT NULL,
  `idInvoice` int(11) NOT NULL,
  `idBarang` int(11) NOT NULL,
  `namaBarang` varchar(50) NOT NULL,
  `jumlah` tinyint(2) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`idPesanan`, `idInvoice`, `idBarang`, `namaBarang`, `jumlah`, `harga`) VALUES
(3, 2, 1, 'barang 1', 1, 120000),
(4, 3, 1, 'barang 1', 1, 120000);

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesananProduct` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_product SET stok = stok-NEW.jumlah
    WHERE idBarang = NEW.idBarang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `idBarang` int(11) NOT NULL,
  `namaBarang` varchar(50) NOT NULL,
  `namaSuplier` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`idBarang`, `namaBarang`, `namaSuplier`, `kategori`, `harga`, `keterangan`, `stok`, `gambar`) VALUES
(1, 'barang 1', '', 'Benda Kecil', 120000, 'ini keterangan', 17, 'Sparepart_Dashboard.png'),
(3, 'barang 2', '', 'Body Motor', 54000, 'ini body', 12, 'profile_page.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tentang`
--

CREATE TABLE `tb_tentang` (
  `idTentang` int(11) NOT NULL,
  `menuTentang` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tentang`
--

INSERT INTO `tb_tentang` (`idTentang`, `menuTentang`, `deskripsi`) VALUES
(1, 'nama perusahaan', 'PT serbaBisa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `idUser` int(11) NOT NULL,
  `namaUser` varchar(50) NOT NULL,
  `namaPerusahaan` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `noTelp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sosialMedia` varchar(100) NOT NULL,
  `roleId` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`idUser`, `namaUser`, `namaPerusahaan`, `username`, `password`, `alamat`, `deskripsi`, `noTelp`, `email`, `sosialMedia`, `roleId`) VALUES
(1, 'user', '', 'user', 'asd', 'jalan hayam muruk nomer 123', '', '09847733', '', '', 2),
(2, 'admin', '', 'admin', 'asd', 'jalan suabyo nomer 12', 'ini deskripsi', '094438394', 'iniemail@gmail.com', 'tidak ada', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`idInvoice`);

--
-- Indexes for table `tb_kasir`
--
ALTER TABLE `tb_kasir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`idLaporan`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`idLayanan`);

--
-- Indexes for table `tb_midtrans`
--
ALTER TABLE `tb_midtrans`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`idPesanan`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `tb_tentang`
--
ALTER TABLE `tb_tentang`
  ADD PRIMARY KEY (`idTentang`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `idInvoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kasir`
--
ALTER TABLE `tb_kasir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `idLaporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `idLayanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `idPesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_tentang`
--
ALTER TABLE `tb_tentang`
  MODIFY `idTentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
