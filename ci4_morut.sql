-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2022 at 08:33 PM
-- Server version: 8.0.12
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4_morut`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `history` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `geografi` text COLLATE utf8_unicode_ci NOT NULL,
  `demografi` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `history`, `geografi`, `demografi`) VALUES
(1, '<p>Secara geografis, Kabupaten Morowali Utara terletak pada 1&deg;31&prime; &ndash; 3&deg;04&prime; Lintang Selatan dan 121&deg;02&prime; &ndash; 123&deg;15&prime; Bujur Timur.</p>\r\n<p>Kabupaten Morowali Utara (bahasa Inggris: North Morowali Regency), adalah sebuah kabupaten di provinsi Sulawesi Tengah, Indonesia. Ibu kota kabupaten sekaligus pusat administrasi terletak di kota Kolonodale. Morowali Utara merupakan hasil pemekaran dari Kabupaten Morowali yang disahkan dalam sidang paripurna DPR RI pada 12 April 2013 di gedung DPR RI tentang Rancangan UU Daerah Otonomi Baru (DOB). Kabupaten Morowali Utara mempunyai batas-batas wilayah: Sebelah utara berbatasan dengan Desa Buyuntaripa, Desa Korondoda, Desa Bugi Kecamatan Tojo dan Desa Rompi Kecamatan Ulubongka Kabupaten Tojo Una-Una.</p>\r\n<p>Sebelah timur berbatasan dengan Desa Rata, Desa Gunung Kramat, Desa Matawa, Desa Mangkapa Kecamatan Toili Barat Kabupaten Banggai, dan Laut Banda; Sebelah selatan berbatasan dengan Desa Solonsa Kecamatan Wita Ponda Kabupaten Morowali dan Desa Nuha, Desa Matano, dan Desa Sorowako Kecamatan Nuha Kabupaten Luwu Timur Provinsi Sulawesi Selatan; dan Sebelah barat berbatasan dengan Desa Uelene, Desa Mayasari Kecamatan Pamona Selatan dan Desa Pancasila, Desa Kamba, Desa Matialemba, Desa Kancu&rsquo;u dan Desa Masewe Kecamatan Pamona Timur Kabupaten Poso.</p>', '<p>Secara geografis, Kabupaten Morowali Utara terletak pada 1&deg;31&prime; &ndash; 3&deg;04&prime; Lintang Selatan dan 121&deg;02&prime; &ndash; 123&deg;15&prime; Bujur Timur</p>', '<p>Kabupaten Morowali Utara (bahasa Inggris: North Morowali Regency), adalah sebuah kabupaten di provinsi Sulawesi Tengah, Indonesia. Ibu kota kabupaten sekaligus pusat administrasi terletak di kota Kolonodale. Morowali Utara merupakan hasil pemekaran dari Kabupaten Morowali yang disahkan dalam sidang paripurna DPR RI pada 12 April 2013 di gedung DPR RI tentang Rancangan UU Daerah Otonomi Baru (DOB). Kabupaten Morowali Utara mempunyai batas-batas wilayah: Sebelah utara berbatasan dengan Desa Buyuntaripa, Desa Korondoda, Desa Bugi Kecamatan Tojo dan Desa Rompi Kecamatan Ulubongka Kabupaten Tojo Una-Una.</p>\r\n<p>Sebelah timur berbatasan dengan Desa Rata, Desa Gunung Kramat, Desa Matawa, Desa Mangkapa Kecamatan Toili Barat Kabupaten Banggai, dan Laut Banda; Sebelah selatan berbatasan dengan Desa Solonsa Kecamatan Wita Ponda Kabupaten Morowali dan Desa Nuha, Desa Matano, dan Desa Sorowako Kecamatan Nuha Kabupaten Luwu Timur Provinsi Sulawesi Selatan; dan Sebelah barat berbatasan dengan Desa Uelene, Desa Mayasari Kecamatan Pamona Selatan dan Desa Pancasila, Desa Kamba, Desa Matialemba, Desa Kancu&rsquo;u dan Desa Masewe Kecamatan Pamona Timur Kabupaten Poso.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `agenda_id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(400) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `agenda` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`agenda_id`, `title`, `slug`, `category`, `agenda`) VALUES
(1, 'Senam Masal ', 'senam-masal', 'Kabupaten / Pemerintahan', '<p>Senam Masal \"INDONESIA MERDEKA\" Dalam Rangka Memeriahkan Peringatan Hari Ulang Tahun Proklamasi Kemerdekaan RI ke - 77 Tahun&nbsp;</p>\r\n<table style=\"border-collapse: collapse; width: 52.2892%;\" border=\"1\"><colgroup><col style=\"width: 13.6309%;\"><col style=\"width: 86.3691%;\"></colgroup>\r\n<tbody>\r\n<tr>\r\n<td>Tempat</td>\r\n<td>: Start Kantor Bupati Morowali Utara</td>\r\n</tr>\r\n<tr>\r\n<td>Hari</td>\r\n<td>: Selasa</td>\r\n</tr>\r\n<tr>\r\n<td>Waktu</td>\r\n<td>: 13.00 Wita - Selsai</td>\r\n</tr>\r\n</tbody>\r\n</table>'),
(2, 'Lomba Gerak Jalan 17 Km', 'lomba-gerak-jalan-17-km', 'Kabupaten / Pemerintahan', '<p>Lomba Gerak Jalan 17 Km Dalam Rangka Memeriahkan Peringatan Hari Ulang Tahun Proklamasi Kemerdekaan RI ke - 77 Tahun 2022</p>\r\n<table border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td>Tempat</td>\r\n<td>&nbsp;: Start Depan Kantor Bupati Morowali Utara</td>\r\n</tr>\r\n<tr>\r\n<td>Hari</td>\r\n<td>&nbsp;: 2022-08-20 s/d 2022-08-20</td>\r\n</tr>\r\n<tr>\r\n<td>Waktu</td>\r\n<td>&nbsp;: 13.00 Wita - Selesai</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>'),
(3, 'Gejar Jalan 8 Km', 'gejar-jalan-8-km', 'Kabupaten / Pemerintahan', '<p>Gerak Jalan 8 Km Dalam Rangka Memeriahkan Peringatan Hari Ulang Tahun Proklamasi Kemerdekaan RI ke - 77 Tahun 2022</p>\r\n<table border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td>Tempat</td>\r\n<td>&nbsp;: Start Jl. Bahontula</td>\r\n</tr>\r\n<tr>\r\n<td>Hari</td>\r\n<td>&nbsp;: 2022-08-13 s/d 2022-08-13</td>\r\n</tr>\r\n<tr>\r\n<td>Waktu</td>\r\n<td>&nbsp;: 06.30 WITA - Selesai</td>\r\n</tr>\r\n</tbody>\r\n</table>'),
(4, 'Pelatihan Keterampilan bagi Pemuda Tahun 2019', 'pelatihan-keterampilan-bagi-pemuda-tahun-2019', 'Masyarakat', '<p>Pelatihan Keterampilan bagi Pemuda Tahun 2019 yang diikuti oleh 100 peserta dari unsur pemuda usia 16-30 tahun yang belum mempunyai usaha atau usaha pemula</p>\r\n<table border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td>Tempat</td>\r\n<td>&nbsp;: Gedung Moroka</td>\r\n</tr>\r\n<tr>\r\n<td>Hari</td>\r\n<td>&nbsp;: 2019-11-25 s/d 2019-11-26</td>\r\n</tr>\r\n<tr>\r\n<td>Waktu</td>\r\n<td>&nbsp;: 08.00 WITA - selesai</td>\r\n</tr>\r\n</tbody>\r\n</table>'),
(5, 'FKUB Gelar Dialog Bersama dengan Tema ', 'fkub-gelar-dialog-bersama-dengan-tema', 'Masyarakat', '<div class=\"mt-3 w-100 h-50\">Gelar Dialog Bersama dengan Tema \"Jangan Pernah Lelah Mencintai Indonesia\". Acara dihadiri Bupati Moroali Utara dan masyarakat Morowali Utara</div>\r\n<div class=\"mt-3 w-100 h-50\">&nbsp;</div>\r\n<table border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td>Tempat</td>\r\n<td>&nbsp;: Gedung Morokoa</td>\r\n</tr>\r\n<tr>\r\n<td>Hari</td>\r\n<td>&nbsp;: 2019-11-23 s/d 2019-11-23</td>\r\n</tr>\r\n<tr>\r\n<td>Waktu</td>\r\n<td>&nbsp;: 09.00 WITA s/d selesai</td>\r\n</tr>\r\n</tbody>\r\n</table>'),
(6, 'Lomba Mewarnai Gerabah Tingkat TK/RA dan SD/MI', 'lomba-mewarnai-gerabah-tingkat-tkra-dan-sdmi', 'Masyarakat', '<p>Lomba Mewarnai Tingkat TK/RA dan SD/MI dalam rangka Festival Mewarnai 2019. Lomba ini gratis/tidak dipungut biaya.</p>\r\n<table border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td>Tempat</td>\r\n<td>&nbsp;: Gedung Morokoa</td>\r\n</tr>\r\n<tr>\r\n<td>Hari</td>\r\n<td>&nbsp;: 2019-04-27 s/d 2019-04-27</td>\r\n</tr>\r\n<tr>\r\n<td>Waktu</td>\r\n<td>&nbsp;: 08.00 WITA - selesai</td>\r\n</tr>\r\n</tbody>\r\n</table>');

-- --------------------------------------------------------

--
-- Table structure for table `category_gallery`
--

CREATE TABLE `category_gallery` (
  `category_gallery_id` int(5) UNSIGNED NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_gallery`
--

INSERT INTO `category_gallery` (`category_gallery_id`, `category_name`) VALUES
(1, 'Budaya'),
(2, 'Wisata');

-- --------------------------------------------------------

--
-- Table structure for table `category_image`
--

CREATE TABLE `category_image` (
  `category_image_id` int(5) UNSIGNED NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category_news`
--

CREATE TABLE `category_news` (
  `category_news_id` int(11) NOT NULL,
  `category_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_news`
--

INSERT INTO `category_news` (`category_news_id`, `category_name`) VALUES
(1, 'Lingkungan'),
(2, 'Olahraga');

-- --------------------------------------------------------

--
-- Table structure for table `flash_screen`
--

CREATE TABLE `flash_screen` (
  `flash_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `job_history` text COLLATE utf8_unicode_ci NOT NULL,
  `education_background` text COLLATE utf8_unicode_ci NOT NULL,
  `organization_history` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `birth` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `flash_screen`
--

INSERT INTO `flash_screen` (`flash_id`, `name`, `position`, `job_history`, `education_background`, `organization_history`, `address`, `birth`, `img`) VALUES
(1, 'DR. Dr. Delis Julkarson Hehi, MARS', 'Bupati Morowali Utara', '<ol>\r\n<li>Tenaga Dokter PT. PELNI, Jakarta, 2002-2003</li>\r\n<li>Kepala Puskesmas Bualemo, Kab. Banggai, 2003-2004</li>\r\n<li>Kepala Puskesmas Tomata, Tomata, 2005-2008</li>\r\n<li>Anggota DPD-RI dapil Sulteng, 2014-2019</li>\r\n</ol>', '<ol>\r\n<li>SD Negeri I Lembo, Beteleme, 1982-1988</li>\r\n<li>SMP Negeri I Lembo, Beteleme, 1988-1991</li>\r\n<li>SMA Katolik St. Theresia, Poso, 1991-1994</li>\r\n<li>Universitas Hasanuddin, Makassar, 1995-1999</li>\r\n</ol>', '<ol>\r\n<li>Ketua OSIS SMA Katolik St. Theresia, Poso, 1993-1994</li>\r\n<li>Ketua Persekutuan Mahasiswa Kristen, Fakultas Kedokteran UNHAS 1997-1999</li>\r\n<li>Sekretaris GMKI Komisariat FK-UNHAS, Makassar, 1997-1999</li>\r\n<li>Pengurus Senat Mahasiswa FK-UNHAS, Makassar, 1997-1999</li>\r\n<li>Koordinator Leader Comitee Platinum, PT. Melianature Indonesia, Palu, 2008-2013</li>\r\n<li>Anggota Lions Club, Makassar, 2010-2013</li>\r\n</ol>', 'Desa Ronta, Kecamatan Lembo Raya Kabupaten Morowali Utara, Sulawesi Tengah.', 'Beteleme, 25 Juli 1976', 'bupati.jpg'),
(2, 'H. Djira. K, S. Pd. M. Pd', 'Wakil Bupati Morowali Utara', '<ol>\r\n<li>Guru SMAN Kolonodale,</li>\r\n<li>Pengawas SMA,</li>\r\n<li>Kepala Seksi,</li>\r\n<li>Kepala Bidang,</li>\r\n<li>Kepala Dinas Dikjar,</li>\r\n<li>Sekretaris DPRD,</li>\r\n<li>Asisten Pemerintahan Setkab Morut.</li>\r\n<li>Kepala Dinas Dikbud.</li>\r\n</ol>', '<ol>\r\n<li>SDN Kolobawah,</li>\r\n<li>SMPN Bungku,</li>\r\n<li>SMA KORPRI Bungku,</li>\r\n<li>UNTAD (S 1),</li>\r\n<li>UNIMA Manado ( S 2)</li>\r\n</ol>', '<p>--------</p>', 'Kolobawah', 'Kolobawah, 24 Februari 1965', 'wabup.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(5) UNSIGNED NOT NULL,
  `category_gallery_id` int(5) NOT NULL,
  `option` varchar(100) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `category_gallery_id`, `option`, `content`) VALUES
(1, 1, 'image', '1663869348_687ffe6d1c09e94d659b.jpeg'),
(2, 2, 'image', '1663869348_862ab22a0daad788bce8.jpg'),
(3, 2, 'video', '1ShAfn_MtMo'),
(4, 2, 'video', '1ShAfn_MtMo');

-- --------------------------------------------------------

--
-- Table structure for table `gis_batas_kecamatan`
--

CREATE TABLE `gis_batas_kecamatan` (
  `id` int(11) NOT NULL,
  `kecamatan_name` varchar(150) NOT NULL,
  `geojson_file` varchar(150) NOT NULL,
  `geojson_color` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gis_batas_kecamatan`
--

INSERT INTO `gis_batas_kecamatan` (`id`, `kecamatan_name`, `geojson_file`, `geojson_color`) VALUES
(1, 'Lembo', 'lembo.geojson', '#FF3500FF'),
(2, 'Lemboraya', 'lemboraya.geojson', '#FFDF02FA'),
(3, 'Bungku Utara', 'bungku_utara.geojson', '#07FF3BBD'),
(4, 'Mamosalato', 'mamosalato.geojson', '#28FFB980'),
(5, 'Petasia', 'petasia.geojson', '#214BFF80'),
(6, 'Mori Utara', 'mori_utara.geojson', '#5EFFF0F5'),
(7, 'Mori Atas', 'mori_atas.geojson', '#87FFBCFF'),
(8, 'Petasia Barat', 'petasia_barat.geojson', '#4D14FF80'),
(9, 'Petasia Timur', 'petasia_timur.geojson', '#FF35D5C7'),
(10, 'Soyojaya', 'soyojaya.geojson', '#FFF37AF0');

-- --------------------------------------------------------

--
-- Table structure for table `gis_category_facilities`
--

CREATE TABLE `gis_category_facilities` (
  `category_facilities_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gis_category_facilities`
--

INSERT INTO `gis_category_facilities` (`category_facilities_id`, `category_name`) VALUES
(1, 'kesehatan'),
(4, 'pendidikan'),
(5, 'hotel'),
(6, 'kuliner'),
(7, 'wisata'),
(9, 'pelayanan-publik'),
(10, 'tambang'),
(11, 'pabrik');

-- --------------------------------------------------------

--
-- Table structure for table `gis_facilities`
--

CREATE TABLE `gis_facilities` (
  `facilities_id` int(11) NOT NULL,
  `category_facilities_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gis_facilities`
--

INSERT INTO `gis_facilities` (`facilities_id`, `category_facilities_id`, `title`, `image_name`, `description`, `latitude`, `longitude`) VALUES
(3, 1, 'RSUD Beteleme ', '1660463130_b3743e95ecf2fb5a8616.jpg', 'Alamat Desa Beteleme', '-2.149874877392877', '121.27536482849807'),
(4, 1, 'RSUD Kolonodale', '1660463258_bed0e3ce6c6c8de496b4.jpg', 'Alamat Kolonodale', '-1.9721454584389468', '121.33625566913092'),
(7, 4, 'SMA 1 Lembo', '1660474812_cfb91e0d264f45d39ef6.jpg', 'Sma 1 lembo berada di desa beteleme', '-2.1360811987314934', '121.28460126903246'),
(8, 5, 'Hotel Bogenfil', '1660476058_71788eb8c2cb3bd45f16.jpg', 'Hotel ini berada di kolonodale', '-1.991272543376517', '121.33176141033658'),
(9, 6, 'Rumah makan enak', '1660476184_261ba8f856bad6d7bc28.jpg', 'warung makan yang menjual ayam', '-1.9842179596643876', '121.33676109118991'),
(10, 7, 'Wisata Teluk Tomori', '1660477362_f9cc4f7785e2305a7b46.jpg', 'loremloreloremloremlorem', '-1.9446055624022933', '121.36106872737022'),
(11, 9, 'Polres Morowalli', '1660478837_c14a42b688db7a5e8cac.jpg', 'loremloremlorem', '-2.099805390757554', '121.35277223050504'),
(12, 11, 'gnidfdfdfdfdf', '1664809292_4830f044c934ae9a51c0.png', 'dfdfdsafffffff', '-1.7331259180039522', '121.03864193607032');

-- --------------------------------------------------------

--
-- Table structure for table `goverment`
--

CREATE TABLE `goverment` (
  `goverment_id` int(11) NOT NULL,
  `visi_misi` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `goverment`
--

INSERT INTO `goverment` (`goverment_id`, `visi_misi`) VALUES
(1, '<p style=\"text-align: center;\"><span style=\"font-size: 18pt; font-family: impact, sans-serif;\">Visi</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 14pt; font-family: \'comic sans ms\', sans-serif;\">Terwujudnya Masyarakat Morowali Utara</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 14pt; font-family: \'comic sans ms\', sans-serif;\">Yang Sehat, Cerdas, Sejahtera</span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 18pt; font-family: impact, sans-serif;\">Misi</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 14pt; font-family: \'comic sans ms\', sans-serif;\">Meningkatkan Aksesibilitas dan Mutu Pelayawan;</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 14pt; font-family: \'comic sans ms\', sans-serif;\">Meningkatkan Aksesibilitas dan Mutu Pendidikan Untuk Menghasilkan Sumber Daya Yang Unggul dan Berdaya Saing;</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 14pt; font-family: \'comic sans ms\', sans-serif;\">Meningkatkan Kesejahteraan Masyarakat Berbasis Potensi Wilayah;</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 14pt; font-family: \'comic sans ms\', sans-serif;\">Meningkatkan Infrastruktur dan Sarana Untuk Menunjang Konektivitas dan Penataan Wilayah;</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 14pt; font-family: \'comic sans ms\', sans-serif;\">Meningkatkan Profesionalisme dan Kinerja Penyelenggaraan Pemerintah Daerah Dalam Rangka Tata Kelola Pemerintahan yang Baik;</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(5) UNSIGNED NOT NULL,
  `category_image_id` int(5) NOT NULL,
  `image_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lkpj`
--

CREATE TABLE `lkpj` (
  `lkpj_id` int(11) NOT NULL,
  `opd_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` text COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lkpj`
--

INSERT INTO `lkpj` (`lkpj_id`, `opd_id`, `title`, `file_name`, `year`, `description`) VALUES
(1, 25, 'LKPJ 2012', '1662738125_eec184c52bb673610079.pdf', 2012, 'LKPJ 2012');

-- --------------------------------------------------------

--
-- Table structure for table `lppd`
--

CREATE TABLE `lppd` (
  `lppd_id` int(11) NOT NULL,
  `opd_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` text COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lppd`
--

INSERT INTO `lppd` (`lppd_id`, `opd_id`, `title`, `file_name`, `year`, `description`) VALUES
(1, 45, 'LPPD 2012', '1662738604_b6ce31cb0a5ab397b236.pdf', 2012, 'LPPD 2012');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-08-06-051524', 'App\\Database\\Migrations\\CategoryImage', 'default', 'App', 1659853865, 1),
(2, '2022-08-06-070835', 'App\\Database\\Migrations\\Image', 'default', 'App', 1659853865, 1),
(3, '2022-08-06-051524', 'App\\Database\\Migrations\\CategoryGalery', 'default', 'App', 1659978303, 2),
(4, '2022-08-06-070835', 'App\\Database\\Migrations\\Galery', 'default', 'App', 1659978304, 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_news_id` int(11) NOT NULL,
  `image_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `user_id`, `category_news_id`, `image_name`, `title`, `slug`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '1664902965_a518d0c553f1a831582f.jpg', 'WABUP MORUT INGATKAN PENTINGNYA PERCEPATAN PENGGUNAAN PRODUK DALAM NEGERI DI LINGKUNGAN PEMDA', 'wabup-morut-ingatkan-pentingnya-percepatan-penggunaan-produk-dalam-negeri-di-lingkungan-pemda', '<p>Kolonodale, MCDD &ndash; Wakil Bupati Morowali Utara H. Djira K mengemukakan perkembangan teknologi yang terjadi saat ini ikut mendorong perubahan yang mendasar dalam teknologi pengadaan barang/jasa pemerintah.<br>&ldquo;Sebagai bagian dari pelayanan umum, pengadaan barang/jasa pemerintah merupakan salah satu aktivitas yang sering mendapat sorotan. Namun belakangan ini sorotan tersebut mulai berkurang dengan diberlakukannya sistem pengadaan secara elektronik,&rdquo; jelasnya.<br>Hal tersebut disampaikan Wabup saat membuka Sosialisasi Percepatan Penggunaan Produk Dalam Negeri, Pengelolaan Toko Daring/Katalog Lokal, Siswas P3DN, Pengelolaan Pengadaan Barang dan Jasa di Desa serta Sistem Informasi UKPBJ yang dilaksanakan di Ruang Pola Kantor Bupati, Senin (8/8/2022).<br>Kegiatan itu dilaksanakan Bagian Pengadaan Barang dan Jasa Kantor Bupati Morut, dengan menghadirkan pemateri dari BPKP Perwakilan Sulteng, Biro Pengadaan Barang dan Jasa Provinsi Sulteng, serta Kadin Morut.<br>Terkait Gerakan Nasional Bangga Buatan Indonesia pada pengadaan barang/jasa di lingkungan Pemda, Wabup Djira mengingatkan kepada semua perangkat daerah untuk mengimplementasikan program P3DN (Peningkatan Penggunaan Produk Dalam Negeri).<br>Selain itu, sesegera mungkin membentuk tim P3DN, melakukan pengisian RUP dan SIRUP, serta melakukan proses E-Purchasing dan E-Kontrak.<br>&ldquo;Yang terpenting adalah meningkatkan penggunaan produk dalam negeri oleh pemerintah, badan usaha dan masyarakat,&rdquo; ujarnya.<br>Pada kesempatan tersebut, Wabup juga menginstruksikan kepada seluruh perangkat daerah Morut untuk menambahkan layanan pendaftaran bagi pelaku usaha sebagai penyedia barang/jasa pemerintah (SPSE dan SIKAP) pada pelayanan publik di Morut.<br>Sebelumnya, Kepala Bagian Pengadaan Barang dan Jasa Pemda Morut M. Ridho Hamzah, melaporkan sosialisasi ini dilaksanakan dalam rangka mendukung Instruksi Presiden Nomor 2 Tahun 2022 tentang Percepatan Peningkatan Penggunaan Produk Dalam Negeri dan Produk Usaha Mikro, Usaha Kecil, dan Koperasi dalam rangka menyukseskan Gerakan Nasional Bangga Buatan Indonesia pada pelaksanaan pengadaan barang dan jasa pemerintah.<br>Peserta sosialisasi terdiri dari para Pejabat Pembuat Komitmen (PPK), Pejabat Pengadaan dan Pokja Pengadaan, serta pada admin di setiap unit kerja pengadaan barang dan jasa. (Ale/Ryo)<br>#pressrelease #sosialisasi #bpbj #pemdamorut #hajidjira #morowaliutara<br>&copy;Media Center Delis &amp; Djira</p>', '2022-08-02 11:32:45', '2022-10-04 12:02:45', '0000-00-00 00:00:00'),
(2, 2, 2, '1664903038_edb64fb424ef4ac6343c.jpg', 'WAKIL BUPATI MOROWALI UTARA MEMBUKA PELATIHAN DASAR CPNS TAHUN 2022', 'wakil-bupati-morowali-utara-membuka-pelatihan-dasar-cpns-tahun-2022', '<p>Bertempat di Gedung Pola Sekretariat Daerah Kabupaten Morowali Utara, Jumat 5 Agustus 2022, Wakil Bupati Morowali Utara membuka secara resmi Pelaksanaan Pelatihan Dasar CPNS Kabupaten Morowali Utara Tahun 2022.<br>Kepala Bidang Pengembangan dan Penilaian Kinerja Aparatur, Wartus Lampaga, SE., dalam laporannya menyampaikan bahwa Pelatihan Dasar CPNS Pemerintah Kabupaten Morowali Utara Tahun 2022 ini diikuti oleh 257 CPNS, dilaksanakan oleh Pemerintah Kabupaten Morowali Utara dengan pola kerjasama dengan BPSDMD Provinsi Sulawesi Tengah.<br>Kepala BPSDMD Provinsi Sulawesi Tengah Dr. Drs. Adidjoyo Dauda, M.Si menyampaikan apresiasi kepada Pemerintah Kabupaten Morowali Utara yang untuk kesekian kalinya melaksanakan Pelatihan Dasar CPNS dengan pola kerjasama ini. BPSDMD Sulawesi Tengah sebagai lembaga pelatihan terakreditasi akan melaksanakan penjaminan mutu atas pelaksanaan Pelatihan Dasar CPNS di Kabupaten Morowali Utara ini.<br>Wakil Bupati Morowali Utara H.Djira K, S.Pd., M.Pd dalam sambutannya mengatakan bahwa dalam upaya membentuk sosok PNS yang berkompeten maka perlu dilakukan pembinaan, salah satunya melalui jalur Pendidikan dan Pelatihan (Diklat) yang mengarah kepada upaya peningkatan sikap dan semangat pengabdian yang berorientasi pada kepentingan masyarakat, bangsa, negara dan tanah air.<br>Kompetensi teknis, manajerial, sosial kultural serta efisiensi, efektivitas dan kualitas pelaksanaan tugas yang dilakukan dengan semangat kerjasama dan tanggung jawab sesuai dengan tugas dan fungsinya.<br>Pelatihan Dasar CPNS ini, di samping sebagai syarat untuk diangkat menjadi PNS, juga merupakan tempat penggodokan sikap, perilaku, mental, dan mindset serta untuk mewujudkan profesionalisme CPNS.<br>Melalui Pelatihan Dasar CPNS ini diharapkan para peserta tidak saja akan menjadi aparat yang cerdas dan profesional, namun juga memiliki pemahaman tentang hak dan kewajibannya, sehingga dapat melaksanakan tugas dan tanggung jawab sesuai dengan koridor peraturan yang berlaku, termasuk kedisiplinan serta moral untuk membentuk aparat Pemerintah Kabupaten Morowali Utara yang berkualitas dan profesional.<br>Demikian pula harus ditanamkan dan ditumbuhkembangkan sikap loyal dan bertanggung jawab penuh atas setiap tugas yang telah diberikan untuk bisa menjalankan peran sebagai seorang abdi masyarakat.<br>Selaku Kepala Daerah saya merespon positif kegiatan ini dan menghimbau bahwa PNS adalah mahluk sosial yang ketika bermedia sosial PNS menjadi penyejuk dan mempunyai etika dalam mengelola media sosial. Yang paling penting dihimbau kepada adik-adik CPNS ini agar tidak ada yang mengajukan mutasi keluar daerah.<br>&ldquo;Beberapa waktu lalu ada Bupati dari daerah Sulsel, Jawa dan Sumatera yang menyurat kepada Bupati Morowali Utara untuk disetujui pindah tugas adik-adik. Sebenarnya disetujui, namun belum diikhlaskan, sehingga saya himbau untuk tidak ada yang mengajukan mutasi keluar daerah&rdquo; ujar Wabup.<br>Pelatihan Dasar CPNS ini dilaksanakan selama &plusmn;108 hari, dan dimulai pada hari ini 5 Agustus 2022 s/d 19 November 2022 yang dilaksanakan pada Kantor Diklat BKPSDM Kabupaten Morowali Utara Jalan trans Sulawesi km 5 Desa Tompira, Kecamatan Petasia Timur.<br>Hadir mendampingi Wabup, Forkopimda Kabupaten Morowali Utara, Kepala BPSDMD Provinsi Sulteng Dr. Drs. Adidjoyo Dauda, M.Si., Para Asisten, Kepala Perangkat Daerah Lingkup Pemda Morut, Para Widyaiswara/Instruktur, Para Mentor dan Evaluator, Panitia Penyelenggara BKPSDM Kabupaten Morowali Utara serta hadir seluruh peserta Latsar CPNS Kabupaten Morowali Utara.<br>Tim Liputan Media Kominfo Morut_</p>', '2022-09-02 11:33:36', '2022-10-04 12:03:59', '0000-00-00 00:00:00'),
(3, 1, 1, '1664903102_b93d44ce4d9249422ee1.jpg', 'PEMKAB MORUT GANDENG UNTAD BAHAS PENDIRIAN PERSERODA MORUT.', 'pemkab-morut-gandeng-untad-bahas-pendirian-perseroda-morut', '<p>Kolonodale, MCDD &ndash; Sebuah tim dari Universitas Tadulako (Untad) Palu hadir di Kolonodale, Senin (1/8) untuk membahas rencana pendirian Badan Usaha Milik Daerah (BUMD) atau Perusahaan Perseroan Daerah (Perseroda) bersama para pejabat terkait Pemkab Morut.<br>Pertemuan ini dipimpin Wabub Morut H. Djira, K, S.Pd, M.Pd didampingi Sekda Morut dan sejumlah pejabat terkait.<br>Sedengkan tim ahli dari Untaf dipimpin Prof Dr Patta Tope, Guru Besar Fakultas Ekonomi Untad dan mantan Kepala Bappeda Sulteng.<br>Prof Patta Tope didampingi para doktor seperti Muh. Yumi, Nina Yusnita, Moh. Ichwan Tandju dan Haerul Anam.<br>Wabup Morut H Djira mengemukakan bahwa pembentukan Perseroda Morut berbentuk perseroan ini mendesak dilakukan untuk menangani bidang-bidang usaha tertentu untuk mengakselerasi pertumbuhan ekonomi dan kesejahteraan rakyat.<br>Tiga bidang usaha prioritas yang akan ditangani Perseroda Morut adalah pertama bidang kepelabubanan, terutama dalam penyesiaan jasa-jasa kepelabuhanan.<br>Kedua bidang pertambangan dimana Perseroda akan mengambil peran dalam pemenuhan kebutuhan-kebutuhan usaha pertambangan.<br>Ketiga, pengembangan program Pajeko (pengembangan jenis-jenis komoditas) unggulan yang saat ini sudah diterapkan pada komoditi jagung.<br>Ia berharap Perseroda Morut bisa segera terwujud untul kepentingan pembangunan ekonomi daerah yang lebih cepat guna mewujudkan Morut yang sehat, cerdas dan sejahtera. (RoMa/Ryo)<br>#pressrelease #pemdamorut #perseroda #delisdjira #morowaliutara<br>&copy;Media Center Delis &amp; Djira</p>', '2022-10-04 12:05:02', '2022-10-04 12:05:02', '0000-00-00 00:00:00'),
(4, 2, 2, '1664903173_a94b8d04dc2aec657e6a.jpg', 'KABAR BAIK UNTUK MASYARAKAT BUNTA, LISTRIK PLN SEGERA MASUK BUNGINI DAN TAMBAOLE', 'kabar-baik-untuk-masyarakat-bunta-listrik-pln-segera-masuk-bungini-dan-tambaole', '<p>Kolonodale, MCDD &ndash; PT.PLN (Persero) langsung merespon permintaan Pemerintah Kabupaten Morowali Utara untuk memenuhi kebutuhan listrik di beberapa desa/dusun di daerah ini.<br>&ldquo;Tahun ini, dua dusun di Desa Bunta sudah akan menikmati aliran listrik PLN,&rdquo; kata Bupati Morowali Utara Delis J. Hehi yang dihubungi media ini, Kamis.<br>Dua dusun yang akan menikmati listrik pedesaan tersebut adalah Dusun Bungini dan Dusun Tambaole di Desa Bunta, Kecamatan Petasia Timur.<br>&ldquo;Kami sudah menerima laporan dari PLN Area Palu bahwa pemasangan tiang dan jaringan kabel listrik untuk dua dusun itu sedang dalam persiapan,&rdquo; kata Delis.<br>Beberapa waktu lalu, kata Delis yang baru setahun memimpin Morut itu, pihaknya telah menyurati PLN untuk membantu melistriki sejumlah desa dan dusun yang sampai saat ini belum menerima layanan listrik PLN.<br>&ldquo;Kita bersyukur bahwa tahun ini, PLN telah mengalokasikan dana lewat Proyek Listrik Pedesaan (Lisdes) untuk kedua dusun tersebut,&rdquo; katanya.<br>Menurut bupati, masih ada beberapa dusun lagi yang menanti layanan listrik di Sulteng seperti Mokoto di Bungku Utara. Untuk beberapa dusun, Pemkab berharap bisa dilayani dengan listrik tenaga surya karena jaraknya jauh dan medannya cukup berat untuk membangun jaringan interkoneksi.<br>Manager Manager Unit Pelaksana Pelayanan Pelanggan (UP3) Palu Agus Tasya pada kesempatan terpisah membenarkan bahwa Proyek Lisdes PLN akan segera memabngun jaringan distribusi listrik ke Bungini dan Tambaole.<br>&ldquo;Sudah ada Surat Penunjukkan Penyedia Barang dan Jasa (SPPBJ) untuk Bungini dan Tambaole. Penyedia jasanya sedang bersiap untuk melaksanakan pekerjaan itu,&rdquo; ujarnya saat berkunjung ke Morut awal pekan ini.<br>Keterangan lain yang diperoleh dari Desa Bunta menyebutkan bahwa ada ratusan warga di Dusun 5 Desa Bunta yang meliputi Bungini dan Tambaole ini yang menantikan penyambungan listrik PLN.<br>&ldquo;Syukur alhamdulillah, bila PLN kali ini bisa memenuhi kebutuhan listrik warga Desa Bunta dalam waktu dekat ini,&rdquo; ujar seorang tokoh masyarakat Bunta.<br>Desa Bunta merupakan salah satu desa yang paling ramai dimasuki pemukim-pemukim baru dari berbagai tempat di dalam maupun di luar kabupaten Morut, bahkan dari luar Provinsi Sulteng, untuk mencari pekerjaan dan berusaha sehubungan dengan pembangunan insdutri nikel skala besar yang dimotori PT. Gunbuster Nickle Industri (GNI).<br>Dewasa ini banyak sekali tumbuh usaha-usaha kecil menengah dan rumah-rumah kos yang sangat membutuhkan layanan listrik PLN.<br>Pihak PLN Unit Layanan Pelanggan (ULP) Kolonodale mengakui bahwa saat ini mereka melayani permintaan sambungan baru listrik rata-rata 1.000 pelanggan setiap bulan. (RoMa)<br>#pressrelease #pln #lisdes #morowaliutara<br>&copy;Media Center Delis &amp; Djira</p>', '2022-10-04 12:06:13', '2022-10-04 12:06:13', '0000-00-00 00:00:00'),
(5, 1, 1, '1664903314_d2fecc48d8867e7d72de.jpg', 'BUPATI MOROWALI UTARA DIWAKILI OLEH WAKIL BUPATI MOROWALI UTARA H. DJIRA K. S.PD, M.PD SERAHKAN DOKUMEN KUA-PPAS TAHUN 2023 KEPADA KETUA DPRD KABUPATEN MOROWALI UTARA.', 'bupati-morowali-utara-diwakili-oleh-wakil-bupati-morowali-utara-h-djira-k-spd-mpd-serahkan-dokumen-k', '<p>Hal ini dilakukan saat Kegiatan Rapat Paripurna Penyampaian Bupati terhadap Kebijakan Umum Anggaran dan Prioritas Plafon Anggaran Sementara (KUA-PPAS) Tahun 2023 di Ruang Rapat Paripurna DPRD Kabupaten Morowali Utara pada hari Kamis (28/07/2022)<br>Rapat ini dipimpin oleh langsung Ketua DPRD Kabupaten Morowali Utara Hj. Megawati Ambo Asa S.Ip. dan dihadiri oleh para Wakil Ketua, sejumlah Anggota DPRD serta beberapa Pejabat Lingkup Pemda Morut.<br>Sebelum menyerahkan dokumen KUA-PPAS Wakil Bupati menyampaikan sedikit sambutan dimana beliau berharap di Tahun 2023 mendatang, seluruh program kerja yang telah disusun dapat dilaksanakan dengan baik dalam rangka mewujudkan visi misi Kabupaten Morowali Utara yang sehat, cerdas, dan sejahtera.<br>&ldquo;Dokumen KUA-PPAS yang akan diserahkan nantinya, berisi detail anggaran serta output yg akan dijadikan dasar untuk mewujudkan Visi Misi Kabupaten Morowali Utara di Tahun 2023 mendatang&rdquo;, ujarnya<br>Dalam rapat tersebut, Wakil Ketua II DPRD Kabupaten Morowali Utara Moh. Safri M.Pdi memberikan sedikit masukan dimana Pemerintah Daerah diminta untuk membangun komitmen serta komunikasi bersama DPRD perihal kehadiran ketua Tim Anggaran Pemerintah Daerah (TAPD) dalam Rapat Badan Anggaran (Banggar). Hal ini dimaksudkan agar rapat dapat berjalan dengan lancar mengingat Ketua TAPD beserta Kepala OPD bertindak sebagai pengambli keputusan atas kebijakan yang akan dilaksanakan.<br>Media Kominfo Morut</p>', '2022-10-04 12:08:34', '2022-10-04 12:08:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `opd`
--

CREATE TABLE `opd` (
  `opd_id` int(11) NOT NULL,
  `opd` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `opd`
--

INSERT INTO `opd` (`opd_id`, `opd`) VALUES
(22, 'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Daerah'),
(23, 'Badan Kesatuan Bangsa Daerah'),
(21, 'Badan Penanggulangan Bencana Daerah'),
(24, 'Badan Pendapatan Daerah'),
(20, 'Badan Pengelolaan Keuangan dan Aset Daerah'),
(19, 'Badan Perencanaan Pembangunan Penelitian dan Pengembangan Daerah'),
(32, 'Bagian Administrasi Kesejahteraan Rakyat'),
(33, 'Bagian Administrasi Pembangunan'),
(25, 'Bagian Administrasi Pemerintahan Umum'),
(29, 'Bagian Administrasi Perekonomian'),
(26, 'Bagian Hukum'),
(31, 'Bagian Layanan Pengadaan Barang dan Jasa'),
(27, 'Bagian Organisasi'),
(30, 'Bagian Protokol dan Komunikasi Pimpinan'),
(28, 'Bagian Umum'),
(10, 'Dinas Kependudukan dan Pencatatan Sipil Daerah'),
(2, 'Dinas Kesehatan Daerah'),
(13, 'Dinas Komunikasi dan Informatika Daerah'),
(15, 'Dinas Koperasi Usaha Mikro, Kecil dan Menengan, Perindustrian dan Perdagangan Daerah'),
(9, 'Dinas Lingkungan Hidup Daerah'),
(18, 'Dinas Pariwisata Pemuda dan Olahraga Daerah'),
(3, 'Dinas Pekerjaan Umum Penataan Ruang Perumahan dan Kawasan Pemukiman Daerah'),
(11, 'Dinas Pemberdayaan Masyarakat dan Desa Daerah'),
(14, 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Daerah'),
(1, 'Dinas Pendidikan dan Kebudayaan Daerah'),
(12, 'Dinas Pengendalian Penduduk Keluarga Berencana Pemberdayaan Perempuan dan Perlindungan Anak Daerah'),
(4, 'Dinas Perhubungan Daerah'),
(17, 'Dinas Perikanan Daerah'),
(16, 'Dinas Perpustakaan Daerah'),
(8, 'Dinas Pertanian dan Pangan Daerah'),
(6, 'Dinas Sosial Daerah'),
(7, 'Dinas Tenaga Kerja dan Transmigrasi Daerah'),
(35, 'Inspektorat Daerah'),
(46, 'Kecamatan Bungku Utara'),
(40, 'Kecamatan Lembo'),
(41, 'Kecamatan Lembo Raya'),
(44, 'Kecamatan Mamosalato'),
(42, 'Kecamatan Mori Atas'),
(43, 'Kecamatan Mori Utara'),
(37, 'Kecamatan Petasia'),
(39, 'Kecamatan Petasia Barat'),
(38, 'Kecamatan Petasia Timur'),
(45, 'Kecamatan Soyojaya'),
(36, 'Rumah Sakit Umum Daerah'),
(5, 'Satuan Polisi Pamong Praja dan Pemadam Kebakaran Daerah'),
(34, 'Sekretariat Dewan Perwakilan Rakyat Daerah');

-- --------------------------------------------------------

--
-- Table structure for table `people_said`
--

CREATE TABLE `people_said` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `people_said`
--

INSERT INTO `people_said` (`id`, `name`, `image`, `subject`, `message`, `active`) VALUES
(1, 'Minter Puchan', '1664647585_a116f477a2170dd95c37.png', 'Percobaan saja', 'Pemerintah seharusnya dapat mencari sebuah solusi untuk mengendalikan harga BBM yang terus menerus naik.', 1),
(2, 'Weldon Cash', '1664647718_c43b26408dfa95f748d6.jpg', 'Percobaan saja 2', 'SIM seharusnya diberlakukan seumur hidup agar masyarakat tidak lagi perlu untuk direpotkan dengan urusan mengenai perpanjangan SIM setiap lima tahun sekali.', 1),
(3, 'Gabriel Denis', '1664647804_fcda625b3f7f85b3e9db.jpg', 'Percobaan saja 3', 'Pemerintah seharusnya memberikan jaminan sosial yang adil kepada setiap masyarakatnya karena itu merupakan hak setiap orang.', 1),
(4, 'Peterson Smith', '1664648472_046eefd4cc60f3b97a28.jpg', 'Percobaan saja 4', 'Pemerintah seharusnya memikirkan keadaan masyarakat dengan menaikkan tarif iuran BPJS yang berpeluang besar diberatkan dengan keputusan tersebut.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `permission_id` int(11) NOT NULL,
  `permission_description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `permission_category` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`permission_id`, `permission_description`, `permission_category`) VALUES
(1, 'Dashboard', 'Dashboard'),
(2, 'Create Role', 'Role'),
(3, 'View Role', 'Role'),
(4, 'Edit Role', 'Role'),
(5, 'Delete Role', 'Role'),
(6, 'Create User', 'User'),
(7, 'View User', 'User'),
(8, 'Edit User', 'User'),
(9, 'Delete User', 'User'),
(10, 'Create Permission', 'Permission'),
(11, 'View Permission', 'Permission'),
(12, 'Edit Permission', 'Permission'),
(13, 'Delete Permission', 'Permission'),
(14, 'Set Permission', 'Permission'),
(15, 'Create Category News', 'Category News'),
(16, 'View Category News', 'Category News'),
(17, 'Edit Category News', 'Category News'),
(18, 'Delete Category News', 'Category News'),
(19, 'Create News', 'News'),
(20, 'View News', 'News'),
(21, 'Edit News', 'News'),
(22, 'Delete News', 'News'),
(23, 'Create Category Gallery', 'Category Gallery'),
(24, 'View Category Gallery', 'Category Gallery'),
(25, 'Edit Category Gallery', 'Category Gallery'),
(26, 'Delete Category Gallery', 'Category Gallery'),
(27, 'Create Gallery', 'Gallery'),
(28, 'View Gallery', 'Gallery'),
(29, 'Edit Gallery', 'Gallery'),
(30, 'Delete Gallery', 'Gallery'),
(31, 'View Category Facilities', 'Category Facilities'),
(32, 'Create Category Facilities', 'Category Facilities'),
(33, 'Edit Category Facilities', 'Category Facilities'),
(34, 'Delete Category Facilities', 'Category Facilities'),
(35, 'View Facilities', 'Facilities'),
(36, 'Create Facilities', 'Facilities'),
(37, 'Edit Facilities', 'Facilities'),
(38, 'Delete Facilities', 'Facilities'),
(39, 'Create OPD', 'O P D'),
(40, 'View OPD', 'O P D'),
(41, 'Edit OPD', 'O P D'),
(42, 'Delete OPD', 'O P D'),
(43, 'Create Rpjmd', 'R P J M D'),
(44, 'View Rpjmd', 'R P J M D'),
(45, 'Edit Rpjmd', 'R P J M D'),
(46, 'Delete Rpjmd', 'R P J M D'),
(47, 'View Rpjpd', 'R P J P D'),
(48, 'Create Rpjpd', 'R P J P D'),
(49, 'Edit Rpjpd', 'R P J P D'),
(50, 'Delete Rpjpd', 'R P J P D'),
(51, 'Create Rkpd', 'R K P D'),
(52, 'View Rkpd', 'R K P D'),
(53, 'Edit Rkpd', 'R K P D'),
(54, 'Delete Rkpd', 'R K P D'),
(55, 'Create LKPJ', 'L K P J'),
(56, 'View Lkpj', 'L K P J'),
(57, 'Edit Lkpj', 'L K P J'),
(58, 'Delete Lkpj', 'L K P J'),
(59, 'Create Sakip', 'S A K I P'),
(60, 'View Sakip', 'S A K I P'),
(61, 'Edit Sakip', 'S A K I P'),
(62, 'Delete Sakip', 'S A K I P'),
(63, 'Create Lppd', 'L P P D'),
(64, 'View Lppd', 'L P P D'),
(65, 'Edit Lppd', 'L P P D'),
(66, 'Delete Lppd', 'L P P D'),
(67, 'View Setting', 'Setting'),
(68, 'View Flash', 'Flash Screen'),
(69, 'Edit Flash', 'Flash Screen'),
(70, 'Edit Setting', 'Setting'),
(71, 'View People Said', 'People Said'),
(72, 'Edit People Said', 'People Said'),
(73, 'Delete People Said', 'People Said'),
(74, 'View Agenda', 'Agenda'),
(75, 'Create Agenda', 'Agenda'),
(76, 'Edit Agenda', 'Agenda'),
(77, 'Delete Agenda', 'Agenda'),
(78, 'View Batas Kecamatan', 'Gis Batas Kecamatan'),
(79, 'Create Batas Kecamatan', 'Gis Batas Kecamatan'),
(80, 'Edit Batas Kecamatan', 'Gis Batas Kecamatan'),
(81, 'Delete Batas Kecamatan', 'Gis Batas Kecamatan'),
(82, 'View About', 'About'),
(83, 'Edit About', 'About'),
(84, 'View Goverment', 'Goverment'),
(85, 'Edit Goverment', 'Goverment');

-- --------------------------------------------------------

--
-- Table structure for table `rkpd`
--

CREATE TABLE `rkpd` (
  `rkpd_id` int(11) NOT NULL,
  `opd_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` text COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rkpd`
--

INSERT INTO `rkpd` (`rkpd_id`, `opd_id`, `title`, `file_name`, `year`, `description`) VALUES
(1, 24, 'RKPD 2012', '1662737684_206ecb502f3904fbe446.pdf', 2012, 'RKPD 2012');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `is_hidden` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `is_hidden`) VALUES
(1, 'System Administrator', 1),
(2, 'Administrator', 1),
(6, 'User', 0);

-- --------------------------------------------------------

--
-- Table structure for table `role_permission`
--

CREATE TABLE `role_permission` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_permission`
--

INSERT INTO `role_permission` (`id`, `role_id`, `permission_id`) VALUES
(84, 2, 1),
(85, 2, 2),
(86, 2, 3),
(87, 2, 4),
(88, 2, 5),
(89, 2, 6),
(90, 2, 7),
(91, 2, 8),
(92, 2, 9),
(93, 2, 11),
(94, 2, 14),
(95, 2, 15),
(96, 2, 16),
(97, 2, 17),
(98, 2, 18),
(99, 2, 19),
(100, 2, 20),
(101, 2, 21),
(102, 2, 22),
(104, 1, 1),
(105, 1, 2),
(106, 1, 3),
(107, 1, 4),
(108, 1, 5),
(109, 1, 6),
(110, 1, 7),
(111, 1, 8),
(112, 1, 9),
(113, 1, 10),
(114, 1, 11),
(115, 1, 12),
(116, 1, 13),
(117, 1, 14),
(118, 1, 15),
(119, 1, 16),
(120, 1, 17),
(121, 1, 18),
(122, 1, 19),
(123, 1, 20),
(124, 1, 21),
(125, 1, 22),
(126, 6, 1),
(127, 1, 23),
(128, 2, 23),
(129, 1, 24),
(130, 2, 24),
(131, 1, 25),
(132, 2, 25),
(133, 1, 26),
(134, 2, 26),
(135, 1, 27),
(136, 2, 27),
(137, 1, 28),
(138, 2, 28),
(139, 1, 29),
(140, 2, 29),
(141, 1, 30),
(142, 2, 30),
(143, 1, 31),
(144, 2, 31),
(145, 1, 32),
(146, 2, 32),
(147, 1, 33),
(148, 2, 33),
(149, 1, 34),
(150, 2, 34),
(151, 1, 35),
(152, 2, 35),
(153, 1, 36),
(154, 2, 36),
(155, 1, 37),
(156, 2, 37),
(157, 1, 38),
(158, 2, 38),
(159, 1, 39),
(160, 2, 39),
(161, 1, 40),
(162, 2, 40),
(163, 1, 41),
(164, 2, 41),
(165, 1, 42),
(166, 2, 42),
(167, 1, 43),
(168, 2, 43),
(169, 1, 44),
(170, 2, 44),
(171, 1, 45),
(172, 2, 45),
(173, 1, 46),
(174, 2, 46),
(175, 1, 47),
(176, 2, 47),
(177, 1, 48),
(178, 2, 48),
(179, 1, 49),
(180, 2, 49),
(181, 1, 50),
(182, 2, 50),
(183, 1, 51),
(184, 2, 51),
(185, 1, 52),
(186, 2, 52),
(187, 1, 53),
(188, 2, 53),
(189, 1, 54),
(190, 2, 54),
(191, 1, 55),
(192, 2, 55),
(193, 1, 56),
(194, 2, 56),
(195, 1, 57),
(196, 2, 57),
(197, 1, 58),
(198, 2, 58),
(199, 1, 59),
(200, 2, 59),
(201, 1, 60),
(202, 2, 60),
(203, 1, 61),
(204, 2, 61),
(205, 1, 62),
(206, 2, 62),
(207, 1, 63),
(208, 2, 63),
(209, 1, 64),
(210, 2, 64),
(211, 1, 65),
(212, 2, 65),
(213, 1, 66),
(214, 2, 66),
(215, 1, 67),
(216, 2, 67),
(217, 1, 68),
(218, 2, 68),
(219, 1, 69),
(220, 2, 69),
(221, 1, 70),
(222, 2, 70),
(223, 1, 71),
(224, 2, 71),
(225, 1, 72),
(226, 2, 72),
(227, 1, 73),
(228, 2, 73),
(229, 1, 74),
(230, 2, 74),
(231, 1, 75),
(232, 2, 75),
(233, 1, 76),
(234, 2, 76),
(235, 1, 77),
(236, 2, 77),
(237, 1, 78),
(238, 2, 78),
(239, 1, 79),
(240, 2, 79),
(241, 1, 80),
(242, 2, 80),
(243, 1, 81),
(244, 2, 81),
(245, 1, 82),
(246, 2, 82),
(247, 1, 83),
(248, 2, 83),
(249, 1, 84),
(250, 2, 84),
(251, 1, 85),
(252, 2, 85);

-- --------------------------------------------------------

--
-- Table structure for table `rpjmd`
--

CREATE TABLE `rpjmd` (
  `rpjmd_id` int(11) NOT NULL,
  `opd_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` text COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rpjmd`
--

INSERT INTO `rpjmd` (`rpjmd_id`, `opd_id`, `title`, `file_name`, `year`, `description`) VALUES
(1, 22, 'RPJMD 2012', '1662736599_6d112596cabc95ae824c.pdf', 2012, 'RPJMD 2012');

-- --------------------------------------------------------

--
-- Table structure for table `rpjpd`
--

CREATE TABLE `rpjpd` (
  `rpjpd_id` int(11) NOT NULL,
  `opd_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` text COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rpjpd`
--

INSERT INTO `rpjpd` (`rpjpd_id`, `opd_id`, `title`, `file_name`, `year`, `description`) VALUES
(1, 20, 'RPJPD 2012', '1662737237_dc14e48851eaf89bfde8.pdf', 2012, 'RPJPD 2012');

-- --------------------------------------------------------

--
-- Table structure for table `sakip`
--

CREATE TABLE `sakip` (
  `sakip_id` int(11) NOT NULL,
  `opd_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` text COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sakip`
--

INSERT INTO `sakip` (`sakip_id`, `opd_id`, `title`, `file_name`, `year`, `description`) VALUES
(1, 3, 'SAKIP 2012', '1662738395_785c76610ad94e84a6b7.pdf', 2012, 'SAKIP 2012');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `setting_id` int(11) NOT NULL,
  `background` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `banner1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title1` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `description1` text COLLATE utf8_unicode_ci NOT NULL,
  `url1` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `url_tag1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `banner2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title2` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `description2` text COLLATE utf8_unicode_ci NOT NULL,
  `url2` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `url_tag2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `banner3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title3` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `description3` text COLLATE utf8_unicode_ci NOT NULL,
  `url3` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `url_tag3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `work_day` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hour` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quotes` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `motto` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`setting_id`, `background`, `banner1`, `title1`, `description1`, `url1`, `url_tag1`, `banner2`, `title2`, `description2`, `url2`, `url_tag2`, `banner3`, `title3`, `description3`, `url3`, `url_tag3`, `logo`, `facebook`, `twitter`, `instagram`, `youtube`, `address`, `contact`, `email`, `work_day`, `hour`, `quotes`, `motto`) VALUES
(1, '1663869348_862ab22a0daad788bce8.jpg', '1663869962_4f624cc47a789d40ac3f.jpg', 'Percobaan 1', 'Description 1', 'http://pemkabmorut.pr/home/news', 'Berita 1', '1663869348_e83870434318a9f99a43.jpg', 'Percobaan 2', 'Description 2', 'http://pemkabmorut.pr/home/news', 'Berita 2', '1663869348_687ffe6d1c09e94d659b.jpeg', 'Percobaan 3', 'Deskripsi 3', 'http://pemkabmorut.pr/home/news', 'Berita 3', '1664794563_3afa25253912aa8c52e3.jpg', 'febrian.rampalemba.9', 'febrian.rampalemba.9', 'febrian.rampalemba.9', 'UCKJKKhh8hl8UwgAJjTu_gzQ', 'Jl. Bumi Nangka Kompleks Perkantoran Bupati', '08539423xxxx', 'diskominfo@morowaliutarakab.go.id', 'Senin – Jumat', '07.30 – 16.00', 'Tepo Asa Aroa', 'Morowali Utara Sehat, Cerdas, Sejahtera');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `is_hidden` int(11) NOT NULL DEFAULT '0',
  `is_active` int(1) NOT NULL DEFAULT '0',
  `role_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `name`, `password`, `is_hidden`, `is_active`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'System Administrator', '$2y$10$U68eg.BfjpmPFZzxXDJUouR2SYFweu.UG1smgfTG9KhaSYWU2pJpu', 0, 0, 1, '2022-07-31 07:26:48', '2022-10-04 15:33:09'),
(2, 'admin', 'Administrator', '$2y$10$XmFxndYxmf6YryNQFj1Qg.wMicapebf/U8Ffj4jXLSVKU9YSB.XFa', 0, 0, 2, '2022-08-02 10:05:30', '2022-08-07 13:35:28'),
(4, 'user', 'User', '$2y$10$8qq5mruZe78skOPJAKoNQeO.phgoxyGd152JzIxb7zMU5lJ0bZ1Wa', 0, 0, 6, '2022-08-07 12:58:33', '2022-10-01 11:32:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indexes for table `category_gallery`
--
ALTER TABLE `category_gallery`
  ADD PRIMARY KEY (`category_gallery_id`);

--
-- Indexes for table `category_image`
--
ALTER TABLE `category_image`
  ADD PRIMARY KEY (`category_image_id`);

--
-- Indexes for table `category_news`
--
ALTER TABLE `category_news`
  ADD PRIMARY KEY (`category_news_id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indexes for table `flash_screen`
--
ALTER TABLE `flash_screen`
  ADD PRIMARY KEY (`flash_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `gis_batas_kecamatan`
--
ALTER TABLE `gis_batas_kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gis_category_facilities`
--
ALTER TABLE `gis_category_facilities`
  ADD PRIMARY KEY (`category_facilities_id`);

--
-- Indexes for table `gis_facilities`
--
ALTER TABLE `gis_facilities`
  ADD PRIMARY KEY (`facilities_id`);

--
-- Indexes for table `goverment`
--
ALTER TABLE `goverment`
  ADD PRIMARY KEY (`goverment_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `lkpj`
--
ALTER TABLE `lkpj`
  ADD PRIMARY KEY (`lkpj_id`);

--
-- Indexes for table `lppd`
--
ALTER TABLE `lppd`
  ADD PRIMARY KEY (`lppd_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `opd`
--
ALTER TABLE `opd`
  ADD PRIMARY KEY (`opd_id`),
  ADD UNIQUE KEY `opd` (`opd`);

--
-- Indexes for table `people_said`
--
ALTER TABLE `people_said`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `rkpd`
--
ALTER TABLE `rkpd`
  ADD PRIMARY KEY (`rkpd_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indexes for table `role_permission`
--
ALTER TABLE `role_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rpjmd`
--
ALTER TABLE `rpjmd`
  ADD PRIMARY KEY (`rpjmd_id`);

--
-- Indexes for table `rpjpd`
--
ALTER TABLE `rpjpd`
  ADD PRIMARY KEY (`rpjpd_id`);

--
-- Indexes for table `sakip`
--
ALTER TABLE `sakip`
  ADD PRIMARY KEY (`sakip_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_gallery`
--
ALTER TABLE `category_gallery`
  MODIFY `category_gallery_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_image`
--
ALTER TABLE `category_image`
  MODIFY `category_image_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_news`
--
ALTER TABLE `category_news`
  MODIFY `category_news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `flash_screen`
--
ALTER TABLE `flash_screen`
  MODIFY `flash_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gis_batas_kecamatan`
--
ALTER TABLE `gis_batas_kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gis_category_facilities`
--
ALTER TABLE `gis_category_facilities`
  MODIFY `category_facilities_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gis_facilities`
--
ALTER TABLE `gis_facilities`
  MODIFY `facilities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `goverment`
--
ALTER TABLE `goverment`
  MODIFY `goverment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lkpj`
--
ALTER TABLE `lkpj`
  MODIFY `lkpj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lppd`
--
ALTER TABLE `lppd`
  MODIFY `lppd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `opd`
--
ALTER TABLE `opd`
  MODIFY `opd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `people_said`
--
ALTER TABLE `people_said`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `rkpd`
--
ALTER TABLE `rkpd`
  MODIFY `rkpd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role_permission`
--
ALTER TABLE `role_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `rpjmd`
--
ALTER TABLE `rpjmd`
  MODIFY `rpjmd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rpjpd`
--
ALTER TABLE `rpjpd`
  MODIFY `rpjpd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sakip`
--
ALTER TABLE `sakip`
  MODIFY `sakip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
