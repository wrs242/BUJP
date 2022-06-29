-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 05:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `local_bujp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bujp`
--

CREATE TABLE `bujp` (
  `ID_BUJP` int(10) NOT NULL,
  `ID_UNIT` int(10) DEFAULT NULL,
  `NAMA_BUJP` char(100) DEFAULT NULL,
  `TELP_KANTOR` char(12) DEFAULT NULL,
  `TGL_TERIMA_COMPANY_PROFILE` date DEFAULT NULL,
  `ALAMAT` char(255) DEFAULT NULL,
  `UNDANGAN_PRESENTASI` char(10) DEFAULT NULL,
  `TGL_PRESENTASI` date DEFAULT NULL,
  `ALASAN_TIDAK_DIUNDANG` char(255) DEFAULT NULL,
  `KEPEMILIKAN_KANTOR` char(10) DEFAULT NULL,
  `PERIODE_SEWA` date DEFAULT NULL,
  `FOTO_KANTOR` char(100) DEFAULT NULL,
  `AKTA_PENDIRIAN_PERUSAHAAN` char(10) DEFAULT NULL,
  `TGL_PENDIRIAN` date DEFAULT NULL,
  `AKTA_PERUBAHAN` date DEFAULT NULL,
  `NO_NOTARIS` char(15) DEFAULT NULL,
  `FOTO_AKTA` char(100) DEFAULT NULL,
  `NO_SIO` char(15) DEFAULT NULL,
  `MASA_BERLAKU_SIO` date DEFAULT NULL,
  `FOTO_SIO` char(100) DEFAULT NULL,
  `STATUS_BPJS_KETENAGA_KERJAAN` char(20) DEFAULT NULL,
  `NO_BPJS_KETENAGA_KERJAAN` char(20) DEFAULT NULL,
  `FOTO_BPJS_KETENAGA_KERJAAN` char(100) DEFAULT NULL,
  `STATUS_BPJS_KESEHATAN` char(20) DEFAULT NULL,
  `NO_BPJS_KESEHATAN` char(20) DEFAULT NULL,
  `FOTO_BPJS_KESEHATAN` char(100) DEFAULT NULL,
  `FOTO_REKENING_KORAN` char(100) DEFAULT NULL,
  `MOBIL_PATROLI` int(5) DEFAULT NULL,
  `KEPEMILIKAN_MOBIL` char(20) DEFAULT NULL,
  `MOTOR_PATROLI` int(5) DEFAULT NULL,
  `KEPEMILIKAN_MOTOR` char(20) DEFAULT NULL,
  `PORTO_MALL` varchar(500) DEFAULT NULL,
  `PORTO_CLUSTER` varchar(500) DEFAULT NULL,
  `PORTO_APARTEMEN` varchar(500) DEFAULT NULL,
  `PORTO_PERKANTORAN` varchar(500) DEFAULT NULL,
  `PORTO_KAWASAN` varchar(500) DEFAULT NULL,
  `NAMA_PEJABAT_TNI` char(100) DEFAULT NULL,
  `PANGKAT_PEJABAT_TNI` char(100) DEFAULT NULL,
  `JABATAN_PEJABAT_TNI` char(100) DEFAULT NULL,
  `RELASI_PEJABAT_TNI` char(100) DEFAULT NULL,
  `FOTO_PEJABAT_TNI` char(100) DEFAULT NULL,
  `NAMA_PEJABAT_POLRI` char(100) DEFAULT NULL,
  `PANGKAT_PEJABAT_POLRI` char(100) DEFAULT NULL,
  `JABATAN_PEJABAT_POLRI` char(100) DEFAULT NULL,
  `RELASI_PEJABAT_POLRI` char(100) DEFAULT NULL,
  `FOTO_PEJABAT_POLRI` char(100) DEFAULT NULL,
  `SPT_PERUSAHAAN` char(100) DEFAULT NULL,
  `HASIL_SELEKSI` char(50) DEFAULT NULL,
  `STATUS` char(100) DEFAULT NULL,
  `KETERANGAN_STATUS` char(255) DEFAULT NULL,
  `OBJEK_PENGAMANAN` char(100) DEFAULT NULL,
  `JUMLAH_PERSONEL` char(5) DEFAULT NULL,
  `HARGA_PERORANG` int(11) DEFAULT NULL,
  `TAKE_HOME_PAY_RUPIAH` int(11) DEFAULT NULL,
  `TAKE_HOME_PAY_PERSEN` char(3) DEFAULT NULL,
  `SANKSI` char(10) DEFAULT NULL,
  `KETERANGAN_SANKSI` char(100) DEFAULT NULL,
  `NAMA_DIREKTUR` char(100) DEFAULT NULL,
  `TELP_DIREKTUR` char(12) DEFAULT NULL,
  `USER_CREATED` char(10) DEFAULT NULL,
  `DATE_CREATED` date DEFAULT NULL,
  `USER_MODIFIED` char(10) DEFAULT NULL,
  `DATE_MODIFIED` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bujp`
--

INSERT INTO `bujp` (`ID_BUJP`, `ID_UNIT`, `NAMA_BUJP`, `TELP_KANTOR`, `TGL_TERIMA_COMPANY_PROFILE`, `ALAMAT`, `UNDANGAN_PRESENTASI`, `TGL_PRESENTASI`, `ALASAN_TIDAK_DIUNDANG`, `KEPEMILIKAN_KANTOR`, `PERIODE_SEWA`, `FOTO_KANTOR`, `AKTA_PENDIRIAN_PERUSAHAAN`, `TGL_PENDIRIAN`, `AKTA_PERUBAHAN`, `NO_NOTARIS`, `FOTO_AKTA`, `NO_SIO`, `MASA_BERLAKU_SIO`, `FOTO_SIO`, `STATUS_BPJS_KETENAGA_KERJAAN`, `NO_BPJS_KETENAGA_KERJAAN`, `FOTO_BPJS_KETENAGA_KERJAAN`, `STATUS_BPJS_KESEHATAN`, `NO_BPJS_KESEHATAN`, `FOTO_BPJS_KESEHATAN`, `FOTO_REKENING_KORAN`, `MOBIL_PATROLI`, `KEPEMILIKAN_MOBIL`, `MOTOR_PATROLI`, `KEPEMILIKAN_MOTOR`, `PORTO_MALL`, `PORTO_CLUSTER`, `PORTO_APARTEMEN`, `PORTO_PERKANTORAN`, `PORTO_KAWASAN`, `NAMA_PEJABAT_TNI`, `PANGKAT_PEJABAT_TNI`, `JABATAN_PEJABAT_TNI`, `RELASI_PEJABAT_TNI`, `FOTO_PEJABAT_TNI`, `NAMA_PEJABAT_POLRI`, `PANGKAT_PEJABAT_POLRI`, `JABATAN_PEJABAT_POLRI`, `RELASI_PEJABAT_POLRI`, `FOTO_PEJABAT_POLRI`, `SPT_PERUSAHAAN`, `HASIL_SELEKSI`, `STATUS`, `KETERANGAN_STATUS`, `OBJEK_PENGAMANAN`, `JUMLAH_PERSONEL`, `HARGA_PERORANG`, `TAKE_HOME_PAY_RUPIAH`, `TAKE_HOME_PAY_PERSEN`, `SANKSI`, `KETERANGAN_SANKSI`, `NAMA_DIREKTUR`, `TELP_DIREKTUR`, `USER_CREATED`, `DATE_CREATED`, `USER_MODIFIED`, `DATE_MODIFIED`) VALUES
(1, NULL, 'PT. ABC', '0727845245', '2022-06-15', 'asdwd', 'Ya', NULL, NULL, NULL, NULL, '1655350106.png', 'Tidak', '2022-06-09', '2022-06-21', '10114410', '1655350106.png', '20144784', '2022-06-23', '1655350106.png', 'Terdaftar', 'awdwds', '1655350106.png', 'Terdaftar', '287050', '1655350106.png', '1655350106.png', 2, 'Milik Pribadi', 3, 'Milik Pribadi', 'ffdf', 'fffff', 'dddd', 'wqqqq', 'wwww', 'abc', 'qqq', 'www', 'eee', '1655350106.png', 'fdzwqw', 'qwqwqw', 'qwwqqw', 'sddsds', '1655350106.png', '1655350106.png', 'Lulus', 'Tidak Kerjasama', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 'PT. ABC', '121', '2022-06-15', 'asdwd', 'Ya', '2022-06-10', 'asdwds', NULL, '2022-06-15', '1655350281.png', 'Tidak', '2022-06-09', '2022-06-21', '10114410', '1655350281.png', '20144784', '2022-06-23', '1655350281.png', 'Terdaftar', 'awdwds', '1655350281.png', 'Terdaftar', '287050', '1655350281.png', '1655350281.png', 2, 'Milik Pribadi', 3, 'Milik Pribadi', 'ffdf', 'fffff', 'dddd', 'wqqqq', 'wwww', 'abc', 'qqq', 'www', 'eee', '1655350281.png', 'fdzwqw', 'qwqwqw', 'qwwqqw', 'sddsds', '1655350281.png', '1655350281.png', 'Lulus', 'Kerjasama', 'asdw', 'abx', '3', 2, 3, '4', 'SP 1', '4', '2', '3', NULL, NULL, NULL, NULL),
(3, NULL, 'PT. ABC', '0727845245', '2022-06-15', 'asdwd', 'Ya', '2022-06-10', 'asdwds', NULL, '2022-06-15', '1655350486.png', 'Ya', '2022-06-09', '2022-06-21', '10114410', '1655350486.png', '20144784', '2022-06-23', '1655350486.png', 'Terdaftar', 'awdwds', '1655350486.png', 'Terdaftar', '287050', '1655350486.png', '1655350486.png', 2, 'Milik Pribadi', 3, 'Milik Pribadi', 'ffdf', 'fffff', 'dddd', 'wqqqq', 'wwww', 'abc', 'qqq', 'www', 'eee', '1655350486.png', 'fdzwqw', 'qwqwqw', 'qwwqqw', 'sddsds', '1655350486.png', '1655350486.png', 'Lulus', 'Kerjasama', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 3, 'PT. XYZ', '231231', '2022-06-22', 'Serpong Terrace Blok E.5/1', 'Ya', '2022-06-16', 'asdwds', 'Ya', '2022-06-22', '1655450177.png', 'Ya', '2022-06-23', '2022-06-14', '4174175', '1655450177.png', '20144784', '2022-06-14', '1655450177.png', 'Terdaftar', '052452', '1655450177.png', 'Tidak Terdaftar', '287050', '1655450177.png', '1655450177.png', 2, 'Milik Pribadi', 2, 'Milik Pribadi', 'aaaa', 'ssss', 'dddd', 'fff', 'ggg', 'azz', 'azaza', 'aaza', 'azaza', '1655450177.png', 'asdas', 'wdwdw', 'qwwqqw', 'sddsds', '1655450177.png', '1655450177.png', 'Lulus', 'Kerjasama', 'wdasdw', 'sada', '2', 1123123, 123, '10', 'SP 1', '231', 'asdawdw', '232323', NULL, NULL, NULL, NULL),
(5, 1, 'PT. ABC', '121', '2022-06-15', 'asdwd', 'Ya', '2022-06-10', 'asdwds', NULL, '2022-06-15', '1655350281.png', 'Tidak', '2022-06-09', '2022-06-21', '10114410', '1655350281.png', '20144784', '2022-06-23', '1655350281.png', 'Terdaftar', 'awdwds', '1655350281.png', 'Terdaftar', '287050', '1655350281.png', '1655350281.png', 2, 'Milik Pribadi', 3, 'Milik Pribadi', 'ffdf', 'fffff', 'dddd', 'wqqqq', 'wwww', 'abc', 'qqq', 'www', 'eee', '1655350281.png', 'fdzwqw', 'qwqwqw', 'qwwqqw', 'sddsds', '1655350281.png', '1655350281.png', 'Lulus', 'Kerjasama', 'asdw', 'ABC', '3', 2, 3, '4', 'SP 1', '4', '2', '3', NULL, NULL, NULL, NULL),
(6, 3, 'PT. abdefg', 'wdw', '2022-06-16', 'fwefasdw', 'Ya', '2022-06-16', 'awdsw', 'Ya', '2022-06-14', '1656061474.png', 'Ya', '2022-06-23', '2022-06-29', '10114410', '1656061474.png', '245285', '2022-06-23', '1656061474.png', 'Terdaftar', '5242\\', '1656061474.png', 'Terdaftar', '14152', '1656061474.png', '1656061474.png', 1, 'Milik Pribadi', 4, 'Milik Pribadi', '52', '4524', '52', '524', '5245', '525', '542', '42', '52', '1656061474.png', '5245', '525', '52452', '525', '1656061474.png', '1656061474.png', 'Lulus', 'Kerjasama', '313', 'gvgvg', '3', 200000, 238763423, '231', 'SP 1', '231', 'wdasd', 'awds', NULL, NULL, NULL, NULL),
(7, NULL, 'Pradita University', '0727845245', '2022-06-21', 'Serpong Terrace Blok E.5/1', 'Ya', '2022-06-29', 'asdwds', 'Ya', NULL, '1656402078.png', 'Ya', '2022-06-29', '2022-06-30', '10114410', '1656402078.png', '20144784', '2022-06-29', '1656402078.png', 'Terdaftar', '5242\\', '1656402078.png', 'Terdaftar', '14152', '1656402078.png', '1656402078.png', 2, 'Milik Pribadi', 2, 'Sewa', 'ffdf', 'wdwdw', 'dddd', 'wqqqq', 'wwww', 'abc', 'qqq', 'www', 'eee', '1656402078.png', 'fdzwqw', 'qwqwqw', 'qwwqqw', 'sddsds', '1656402078.png', '1656402078.png', 'Lulus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kontrak`
--

CREATE TABLE `kontrak` (
  `ID_BUJP` int(10) DEFAULT NULL,
  `ID_KONTRAK` int(10) NOT NULL,
  `NO_SPK` char(20) NOT NULL,
  `UPLOAD_SPK` char(100) DEFAULT NULL,
  `AWAL_KONTRAK` date DEFAULT NULL,
  `AKHIR_KONTRAK` date DEFAULT NULL,
  `TAHUN_KONTRAK` char(5) DEFAULT NULL,
  `KONTRAK_KE` char(5) DEFAULT NULL,
  `ADENDUM` char(50) NOT NULL,
  `KETERANGAN_ADENDUM` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontrak`
--

INSERT INTO `kontrak` (`ID_BUJP`, `ID_KONTRAK`, `NO_SPK`, `UPLOAD_SPK`, `AWAL_KONTRAK`, `AKHIR_KONTRAK`, `TAHUN_KONTRAK`, `KONTRAK_KE`, `ADENDUM`, `KETERANGAN_ADENDUM`) VALUES
(1, 1, '123123', NULL, '2022-06-23', '2022-07-01', '2', '2', 'Adendum', 'wdwa'),
(1, 2, '2231', NULL, '2022-06-24', '2022-06-29', '2', '1', 'Adendum', 'we1e1'),
(1, 3, '2231231', NULL, '2022-06-24', '2022-07-07', '3', '2', 'Adendum', '3232'),
(6, 4, '2231231', NULL, '2022-06-22', '2022-06-30', '1', '1', 'Adendum', '3342');

-- --------------------------------------------------------

--
-- Table structure for table `kontrol_bulanan`
--

CREATE TABLE `kontrol_bulanan` (
  `ID_KONTROL` int(10) NOT NULL,
  `ID_BUJP` int(10) NOT NULL,
  `PERIODE_KONTROL_BULAN` char(50) DEFAULT NULL,
  `PERIODE_KONTROL_TAHUN` varchar(4) NOT NULL,
  `SDM_KEHADIRAN_STANDAR` char(255) DEFAULT NULL,
  `SDM_KEHADIRAN_REALISASI` char(255) DEFAULT NULL,
  `SDM_KEHADIRAN_TINDAKAN` char(255) DEFAULT NULL,
  `SDM_PERGANTIAN_ANGGOTA_STANDAR` char(255) DEFAULT NULL,
  `SDM_PERGANTIAN_ANGGOTA_REALISASI` char(255) DEFAULT NULL,
  `SDM_PERGANTIAN_ANGGOTA_TINDAKAN` char(255) DEFAULT NULL,
  `ADMINISTRASI_INVOICE_STANDAR` char(255) DEFAULT NULL,
  `ADMINISTRASI_INVOICE_REALISASI` char(255) DEFAULT NULL,
  `ADMINISTRASI_INVOICE_TINDAKAN` char(255) DEFAULT NULL,
  `ADMINISTRASI_GIRO_STANDAR` char(255) DEFAULT NULL,
  `ADMINISTRASI_GIRO_REALISASI` char(255) DEFAULT NULL,
  `ADMINISTRASI_GIRO_TINDAKAN` char(255) DEFAULT NULL,
  `GAJI_TAKE_HOME_PAY_STANDAR` char(255) DEFAULT NULL,
  `GAJI_TAKE_HOME_PAY_REALISASI` char(255) DEFAULT NULL,
  `GAJI_TAKE_HOME_PAY_TINDAKAN` char(255) DEFAULT NULL,
  `GAJI_REALISASI_STANDAR` char(255) DEFAULT NULL,
  `GAJI_REALISASI_REALISASI` char(255) DEFAULT NULL,
  `GAJI_REALISASI_TINDAKAN` char(255) DEFAULT NULL,
  `KEJADIAN` char(255) DEFAULT NULL,
  `USER_CREATED` char(10) DEFAULT NULL,
  `DATE_CREATED` date DEFAULT NULL,
  `USER_MODIFIED` char(10) DEFAULT NULL,
  `DATE_MODIFIED` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontrol_bulanan`
--

INSERT INTO `kontrol_bulanan` (`ID_KONTROL`, `ID_BUJP`, `PERIODE_KONTROL_BULAN`, `PERIODE_KONTROL_TAHUN`, `SDM_KEHADIRAN_STANDAR`, `SDM_KEHADIRAN_REALISASI`, `SDM_KEHADIRAN_TINDAKAN`, `SDM_PERGANTIAN_ANGGOTA_STANDAR`, `SDM_PERGANTIAN_ANGGOTA_REALISASI`, `SDM_PERGANTIAN_ANGGOTA_TINDAKAN`, `ADMINISTRASI_INVOICE_STANDAR`, `ADMINISTRASI_INVOICE_REALISASI`, `ADMINISTRASI_INVOICE_TINDAKAN`, `ADMINISTRASI_GIRO_STANDAR`, `ADMINISTRASI_GIRO_REALISASI`, `ADMINISTRASI_GIRO_TINDAKAN`, `GAJI_TAKE_HOME_PAY_STANDAR`, `GAJI_TAKE_HOME_PAY_REALISASI`, `GAJI_TAKE_HOME_PAY_TINDAKAN`, `GAJI_REALISASI_STANDAR`, `GAJI_REALISASI_REALISASI`, `GAJI_REALISASI_TINDAKAN`, `KEJADIAN`, `USER_CREATED`, `DATE_CREATED`, `USER_MODIFIED`, `DATE_MODIFIED`) VALUES
(2, 2, 'Jun', '2022', 'dwafesgrdhtfjghj', 'dwwdw', 'asd', 'adw', 'wdasd', 'wdwdw', 'wdawsd', 'wdas', 'asdwd', 'wdasd', 'asd', 'wasdw', 'wdwdasd', 'wd', 'w', 'dwdasd', 'wdaw', 'asd', 'dawdasadadsad', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedoman_keamanan`
--

CREATE TABLE `pedoman_keamanan` (
  `ID_PEDOMAN` char(10) NOT NULL,
  `NAMA_PEDOMAN` char(50) DEFAULT NULL,
  `FILE_PEDOMAN` longblob DEFAULT NULL,
  `USER_MODIFIED` char(10) DEFAULT NULL,
  `DATE_MODIFIED` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_tahunan`
--

CREATE TABLE `penilaian_tahunan` (
  `ID_PENILAIAN_TAHUNAN` int(10) NOT NULL,
  `ID_BUJP` int(10) DEFAULT NULL,
  `NILAI_SCHEDULE` int(11) DEFAULT NULL,
  `KETERANGAN_SCHEDULE` char(255) DEFAULT NULL,
  `NILAI_KINERJA` int(11) DEFAULT NULL,
  `KETERANGAN_KINERJA` char(255) DEFAULT NULL,
  `NILAI_TARGET_PENGAMANAN` int(11) DEFAULT NULL,
  `KETERANGAN_TARGET_PENGAMANAN` char(255) DEFAULT NULL,
  `NILAI_PELANGGARAN` int(11) DEFAULT NULL,
  `KETERANGAN_PELANGGARAN` char(255) DEFAULT NULL,
  `NILAI_SDM` int(11) DEFAULT NULL,
  `KETERANGAN_SDM` char(255) DEFAULT NULL,
  `NILAI_KEHADIRAN` int(11) DEFAULT NULL,
  `KETERANGAN_KEHADIRAN` char(255) DEFAULT NULL,
  `NILAI_ALAT_ALAT_KERJA` int(11) DEFAULT NULL,
  `KETERANGAN_ALAT_ALAT_KERJA` char(255) DEFAULT NULL,
  `NILAI_KETEPATAN_LAPORAN` int(11) DEFAULT NULL,
  `KETERANGAN_KETEPATAN_LAPORAN` char(255) DEFAULT NULL,
  `NILAI_KOMPLAIN` int(11) DEFAULT NULL,
  `KETERANGAN_KOMPLAIN` char(255) DEFAULT NULL,
  `NILAI_ADMINISTRASI` int(11) DEFAULT NULL,
  `KETERANGAN_ADMINISTRASI` char(255) DEFAULT NULL,
  `TOTAL_NILAI` int(5) NOT NULL,
  `TAHUN_PENILAIAN` char(4) NOT NULL,
  `USER_CREATED` char(10) DEFAULT NULL,
  `DATE_CREATED` date DEFAULT NULL,
  `USER_MODIFIED` char(10) DEFAULT NULL,
  `DATE_MODIFIED` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penilaian_tahunan`
--

INSERT INTO `penilaian_tahunan` (`ID_PENILAIAN_TAHUNAN`, `ID_BUJP`, `NILAI_SCHEDULE`, `KETERANGAN_SCHEDULE`, `NILAI_KINERJA`, `KETERANGAN_KINERJA`, `NILAI_TARGET_PENGAMANAN`, `KETERANGAN_TARGET_PENGAMANAN`, `NILAI_PELANGGARAN`, `KETERANGAN_PELANGGARAN`, `NILAI_SDM`, `KETERANGAN_SDM`, `NILAI_KEHADIRAN`, `KETERANGAN_KEHADIRAN`, `NILAI_ALAT_ALAT_KERJA`, `KETERANGAN_ALAT_ALAT_KERJA`, `NILAI_KETEPATAN_LAPORAN`, `KETERANGAN_KETEPATAN_LAPORAN`, `NILAI_KOMPLAIN`, `KETERANGAN_KOMPLAIN`, `NILAI_ADMINISTRASI`, `KETERANGAN_ADMINISTRASI`, `TOTAL_NILAI`, `TAHUN_PENILAIAN`, `USER_CREATED`, `DATE_CREATED`, `USER_MODIFIED`, `DATE_MODIFIED`) VALUES
(1, 4, 3, 'wdw', 3, 'asdw', 3, 'wdas', 3, 'wdsdw', 3, 'asdw', 3, 'asdw', 3, 'asc', 3, 'asd', 3, 'wd', 3, 'asdw', 102, '2022', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `perlengkapan_kontrol_bulanan`
--

CREATE TABLE `perlengkapan_kontrol_bulanan` (
  `ID_PERLENGKAPAN` char(15) NOT NULL,
  `ID_KONTROL` int(10) DEFAULT NULL,
  `NAMA_PERLENGKAPAN` char(100) DEFAULT NULL,
  `STANDAR_PERLENGKAPAN` char(100) DEFAULT NULL,
  `REALISASI_PERLENGKAPAN` char(100) DEFAULT NULL,
  `TINDAKAN_PERLENGKAPAN` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stakeholder`
--

CREATE TABLE `stakeholder` (
  `ID_STAKEHOLDER` int(10) NOT NULL,
  `KAWASAN` char(100) DEFAULT NULL,
  `WILAYAH` char(100) DEFAULT NULL,
  `INSTANSI` char(100) DEFAULT NULL,
  `WILAYAH_HUKUM` char(100) DEFAULT NULL,
  `ALAMAT_INSTANSI` char(255) DEFAULT NULL,
  `NAMA_P_LAMA` char(100) DEFAULT NULL,
  `PANGKAT_P_LAMA` char(100) DEFAULT NULL,
  `MULAI_MENJABAT_P_LAMA` date DEFAULT NULL,
  `AKHIR_MENJABAT_P_LAMA` date DEFAULT NULL,
  `JUMLAH_PERSONEL_P_LAMA` char(5) DEFAULT NULL,
  `LOKASI_TUGAS_BARU_P_LAMA` char(100) DEFAULT NULL,
  `TAHUN_ANGKATAN_P_LAMA` char(4) DEFAULT NULL,
  `TELP_P_LAMA` char(12) DEFAULT NULL,
  `FOTO_P_LAMA` char(100) DEFAULT NULL,
  `NAMA_P_BARU` char(100) DEFAULT NULL,
  `PANGKAT_P_BARU` char(100) DEFAULT NULL,
  `MULAI_MENJABAT_P_BARU` date DEFAULT NULL,
  `AKHIR_MENJABAT_P_BARU` date DEFAULT NULL,
  `JUMLAH_PERSONEL_P_BARU` char(5) DEFAULT NULL,
  `LOKASI_TUGAS_LAMA_P_BARU` char(100) DEFAULT NULL,
  `TAHUN_ANGKATAN_P_BARU` char(4) DEFAULT NULL,
  `TELP_P_BARU` char(12) DEFAULT NULL,
  `FOTO_P_BARU` char(100) DEFAULT NULL,
  `USER_CREATED` int(10) DEFAULT NULL,
  `DATE_CREATED` date DEFAULT NULL,
  `USER_UPDATED` int(10) DEFAULT NULL,
  `DATE_UPDATED` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stakeholder`
--

INSERT INTO `stakeholder` (`ID_STAKEHOLDER`, `KAWASAN`, `WILAYAH`, `INSTANSI`, `WILAYAH_HUKUM`, `ALAMAT_INSTANSI`, `NAMA_P_LAMA`, `PANGKAT_P_LAMA`, `MULAI_MENJABAT_P_LAMA`, `AKHIR_MENJABAT_P_LAMA`, `JUMLAH_PERSONEL_P_LAMA`, `LOKASI_TUGAS_BARU_P_LAMA`, `TAHUN_ANGKATAN_P_LAMA`, `TELP_P_LAMA`, `FOTO_P_LAMA`, `NAMA_P_BARU`, `PANGKAT_P_BARU`, `MULAI_MENJABAT_P_BARU`, `AKHIR_MENJABAT_P_BARU`, `JUMLAH_PERSONEL_P_BARU`, `LOKASI_TUGAS_LAMA_P_BARU`, `TAHUN_ANGKATAN_P_BARU`, `TELP_P_BARU`, `FOTO_P_BARU`, `USER_CREATED`, `DATE_CREATED`, `USER_UPDATED`, `DATE_UPDATED`) VALUES
(5, 'Summarecon Kelapa Gading', 'AAAAAA', 'POLRI', 'asdwds', 'Serpong Terrace Blok E.5/1', 'dasdw', 'asddwa', '2022-06-28', '2022-06-29', '50', 'adw', 'asdw', 'sssss', '1656316297.jpg', 'asdw', 'wdwdwd', '2022-07-01', '2022-06-20', 'a', 'sdwdas', '2021', 'aaaaa', '1656316297.jpg', 8, '2022-06-27', 10, '2022-06-27'),
(6, 'Summarecon Kelapa Gading', 'sdwds', 'POLRI', 'wdasdw', 'Serpong Terrace Blok E.5/1', 'wdwdw', 'asddwa', '2022-06-06', '2022-06-21', '20', 'dwda', NULL, NULL, '1656314569.jpg', 'wdwa', 'wdwdwd', '2022-06-27', '2022-06-06', 'dwd', 'awd', '2020', 'wdw', '1656314570.jpg', 10, '2022-06-27', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `ID_UNIT` int(10) NOT NULL,
  `NAMA_UNIT` char(100) DEFAULT NULL,
  `USER_CREATED` char(10) DEFAULT NULL,
  `DATE_CREATED` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`ID_UNIT`, `NAMA_UNIT`, `USER_CREATED`, `DATE_CREATED`) VALUES
(1, 'Summarecon Serpong', NULL, NULL),
(2, 'Summarecon Bogor', NULL, NULL),
(3, 'Summarecon Kelapa Gading', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` char(10) NOT NULL,
  `NAMA_USER` char(100) DEFAULT NULL,
  `ROLE` char(10) DEFAULT NULL,
  `username` char(100) DEFAULT NULL,
  `password` char(100) NOT NULL,
  `USER_CREATED` char(10) DEFAULT NULL,
  `DATE_CREATED` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `NAMA_USER`, `ROLE`, `username`, `password`, `USER_CREATED`, `DATE_CREATED`) VALUES
('1', 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2022-06-03'),
('2', '123', 'admin', '123', '123', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'waris widekso', 'waris@gmail.com', NULL, '$2y$10$IUkM.5BddpdAdxeM0jWvx.gmZWqQMgdx3ePsj2C0V.tFhXUtDuj3y', NULL, '2022-06-27 00:05:51', '2022-06-27 00:05:51'),
(10, 'hizkia', 'hizkia@gmail.com', NULL, '$2y$10$YY3r9X1JE3s3Y94BKnlw.O8oKWN.IMlw6Xg7TvVb1NLvBVzTmv2kW', NULL, '2022-06-27 00:21:33', '2022-06-27 00:21:33'),
(11, 'Erlangga', 'erlangga@gmail.com', NULL, '$2y$10$CGsDQkhdumInyi9zyIQuQulN7EDKhoJW9h8owueyzX47IaoS2MQz.', NULL, '2022-06-27 01:52:14', '2022-06-27 01:52:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bujp`
--
ALTER TABLE `bujp`
  ADD PRIMARY KEY (`ID_BUJP`),
  ADD KEY `USER_CREATED` (`USER_CREATED`),
  ADD KEY `USER_MODIFIED` (`USER_MODIFIED`),
  ADD KEY `ID_UNIT` (`ID_UNIT`),
  ADD KEY `ID_UNIT_2` (`ID_UNIT`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kontrak`
--
ALTER TABLE `kontrak`
  ADD PRIMARY KEY (`ID_KONTRAK`),
  ADD KEY `ID_BUJP` (`ID_BUJP`);

--
-- Indexes for table `kontrol_bulanan`
--
ALTER TABLE `kontrol_bulanan`
  ADD PRIMARY KEY (`ID_KONTROL`),
  ADD KEY `USER_CREATED` (`USER_CREATED`),
  ADD KEY `USER_MODIFIED` (`USER_MODIFIED`),
  ADD KEY `ID_BUJP` (`ID_BUJP`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pedoman_keamanan`
--
ALTER TABLE `pedoman_keamanan`
  ADD PRIMARY KEY (`ID_PEDOMAN`),
  ADD KEY `USER_MODIFIED` (`USER_MODIFIED`);

--
-- Indexes for table `penilaian_tahunan`
--
ALTER TABLE `penilaian_tahunan`
  ADD PRIMARY KEY (`ID_PENILAIAN_TAHUNAN`),
  ADD KEY `ID_BUJP` (`ID_BUJP`),
  ADD KEY `USER_CREATED` (`USER_CREATED`),
  ADD KEY `USER_MODIFIED` (`USER_MODIFIED`);

--
-- Indexes for table `perlengkapan_kontrol_bulanan`
--
ALTER TABLE `perlengkapan_kontrol_bulanan`
  ADD PRIMARY KEY (`ID_PERLENGKAPAN`),
  ADD KEY `ID_KONTROL` (`ID_KONTROL`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `stakeholder`
--
ALTER TABLE `stakeholder`
  ADD PRIMARY KEY (`ID_STAKEHOLDER`),
  ADD KEY `USER_UPDATED` (`USER_UPDATED`),
  ADD KEY `USER_UPDATED_2` (`USER_UPDATED`),
  ADD KEY `USER_CREATED` (`USER_CREATED`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`ID_UNIT`),
  ADD KEY `USER_CREATED` (`USER_CREATED`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bujp`
--
ALTER TABLE `bujp`
  MODIFY `ID_BUJP` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontrak`
--
ALTER TABLE `kontrak`
  MODIFY `ID_KONTRAK` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kontrol_bulanan`
--
ALTER TABLE `kontrol_bulanan`
  MODIFY `ID_KONTROL` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penilaian_tahunan`
--
ALTER TABLE `penilaian_tahunan`
  MODIFY `ID_PENILAIAN_TAHUNAN` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stakeholder`
--
ALTER TABLE `stakeholder`
  MODIFY `ID_STAKEHOLDER` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `ID_UNIT` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bujp`
--
ALTER TABLE `bujp`
  ADD CONSTRAINT `bujp_ibfk_1` FOREIGN KEY (`USER_CREATED`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bujp_ibfk_2` FOREIGN KEY (`USER_MODIFIED`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bujp_ibfk_3` FOREIGN KEY (`ID_UNIT`) REFERENCES `unit` (`ID_UNIT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kontrak`
--
ALTER TABLE `kontrak`
  ADD CONSTRAINT `kontrak_ibfk_1` FOREIGN KEY (`ID_BUJP`) REFERENCES `bujp` (`ID_BUJP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kontrol_bulanan`
--
ALTER TABLE `kontrol_bulanan`
  ADD CONSTRAINT `kontrol_bulanan_ibfk_1` FOREIGN KEY (`USER_CREATED`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kontrol_bulanan_ibfk_2` FOREIGN KEY (`USER_MODIFIED`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kontrol_bulanan_ibfk_3` FOREIGN KEY (`ID_BUJP`) REFERENCES `bujp` (`ID_BUJP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pedoman_keamanan`
--
ALTER TABLE `pedoman_keamanan`
  ADD CONSTRAINT `pedoman_keamanan_ibfk_1` FOREIGN KEY (`USER_MODIFIED`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penilaian_tahunan`
--
ALTER TABLE `penilaian_tahunan`
  ADD CONSTRAINT `penilaian_tahunan_ibfk_1` FOREIGN KEY (`USER_CREATED`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penilaian_tahunan_ibfk_2` FOREIGN KEY (`USER_MODIFIED`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penilaian_tahunan_ibfk_3` FOREIGN KEY (`ID_BUJP`) REFERENCES `bujp` (`ID_BUJP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perlengkapan_kontrol_bulanan`
--
ALTER TABLE `perlengkapan_kontrol_bulanan`
  ADD CONSTRAINT `perlengkapan_kontrol_bulanan_ibfk_1` FOREIGN KEY (`ID_KONTROL`) REFERENCES `kontrol_bulanan` (`ID_KONTROL`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stakeholder`
--
ALTER TABLE `stakeholder`
  ADD CONSTRAINT `stakeholder_ibfk_1` FOREIGN KEY (`USER_CREATED`) REFERENCES `users` (`id`);

--
-- Constraints for table `unit`
--
ALTER TABLE `unit`
  ADD CONSTRAINT `unit_ibfk_1` FOREIGN KEY (`USER_CREATED`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
