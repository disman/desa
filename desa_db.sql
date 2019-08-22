-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 22, 2019 at 07:14 AM
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
(29, 'Pembuatan Website Desa, Optimalkan Publikasi Potensi Desa di Era Digital', 'Jaringan informasi saat ini semakin mudah, kita dapat mengetahui profile sautu daerah hanya dengan mencarinya di internet. Namun tidak semua wilayah memiliki informasi yang lengkap terkait dengan potensi wilayahnya. Sedangkan manfaat publikasi tersebut selain sebagai arsip desa secara digital, yaitu mampu menambah wawasan pengguna media digital terhadap informasi desa yang telah dipublikasi di internet.\r\nProfil Desa Bahari memiliki berbagai konten yaitu letak geografi desa, potensi alam desa, wisata desa dan kegiatan masyarakat yang ada di Desa Bahari.\r\nPembuatan website desa ini diharapkan dapat menjadi arsip digital sehingga dapat mempopulerkan nama Desa Bahari baik dari segi wisatanya maupun potensi alamnya ditingkat nasional bahkan internasional.', 'img3.jpg', 0, 1563208631, 22),
(30, 'Tentang Artikel lagi', '&lt;p&gt;&lt;b xss=removed&gt;Artikel&lt;/b&gt;&lt;span xss=removed&gt; adalah karangan faktual secara lengkap dengan panjang tertentu yang dibuat untuk dipublikasikan di media online maupun cetak (melalui koran, majalah, buletin, dsb) dan bertujuan menyampaikan gagasan dan fakta yang dapat meyakinkan, mendidik, dan menghibur.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', 'img1.jpg', 0, 1565192489, 21);

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
(21, 'Sains'),
(22, 'Teknologi'),
(23, 'Agama');

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
(3, 'tentang git', 'images.png', '&lt;p&gt;ini adalah tentang git dan juga ini adalah tentang saya &lt;/p&gt;', 1565105946, 0);

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
(1, 'Profil Desa Bahari', 'Ini adalah profil desa bahari yang lagi dicoba kab busel', 1565453586),
(2, 'Profil Pemerintah Desa Bahari', 'Ini adalah profil pemerintah desa bahari sultra kecamtan sampolawa', 1565453568),
(3, 'Profil BPD (Badan Permusyawaratan Desa)', '&lt;p&gt;Ini adalah profil BPD (Badan Permusyawaratan Desa) Desa Bahari kec sampolawa.&lt;/p&gt;&lt;p&gt;Adapun susunan pengurusnya adalah sebagai berikut:&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Ketua : La Dimi. K, S.Pd.&lt;/li&gt;&lt;li&gt;Amrida G. S.Pd.&lt;/li&gt;&lt;li&gt;Lisdiwanti, S.Pd.&lt;/li&gt;&lt;li&gt;Wa Ode Ampiana, S.Pd.&lt;/li&gt;&lt;li&gt;La Soni, S.Pd.&lt;/li&gt;&lt;/ol&gt;', 1565538000);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
