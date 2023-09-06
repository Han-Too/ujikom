-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Sep 2023 pada 09.24
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muhamadfarhannurananda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mfn_customer`
--

CREATE TABLE `mfn_customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mfn_customer`
--

INSERT INTO `mfn_customer` (`id_customer`, `nama_customer`, `alamat`, `telp`, `fax`, `email`) VALUES
(5, 'c', 'cb', '123', 'c', 'udin@udin.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mfn_identitas`
--

CREATE TABLE `mfn_identitas` (
  `id_identitas` int(11) NOT NULL,
  `nama_identitas` varchar(255) NOT NULL,
  `badan_hukum` varchar(255) NOT NULL,
  `npwp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `rekening` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mfn_item`
--

CREATE TABLE `mfn_item` (
  `id_item` int(11) NOT NULL,
  `nama_item` varchar(255) NOT NULL,
  `uom` varchar(25) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mfn_item`
--

INSERT INTO `mfn_item` (`id_item`, `nama_item`, `uom`, `harga_beli`, `harga_jual`) VALUES
(2, 'qwert', 'qwer', 12331, 13312);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mfn_level`
--

CREATE TABLE `mfn_level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mfn_level`
--

INSERT INTO `mfn_level` (`id_level`, `level`) VALUES
(1, 'manager'),
(2, 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mfn_manager`
--

CREATE TABLE `mfn_manager` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mfn_petugas`
--

CREATE TABLE `mfn_petugas` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mfn_petugas`
--

INSERT INTO `mfn_petugas` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'petugas', 'petugas', 'petugas', '2'),
(2, 'manager', 'manager', 'manager', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mfn_sales`
--

CREATE TABLE `mfn_sales` (
  `id_sales` int(11) NOT NULL,
  `tgl_sales` date NOT NULL,
  `id_customer` int(11) NOT NULL,
  `do_number` varchar(255) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mfn_sales`
--

INSERT INTO `mfn_sales` (`id_sales`, `tgl_sales`, `id_customer`, `do_number`, `status`) VALUES
(4, '2023-09-22', 5, '123455', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mfn_transaction`
--

CREATE TABLE `mfn_transaction` (
  `id_transaction` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mfn_transaction`
--

INSERT INTO `mfn_transaction` (`id_transaction`, `id_item`, `quantity`, `price`, `amount`) VALUES
(2, 2, 39, 10000, 390000),
(4, 2, 12, 1444, 17328);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mfn_transaction_temp`
--

CREATE TABLE `mfn_transaction_temp` (
  `id_transaction` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `remark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mfn_customer`
--
ALTER TABLE `mfn_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `mfn_identitas`
--
ALTER TABLE `mfn_identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indeks untuk tabel `mfn_item`
--
ALTER TABLE `mfn_item`
  ADD PRIMARY KEY (`id_item`);

--
-- Indeks untuk tabel `mfn_level`
--
ALTER TABLE `mfn_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `mfn_manager`
--
ALTER TABLE `mfn_manager`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `mfn_petugas`
--
ALTER TABLE `mfn_petugas`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `mfn_sales`
--
ALTER TABLE `mfn_sales`
  ADD PRIMARY KEY (`id_sales`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indeks untuk tabel `mfn_transaction`
--
ALTER TABLE `mfn_transaction`
  ADD PRIMARY KEY (`id_transaction`),
  ADD KEY `id_item` (`id_item`);

--
-- Indeks untuk tabel `mfn_transaction_temp`
--
ALTER TABLE `mfn_transaction_temp`
  ADD KEY `id_transaction` (`id_transaction`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mfn_customer`
--
ALTER TABLE `mfn_customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `mfn_identitas`
--
ALTER TABLE `mfn_identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mfn_item`
--
ALTER TABLE `mfn_item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mfn_level`
--
ALTER TABLE `mfn_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mfn_manager`
--
ALTER TABLE `mfn_manager`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mfn_petugas`
--
ALTER TABLE `mfn_petugas`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mfn_sales`
--
ALTER TABLE `mfn_sales`
  MODIFY `id_sales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `mfn_transaction`
--
ALTER TABLE `mfn_transaction`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mfn_sales`
--
ALTER TABLE `mfn_sales`
  ADD CONSTRAINT `mfn_sales_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `mfn_customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mfn_transaction`
--
ALTER TABLE `mfn_transaction`
  ADD CONSTRAINT `mfn_transaction_ibfk_1` FOREIGN KEY (`id_item`) REFERENCES `mfn_item` (`id_item`);

--
-- Ketidakleluasaan untuk tabel `mfn_transaction_temp`
--
ALTER TABLE `mfn_transaction_temp`
  ADD CONSTRAINT `mfn_transaction_temp_ibfk_1` FOREIGN KEY (`id_transaction`) REFERENCES `mfn_transaction` (`id_transaction`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
