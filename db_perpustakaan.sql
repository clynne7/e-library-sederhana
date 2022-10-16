-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2021 pada 05.01
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun_terbit` varchar(5) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `jumlah_buku` int(5) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`, `tgl_input`) VALUES
(110022991, 'Ketika Cinta Bertasbih', 'Habiburrahman El Shirazy', 'Republika-Basmalah', '2007', '978-979-3210-84-1', 30, '2021-01-12'),
(110022992, 'Habibie & Ainun', 'Bacharuddin Jusuf Habibie', 'PT THC Mandiri', '2010', '978-979-1255-13-4', 35, '2021-01-12'),
(110022993, 'Habis Gelap Terbitlah Terang', 'Kartini', 'Balai Pustaka', '2005', '979-407-063-7', 50, '2021-01-12'),
(110022994, 'Orang Orang Biasa', 'Andrea Hirata', 'PT Bentang Pustaka', '2019', '978-602-2915-24-9', 30, '2021-01-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(9) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tgl_pinjam` varchar(30) NOT NULL,
  `tgl_kembali` varchar(30) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `judul`, `nim`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(139840331, 'Habibie & Ainun', '5190411483', 'Muhamad Ardy Widodo', '12-01-2021', '19-01-2021', 'Pinjam'),
(139840332, 'Orang Orang Biasa', '5190411421', 'Ayla Putri N', '12-01-2021', '19-01-2021', 'Pinjam'),
(139840333, 'Ketika Cinta Bertasbih', '5190311372', 'Septiani Putri', '03-01-2021', '10-01-2021', 'Pinjam');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139840334;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
