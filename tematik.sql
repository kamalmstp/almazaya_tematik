-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2020 pada 02.54
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `almazaya_portal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tematik`
--

CREATE TABLE `tematik` (
  `id_tematik` int(11) NOT NULL,
  `title` longtext DEFAULT NULL,
  `file_name` longtext DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tematik`
--

INSERT INTO `tematik` (`id_tematik`, `title`, `file_name`, `image`) VALUES
(1, 'AL-QUR′AN DAN ISU-ISU KONTEMPORER II', 'AL-QUR′AN DAN ISU-ISU KONTEMPORER II.pdf', 'AL-QUR′AN DAN ISU-ISU KONTEMPORER II.jpg'),
(2, 'AL-QUR\'AN DAN KEBINEKAAN', 'AL-QUR\'AN DAN KEBINEKAAN.pdf', 'AL-QUR\'AN DAN KEBINEKAAN.jpg'),
(3, 'AL-QUR\'AN DAN KENEGARAAN', 'AL-QUR\'AN DAN KENEGARAAN.pdf', 'AL-QUR\'AN DAN KENEGARAAN.jpg'),
(4, 'Al-Qur\'an dan Pemberdayaan Dhuafa', 'Al-Qur\'an dan Pemberdayaan Dhuafa.pdf', 'Al-Qur\'an dan Pemberdayaan Dhuafa.jpg'),
(5, 'Etika Berkeluarga, Bermasyarakat, dan Berpolitik', 'Etika Berkeluarga, Bermasyarakat, dan Berpolitik.pdf', 'Etika Berkeluarga, Bermasyarakat, dan Berpolitik.jpg'),
(6, 'Hubungan Antar Umat Beragama', 'Hubungan Antar Umat Beragama.pdf', 'Hubungan Antar Umat Beragama.jpg'),
(7, 'Hukum keadilan dan Ham', 'Hukum keadilan dan Ham.pdf', 'Hukum keadilan dan Ham.jpg'),
(8, 'JIHAD, MAKNA DAN IMPLEMENTASINYA', 'JIHAD, MAKNA DAN IMPLEMENTASINYA.pdf', 'JIHAD, MAKNA DAN IMPLEMENTASINYA.jpg'),
(9, 'KEDUDUKAN DAN PERAN PEREMPUAN', 'KEDUDUKAN DAN PERAN PEREMPUAN.pdf', 'KEDUDUKAN DAN PERAN PEREMPUAN.jpg'),
(10, 'KENABIAN (NUBUWWAH) DALAM AL-QURAN', 'KENABIAN (NUBUWWAH) DALAM AL-QURAN.pdf', 'KENABIAN (NUBUWWAH) DALAM AL-QURAN.jpg'),
(11, 'Keniscayaan Hari Akhir', 'Keniscayaan Hari Akhir.pdf', 'Keniscayaan Hari Akhir.jpg'),
(12, 'Kerja Dan Ketenagakerjaan', 'Kerja Dan Ketenagakerjaan.pdf', 'Kerja Dan Ketenagakerjaan.jpg'),
(13, 'Kesehatan Dalam Perspektif Al-Qur\'an', 'Kesehatan Dalam Perspektif Al-Qur\'an.pdf', 'Kesehatan Dalam Perspektif Al-Qur\'an.jpg'),
(14, 'KOMUNIKASI DAN INFORMASI', 'KOMUNIKASI DAN INFORMASI.pdf', 'KOMUNIKASI DAN INFORMASI.jpg'),
(15, 'Membangun Keluarga Harmonis', 'Membangun Keluarga Harmonis.pdf', 'Membangun Keluarga Harmonis.jpg'),
(16, 'Moderasi Islam', 'Moderasi Islam.pdf', 'Moderasi Islam.jpg'),
(17, 'Pelestarian Lingkungan Hidup', 'Pelestarian Lingkungan Hidup.pdf', 'Pelestarian Lingkungan Hidup.jpg'),
(18, 'Pembangunan Ekonomi Umat', 'Pembangunan Ekonomi Umat.pdf', 'Pembangunan Ekonomi Umat.jpg'),
(19, 'PEMBANGUNAN GENERASI MUDA', 'PEMBANGUNAN GENERASI MUDA.pdf', 'PEMBANGUNAN GENERASI MUDA.jpg'),
(20, 'PENDIDIKAN, PEMBANGUNAN KARAKTER, DAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'PENDIDIKAN, PEMBANGUNAN KARAKTER, DAN PENGEMBANGAN SUMBER DAYA MANUSIA.pdf', 'PENDIDIKAN, PEMBANGUNAN KARAKTER, DAN PENGEMBANGAN SUMBER DAYA MANUSIA.jpg'),
(21, 'Spiritual dan Akhlak', 'Spiritual dan Akhlak.pdf', 'Spiritual dan Akhlak.jpg'),
(22, 'TANGGUNG JAWAB SOSIAL', 'TANGGUNG JAWAB SOSIAL.pdf', 'TANGGUNG JAWAB SOSIAL.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tematik`
--
ALTER TABLE `tematik`
  ADD PRIMARY KEY (`id_tematik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tematik`
--
ALTER TABLE `tematik`
  MODIFY `id_tematik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
