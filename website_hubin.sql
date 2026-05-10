-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2026 at 11:00 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_hubin`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata_siswas`
--

CREATE TABLE `biodata_siswas` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_mulai_pkl` date NOT NULL,
  `tgl_selesai_pkl` date NOT NULL,
  `perusahaan_id` bigint UNSIGNED NOT NULL,
  `divisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembimbing_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembimbing_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodata_siswas`
--

INSERT INTO `biodata_siswas` (`id`, `user_id`, `nama`, `jurusan`, `alamat`, `no_telp`, `email`, `tgl_mulai_pkl`, `tgl_selesai_pkl`, `perusahaan_id`, `divisi`, `pembimbing_sekolah`, `pembimbing_perusahaan`, `foto`, `created_at`, `updated_at`, `kelas`) VALUES
(12, 4, 'Zlatan Ibrahim Ibra', 'Rekayasa Perangkat Lunak', 'GRIYA CIBINONG ASRI JAWA BARAT DEPOK BLOK C', '089513927288', 'corel@yahoo.com', '2026-01-07', '2026-04-22', 3, 'Programmer', 'Pak Ucup', 'Pak Dani', 'XprpjGCBsr1ZzukOM0MLrWatkwTsI87PA3xaVDqf.jpg', NULL, '2026-05-08 05:41:19', 'XI RPL 1'),
(13, 5, 'Bilqis Rifa\'at Safaa', 'Desain Komunikasi Visual', 'Karadenan JAWA BARAT', '089786876', 'corel@yahoo.com', '2026-01-27', '2026-01-28', 1, 'Designerr', 'Pak CC', 'Pak CC', 'byCO5UiHMfGryxgP5dx0ToeoGHBb8OzDpQ5LoWre.jpg', NULL, '2026-04-28 09:33:22', 'XI DKV 1'),
(15, 7, 'Wildan Zulfahmi Sianturi', 'Sistem Informasi Jaringan Dan Aplikasi', 'PURI NIRWANA 3', '0918278631', 'corel@yahoo.com', '2026-01-27', '2026-01-28', 1, 'Programmer', 'Pak Apa', 'Pak CC', 'tWsIoh0rTr1pdyDi6LTimNbVwsOh3wloD3EcTq2B.jpg', NULL, '2026-03-03 19:13:25', 'XI SIJA 2'),
(16, 8, 'Pedri Gonzales', 'Rekayasa Perangkat Lunak', 'Citayem Bogor Jawa Barat', '08128776312', 'azzam@gmail.com', '2026-01-29', '2026-01-29', 1, 'Programmer', 'Pak Aleksis', 'Bu Ayu Dewi', 'qFxe4zurTZZZu69hP1JaYfA1E1yB0A4ZS2YwMpJ0.jpg', NULL, '2026-05-07 23:59:55', 'XI RPL 1'),
(19, 3, 'Muhamad Naufal Hanif Rozak', 'Desain Komunikasi Visual', 'PONDOK RAJEG DEPOK', '089513278223', 'hanif@gmail.com', '2026-03-03', '2026-02-07', 3, 'Designer', 'Pak Alk', 'Pak Budi', 'ksXQfmQDaZRYLSKQYL3sRwa1stESlJ6pr7IzUxi5.jpg', '2026-02-03 07:40:54', '2026-05-08 01:23:07', 'XI DKV 2'),
(26, 9, 'Syahrul Haqqin Nazil', 'Teknik Komputer Dan Jaringan', 'PONDOK MANGGIS', '0891727282', 'gmngnabil742@gmail.com', '2026-03-04', '2026-03-12', 11, 'Programmer', 'Pak Latif', 'Pak CC', 'b5V0KiFDOWF2pdSpswsUCLkCgOqqPiz8eOKnqx1H.png', '2026-03-03 20:30:11', '2026-03-31 06:21:34', 'XI TKJ 2'),
(36, 6, 'Ramdanasi Gonzalez', 'Rekayasa Perangkat Lunak', 'Jln permarat indah', '08923978237', 'ramdan@gmail.com', '2026-05-08', '2026-09-25', 1, 'Web Designer', 'Pak Ucup', 'Bu Ayu', '1778232910.jpg', '2026-05-08 02:35:13', '2026-05-08 03:32:02', 'XI RPL 2'),
(38, 10, 'Muhamad Satria Nabil', 'Rekayasa Perangkat Lunak', 'Kp.pondok manggis rt05/02 Jawa barat', '0897263313', 'biln5708@gmail.com', '2026-05-08', '2026-10-14', 1, 'Programmer', 'Pak Faisal', 'Pak Dani', '1778243772.jpg', '2026-05-08 05:36:12', '2026-05-08 05:36:12', 'XI RPL 2');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_siswas`
--

CREATE TABLE `jurnal_siswas` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `materi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tugas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurnal_siswas`
--

INSERT INTO `jurnal_siswas` (`id`, `user_id`, `nama`, `jurusan`, `tanggal`, `materi`, `tugas`, `foto_kegiatan`, `created_at`, `updated_at`) VALUES
(27, 3, 'Muhamad Naufal Hanif', 'Desain Komunikasi Visual', '2026-03-03', 'Hari ini saya mempelajari tentang dasar-dasar desain layout dan komposisi dalam desain grafis. Materi yang dijelaskan meliputi penggunaan grid system, penempatan elemen visual agar seimbang, serta pentingnya hierarki visual supaya informasi mudah dipahami. Selain itu, saya juga belajar tentang pemilihan warna yang sesuai dengan identitas brand dan cara mengatur tipografi agar desain terlihat rapi dan profesional.', 'Saya mempraktikkan materi dengan membuat desain postingan media sosial menggunakan Adobe Illustrator. Saya menerapkan grid system untuk menyusun teks dan gambar, memilih kombinasi warna yang serasi, serta mengatur ukuran dan jenis font agar terlihat jelas dan menarik. Setelah selesai, desain saya direview oleh pembimbing dan diberikan beberapa masukan untuk perbaikan komposisi dan konsistensi warna.', 'foto_siswa/5v0JvofZPDmTR5hcfMv09mgakwnIemLt9HROTmbI.webp', '2026-03-03 05:59:24', '2026-03-03 05:59:24'),
(28, 3, 'Muhamad Naufal Hanif', 'Desain Komunikasi Visual', '2026-03-04', 'Hari ini saya mempelajari tentang pembuatan desain konten promosi untuk media sosial. Materi yang dijelaskan meliputi cara menentukan konsep desain sesuai target audiens, penggunaan elemen visual seperti ikon dan ilustrasi, serta teknik cropping dan masking pada gambar agar terlihat lebih menarik. Saya juga belajar pentingnya konsistensi desain agar sesuai dengan identitas visual perusahaan.', 'Saya diberi tugas untuk membuat desain banner promosi ukuran feed Instagram. Saya mulai dari mencari referensi, menentukan warna dan font yang sesuai, kemudian menyusun layout menggunakan software desain. Setelah desain selesai, saya melakukan revisi sesuai arahan pembimbing, terutama pada penyesuaian ukuran teks dan penempatan elemen agar lebih proporsional dan mudah dibaca.', 'foto_siswa/7iFZYcUKR1vzEMN5c3YPOGvl4Xnx9iInCylWshYq.webp', '2026-03-03 06:07:17', '2026-03-03 06:07:17'),
(29, 4, 'Muhamad Satria Nabil', 'Rekayasa Perangkat Lunak', '2026-03-03', 'Hari ini saya mempelajari tentang dasar-dasar pengembangan website menggunakan framework Laravel. Materi yang dijelaskan meliputi konsep MVC (Model, View, Controller), routing, serta cara membuat tampilan menggunakan blade template. Saya juga memahami bagaimana alur data dari database ditampilkan ke halaman web dan pentingnya struktur folder yang rapi dalam pembuatan aplikasi.', 'Saya membuat fitur tambah dan tampil data sederhana, lalu melakukan uji coba untuk memastikan data tersimpan dan ditampilkan dengan benar.', 'foto_siswa/5WCPkhPZ8OPzDbI8CjEmhhsd0P3xzfBQMpArpgbR.webp', '2026-03-03 06:09:37', '2026-03-03 06:09:37'),
(30, 4, 'Muhamad Satria Nabil', 'Rekayasa Perangkat Lunak', '2026-03-04', 'Hari ini saya mempelajari dasar pembuatan tampilan website menggunakan HTML dan CSS serta cara membuat layout yang rapi dan responsif.', 'Saya membuat halaman web sederhana yang berisi form dan tabel, kemudian mengatur tampilannya agar lebih rapi dan mudah digunakan.', 'foto_siswa/pNExSwiE8zPqPKHTmXQOhICDpNVB0E1l19zyhrcd.webp', '2026-03-03 06:10:20', '2026-03-03 06:10:20'),
(33, 7, 'Wildan Zulfahmi', 'Sistem Informasi Jaringan Dan Aplikasi', '2026-03-03', 'Hari ini saya mempelajari dasar instalasi dan konfigurasi sistem operasi Linux server serta pengenalan perintah dasar pada termina', 'Saya melakukan instalasi Linux pada virtual machine, mengatur user dan hak akses, lalu mencoba konfigurasi layanan sederhana seperti web server untuk diuji pada jaringan lokal.', 'foto_siswa/yBIDBZHaT39hXQsIl1D838FUzPVaeU1ASvx6fx9H.webp', '2026-03-03 06:34:02', '2026-03-03 06:34:02'),
(34, 7, 'Wildan Zulfahmi', 'Sistem Informasi Jaringan Dan Aplikasi', '2026-03-04', 'Hari ini saya mempelajari konsep dasar jaringan client-server serta cara kerja layanan database pada server.', 'Saya melakukan konfigurasi database sederhana di server lokal dan menghubungkannya dengan aplikasi agar data dapat tersimpan dan ditampilkan dengan baik.', 'foto_siswa/OUUnZxechygFIDKpznpri9A718jfsHkBe8nvkhtb.webp', '2026-03-03 06:34:55', '2026-03-03 06:34:55'),
(35, 3, 'Muhamad Naufal Hanif', 'Desain Komunikasi Visual', '2026-03-05', 'Hari ini saya mempelajari prinsip dasar desain seperti keseimbangan, kontras, dan hierarki visual dalam pembuatan poster.', 'Saya membuat desain poster sederhana dengan memperhatikan pemilihan warna, tipografi, dan tata letak agar terlihat menarik dan mudah dipahami.', 'foto_siswa/UYeFOsqbOB44cpsGlvHEXh6PCziWJ94rN2GBIK2A.webp', '2026-03-03 07:08:40', '2026-03-03 07:08:40'),
(43, 5, 'Bilqis Rifa\'at Safaa', 'Desain Komunikasi Visual', '2026-03-31', 'Mempelajari prinsip dasar desain komunikasi visual seperti layout, komposisi, keseimbangan, serta teori warna dan tipografi. Saya juga memahami pentingnya pemilihan warna yang tepat dan penggunaan font agar pesan dapat tersampaikan dengan jelas dan menarik.', 'Membuat desain poster sederhana dengan tema bebas menggunakan prinsip layout dan komposisi yang sudah dipelajari. Saya memilih kombinasi warna yang sesuai dan menggunakan tipografi yang mudah dibaca, kemudian melakukan revisi berdasarkan hasil evaluasi agar desain lebih rapi dan komunikatif.', 'foto_siswa/MyqNB4T2Wy45RP7hiyWotN0Cnow0Is3b81YvKJIr.webp', '2026-03-31 06:13:37', '2026-03-31 06:13:37'),
(44, 5, 'Bilqis Rifa\'at Safaa', 'Desain Komunikasi Visual', '2026-04-01', 'Hari ini saya mempelajari dasar pembuatan logo, mulai dari konsep, sketsa, hingga digitalisasi. Saya juga belajar tentang ciri logo yang baik seperti sederhana, mudah diingat, dan relevan dengan konsep.', 'Saya membuat beberapa sketsa logo di kertas, lalu memilih satu konsep terbaik untuk didesain secara digital. Setelah itu, saya mencoba beberapa variasi bentuk dan warna, lalu melakukan perbaikan agar hasil lebih menarik dan sesuai konsep.', 'foto_siswa/iSkZwhLSC6TfIwxSU8RQGNNTqg2tU8yGrnpjdkzZ.webp', '2026-03-31 06:15:42', '2026-03-31 06:15:42'),
(45, 8, 'Azzam', 'Rekayasa Perangkat Lunak', '2026-03-31', 'Hari ini saya mempelajari dasar-dasar pemrograman, seperti variabel, tipe data, dan struktur kontrol (if-else dan perulangan). Saya juga memahami alur logika dalam membuat program sederhana.', 'Saya membuat program sederhana menggunakan bahasa pemrograman untuk menghitung nilai dan menampilkan hasilnya. Selain itu, saya mencoba beberapa latihan soal untuk melatih logika dan memperbaiki error pada kode.', 'foto_siswa/ASZeKJSl9LsD84Vz5luvG9N9DQvSpNtpx5ZHhkZG.webp', '2026-03-31 06:19:39', '2026-03-31 06:19:39'),
(46, 9, 'Syahrul Haqqin Nazil', 'Teknik Komputer Dan Jaringan', '2026-03-31', 'Hari ini saya mempelajari dasar jaringan komputer, seperti pengertian jaringan, jenis-jenis jaringan, serta perangkat jaringan seperti router, switch, dan kabel LAN.', 'Saya melakukan praktik pemasangan kabel LAN dan mencoba konfigurasi jaringan sederhana antar komputer. Selain itu, saya juga menguji koneksi untuk memastikan jaringan berjalan dengan baik.', 'foto_siswa/8Dddtt0LCY1RXh4SKUbiyu5f0U26ZTm8BBdxnkhq.webp', '2026-03-31 06:22:48', '2026-03-31 06:22:48'),
(47, 4, 'Muhamad Satria Nabil Al-Kahfi', 'Rekayasa Perangkat Lunak', '2026-04-10', 'Materi tentang cara menggunakan docker', 'Saya mengerjakan tugas untuk mengelola website perusahaan impor di bidang pakaian', 'foto_siswa/MRnt1JJ7ovo8KC5LsgxH12PleaJPnlxfJwlwTThd.png', '2026-04-09 23:28:35', '2026-04-09 23:28:35'),
(48, 4, 'Muhamad Satria Nabil Al-Kahfi', 'Rekayasa Perangkat Lunak', '2026-05-01', 'Materi cara mengelola database sebuah aplikasi', 'Saya mengerjakan tugas untuk merapuhkan data di dalam database sebuah aplikasi', 'foto_siswa/Pyy2cgypcn5kiyr5zeWgSMzZWpi7xewuL3rTRGGz.png', '2026-04-09 23:39:37', '2026-04-09 23:39:37'),
(49, 4, 'Zlatan Ibrahim Movic', 'Rekayasa Perangkat Lunak', '2026-04-15', 'Mempelajari struktur folder yang ada di laravel dan kegunaannya', 'Membuat project menggunakan laravel', NULL, '2026-04-16 07:58:52', '2026-04-16 07:58:52'),
(50, 8, 'Muhammad Carrel Azzami Kecap', 'Rekayasa Perangkat Lunak', '2026-04-16', 'tester', 'tester', 'foto_siswa/UlSBzbxUy6UkVF4FVsajoS0IDoZLuXeesJUaWkKs.webp', '2026-04-16 08:18:48', '2026-04-16 08:18:48'),
(51, 4, 'Zlatan Ibrahim Movic', 'Rekayasa Perangkat Lunak', '2026-04-17', 'tester', 'terster', 'foto_siswa/7Phbi0YB36hTorWIx7DInnZEdQbguvX3b5dA4LY9.webp', '2026-04-16 18:11:48', '2026-04-16 18:11:48'),
(62, 3, 'Muhamad Naufal Hanif Rozak', 'Desain Komunikasi Visual', '2026-04-23', 'tester1', 'tester1', 'foto_siswa/9ZFpsjIFPDcYR7IaaySIwt7TOrYDCpwXRLLfwskC.webp', '2026-04-21 23:12:31', '2026-04-21 23:12:31'),
(63, 4, 'Zlatan Ibrahim Movic', 'Rekayasa Perangkat Lunak', '2026-04-22', 'ajshdjsdhksidhjbkakbjhjbjdhb jsadnm smbsa ndbsa dnd nsabd sakdhj nsajhdjasdjhkbsamnln bmnjbnjhjvnjmvbnvhgcxvghgjfxgfhjgfuiouehgjdhgjvashdjvsadhhsadvjbashdjvsahdjsajvdhasjdhjsadsahdjsadasjdjhasdbasgdvsajdgsahjdsavdgsavdjsadvashasvcjahcdvchdacbihddscsdcdscsdc', 'skahdjhashidbjsaoidhbsajhdhasbjdjsandasjcsabc duhcdsocdshidjncijcnsaicd cdscidbcdchduhcuaca cachudahcdahcdiauoicahbc aoicbaocbdauichjdajciajca casciosajcosaubhdasuidjascbhaicjsisa asibauischbasuihcuasi asicbusabcu', 'foto_siswa/69e879116e4cc.jpg', '2026-04-22 00:30:25', '2026-04-22 00:30:25'),
(65, 4, 'Zlatan Ibrahim Movic', 'Rekayasa Perangkat Lunak', '2026-04-28', 'TESTER 2', 'TESTER 2', 'foto_siswa/69f0e01e9daea.jpg', '2026-04-28 09:28:15', '2026-04-28 09:28:15'),
(67, 6, 'Ramdanasi Gonzalez', 'Rekayasa Perangkat Lunak', '2026-05-08', 'tester', 'tester', 'foto_siswa/69fdae6a5177a.jpg', '2026-05-08 02:35:38', '2026-05-08 02:35:38'),
(69, 10, 'Muhamad Satria Nabil', 'Rekayasa Perangkat Lunak', '2026-05-08', 'Tester1', 'tester1', 'foto_siswa/69fdd8e004356.jpg', '2026-05-08 05:36:48', '2026-05-08 05:36:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_10_07_072232_create_perusahaans_table', 1),
(5, '2025_11_13_142858_create_biodata_siswas_table', 1),
(6, '2025_11_27_044812_create_jurnal_siswas_table', 1),
(7, '2025_12_09_042626_add_jumlah_siswa_to_perusahaans_table', 2),
(8, '2026_01_28_051251_add_kelas_to_biodata_siswas_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `perusahaans`
--

CREATE TABLE `perusahaans` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jumlah_siswa` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perusahaans`
--

INSERT INTO `perusahaans` (`id`, `nama`, `alamat`, `no_telp`, `created_at`, `updated_at`, `jumlah_siswa`) VALUES
(1, 'PT.ALDO SUKSES', 'jln permata indah RT.100 RW200, kabupaten bogor, jawa barat, malaysia', '0875138212', '2025-12-07 01:58:07', '2026-04-28 09:20:52', 0),
(3, 'PT.CLEVIO', 'Bogor Jawa Barat', '0898627362', '2025-12-07 09:26:31', '2026-02-13 04:35:04', 0),
(8, 'PT. BOER TECHNOLOGYY', 'JAWA BARAT INDONESIA', '0893891717', '2026-02-12 19:17:48', '2026-04-09 18:42:15', 0),
(11, 'PT. Raid Brike', 'JAWA BARAT', '0818271821', '2026-03-03 19:26:49', '2026-04-09 18:42:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5whPxSk6LZfnK5f6kHh0jYodAqbEToJGGAlXXGoK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRXJaQjdaeHc1TnhxNms1R2YwUWpPZHh4MEc1WHJPQ3VOdGowVWlYeSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1778312862);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','siswa','guru') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `jurusan`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admins', '$2y$12$wxMTQRjQS7pnr26lH5imDOTwVut7KyZuB9z8m9Guul7ddoeWn4hEO', 'admin', NULL, NULL, '2025-12-07 01:54:10', '2025-12-07 01:54:10'),
(2, 'Gurus', '$2y$12$htE11O4f3ahZplLEgFRjm.k0r5PoZfOk2ej.KsSD6bi7wNU2mgaI6', 'guru', NULL, NULL, '2025-12-07 01:54:10', '2025-12-07 01:54:10'),
(3, 'Siswa', '$2y$12$ktPcHSVeipjYkJULrmkpH.WVIf19jmqADIDnUqUK8Kg07jJG7NmFe', 'siswa', NULL, NULL, '2025-12-07 01:54:10', '2025-12-07 01:54:10'),
(4, 'Siswa1', '$2y$12$w.LaULN9H17336zIzvzZb.o.md.F21Q0v7NjbcptnIgFJGeOQ6BMu', 'siswa', NULL, NULL, '2025-12-07 01:54:10', '2025-12-07 01:54:10'),
(5, 'Siswa2', '$2y$12$hmr2ShPU9j5gFPyxNYejPuyOVkRR6wePM2UyU9kTByOxIfBOl..JO', 'siswa', NULL, NULL, '2025-12-07 01:54:10', '2025-12-07 01:54:10'),
(6, 'Siswa3', '$2y$12$OjuU9Tr1OZCxS81hiy1A0Ot2qfZd7c14U0pAeM/OdIhHGbQRn3f0S', 'siswa', NULL, NULL, '2025-12-07 01:54:10', '2025-12-07 01:54:10'),
(7, 'Siswa4', '$2y$12$fjUwuXnbxRP0UluFgaVTbubRRPuRQ1opzKon5AmaSKKMkeYV7wwVy', 'siswa', NULL, NULL, '2025-12-07 01:54:10', '2025-12-07 01:54:10'),
(8, 'Siswa5', '$2y$12$GX4w58/zCYdbnd1B14PT7eSQ6X6/xhPa.kZ/MZAKCpJonaCzy6gbm', 'siswa', NULL, NULL, '2025-12-07 01:54:10', '2025-12-07 01:54:10'),
(9, 'Siswa6', '$2y$12$/F10Qwxn0qfdspQ.N9cQDeTtYh3TrkdteNvhGoBSpveMhvETMLB3.', 'siswa', NULL, NULL, '2025-12-07 01:54:10', '2025-12-07 01:54:10'),
(10, 'Siswa7', '$2y$12$4g5vgCGUrNtdRFiJ.zK9f.wjwsTss39BgWjXqT9eZ9U1unKGbZ3XC', 'siswa', NULL, NULL, '2025-12-07 01:54:10', '2025-12-07 01:54:10'),
(11, 'gururpl', '$2y$12$r3nn0ywEQI3fLC0oa/CtxOmGtJQS78Nd1vnvDCGd4bxTGn3nn2gXa', 'guru', 'Rekayasa Perangkat Lunak', NULL, '2025-12-07 01:54:10', '2025-12-07 01:54:10'),
(12, 'gurudkv', '$2y$12$mji2dg6O3MlwYKu45XcgLenYJ3HIejXJm7qkqiDvQxSSn.wDamFJC', 'guru', 'Desain Komunikasi Visual', NULL, '2025-12-07 01:54:10', '2025-12-07 01:54:10'),
(13, 'gurusija', '$2y$12$2wYF6aFqHCH9gfONZzVKZOiQdU..UGxHzsdrln.6jnqHoQOqC8/V.', 'guru', 'Sistem Informasi Jaringan Dan Aplikasi', NULL, '2025-12-07 01:54:10', '2025-12-07 01:54:10'),
(14, 'gurutkj', '$2y$12$..hc5jlBJz3L4EDLK5PtSu4X5nPxXSAWrLKpih0TIryeALdqhJrCy', 'guru', 'Teknik Komputer Dan Jaringan', NULL, '2025-12-07 01:54:10', '2025-12-07 01:54:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata_siswas`
--
ALTER TABLE `biodata_siswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_siswas_user_id_foreign` (`user_id`),
  ADD KEY `biodata_siswas_perusahaan_id_foreign` (`perusahaan_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurnal_siswas`
--
ALTER TABLE `jurnal_siswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jurnal_biodata` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perusahaans`
--
ALTER TABLE `perusahaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata_siswas`
--
ALTER TABLE `biodata_siswas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurnal_siswas`
--
ALTER TABLE `jurnal_siswas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `perusahaans`
--
ALTER TABLE `perusahaans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biodata_siswas`
--
ALTER TABLE `biodata_siswas`
  ADD CONSTRAINT `biodata_siswas_perusahaan_id_foreign` FOREIGN KEY (`perusahaan_id`) REFERENCES `perusahaans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `biodata_siswas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jurnal_siswas`
--
ALTER TABLE `jurnal_siswas`
  ADD CONSTRAINT `fk_jurnal_biodata` FOREIGN KEY (`user_id`) REFERENCES `biodata_siswas` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jurnal_siswas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
