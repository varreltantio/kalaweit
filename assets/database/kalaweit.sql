-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2021 pada 05.40
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalaweit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin kalaweit', 'adminkalaweit@gmail.com', '$2y$10$hzjKJmgtktHWpbvJLx8/J.m297u2QQ2FsapwQhfKKdHneZtMAZsu2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `misi`
--

CREATE TABLE `misi` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `misi`
--

INSERT INTO `misi` (`id`, `title`, `thumbnail`, `description`) VALUES
(1, 'Penyelamatan dan Rehabilitasi', 'misi-1.jpg', '<p>    Dalam kegiatan penyelamatan dan evakuasi satwa, serta \r\nmenerima/merawat, dan membantu satwa selain Owa dan Siamang. Yayasan \r\nKalaweit Indonesia bekerja sama dengan BKSDA maupun mitra terkait \r\nlainnya.Tujuannya adalah untuk rehabilitasi satwa tersebut (kebanyakan \r\nkorban dari deforestasi dan perdagangan ilegal) untuk di kembalikan ke \r\nhabitatnya (di bebaskan). </p><p><p>        Namun di antaranya banyak satwa yang cacat fisik atau mental dan akan di\r\n rawat selamanya di Kalaweit (dalam Sanctuary) karena tidak akan \r\nbertahan hidup andai di lepas kembali ke alam.  <span>Satwa yang baru diterima (</span><i><span>newcomer) </span></i><span>untuk sementara akan ditempatkan ke dalam “</span><i><span>Temporary Cage”</span></i><span> dan dilakukan pemeriksaan kesehatan secara menyeluruh oleh Dokter hewan. <br></span></p><p></p><p><br></p></p>'),
(2, 'Perlindungan Habitat', 'misi-2.jpg', 'Hutan Konservasi Kalaweit ini adalah program kerjasama Kalaweit yang melibatkan Pemerintah Desa, Aparatur Desa, Serta Masyarakat untuk bekerja sama. Dibangun Sejak 2011, Kalaweit menjalankan programnya dengan cara membebaskan lahan, sesuai dengan aturan dan perundang-undangan yang berlaku untuk dijadikan kawasan hutan konservasi dan berfungsi dalam melindungi satwa liar dan habitatnya.<br><br> Pengamanan kawasan ini Dilakukan oleh Tim patrol menggunakan kuda sebagai sarana transportasi di darat, dan di udara menggunakan drone dan paramotor.'),
(3, 'Penyuluhan kepada masyarakat', 'misi-3.jpg', 'Kegiatan penyebaran informasi dan sosialisas:<br><br> 1. Radio Kalaweit: Menyampaikan pesan tentang isu lingkungan meliputi, pesan menjaga kelestarian hutan <br><br> 2. Media Sosial: Aplikasi Kalaweit yang dapat di download gratis melalui App store maupun google Play. dan Juga Melalui Media sosial Chanee Seperti Youtube, Facebook, Dan Instagram.<br><br> 3. Sosialisasi: Kegiatan Kalaweit dengan Pemerintahan Desa yang berada di Ruang Lingkup Sekitaran Wilayah Kerja Kalaweit serta Publikasi/Sosialisasi Bersama BKSDA dan Mitra Terkait Lainnya.<br><br> Tujuan utama adalah masyarakat ikut melestarikan hutan dan tidak memelihara lagi satwa liar sebagai satwa peliharaan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `program`
--

INSERT INTO `program` (`id`, `title`, `thumbnail`, `description`) VALUES
(1, 'Pusat Rehabilitasi Pararawen', 'pusat-rehabilitasi-pararawen.jpg', 'Pusat Rehabilitasi ini terletak di Pararawen, Dusun Pararawen, Kabupaten\r\n Barito Utara, Kalimantan Tengah. Dengan fungsi utama sebagai pusat \r\nRehabilitasi &amp; Karantina satwa. \r\nKebanyakan satwa yang di rawat di pusat rehabilitasi adalah owa, beruang\r\n dan buaya. Pusat rehabilitasi tersebut tidak di buka untuk umum.<span> </span><span lang=\"EN-US\"><span>Terdapat </span><i><span>Standart Operational Procedure </span></i><span>(SOP)\r\nyang dijalankan oleh staf Kalaweit dalam kegiatannya menangani seekor satwa di\r\npusat rehabilitasi.</span></span>'),
(2, 'Pusat rehabilitasi Supayang', 'pusat-rehabilitasi-supayang.jpg', 'Pusat Rehabilitasi ini terletak di Supayang, Nagari Supayang, Kecamatan Payung Sekaki, Kabupaten Solok, Sumatra Barat. Dengan fungsi utama sebagai pusat Rehabilitasi dan Karantina satwa. Kebanyakan satwa yang di rawat di pusat rehabiltasi tersebuut adalah siamang, owa dan beruang. Pusat rehabilitasi tersebut tidak di buka untuk umum.<br><br> Tempat pelepasan untuk siamang terletak di Solok Selatan (KSI), Sumatra Barat, dimana ada sekitar 30 ekor siamang yang sudah di lepas dan yang masih di monitor oleh tim Kalaweit.'),
(3, 'Pusat rehabilitasi Mentawai', 'pusat-rehabilitasi-mentawai.jpg', 'Di tahun 2021 ini sedang di bangun pusat rehabilitasi di pulau siberut untuk merawat sawat endemik dari Mentawai (korban dari deforestasi, perburuan dan perdagangan illegal) agar tidak perlu di kirim ke pusat rehabilitasi di Sumatra. Pusat tersebut berfokus untuk primata tetapi akan membantu juga semua satwa liar.'),
(4, 'Kawasan Dulan', 'kawasan-dulan.jpg', 'Kawasan ini adalah yang terkaya, dalam hal keanekaragaman hayati, dari semua kawasan Kalaweit yang ada. Dibangun Sejak 2019, Lokasi Kawasan Dulan ini terletak di desa Butong, Kecamatan Teweh Selatan, Kabupaten Barito Utara, Propinsi Kalimantan Tengah, Indonesia.<br><br> Nama Dulan diambil dari nama orangutan betina pertama yang ditemukan di daerah tersebut. Penemuan area (melalui darat) terjadi pada bulan Oktober 2018. Sebelumnya hanya survey udara menggunakan paramotor oleh Chanee.<br><br> Kawasan ini merupakan tipe hutan mosaik dari vegetasi sekunder (tua) dan primer, dataran rendah, dengan kanopi yang terhubung dan memiliki tinggi rata-rata 30 sd 50 meters, dan merupakan Habitat Oragutan, Owa, Beruang Madu, Macan Dahan, dll. Saat ini Kawasan Dulan seluas : 625.7 ha'),
(5, 'Kawasan Pararawen', 'kawasan-pararawen.JPG', 'Kawasan ini dibangun Sejak Januari 2015, berada di Kalimantan Tengah, Kab Barito Utara, Kec Lemo. Kawasan ini merupakan tipe hutan Sekunder (dataran Rendah) Dimana Sebagian Kawasanya Masih Terdapat Kebun Karet Tradisional. Dan merupakan Habitat Owa-Owa, Bekantan, Kera, Binturong, Landak, Kukang, dll. Saat ini Kawasan Pararawen seluas : 302.5 ha'),
(6, 'Kawasan Supayang', 'kawasan-supayang.jpg', 'Pertama, Kawasan ini Dibangun tahun 2011, yang berada di Sumatera Barat, kab Solok, Kec Payung Sekaki. Kawasan ini merupakan tipe hutan primer dan sekunder, dengan ketinggian antara 600-1050 Mdpl. Dan merupakan Habitat Owa-Owa, Siamang,Beruang, Tapir, Macan Dahan, Kucing Mas, dll. Saat ini Kawasan Pararawen seluas : 385.1 ha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `youtube`
--

CREATE TABLE `youtube` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `misi`
--
ALTER TABLE `misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
