-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 16, 2019 at 03:18 AM
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
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(128) NOT NULL DEFAULT 'default.jpg',
  `url` varchar(100) NOT NULL,
  `counter` int(3) NOT NULL,
  `date_created` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `title`, `content`, `image`, `url`, `counter`, `date_created`, `category_id`) VALUES
(5, 'Mendes Ingin Dana Desa di Nias Untuk Kembangkan Wisata', '<p><b xss=\"removed\">Jakarta</b><span xss=\"removed\"> - Menteri Desa, Pembangunan Daerah Tertinggal, dan Transmigrasi Eko Putro Sandjojo mendorong desa-desa di Nias menggunakan dana desanya untuk pengembangan desa wisata. Pasalnya, lima tahun ke depan dana desa meningkat dari Rp 257 triliun menjadi Rp 400 triliun. Fokusnya akan lebih banyak untuk pengembangan SDM dan pemberdayaan ekonomi.</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">\"Tolong dana desanya digunakan untuk membangun desa-desa wisata. Lima tahun ini banyak desa wisata yang pendapatannya puluhan milyar bahkan bayar pajaknya lebih besar dari dana desa yg diterimanya. Saya yakin, tahun depan Nias sudah dapat di atas 1 milyar,\" ujarnya dalam keterangan resmi, Sabtu (14/9/2019).</span></p><p><span xss=\"removed\">Eko melanjutkan, dengan fokus mengembangkan sektor pariwisata, dana desa sebesar satu miliar yang didapat sudah cukup membantu BUMDes mengembangkan sektor pariwisata.</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">\"Dengan alam yang bagus di Nias ini, investasi 1 Milyar untuk desa wisata akan kembali dalam 1-2 tahun,\" pungkasnya.</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Dalam rangka Sail Nias ini, Kementerian Desa, Pembangunan Daerah Tertinggal, dan Transmigrasi pun ikut serta dalam pameran Wonderful Expo.</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">\"Di pameran, kami bawa BUMDes-BUMDes sukses dari seluruh Indonesia, jadi desa-desa di Nias bisa belajar bagaimana mengelola BUMDes,\" jelasnya.</span></p><p><span xss=\"removed\">Ia juga berharap acara sail Nias ini menjadikan Nias dikenal, juga dengan hadirnya duta-duta besar mengikuti rangkaian acara mudahan mendapat dampak positif.</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">\"Dengan adanya sail ini berharap bisa mendongkrak perekonomian di Nias khususnya, Sumatera Utara umumnya,\" katanya.</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Mendes bersama Menteri Hukum dan Hak Asasi Manusia (Menkumham) Yasona Laoli sebelumnya juga meninjau langsung persiapan event Sail Nias 2019 yang puncaknya dipusatkan di Pelabuhan Teluk Dalam, Nias Selatan, Sumatera Utara.</span></p><p><span xss=\"removed\">sumber : </span><a href=\"https://news.detik.com/berita/d-4706532/mendes-ingin-dana-desa-di-nias-untuk-kembangkan-wisata?_ga=2.201797393.1426468918.1569684391-757031943.1569684391\" target=\"_blank\">news.detik.com</a><br xss=\"removed\"></p>', 'iMac.png', 'Mendes-Ingin-Dana-Desa-di-Nias-Untuk-Kembangkan-Wisata_ID', 0, 1569687764, 23),
(7, 'Korupsi Dana Desa Rp 287 Juta, Kades di Jombang Dijebloskan ke Penjara', '<p><b xss=\"removed\">Jombang</b><span xss=\"removed\"> - Kepala Desa Dukuhmojo, Mojoagung, Jombang, Prananjaya dijebloskan ke penjara. Dia diduga melakukan korupsi Dana Desa (DD) tahun 2018 dengan membuat proyek fiktif.</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Prananjaya diperiksa penyidik Pidana Khusus Kejari Jombang sejak pukul 10.00 WIB. Dalam pemeriksaan perdana ini, dia langsung ditetapkan sebagai tersangka kasus korupsi DD di Desa Dukuhmojo.</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Selama ini dia sudah dua kali mengabaikan panggilan penyidik. Prananjaya dijebloskan ke Lapas Kelas II-B Jombang sekitar pukul 16.00 WIB.</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">\"Hari ini PJ (Prananjaya) kami tetapkan sebagai tersangka dan kami tahan. Tersangka diduga melakukan penyaluran Dana Desa fiktif,\" kata Kepala Kejari Jombang Syafiruddin kepada wartawan di kantornya, Jalan KH Wahid Hasyim, Selasa (17/9/2019).</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Syafiruddin menjelaskan Prananjaya diduga melakukan korupsi DD untuk Desa Dukuhmojo tahun 2018. Modusnya, tersangka membuat proyek fiktif pembangunan tembok penahan tanah di desa tersebut. Selain itu, terdapat DD sekitar Rp 10 juta yang tidak disalurkan untuk masyarakat.</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">\"Nilai kerugian Dana Desa yang dikucurkan sekitar Rp 287 juta. Dana itu tidak digunakan sesuai peruntukannya,\" ungkapnya.</span></p><p><span xss=\"removed\">Untuk menutupi kesalahannya, lanjut Syafiruddin, tersangka membuat laporan pertanggungjawaban penggunaan DD fiktif. Dengan dana Rp 70 juta, tersangka juga membangun tanggul penahan tanah ala kadarnya. Tujuannya untuk mengelabui penyidik seolah-olah proyek Rp 278 juta sudah dikerjakan.</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">\"Sudah kami cek ke lapangan, bangunan yang ada dibangun Rp 70 juta untuk merekayasa. Kami cek bangunan dipegang saja hancur karena tidak sesuai speknya,\" terangnya.</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">Akibat perbuatannya, Prananjaya dijerat dengan Pasal 2 dan 3 UU RI Nomor 20 Tahun 2001 tentang Pemberantasan Tindak Pidana Korupsi. Ancaman hukuman 20 tahun penjara sudah menantinya. Kini Kejari Jombang menyelidiki keterlibatan pihak lain dalam kasus ini.</span><br xss=\"removed\"><br xss=\"removed\"><span xss=\"removed\">\"Masih kami dalami untuk tersangka lain,\" tandas Syafiruddin.</span></p><p>sumber: <a href=\"https://news.detik.com/berita-jawa-timur/d-4710172/korupsi-dana-desa-rp-287-juta-kades-di-jombang-dijebloskan-ke-penjara?_ga=2.198126127.1426468918.1569684391-757031943.1569684391\" target=\"_blank\">news.detik.com</a><span xss=\"removed\"><br></span></p>', 'browsers.png', 'Korupsi-Dana-Desa-Rp-287-Juta-Kades-di-Jombang-Dijebloskan-ke-Penjara_ID', 0, 1569687777, 23),
(8, 'Bukit Kelam, Wisata Alam Eksotis Sintang yang Simpan Banyak Misteri', '<span xss=\"removed\"><b>Jakarta</b></span><span xss=\"removed\"><b> -</b> </span>Bukit Kelam menjadi objek wisata ikonik di Sintang, Kalimantan Barat. Menariknya, bukit ini bukan dari tanah, melainkan dari batu besar. Dinamakan kelam pun karena batu tersebut berwarna hitam kelam.<p xss=\"removed\">Bukit yang berjarak sekitar 23 km dari pusat Kabupaten Sintang ini bisa ditempuh sekitar 30-40 menit hingga ke kaki bukit. Di sepanjang perjalanan, traveler akan disuguhkan dengan pemandangan alam di kiri dan kanan seperti kebun sawit, pisang, dan karet.</p><p xss=\"removed\">Akses jalan menuju kaki bukit ini terbilang sangat baik dengan dilapisi aspal. Namun, jalanan yang naik turun seperti lewati bukit membuat pengendara mesti hati-hati. Dari cerita yang beredar, konon bukit tersebut dilingkupi berbagai kisah misteri.</p><p xss=\"removed\">Menurut Ketua Adat di Desa Kebong, Kabupaten Sintang, Karen Ayo (76) Bukit Kelam adalah batu yang di angkat oleh pemuda Dayak bernama Bujang Beji.Tujuannya pendekar raksasa ini ingin menutup persimpangan antara Sungai Kapuas dan Melawi.</p><p xss=\"removed\">\"Jadi memang Bujang Beji ini raksasa, karena zaman dulu juga kan ukuran badannya lebih besar dari kita-kira sekarang ini, Jadi niatnya itu ambil batu besar ini buat nutup simpang Sungai Kapuas dan Melawi. Pas dia mau bawa ke sana cuma di perjalanan putus lah talinya, dari ikatan ilalang tadi tuh. Terus jatuh lah di sini, akhirnya jadi bukit kelam,\" ujarnya kepada detikcom, Rabu (28/8/2019).</p><p xss=\"removed\">\"Saat jatuh, Bujang Beji ini mau mengangkat lagi, tapi nggak bisa. Dicongkel bagaimana pun juga nggak bisa. Begitulah cerita orang tua soal bukit kelam ini, \" tambahnya.</p><p xss=\"removed\">Ada juga yang mengatakan bahwa Bukit Kelam adalah meteor yang jatuh ke bumi pada masa lalu. Hal itu juga dimungkinkan karena adanya batu dengan bentuk yang lebih kecil di area sekeliling kaki bukit kelam.</p><p xss=\"removed\">Terlepas dari segala mitos dan kisah misteri, tidak sedikit traveler yang naik ke puncak Bukit Kelam. Dalam perjalanan menuju puncak, traveler akan disuguhi pemandangan indah khas hutan Kalimantan.</p><p xss=\"removed\">Untuk mendaki sampai puncak bagi yang belum terbiasa memerlukan waktu 3-4 jam. Dengan kemiringan sampai 15-40 derajat maka dibuatkan tangga besi untuk mempermudah pendakian.</p><p xss=\"removed\">\"Kalau jalannya dari bawah ke puncaknya, ada jalan setapak semacam tangga. Kekuatan tangganya itu boleh juga lah. Sampai sekarang masih utuh tangganya. Kalau di atas sana itu memang alam rimba lah, sampai sekarang ini masih dilestarikan alamnya,\" ujar Panji, salah seorang warga Desa Kebong, Kecamatan Kelam Permai.</p><p xss=\"removed\">\"Kami sebagai warga bukit kelam ini merasa bangga lah, punya bukit kelam yang berbatu. Katanya terbesar sedunia. Makanya banyak juga turis-turis sedunia yang berkunjung ke sini,\" tambahnya.</p><p xss=\"removed\">Selain itu, di area kaki bukit yang masih dalam kawasan Desa Kebong, terdapat spot foto Instagramable. Bukit Kelam memang salah satu dari bagian cagar budaya milik Kabupaten Sintang. Selain hutan rimba, menurut warga sekitar, terdapat pula sumber mata air yang konon tak pernah habis meski kemarau.</p><p xss=\"removed\">Salah satu pemanfaatannya, air bersih tersebut diambil untuk dijadikan usaha air minum dalam kemasan. Dibantu dengan dana desa, air mineral kemasan ini baru tahun ini berjalan, dibentuk BUMDes untuk dikelola warga sekitar sebagai upaya untuk meningkatkan perekonomian lewat sumber daya alam yang ada.</p><p xss=\"removed\">sumber: <a href=\"https://travel.detik.com/travel-news/d-4704866/bukit-kelam-wisata-alam-eksotis-sintang-yang-simpan-banyak-misteri?_ga=2.168830497.1426468918.1569684391-757031943.1569684391\" target=\"_blank\">travel.detik.com</a></p>', 'screen.png', 'Bukit-Kelam-Wisata-Alam-Eksotis-Sintang-yang-Simpan-Banyak-Misteri_ID', 0, 1569687737, 23);

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

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `title`, `berkas`) VALUES
(21, 'PermenDesaPDTT Nomor 11 Tahun 2019 ttg Prioritas Penggunaan Dana Desa Tahun 2020', 'PermenDesaPDTT_Nomor_11_Tahun_2019_ttg_Prioritas_Penggunaan_Dana_Desa_Tahun_2020_(Salinan).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `galery` text NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `title`, `keterangan`, `galery`, `date_created`) VALUES
(2, 'hfv', 'dfbvnx', 'default.jpg', 1570552243);

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
(12, 'Galery', 'admin/galery', 'glyphicon glyphicon-hd-video', 1),
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
-- Indexes for table `galery`
--
ALTER TABLE `galery`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kabardesa`
--
ALTER TABLE `kabardesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

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
