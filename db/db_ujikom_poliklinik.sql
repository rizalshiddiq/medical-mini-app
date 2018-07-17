-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Feb 2017 pada 03.03
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ujikom_poliklinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `NomorResep` text NOT NULL,
  `KodeObat` text NOT NULL,
  `Harga` int(10) NOT NULL,
  `Dosis` text NOT NULL,
  `SubTotal` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `KodeDkt` int(15) NOT NULL,
  `NamaDkt` varchar(100) NOT NULL,
  `Spesialis` varchar(40) NOT NULL,
  `AlamatDkt` text NOT NULL,
  `TelpDkt` int(30) NOT NULL,
  `KodePlk` text NOT NULL,
  `Tarif` int(20) NOT NULL,
  `TtlDkt` date NOT NULL,
  `GenderDkt` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`KodeDkt`, `NamaDkt`, `Spesialis`, `AlamatDkt`, `TelpDkt`, `KodePlk`, `Tarif`, `TtlDkt`, `GenderDkt`) VALUES
(2, 'sadasd', 'sadasdasd', 'adasdasd', 22424, '', 23234, '2017-02-12', 'Pria');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `KodeObat` int(20) NOT NULL,
  `NamaObat` text NOT NULL,
  `JenisObat` text NOT NULL,
  `Kategori` text NOT NULL,
  `HargaObat` int(20) NOT NULL,
  `JumlahObat` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`KodeObat`, `NamaObat`, `JenisObat`, `Kategori`, `HargaObat`, `JumlahObat`) VALUES
(1, 'Komix OBH', 'Sirup', 'THT', 1000, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `KodePsn` int(11) NOT NULL,
  `NamaPsn` text NOT NULL,
  `AlamatPsn` text NOT NULL,
  `GenderPsn` text NOT NULL,
  `UmurPsn` int(2) NOT NULL,
  `TelpPsn` int(20) NOT NULL,
  `KeluhanPsn` text NOT NULL,
  `SakitPsn` text NOT NULL,
  `TtlPsn` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`KodePsn`, `NamaPsn`, `AlamatPsn`, `GenderPsn`, `UmurPsn`, `TelpPsn`, `KeluhanPsn`, `SakitPsn`, `TtlPsn`, `created_at`) VALUES
(1, 'Pee Mak', 'Jember', 'Pria', 29, 898989834, 'Sakit perut', 'Asam Lambung', '2017-02-24', '2017-02-13 04:33:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `KodePeg` int(11) NOT NULL,
  `NIP` int(11) NOT NULL,
  `NamaPeg` text NOT NULL,
  `AlmPeg` text NOT NULL,
  `TelpPeg` text NOT NULL,
  `TglLhrPeg` date NOT NULL,
  `JnsKelPeg` text NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`KodePeg`, `NIP`, `NamaPeg`, `AlmPeg`, `TelpPeg`, `TglLhrPeg`, `JnsKelPeg`, `Username`, `Password`) VALUES
(1, 111111111, 'Bambang Setiawan', 'cigadung', '0987', '2017-02-22', 'Staff IT', 'bambang', 'a9711cbb2e3c2d5fc97a63e45bbe5076');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `NomorByr` varchar(20) NOT NULL,
  `KodePsn` text NOT NULL,
  `TanggalByr` date NOT NULL,
  `JumlahByr` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `NomorPendf` varchar(30) NOT NULL,
  `TanggalPendf` date NOT NULL,
  `KodeDkt` text NOT NULL,
  `KodePsn` text NOT NULL,
  `KodePlk` text NOT NULL,
  `Biaya` int(20) NOT NULL,
  `Ket` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `poliklinik`
--

CREATE TABLE `poliklinik` (
  `KodePlk` varchar(20) NOT NULL,
  `NamaPlk` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `NomorResep` varchar(20) NOT NULL,
  `TanggalResep` date NOT NULL,
  `KodeDkt` text NOT NULL,
  `KodePsn` text NOT NULL,
  `KodePlk` text NOT NULL,
  `TotalHarga` int(30) NOT NULL,
  `Bayar` int(33) NOT NULL,
  `Kembalian` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`KodeDkt`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`KodeObat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`KodePsn`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`KodePeg`),
  ADD UNIQUE KEY `NIP` (`NIP`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`NomorByr`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`NomorPendf`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`KodePlk`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`NomorResep`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `KodeDkt` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `KodeObat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `KodePsn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `KodePeg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
