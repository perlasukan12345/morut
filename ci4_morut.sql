-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 03 Okt 2022 pada 15.04
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

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
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `agenda_id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `agenda` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_gallery`
--

CREATE TABLE `category_gallery` (
  `category_gallery_id` int(5) UNSIGNED NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `category_gallery`
--

INSERT INTO `category_gallery` (`category_gallery_id`, `category_name`) VALUES
(1, 'Budaya'),
(2, 'Wisata');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_image`
--

CREATE TABLE `category_image` (
  `category_image_id` int(5) UNSIGNED NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_news`
--

CREATE TABLE `category_news` (
  `category_news_id` int(11) NOT NULL,
  `category_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `category_news`
--

INSERT INTO `category_news` (`category_news_id`, `category_name`) VALUES
(1, 'Lingkungan'),
(2, 'Olahraga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `flash_screen`
--

CREATE TABLE `flash_screen` (
  `flash_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `job_history` text COLLATE utf8_unicode_ci NOT NULL,
  `education_background` text COLLATE utf8_unicode_ci NOT NULL,
  `organization_history` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `flash_screen`
--

INSERT INTO `flash_screen` (`flash_id`, `name`, `position`, `job_history`, `education_background`, `organization_history`, `address`, `telephone`, `img`) VALUES
(1, 'Bupati Morowali Utara', 'Bupati Morowali Utara', '<p>Bupati Morowali Utara</p>', '<p>Bupati Morowali Utara</p>', '<p>Bupati Morowali Utara</p>', 'Bupati Morowali Utara', '08539423xxxx', 'bupati.jpg'),
(2, 'Wakil Bupati Morowali Utara', 'Wakil Bupati Morowali Utara', '<p>Wakil Bupati Morowali Utara</p>', '<p>Wakil Bupati Morowali Utara</p>', '<p>Wakil Bupati Morowali Utara</p>', 'Wakil Bupati Morowali Utara', '08539423xxxx', 'wabup.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(5) UNSIGNED NOT NULL,
  `category_gallery_id` int(5) NOT NULL,
  `option` varchar(100) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `category_gallery_id`, `option`, `content`) VALUES
(1, 1, 'image', '1663869348_687ffe6d1c09e94d659b.jpeg'),
(2, 2, 'image', '1663869348_862ab22a0daad788bce8.jpg'),
(3, 2, 'video', '1ShAfn_MtMo'),
(4, 2, 'video', '1ShAfn_MtMo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gis_batas_kecamatan`
--

CREATE TABLE `gis_batas_kecamatan` (
  `id` int(11) NOT NULL,
  `kecamatan_name` varchar(150) NOT NULL,
  `geojson_file` varchar(150) NOT NULL,
  `geojson_color` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gis_batas_kecamatan`
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
-- Struktur dari tabel `gis_category_facilities`
--

CREATE TABLE `gis_category_facilities` (
  `category_facilities_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gis_category_facilities`
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
-- Struktur dari tabel `gis_facilities`
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
-- Dumping data untuk tabel `gis_facilities`
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
-- Struktur dari tabel `image`
--

CREATE TABLE `image` (
  `image_id` int(5) UNSIGNED NOT NULL,
  `category_image_id` int(5) NOT NULL,
  `image_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lkpj`
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
-- Dumping data untuk tabel `lkpj`
--

INSERT INTO `lkpj` (`lkpj_id`, `opd_id`, `title`, `file_name`, `year`, `description`) VALUES
(1, 25, 'LKPJ 2012', '1662738125_eec184c52bb673610079.pdf', 2012, 'LKPJ 2012');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lppd`
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
-- Dumping data untuk tabel `lppd`
--

INSERT INTO `lppd` (`lppd_id`, `opd_id`, `title`, `file_name`, `year`, `description`) VALUES
(1, 45, 'LPPD 2012', '1662738604_b6ce31cb0a5ab397b236.pdf', 2012, 'LPPD 2012');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
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
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-08-06-051524', 'App\\Database\\Migrations\\CategoryImage', 'default', 'App', 1659853865, 1),
(2, '2022-08-06-070835', 'App\\Database\\Migrations\\Image', 'default', 'App', 1659853865, 1),
(3, '2022-08-06-051524', 'App\\Database\\Migrations\\CategoryGalery', 'default', 'App', 1659978303, 2),
(4, '2022-08-06-070835', 'App\\Database\\Migrations\\Galery', 'default', 'App', 1659978304, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_news_id` int(11) NOT NULL,
  `image_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`news_id`, `user_id`, `category_news_id`, `image_name`, `title`, `slug`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '1659457965_e623f10712e21626fcd4.jpg', 'Pembersihan Lapangan', 'pembersihan-lapangan', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint soluta, similique quidem fuga vel voluptates amet doloremque corrupti. Perferendis totam voluptates eius error fuga cupiditate dolorum? Adipisci mollitia quod labore aut natus nobis. Rerum perferendis, nobis hic adipisci vel inventore facilis rem illo, tenetur ipsa voluptate dolorem, cupiditate temporibus laudantium quidem recusandae expedita dicta cum eum. Quae laborum repellat a ut, voluptatum ipsa eum. Culpa fugiat minus laborum quia nam!<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, praesentium, dicta. Dolorum inventore molestias velit possimus, dolore labore aliquam aperiam architecto quo reprehenderit excepturi ipsum ipsam accusantium nobis ducimus laudantium.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum est aperiam voluptatum id cupiditate quae corporis ex. Molestias modi mollitia neque magni voluptatum, omnis repudiandae aliquam quae veniam error! Eligendi distinctio, ab eius iure atque ducimus id deleniti, vel alias sint similique perspiciatis saepe necessitatibus non eveniet, quo nisi soluta.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt beatae nemo quaerat, doloribus obcaecati odio!</p>', '2022-08-02 11:32:45', '2022-10-01 10:49:28', '0000-00-00 00:00:00'),
(2, 2, 2, '1659458016_39391f9435b56db1eb5a.jpg', 'Latihan persiapan lomba agustus-an', 'latihan-persiapan-lomba-agustus-an', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint soluta, similique quidem fuga vel voluptates amet doloremque corrupti. Perferendis totam voluptates eius error fuga cupiditate dolorum? Adipisci mollitia quod labore aut natus nobis. Rerum perferendis, nobis hic adipisci vel inventore facilis rem illo, tenetur ipsa voluptate dolorem, cupiditate temporibus laudantium quidem recusandae expedita dicta cum eum. Quae laborum repellat a ut, voluptatum ipsa eum. Culpa fugiat minus laborum quia nam!<br />\r\n<br />\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Et, praesentium, dicta. Dolorum inventore molestias velit possimus, dolore labore aliquam aperiam architecto quo reprehenderit excepturi ipsum ipsam accusantium nobis ducimus laudantium.<br />\r\n<br />\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum est aperiam voluptatum id cupiditate quae corporis ex. Molestias modi mollitia neque magni voluptatum, omnis repudiandae aliquam quae veniam error! Eligendi distinctio, ab eius iure atque ducimus id deleniti, vel alias sint similique perspiciatis saepe necessitatibus non eveniet, quo nisi soluta.<br />\r\n<br />\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt beatae nemo quaerat, doloribus obcaecati odio!', '2022-09-02 11:33:36', '2022-09-02 11:33:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `opd`
--

CREATE TABLE `opd` (
  `opd_id` int(11) NOT NULL,
  `opd` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `opd`
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
-- Struktur dari tabel `people_said`
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
-- Dumping data untuk tabel `people_said`
--

INSERT INTO `people_said` (`id`, `name`, `image`, `subject`, `message`, `active`) VALUES
(1, 'Minter Puchan', '1664647585_a116f477a2170dd95c37.png', 'Percobaan saja', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut\r\n                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris\r\n                      nisi ut commodo consequat.', 1),
(2, 'Weldon Cash', '1664647718_c43b26408dfa95f748d6.jpg', 'Percobaan saja 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut\r\n                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris\r\n                      nisi aliquip consequat.', 1),
(3, 'Gabriel Denis', '1664647804_fcda625b3f7f85b3e9db.jpg', 'Percobaan saja 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut\r\n                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris\r\n                      nisi aliquip consequat.', 1),
(4, 'Peterson Smith', '1664648472_046eefd4cc60f3b97a28.jpg', 'Percobaan saja 4', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permission`
--

CREATE TABLE `permission` (
  `permission_id` int(11) NOT NULL,
  `permission_description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `permission_category` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `permission`
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
(81, 'Delete Batas Kecamatan', 'Gis Batas Kecamatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rkpd`
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
-- Dumping data untuk tabel `rkpd`
--

INSERT INTO `rkpd` (`rkpd_id`, `opd_id`, `title`, `file_name`, `year`, `description`) VALUES
(1, 24, 'RKPD 2012', '1662737684_206ecb502f3904fbe446.pdf', 2012, 'RKPD 2012');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `is_hidden` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `is_hidden`) VALUES
(1, 'System Administrator', 1),
(2, 'Administrator', 1),
(6, 'User', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_permission`
--

CREATE TABLE `role_permission` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `role_permission`
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
(244, 2, 81);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rpjmd`
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
-- Dumping data untuk tabel `rpjmd`
--

INSERT INTO `rpjmd` (`rpjmd_id`, `opd_id`, `title`, `file_name`, `year`, `description`) VALUES
(1, 22, 'RPJMD 2012', '1662736599_6d112596cabc95ae824c.pdf', 2012, 'RPJMD 2012');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rpjpd`
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
-- Dumping data untuk tabel `rpjpd`
--

INSERT INTO `rpjpd` (`rpjpd_id`, `opd_id`, `title`, `file_name`, `year`, `description`) VALUES
(1, 20, 'RPJPD 2012', '1662737237_dc14e48851eaf89bfde8.pdf', 2012, 'RPJPD 2012');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sakip`
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
-- Dumping data untuk tabel `sakip`
--

INSERT INTO `sakip` (`sakip_id`, `opd_id`, `title`, `file_name`, `year`, `description`) VALUES
(1, 3, 'SAKIP 2012', '1662738395_785c76610ad94e84a6b7.pdf', 2012, 'SAKIP 2012');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `setting_id` int(11) NOT NULL,
  `background` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `banner1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `banner2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `banner3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
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
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`setting_id`, `background`, `banner1`, `banner2`, `banner3`, `logo`, `facebook`, `twitter`, `instagram`, `youtube`, `address`, `contact`, `email`, `work_day`, `hour`, `quotes`, `motto`) VALUES
(1, '1663869348_862ab22a0daad788bce8.jpg', '1663869962_4f624cc47a789d40ac3f.jpg', '1663869348_e83870434318a9f99a43.jpg', '1663869348_687ffe6d1c09e94d659b.jpeg', '1664794563_3afa25253912aa8c52e3.jpg', 'febrian.rampalemba.9', 'febrian.rampalemba.9', 'febrian.rampalemba.9', 'UCKJKKhh8hl8UwgAJjTu_gzQ', 'Jl. Bumi Nangka Kompleks Perkantoran Bupati', '08539423xxxx', 'diskominfo@morowaliutarakab.go.id', 'Senin – Jumat', '07.30 – 16.00', 'Tepo Asa Aroa', 'Morowali Utara Sehat, Cerdas, Sejahtera');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_hidden` int(11) NOT NULL DEFAULT '0',
  `is_active` int(1) NOT NULL DEFAULT '0',
  `role_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `name`, `password`, `is_hidden`, `is_active`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'System Administrator', '$2y$10$U68eg.BfjpmPFZzxXDJUouR2SYFweu.UG1smgfTG9KhaSYWU2pJpu', 0, 0, 1, '2022-07-31 07:26:48', '2022-10-03 06:39:31'),
(2, 'admin', 'Administrator', '$2y$10$XmFxndYxmf6YryNQFj1Qg.wMicapebf/U8Ffj4jXLSVKU9YSB.XFa', 0, 0, 2, '2022-08-02 10:05:30', '2022-08-07 13:35:28'),
(4, 'user', 'User', '$2y$10$8qq5mruZe78skOPJAKoNQeO.phgoxyGd152JzIxb7zMU5lJ0bZ1Wa', 0, 0, 6, '2022-08-07 12:58:33', '2022-10-01 11:32:03');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indeks untuk tabel `category_gallery`
--
ALTER TABLE `category_gallery`
  ADD PRIMARY KEY (`category_gallery_id`);

--
-- Indeks untuk tabel `category_image`
--
ALTER TABLE `category_image`
  ADD PRIMARY KEY (`category_image_id`);

--
-- Indeks untuk tabel `category_news`
--
ALTER TABLE `category_news`
  ADD PRIMARY KEY (`category_news_id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indeks untuk tabel `flash_screen`
--
ALTER TABLE `flash_screen`
  ADD PRIMARY KEY (`flash_id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indeks untuk tabel `gis_batas_kecamatan`
--
ALTER TABLE `gis_batas_kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gis_category_facilities`
--
ALTER TABLE `gis_category_facilities`
  ADD PRIMARY KEY (`category_facilities_id`);

--
-- Indeks untuk tabel `gis_facilities`
--
ALTER TABLE `gis_facilities`
  ADD PRIMARY KEY (`facilities_id`);

--
-- Indeks untuk tabel `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indeks untuk tabel `lkpj`
--
ALTER TABLE `lkpj`
  ADD PRIMARY KEY (`lkpj_id`);

--
-- Indeks untuk tabel `lppd`
--
ALTER TABLE `lppd`
  ADD PRIMARY KEY (`lppd_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indeks untuk tabel `opd`
--
ALTER TABLE `opd`
  ADD PRIMARY KEY (`opd_id`),
  ADD UNIQUE KEY `opd` (`opd`);

--
-- Indeks untuk tabel `people_said`
--
ALTER TABLE `people_said`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indeks untuk tabel `rkpd`
--
ALTER TABLE `rkpd`
  ADD PRIMARY KEY (`rkpd_id`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indeks untuk tabel `role_permission`
--
ALTER TABLE `role_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rpjmd`
--
ALTER TABLE `rpjmd`
  ADD PRIMARY KEY (`rpjmd_id`);

--
-- Indeks untuk tabel `rpjpd`
--
ALTER TABLE `rpjpd`
  ADD PRIMARY KEY (`rpjpd_id`);

--
-- Indeks untuk tabel `sakip`
--
ALTER TABLE `sakip`
  ADD PRIMARY KEY (`sakip_id`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `category_gallery`
--
ALTER TABLE `category_gallery`
  MODIFY `category_gallery_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `category_image`
--
ALTER TABLE `category_image`
  MODIFY `category_image_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `category_news`
--
ALTER TABLE `category_news`
  MODIFY `category_news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `flash_screen`
--
ALTER TABLE `flash_screen`
  MODIFY `flash_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `gis_batas_kecamatan`
--
ALTER TABLE `gis_batas_kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `gis_category_facilities`
--
ALTER TABLE `gis_category_facilities`
  MODIFY `category_facilities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `gis_facilities`
--
ALTER TABLE `gis_facilities`
  MODIFY `facilities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lkpj`
--
ALTER TABLE `lkpj`
  MODIFY `lkpj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `lppd`
--
ALTER TABLE `lppd`
  MODIFY `lppd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `opd`
--
ALTER TABLE `opd`
  MODIFY `opd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `people_said`
--
ALTER TABLE `people_said`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `permission`
--
ALTER TABLE `permission`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `rkpd`
--
ALTER TABLE `rkpd`
  MODIFY `rkpd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `role_permission`
--
ALTER TABLE `role_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT untuk tabel `rpjmd`
--
ALTER TABLE `rpjmd`
  MODIFY `rpjmd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `rpjpd`
--
ALTER TABLE `rpjpd`
  MODIFY `rpjpd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sakip`
--
ALTER TABLE `sakip`
  MODIFY `sakip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
