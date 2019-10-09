-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 25, 2019 at 07:06 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Kang disman', 'kang@gmail.com', '$2y$10$JS272szBP5GVkNsAnT3JjeHyXAZgyNu8JAxZ1ZzFPN/5rsXG2ODR6');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(128) NOT NULL DEFAULT 'default.jpg',
  `counter` int(3) NOT NULL,
  `date_created` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `title`, `content`, `image`, `counter`, `date_created`, `category_id`) VALUES
(1, 'Coba saja', '<p>lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor </p>', 'default.jpg', 0, 1568396744, 23),
(2, 'test kagn', '<p>lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor <br></p>', 'default.jpg', 0, 1568397787, 22),
(3, 'Artikel terbaru', '<p>Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor </p>', 'default.jpg', 0, 1568855656, 21),
(4, 'Tambah artikel baru', '<p>coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba lagi coba </p>', 'default.jpg', 0, 1568875097, 23),
(5, 'Artikel bergambar', '<p>test gambar</p>', 'img4.jpg', 0, 1568871180, 23);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(21, 'Kabar Desa'),
(22, 'Opini'),
(23, 'Artikel');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `berkas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kabardesa`
--

CREATE TABLE `kabardesa` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(128) NOT NULL,
  `counter` int(3) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabardesa`
--

INSERT INTO `kabardesa` (`id`, `title`, `content`, `image`, `counter`, `date_created`) VALUES
(3, 'test youtube', '&lt;p&gt;&amp;lt;iframe frameborder=&quot;0&quot; src=&quot;//www.youtube.com/embed/v99A0FgcT2U&quot; width=&quot;640&quot; height=&quot;360&quot; class=&quot;note-video-clip&quot;&amp;gt;Youtube&amp;lt;/iframe&amp;gt;&lt;br&gt;&lt;/p&gt;', 'default.jpg', 0, 1565194406);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `url`, `icon`, `is_active`) VALUES
(5, 'Dashboard', 'admin/dashboard', 'glyphicon glyphicon-home', 1),
(6, 'Kategori', 'admin/kategori', 'glyphicon glyphicon-tasks', 1),
(7, 'Artikel', 'admin/artikel', 'glyphicon glyphicon-pencil', 1),
(8, 'Kabar desa', 'admin/kabardesa', 'glyphicon glyphicon-send', 1),
(9, 'Opini', 'admin/opini', 'glyphicon glyphicon-fire', 1),
(10, 'Penduduk', 'admin/penduduk', 'glyphicon glyphicon-user', 1),
(11, 'Download', 'admin/download', 'glyphicon glyphicon-save', 1),
(50, 'Management menu', 'admin/menu', 'glyphicon glyphicon-wrench', 1);

-- --------------------------------------------------------

--
-- Table structure for table `opini`
--

CREATE TABLE `opini` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `image` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `date_created` int(11) NOT NULL,
  `counter` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opini`
--

INSERT INTO `opini` (`id`, `title`, `image`, `content`, `date_created`, `counter`) VALUES
(3, 'Tentang Git', 'images.png', '<p>ini adalah tentang git dan juga ini adalah tentang saya</p>', 1566784572, 0),
(4, 'What is Lorem Ipsum?', 'default.jpg', '<p><strong xss=\"removed\">Lorem Ipsum</strong><span xss=\"removed\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 1566784543, 0),
(5, 'Where does it come from?', 'default.jpg', '<p><span xss=\"removed\" xss=removed>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span></p><p xss=\"removed\"><span xss=removed>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</span></p>', 1566784530, 0),
(6, 'Why do we use it?', 'default.jpg', '<p xss=removed><span xss=removed>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', 1566784647, 0),
(7, 'Where can I get some?', 'default.jpg', '<p xss=removed><span xss=removed>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span></p>', 1566784675, 0);

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` char(16) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `gender` enum('Pria','Wanita') NOT NULL,
  `usia` int(11) NOT NULL,
  `rt` int(1) NOT NULL,
  `dusun` varchar(50) NOT NULL,
  `pendidikan` varchar(25) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`nik`, `nama`, `gender`, `usia`, `rt`, `dusun`, `pendidikan`, `pekerjaan`) VALUES
('7404100106690001', 'La Sarimajo', 'Pria', 50, 1, 'Ngapaompu', 'Tamat SD/Sederajat', 'Nelayan/Perikanan'),
('7404100107740078', 'La Jaeni', 'Pria', 45, 1, 'Ngapaompu', 'SLTA/Sederajat', 'Nelayan/Perikanan'),
('7404100811070001', 'Alamsyah Rahmaeni', 'Pria', 12, 1, 'Ngapaompu', 'SD/Sederajat', 'Pelajar/Mahasiswa'),
('7404101204940001', 'Sarwan', 'Pria', 25, 1, 'Ngapaompu', 'SLTA/Sederajat', 'Nelayan/Perikanan'),
('7404101207030001', 'La Karama', 'Pria', 16, 1, 'Ngapaompu', 'Tidak tamat SD/Sederajat', 'Belum/Tidak bekerja'),
('7404101708020002', 'Amal Hidayat Masni', 'Pria', 17, 1, 'Ngapaompu', 'SLTP/Sederajat', 'Pelajar/Mahasiswa'),
('7404101803010001', 'Mardin La Diy', 'Pria', 18, 1, 'Ngapaompu', 'SLTP/Sederajat', 'Pelajar/Mahasiswa'),
('7404102402950002', 'La Aliwara', 'Pria', 24, 1, 'Ngapaompu', 'Tamat SD/Sederajat', 'Nelayan/Perikanan'),
('7404103010750001', 'La Diy', 'Pria', 44, 1, 'Ngapaompu', 'Tamat SD/Sederajat', 'Nelayan/Perikanan'),
('7404104106720001', 'Wa Ode Hajiani', 'Wanita', 47, 1, 'Ngapaompu', 'Tamat SD/Sederajat', 'Mengurus Rumah Tangga'),
('7404104107740094', 'Rahama', 'Wanita', 45, 1, 'Ngapaompu', 'SLTA/Sederajat', 'Mengurus Rumah Tangga'),
('7404105007010001', 'Wa Lisa', 'Wanita', 18, 1, 'Ngapaompu', 'SLTP/Sederajat', 'Pelajar/Mahasiswa'),
('7404105405000005', 'Venti Nurmaeni', 'Wanita', 19, 1, 'Ngapaompu', 'SLTA/Sederajat', 'Pelajar/Mahasiswa'),
('7404106502990002', 'Wa Rana', 'Wanita', 20, 1, 'Ngapaompu', 'SLTA/Sederajat', 'Pelajar/Mahasiswa'),
('7404106502990003', 'Wa Rani', 'Wanita', 20, 1, 'Ngapaompu', 'SLTA/Sederajat', 'Pelajar/Mahasiswa'),
('7404106611760001', 'Wa Siti Rukiah', 'Wanita', 43, 1, 'Ngapaompu', 'Tamat SD/Sederajat', 'Mengurus Rumah Tangga'),
('7404106803950001', 'Sunarti La Diy', 'Wanita', 24, 1, 'Ngapaompu', 'SLTA/Sederajat', 'Mengurus Rumah Tangga'),
('7415026504130001', 'Sunarlia La Diy', 'Wanita', 6, 1, 'Ngapaompu', 'Tidak/Belum Sekolah', 'Belum/Tidak Bekerja');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `profil` text NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `judul`, `profil`, `date_created`) VALUES
(1, 'Profil Desa Bahari', '<h5><b>1. Gambaran Umum Desa</b></h5><p>        Desa Bahari merupakan salah satu desa dalam wilayah Kecamatan Sampolawa Kabupaten Buton Selatan. Secara administratif, wilayah Desa Bahari memiliki batas sebagai berikut :</p><ul><li>Sebelah Utara        : Desa Tira</li><li>Sebelah Selatan    : Laut Flores</li><li>Sebelah Timur       : Desa Bahari Dua</li><li>Sebelah Barat        : Teluk Sampolawa</li></ul><p>        Luas wilayah Desa Bahari adalah 450 Ha yang terdiri dari 7,34 Ha berupa pemukiman, 415 Ha berupa daratan yang digunakan untuk lahan pertanian. Sebagaimana wiayah tropis, Desa Bahari mengalami dua musim yaitu musim kemarau dan musim hujan setiap tahunnya. Rata-rata perbandingan musim hujan lebih kecil dari pada musim kemarau.</p><p>        Jarak pusat desa dengan ibu kota kabupaten yang dapat ditempuh melalui perjalanan darat kurang lebih 40 km. Kondisi prasarana jalan yang berupa jalan aspal dengan kondisi rusak parah mengakibatkan waktu tempuh menggunakan kendaraan bermotor mencapai kurang lebih 100 menit. Sedangkan jarak pusat desa dengan ibu kota kecamatan yang dapat ditempuh melalui perjalanan darat kurang lebih 21 km. Kondisi ruas jalan yang dilalui juga berupa jalan aspal dengan kondisi rusak parah mengakibatkan waktu tempuh menggunakan kendaraan bermotor mencapai kurang lebih 40 menit. Berdasarkan kondisi desa ini maka akan dijabarkan permasalahan, potensi, hingga daftar Rencana Pembangunan Jangka Menengah Desa (RPJM Desa) yang diprogramkan untuk 6 (enam) tahun.</p><p><br></p><h5><b>2. Sejarah Desa</b></h5><p>        Desa Bahari berdiri sejak tahun 1963. Pada awal berdirinya Desa Bahari memiliki wilayah yang cukup luas dan terdiri dari 3 (tiga) dusun yaitu Dusun Wapulaka, Dusun Lagunci, dan Dusun Tira. Namun seiring dengan perkembangan waktu, jumlah penduduk serta kebutuhan akan pelayanan masyarakat maka pada tahun 1979 Desa Bahari dimekarkan menjadi 2 (dua) desa yaitu Desa Bahari yang terdiri dari dua dusun (Dusun Wapulaka dan Dusun Lagunci) dan Desa Tira. Kemudian pada tahun 2011 Desa Bahari kembali dimekarkan menjadi 3 (tiga) desa yaitu Desa Bahari, Desa Bahari Dua, dan Desa Bahari Tiga. Desa Bahari terdiri atas 2 (dua) dusun yaitu Dusun Ngapaompu dan Dusun Wapulaka.</p><p>        Adapun peristiwa-peristiwa penting Desa Bahari dapat digambarkan sebagai berikut :</p><ol><li><b>Tahun 1963 : </b>Terbentuknya Desa Bahari</li><li><b>Tahun 1973 :</b> Pembangunan Balai Desa secara swadaya</li><li><b>Tahun 1976 : </b>Juara II Lomba Desa tingkat Kabupaten Buton</li><li><b>Tahun 1979 : </b>Pemekaran Desa Bahari menjadi dua desa yaitu Desa Bahari dan Desa Tira</li><li><b>Tahun 1981 : </b>Mendapat bantuan jambu mente</li><li><b>Tahun 1982 : </b>Pembangunan sanggar PKK hadiah lomba desa</li><li><b>Tahun 1992 : </b>Dampak dari tsunami Flores mengakibatkan kapal nelayan sebagian rumah penduduk mengalami kerusakan</li><li><b>Tahun 2000 : </b>Renovasi Masjid Nurul Aqidah Desa Bahari secara swadaya</li><li><b>Tahun 2001 : </b>Pembangunan Rumah Jabatan Kepala Desa</li><li><b>Tahun 2004 : </b>Mendapat bantuan pembangunan talud pemecah ombak dari PPK</li><li><b>Tahun 2005 : </b>Pembangunan talud pemecah ombak dari dana kompensasi pengurangan subsidi BBM dan menerima bantuan mesin 3 unit</li><li><b>Tahun 2006 : </b>Juara I lomba desa tingkat provinsi Sulawesi Tenggara</li><li><b>Tahun 2009 : </b>Pembangunan gedung SDN 1 Bahari dari Dana PNPM-MP dan penanaman pohon sengon dari dana PNPM-MP</li><li><b>Tahun 2010 : </b>Pengadaan jaringan listrik dan Genset dari dana PNPM-MP</li><li><b>Tahun 2011 : </b>Pemekaran Desa Bahari menjadi tiga desa yaitu Desa Bahari, Desa Bahari Dua, dan Desa Bahari Tiga</li><li><b>Tahun 2013 : </b>Penambahan tiga RKB Gedung MTs Bahari</li><li><b>Tahun 2014 : </b>Peningkatan jalan rabat beton dan gorong-gorong oleh program PNPM-MP</li></ol>', 1566964829),
(2, 'Profil Pemerintah Desa Bahari', 'test', 1568875859),
(3, 'Profil BPD (Badan Permusyawaratan Desa)', '<p>Ini adalah profil BPD (Badan Permusyawaratan Desa) Desa Bahari kec sampolawa.</p><p>Adapun susunan pengurusnya adalah sebagai berikut:</p><ol><li>Ketua : La Dimi K., S.Pd.</li><li>Wakil Ketua : Amrida G. S.Pd.</li><li>Sekretaris : Lisdiwanti, S.Pd.</li><li>Anggota : Wa Ode Ampiana, S.Pd.</li><li>Anggota : La Soni, S.Pd.</li></ol>', 1568856500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabardesa`
--
ALTER TABLE `kabardesa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opini`
--
ALTER TABLE `opini`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kabardesa`
--
ALTER TABLE `kabardesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `opini`
--
ALTER TABLE `opini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
