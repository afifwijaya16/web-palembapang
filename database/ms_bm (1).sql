-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 05:32 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ms_bm`
--

-- --------------------------------------------------------

--
-- Table structure for table `surat_domisili`
--

CREATE TABLE `surat_domisili` (
  `id_surat_domisili` varchar(10) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `file_surat` varchar(255) NOT NULL,
  `deskripsi_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_domisili`
--

INSERT INTO `surat_domisili` (`id_surat_domisili`, `nik`, `nama`, `tanggal_lahir`, `tempat_lahir`, `agama`, `pekerjaan`, `alamat`, `file_surat`, `deskripsi_surat`) VALUES
('SD-0001', '1805181906870002', 'Nabilah Syaufii', '2020-05-05', 'Bandar Lampung', 'Islam', 'Mahasiswa', 'Jl. Keramat No.19 Kedaton', 'files/11.PNG', 'Saya ingin membuat surat keterangan domisili untuk kepentingan pekerjaan');

-- --------------------------------------------------------

--
-- Table structure for table `surat_izin_keramaian`
--

CREATE TABLE `surat_izin_keramaian` (
  `id_keramaian` varchar(10) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tokoh_pemuda` varchar(50) NOT NULL,
  `tokoh_masyarakat` varchar(50) NOT NULL,
  `tokoh_agama` varchar(50) NOT NULL,
  `file_surat` varchar(255) NOT NULL,
  `deskripsi_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_izin_keramaian`
--

INSERT INTO `surat_izin_keramaian` (`id_keramaian`, `nik`, `nama`, `umur`, `pekerjaan`, `alamat`, `tokoh_pemuda`, `tokoh_masyarakat`, `tokoh_agama`, `file_surat`, `deskripsi_surat`) VALUES
('SIK-0001', '1805181906870002', 'Nabilah Syaufii', '40', 'Mahasiswa', 'Jl. Keramat No.19 Kedaton', 'H. Marzuki', 'Sudarma Ali', 'H. Mansyur', 'files/11.PNG', 'Saya ingin membuat surat izin keramaian untuk pernikahan putri saya pada tanggal 30 November 2020');

-- --------------------------------------------------------

--
-- Table structure for table `surat_kematian`
--

CREATE TABLE `surat_kematian` (
  `id_kematian` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nama_pelapor` varchar(50) NOT NULL,
  `deskripsi_surat` text NOT NULL,
  `file_surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_kematian`
--

INSERT INTO `surat_kematian` (`id_kematian`, `nama`, `nik`, `umur`, `pekerjaan`, `alamat`, `nama_pelapor`, `deskripsi_surat`, `file_surat`) VALUES
('SK-0001', 'Nabilah Syaufii', '1805181906870002', '20', 'Mahasiswa', 'Jl. Keramat No.19 Kedaton', 'Muntadz Siro (Orang Tua)', 'Sakit', 'files/11.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `surat_usaha`
--

CREATE TABLE `surat_usaha` (
  `id_surat_usaha` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nama_usaha` varchar(255) NOT NULL,
  `keterangan_usaha` text NOT NULL,
  `jumlah_modal_usaha` varchar(50) NOT NULL,
  `file_surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_usaha`
--

INSERT INTO `surat_usaha` (`id_surat_usaha`, `nama`, `nik`, `alamat`, `nama_usaha`, `keterangan_usaha`, `jumlah_modal_usaha`, `file_surat`) VALUES
('SIU-0001', 'Nabilah Syaufii', '1805181906870002', 'Jl. Keramat No.19 Kedaton', 'Warung Kelontongan', 'Surat Keterangan Usaha', '10000000', 'files/11.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` varchar(15) DEFAULT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul`, `tgl`, `deskripsi`, `gambar`) VALUES
('BR-0001', 'Gas Elpiji 3 KG Langka, Warga Antri', '2020-09-30', 'Kelangkaan elpiji tiga kilogram sudah dirasakan warga Desa Palembapang sejak sebulan terakhir. Untuk mendapatkan satu tabung gas lpg tiga kilogram mereka terpaksa antre di sebuah pangkalan. Salah seorang warga mengaku sudah hampir sebulan mereka kesulitan gas tiga kilogram di warung-warung dan pengecer . Kalaupun ada harganya mencapai diatas harga yang ditetapkan yakni hingga Rp. 20.000 hingga Rp. 21.000 per tabung. Sehingga mereka terpaksa pergi ke pangkalan untuk mendapatkan gas elpiji dengan harga tetapan Rp. 15.500 per tabung.', 'files/IMG-20200531-WA0010.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buat_surat`
--

CREATE TABLE `tbl_buat_surat` (
  `id_surat` varchar(10) NOT NULL,
  `nik` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_handpone` varchar(13) NOT NULL,
  `jenis_surat` varchar(255) NOT NULL,
  `file_surat` varchar(200) NOT NULL,
  `deskripsi_surat` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buat_surat`
--

INSERT INTO `tbl_buat_surat` (`id_surat`, `nik`, `nama_lengkap`, `alamat`, `no_handpone`, `jenis_surat`, `file_surat`, `deskripsi_surat`) VALUES
('SR-0001', 2147483647, 'Nabilah Syaufii', 'Jl. Keramat No.19 Kedaton', '089978789878', 'Surat Ket. Domisili', 'files/11.PNG', 'Saya ingin membuat surat keterangan domisili untuk kepentinganm ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data`
--

CREATE TABLE `tbl_data` (
  `umum_a` double DEFAULT NULL,
  `umum_b` double DEFAULT NULL,
  `kondisi_a` double DEFAULT NULL,
  `kondisi_b` double DEFAULT NULL,
  `kondisi_c` double DEFAULT NULL,
  `kondisi_d` double DEFAULT NULL,
  `orbitas_a` double DEFAULT NULL,
  `orbitas_b` double DEFAULT NULL,
  `orbitas_c` double DEFAULT NULL,
  `pertanahan_a` double DEFAULT NULL,
  `pertanahan_b` double DEFAULT NULL,
  `pertanahan_c` double DEFAULT NULL,
  `kp_jp_laki` double DEFAULT NULL,
  `kp_jp_perempuan` double DEFAULT NULL,
  `kp_jp_kk` double DEFAULT NULL,
  `kp_jp_wni` double DEFAULT NULL,
  `kp_jp_wna` double DEFAULT NULL,
  `kp_jpma_a` double DEFAULT NULL,
  `kp_jpma_b` double DEFAULT NULL,
  `kp_jpma_c` double DEFAULT NULL,
  `kp_jpma_d` double DEFAULT NULL,
  `kp_jpmu_a` double DEFAULT NULL,
  `kp_jpmu_b` double DEFAULT NULL,
  `kp_jpmu_c` double DEFAULT NULL,
  `kp_jpmu_e` double DEFAULT NULL,
  `kp_jpmu_f` double DEFAULT NULL,
  `kp_jpmtp_a` double DEFAULT NULL,
  `kp_jpmtp_b` double DEFAULT NULL,
  `kp_jpmmp_a` double DEFAULT NULL,
  `kp_jpmmp_b` double DEFAULT NULL,
  `kp_jpmmp_c` double DEFAULT NULL,
  `kp_jpmmp_d` double DEFAULT NULL,
  `kp_jpmmp_e` double DEFAULT NULL,
  `kp_jpmmp_f` double DEFAULT NULL,
  `kp_jpmmp_g` double DEFAULT NULL,
  `kp_jpmmp_h` double DEFAULT NULL,
  `kp_jpmmp_i` double DEFAULT NULL,
  `kp_jpd_a` int(11) DEFAULT NULL,
  `kp_jpd_b` int(11) DEFAULT NULL,
  `kp_jpd_c` int(11) DEFAULT NULL,
  `kp_jpd_d` int(11) DEFAULT NULL,
  `kp_jpd_e` int(11) DEFAULT NULL,
  `kp_jpd_f` int(11) DEFAULT NULL,
  `kp_jpd_g` int(11) DEFAULT NULL,
  `kp_prt_a` int(11) DEFAULT NULL,
  `kp_prt_b` int(11) DEFAULT NULL,
  `kp_jpm_a` int(11) DEFAULT NULL,
  `kp_jpm_b` int(11) DEFAULT NULL,
  `kp_jpm_c` int(11) DEFAULT NULL,
  `kp_pmdb_a` int(11) DEFAULT NULL,
  `kp_pmdb_b` int(11) DEFAULT NULL,
  `kp_pmdb_c` int(11) DEFAULT NULL,
  `kp_pmdb_d` int(11) DEFAULT NULL,
  `kp_lmd_a` int(11) DEFAULT NULL,
  `kp_lmd_b` varchar(150) DEFAULT NULL,
  `kp_kd_a` int(11) DEFAULT NULL,
  `kp_kd_b` int(11) DEFAULT NULL,
  `kp_kkd_a` int(11) DEFAULT NULL,
  `kp_kkd_b` int(11) DEFAULT NULL,
  `kp_kdspd_a` int(11) DEFAULT NULL,
  `kp_kdspd_b` int(11) DEFAULT NULL,
  `kp_kdspd_c` int(11) DEFAULT NULL,
  `kp_kdspd_d` int(11) DEFAULT NULL,
  `kp_kdspd_e` int(11) DEFAULT NULL,
  `kp_bdhp` int(11) DEFAULT NULL,
  `kp_bdhp_a` int(11) DEFAULT NULL,
  `kp_bdhp_b` int(11) DEFAULT NULL,
  `kp_bdhp_c` int(11) DEFAULT NULL,
  `kp_bdhp_d` int(11) DEFAULT NULL,
  `bpd_asp_a` int(11) DEFAULT NULL,
  `bpd_asp_b` int(11) DEFAULT NULL,
  `bpd_asp_c` int(11) DEFAULT NULL,
  `bpd_asp_d` int(11) DEFAULT NULL,
  `bpd_asp_e` int(11) DEFAULT NULL,
  `bpd_p_a` int(11) DEFAULT NULL,
  `bpd_p_b` int(11) DEFAULT NULL,
  `bpd_p_c` int(11) DEFAULT NULL,
  `bpd_p_d` int(11) DEFAULT NULL,
  `bpd_p_e` int(11) DEFAULT NULL,
  `bpd_japc_a` int(11) DEFAULT NULL,
  `bpd_japc_b` int(11) DEFAULT NULL,
  `bpd_japc_c` int(11) DEFAULT NULL,
  `bpd_japc_d` int(11) DEFAULT NULL,
  `bpd_japc_e` int(11) DEFAULT NULL,
  `bpd_jayp_a` int(11) DEFAULT NULL,
  `bpd_jayp_b` int(11) DEFAULT NULL,
  `bpd_pk_a` int(11) DEFAULT NULL,
  `bpd_pk_b` int(11) DEFAULT NULL,
  `bpd_pk_c` int(11) DEFAULT NULL,
  `so_a` int(11) DEFAULT NULL,
  `so_b` int(11) DEFAULT NULL,
  `so_c` int(11) DEFAULT NULL,
  `so_d` int(11) DEFAULT NULL,
  `so_k_a` int(11) DEFAULT NULL,
  `so_k_b` int(11) DEFAULT NULL,
  `so_k_c` int(11) DEFAULT NULL,
  `so_kk_a` int(11) DEFAULT NULL,
  `so_kk_b` int(11) DEFAULT NULL,
  `so_kk_c` int(11) DEFAULT NULL,
  `pp_a` int(11) DEFAULT NULL,
  `pp_b` int(11) DEFAULT NULL,
  `pp_c` int(11) DEFAULT NULL,
  `pp_d` int(11) DEFAULT NULL,
  `pp_e` int(11) DEFAULT NULL,
  `pp_f` int(11) DEFAULT NULL,
  `pp_g` int(11) DEFAULT NULL,
  `k_a` int(11) DEFAULT NULL,
  `k_b` int(11) DEFAULT NULL,
  `i_a` int(11) DEFAULT NULL,
  `i_b` int(11) DEFAULT NULL,
  `p8_a` double DEFAULT NULL,
  `p8_b` double DEFAULT NULL,
  `p9_a` double DEFAULT NULL,
  `p9_b` double DEFAULT NULL,
  `p10_a` double DEFAULT NULL,
  `p10_b` double DEFAULT NULL,
  `p10_c` double DEFAULT NULL,
  `p11_a` double DEFAULT NULL,
  `p11_b` double DEFAULT NULL,
  `p11_c` double DEFAULT NULL,
  `p12_a` double DEFAULT NULL,
  `p12_b` double DEFAULT NULL,
  `p12_c` double DEFAULT NULL,
  `p13_a` double DEFAULT NULL,
  `p13_b` double DEFAULT NULL,
  `p13_c` double DEFAULT NULL,
  `p13_d` double DEFAULT NULL,
  `p13_e` double DEFAULT NULL,
  `p14_a` double DEFAULT NULL,
  `p14_b` double DEFAULT NULL,
  `p14_c` double DEFAULT NULL,
  `p14_d` double DEFAULT NULL,
  `p15_a` double DEFAULT NULL,
  `p15_b` double DEFAULT NULL,
  `p17_a` double DEFAULT NULL,
  `p17_b` double DEFAULT NULL,
  `p17_c` double DEFAULT NULL,
  `p17_d` double DEFAULT NULL,
  `p17_e` double DEFAULT NULL,
  `p17_f` double DEFAULT NULL,
  `p18_a` double DEFAULT NULL,
  `p18_b` double DEFAULT NULL,
  `p19_a` double DEFAULT NULL,
  `p19_b` double DEFAULT NULL,
  `p19_c` double DEFAULT NULL,
  `d20_a` double DEFAULT NULL,
  `d20_c` varchar(200) DEFAULT NULL,
  `d20_d` varchar(200) DEFAULT NULL,
  `d20_f` varchar(200) DEFAULT NULL,
  `d20_g` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data`
--

INSERT INTO `tbl_data` (`umum_a`, `umum_b`, `kondisi_a`, `kondisi_b`, `kondisi_c`, `kondisi_d`, `orbitas_a`, `orbitas_b`, `orbitas_c`, `pertanahan_a`, `pertanahan_b`, `pertanahan_c`, `kp_jp_laki`, `kp_jp_perempuan`, `kp_jp_kk`, `kp_jp_wni`, `kp_jp_wna`, `kp_jpma_a`, `kp_jpma_b`, `kp_jpma_c`, `kp_jpma_d`, `kp_jpmu_a`, `kp_jpmu_b`, `kp_jpmu_c`, `kp_jpmu_e`, `kp_jpmu_f`, `kp_jpmtp_a`, `kp_jpmtp_b`, `kp_jpmmp_a`, `kp_jpmmp_b`, `kp_jpmmp_c`, `kp_jpmmp_d`, `kp_jpmmp_e`, `kp_jpmmp_f`, `kp_jpmmp_g`, `kp_jpmmp_h`, `kp_jpmmp_i`, `kp_jpd_a`, `kp_jpd_b`, `kp_jpd_c`, `kp_jpd_d`, `kp_jpd_e`, `kp_jpd_f`, `kp_jpd_g`, `kp_prt_a`, `kp_prt_b`, `kp_jpm_a`, `kp_jpm_b`, `kp_jpm_c`, `kp_pmdb_a`, `kp_pmdb_b`, `kp_pmdb_c`, `kp_pmdb_d`, `kp_lmd_a`, `kp_lmd_b`, `kp_kd_a`, `kp_kd_b`, `kp_kkd_a`, `kp_kkd_b`, `kp_kdspd_a`, `kp_kdspd_b`, `kp_kdspd_c`, `kp_kdspd_d`, `kp_kdspd_e`, `kp_bdhp`, `kp_bdhp_a`, `kp_bdhp_b`, `kp_bdhp_c`, `kp_bdhp_d`, `bpd_asp_a`, `bpd_asp_b`, `bpd_asp_c`, `bpd_asp_d`, `bpd_asp_e`, `bpd_p_a`, `bpd_p_b`, `bpd_p_c`, `bpd_p_d`, `bpd_p_e`, `bpd_japc_a`, `bpd_japc_b`, `bpd_japc_c`, `bpd_japc_d`, `bpd_japc_e`, `bpd_jayp_a`, `bpd_jayp_b`, `bpd_pk_a`, `bpd_pk_b`, `bpd_pk_c`, `so_a`, `so_b`, `so_c`, `so_d`, `so_k_a`, `so_k_b`, `so_k_c`, `so_kk_a`, `so_kk_b`, `so_kk_c`, `pp_a`, `pp_b`, `pp_c`, `pp_d`, `pp_e`, `pp_f`, `pp_g`, `k_a`, `k_b`, `i_a`, `i_b`, `p8_a`, `p8_b`, `p9_a`, `p9_b`, `p10_a`, `p10_b`, `p10_c`, `p11_a`, `p11_b`, `p11_c`, `p12_a`, `p12_b`, `p12_c`, `p13_a`, `p13_b`, `p13_c`, `p13_d`, `p13_e`, `p14_a`, `p14_b`, `p14_c`, `p14_d`, `p15_a`, `p15_b`, `p17_a`, `p17_b`, `p17_c`, `p17_d`, `p17_e`, `p17_f`, `p18_a`, `p18_b`, `p19_a`, `p19_b`, `p19_c`, `d20_a`, `d20_c`, `d20_d`, `d20_f`, `d20_g`) VALUES
(24332, 21313, 21312, 2312, 8, 6, 6, 6, 6, 66, 6, 6, 1356, 1667, 765, 6, 6, 66, 6, 6, 66, 6, 6, 6, 66, 6, 66, 6, 6, 6, 66, 6, 6, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_download`
--

CREATE TABLE `tbl_download` (
  `id_file` varchar(15) DEFAULT NULL,
  `nama_file` varchar(150) DEFAULT NULL,
  `ket` varchar(200) DEFAULT NULL,
  `pdf` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_download`
--

INSERT INTO `tbl_download` (`id_file`, `nama_file`, `ket`, `pdf`) VALUES
('DL-0001', 'SURAT KETERANGAN DOMISILI', 'Digunakan untuk menerangkan tempat tinggal masyarakat', 'files/SURAT KETERANGAN DOMISILI.pdf'),
('DL-0002', 'SURAT KETERANGAN USAHA', 'Digunakan untuk syarat membuka suatu usaha', 'files/SURAT KETERANGAN USAHA.pdf'),
('DL-0003', 'SURAT IZIN KERAMAIAN', 'Digunakan untuk menggelar suatu acara yang memiliki unsur keramaian', 'files/SURAT IZIN KERAMAIAN.pdf'),
('DL-0004', 'KTP SEMENTARA', 'Digunakan untuk masyrakat yang tidak memiliki KTP', 'files/KTP SEMENTARA.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` varchar(15) DEFAULT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `tgl_galeri` date DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `judul`, `tgl_galeri`, `deskripsi`, `gambar`) VALUES
('GL-0002', 'Peresmian Sumur Bor', '2020-09-28', 'Kepala Desa Palembapang beserta staf desa melakukan peresmian sumur bor untuk wilayah dusun 2 Desa Palembapang. Pembangunan sumur bor merupakan program kerja pemerintah desa dengan memanfaatkan dana desa untuk kesejahteraan masyarakat yang masih kesulitan dalam mendapatkan air bersih.', 'files/IMG-20200531-WA0013.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hak_akses`
--

CREATE TABLE `tbl_hak_akses` (
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hak_akses`
--

INSERT INTO `tbl_hak_akses` (`username`, `password`) VALUES
('a', 'c4ca4238a0b923820dcc509a6f75849b'),
('b', '202cb962ac59075b964b07152d234b70'),
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informasi`
--

CREATE TABLE `tbl_informasi` (
  `nama_file` varchar(150) DEFAULT NULL,
  `pdf` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_informasi`
--

INSERT INTO `tbl_informasi` (`nama_file`, `pdf`) VALUES
('Profile Desa Palembapang', 'files/PROFILE DESA PALEMBAPANG.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengaduan`
--

CREATE TABLE `tbl_pengaduan` (
  `id_pengaduan` varchar(15) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `deskrispi` text DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengaduan`
--

INSERT INTO `tbl_pengaduan` (`id_pengaduan`, `tgl`, `nama`, `deskrispi`, `gambar`) VALUES
('SR-0001', '1970-01-01', 'Nabilah Syaufii', 'Sampah yang mengumpul di Rt. 03, mohon untuk pemerintah desa agar mengatasi masalah tersebut.', 'files/tumpukan-sampah_20180522_151203.jpg'),
('SR-0002', '2020-10-10', 'Budi', 'Terjadi Kerusuhan demonstrasi', 'files/PETA.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_potensi_desa`
--

CREATE TABLE `tbl_potensi_desa` (
  `id_potensi_desa` int(11) NOT NULL,
  `area_wisata` varchar(100) DEFAULT NULL,
  `keberadaan` varchar(100) DEFAULT NULL,
  `luas` varchar(50) DEFAULT NULL,
  `pemanfaatan` varchar(50) DEFAULT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id_penduduk` varchar(255) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kk` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`id_penduduk`, `nik`, `nama`, `kk`, `agama`, `alamat`, `tanggal_lahir`, `tempat_lahir`, `jenis_kelamin`, `foto`) VALUES
('IP-0002', '1805181906870001', 'Nabilah Syaufii', '1897645646775', 'Islam', 'Jl. RA. Kartini No 52 Tanjung Karang Pusat, Kota Bandar Lampung 351116', '1997-03-05', 'Bekasi', 'Perempuan', 'files/download.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_potensi_desa`
--
ALTER TABLE `tbl_potensi_desa`
  ADD PRIMARY KEY (`id_potensi_desa`);

--
-- Indexes for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_potensi_desa`
--
ALTER TABLE `tbl_potensi_desa`
  MODIFY `id_potensi_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
