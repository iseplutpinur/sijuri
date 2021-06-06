-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2021 pada 09.00
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `sijuri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `nip` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telepon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`nip`, `password`, `nama_dosen`, `tanggal_lahir`, `email`, `no_telepon`) VALUES
('197808232001121010', 'lll', 'Mas dadang Enjat Munajat', '1970-06-05', 'mas.dadang.enjat.munajat@gmail.com', '080912345610'),
('197808232001121011', 'admin', 'Hasan Bisry Isa Alfaris, S.Kom.', '1970-06-06', 'hasan.bisry.isa.alfaris.s.kom.@gmail.com', '080912345611'),
('197808232001121012', 'admin', 'Agus Syifaun Najah, M.Kom.', '1970-06-07', 'agus.syifaun.najah.m.kom.@gmail.com', '080912345612'),
('197808232001121013', 'admin', 'Ponari Isno, SE., S.Kom.', '1970-06-08', 'ponari.isno.se.s.kom.@gmail.com', '080912345613'),
('197808232001121014', 'admin', 'Tholib Hariono, S.Kom.', '1970-06-09', 'tholib.hariono.s.kom.@gmail.com', '080912345614'),
('197808232001121015', 'admin', 'Sujono, S.Kom.', '1970-06-10', 'sujono.s.kom.@gmail.com', '080912345615'),
('197808232001121016', 'admin', 'Mochammad Chumaidi, M.M.', '1970-06-11', 'mochammad.chumaidi.m.m.@gmail.com', '080912345616'),
('197808232001121017', 'admin', 'Primaadi Airlangga, M.IT', '1970-06-12', 'primaadi.airlangga.m.it@gmail.com', '080912345617'),
('197808232001121018', 'admin', 'H. Muhyiddin Zainul Arifin, SH, SE, M.M.', '1970-06-13', 'h.muhyiddin.zainul.arifin.sh.se.m.m.@gmail.com', '080912345618'),
('197808232001121019', 'admin', 'Dr. H. Chairul Anam, S.Kom., S.E., M.Si.', '1970-06-14', 'dr.h.chairul.anam.s.kom.s.e.m.si.@gmail.com', '080912345619'),
('197808232001121020', 'admin', 'Siti Sufaidah, S. Kom., M.Si.', '1970-06-15', 'siti.sufaidah.s.kom.m.si.@gmail.com', '080912345620'),
('197808232001121021', 'admin', 'Ir. Zulfikar, M.Si.', '1970-06-16', 'ir.zulfikar.m.si.@gmail.com', '080912345621'),
('197808232001121022', 'admin', 'Munawarah, S.Kom., M.Si.', '1970-06-17', 'munawarah.s.kom.m.si.@gmail.com', '080912345622'),
('197808232001121023', 'admin', 'Ir. Moch. Noerhadi Sudjoni, M.B.A.', '1970-06-18', 'ir.moch.noerhadi.sudjoni.m.b.a.@gmail.com', '080912345623');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`nip`);
COMMIT;
