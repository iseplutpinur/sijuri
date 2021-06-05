-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2021 pada 18.37
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat_realtime`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `ke` text NOT NULL,
  `avatar` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `messages`
--

INSERT INTO `messages` (`id`, `name`, `ke`, `avatar`, `message`, `tipe`, `date`) VALUES
(33, 'Dr. MD Enjat Munajat', 'public', 'https://fisip.unpad.ac.id/wp-content/uploads/2019/11/enjat-munajat-1.jpg', 'Waalaikumsalam silahkan', 'rooms', '2021-05-18 23:29:47'),
(32, 'Hanna Rahmawati', 'public', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0zAU4O49rUObYkbZ0XL-Yu-9pYXZNnV2bdQ&usqp=CAU', 'Assalamualaikum Pak, saya izin konsultasi skripsi', 'rooms', '2021-05-18 23:28:53'),
(31, 'Rahman Mulyawan', 'Hanna Rahmawati', 'https://disk.mediaindonesia.com/thumbs/600x400/news/2020/10/f75c6fd536b89a3f76f3d2fe091d2d4f.gif', 'y', 'users', '2021-05-18 23:27:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `ke` int(20) NOT NULL,
  `name` text NOT NULL,
  `avatar` varchar(500) NOT NULL,
  `login` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`ke`, `name`, `avatar`, `login`, `status`) VALUES
(1, 'bachors', 'http://3.bp.blogspot.com/-c8O1QI1Ty24/UikpRn-WYLI/AAAAAAAAJ0Y/hCd3SVMejGQ/s1600/1cc767a412f68bc6ff6f26b526c4ecfd.jpeg', '2021-05-18 21:17:15', 'offline'),
(7, 'Rahman Mulyawan', 'https://disk.mediaindonesia.com/thumbs/600x400/news/2020/10/f75c6fd536b89a3f76f3d2fe091d2d4f.gif', '2021-05-18 23:28:10', 'offline'),
(5, 'Hana faradila', 'https://asset.kompas.com/crops/HCGA2ROTT0sUdLid0L_Wr1U3wsQ=/0x53:640x480/750x500/data/photo/2020/05/20/5ec48f2a3605b.jpg', '2021-05-18 23:17:59', 'offline'),
(4, 'Hanna Rahmawati', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0zAU4O49rUObYkbZ0XL-Yu-9pYXZNnV2bdQ&usqp=CAU', '2021-05-18 23:32:59', 'offline'),
(6, 'Rannisya', 'https://asset-a.grid.id/crop/10x0:486x306/945x630/photo/2021/02/19/foto-cover-potret-rose-blackpin-20210219082437.jpg', '2021-05-18 23:14:23', 'offline'),
(8, 'Dr. MD Enjat Munajat', 'https://fisip.unpad.ac.id/wp-content/uploads/2019/11/enjat-munajat-1.jpg', '2021-05-18 23:29:33', 'offline'),
(9, 'Wanda widiana', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFBcVFBQYGBcXGRkaGRkaGhcZGRoZGhcZGBkaGRcaISwjGhwoHRoZJDUkKC0vMjIyGSI4PTgwPCwxMi8BCwsLDw4PHBERHDEoISgxMzExMTExMTExMTExMTEzMTExMTExMTExMTExMTExMTExMTExMTExMzExMTExMTExMf/AABEIARMAtwMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAFAAIDBAYBBwj/xAA/EAACAQIEBAMFBgUDBAIDAAABAgMAEQQSITEFE0FRBiJhMnGBkaEUI0JSscEHM3LR8GLh8SSCkrJzohVDU//EABgBAAMBAQAAAAAAAAAAAAAAAAABAgME/8QAKREAAgIBBAEEAQQDAAAAAAAAAAECESEDEjFBUSIyYaFxE8Hh8ASRsf/aAAwDAQACEQMRAD8A9K5grnMFN', '2021-05-18 23:23:45', 'offline'),
(10, 'Regita KD', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFRgWFRUYGBgaGhoYGBgYGBgYGBgYGBgZGhgYGBgcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISGjQhISExNDQ0NDQxNDQ0NDQ0NDQ0NDQ0NDQxNDQ0NDQ0NDQ0NDQ0NDE0PzQ0NDQ0NDQ0ND8/Mf/AABEIALYBFQMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAACAAEDBAUGBwj/xAA+EAACAQICBQsBBQcFAQEAAAABAgADEQQhBRIxQVEGIjJhcYGRobHB8AcTcrLR4SMkUmKSovEUNEJzgmMz/8QAGQEAAwEBAQAAAAAAAAAAAAAAAAECAwQF/8QAJBEBAQACAwACAgEFAAAAAAAAAAECEQMhMRIyQVEiBBMjYXH/2gAMAwEAAhEDEQA/AOBEICMIQE0QloJcz', '2021-05-18 23:30:56', 'offline'),
(11, 'Azman', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFRgVFRYYGBgYGBgYGBgYGBgaGRgYGBgZGRgYGBgcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDszPy40NTEBDAwMEA8QHhISHjQrISQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQxNDQxNP/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAAABwEBAAAAAAAAAAAAAAAAAQIDBAUGBwj/xAA/EAACAQIEAwUGAwcCBgMAAAABAgADEQQSITEFQVEGYXGBkRMiMqGxwVLR8BQzQmJy4fEHFSM0gpKiwhZTsv/EABkBAAMBAQEAAAAAAAAAAAAAAAECAwQABf/EACYRAAMAAQQCAQUBAQEAAAAAAAABAhEDEiExBEETIjJRYXGRQiP/2gAMAwEAAhEDEQA/AOQwLCgEqnyIP', '2021-05-18 23:31:42', 'online'),
(12, 'amanda', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFRgVFRUYGBgaGRoaHBocGhwaGBoeHBgaGhgaGhgeIS4lHB4rIRoaJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISGjQhISExNDQxNDQ0NDQ0NDExNDQxNDE0NDQ0NDQ0NDE0NDQ0NDQ0NDQ0MTQ0NDE0NDQ0NDU0OP/AABEIAL4BCgMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAACAQMFBgcABAj/xAA/EAACAQIDBAcGBAQFBQEAAAABAgADEQQSIQUxQVEGImFxgZGhBxMyscHwQlLR4RQjkqJicoKywiUzNOLxJP/EABkBAQEBAQEBAAAAAAAAAAAAAAABAgMEBf/EACIRAQEAAgIBBAMBAAAAAAAAAAABAhEDMSEEEkFRIjJxof/aAAwDAQACEQMRAD8AuymOAwFhrNsQ4DDUx', '2021-05-18 23:34:22', 'offline');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ke`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `ke` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
