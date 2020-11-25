/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.6.24 : Database - ms_kj
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`ms_kj` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ms_kj`;

/*Table structure for table `tbl_berita` */

DROP TABLE IF EXISTS `tbl_berita`;

CREATE TABLE `tbl_berita` (
  `id_berita` varchar(15) DEFAULT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `deskripsi` text,
  `gambar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_berita` */

insert  into `tbl_berita`(`id_berita`,`judul`,`tgl`,`deskripsi`,`gambar`) values ('BR-0001','Desa','2019-01-11','Desa, atau udik, menurut definisi \"universal\", adalah sebuah aglomerasi permukiman di area perdesaan (rural). Di Indonesia, istilah desa adalah pembagian wilayah administratif di Indonesia di bawah kecamatan, yang dipimpin oleh Kepala Desa. Sebuah desa merupakan kumpulan dari beberapa unit permukiman kecil yang disebut kampung (Banten, Jawa Barat) atau dusun (Yogyakarta) atau banjar (Bali) atau jorong (Sumatera Barat). Kepala Desa dapat disebut dengan nama lain misalnya Kepala Kampung atau Petinggi di Kalimantan Timur, KlÃ¨bun di Madura, Pambakal di Kalimantan Selatan, dan Kuwu di Cirebon, Hukum Tua di Sulawesi Utara.  Sejak diberlakukannya otonomi daerah Istilah desa dapat disebut dengan nama lain, misalnya di Sumatera Barat disebut dengan istilah nagari, di Aceh dengan istilah gampong, di Papua dan Kutai Barat, Kalimantan Timur disebut dengan istilah kampung. Begitu pula segala istilah dan institusi di desa dapat disebut dengan nama lain sesuai dengan karakteristik adat istiadat desa tersebut. Hal ini merupakan salah satu pengakuan dan penghormatan Pemerintah terhadap asal usul dan adat istiadat setempat','files/5a3126821500004e0049b6c9.jpeg');

/*Table structure for table `tbl_data` */

DROP TABLE IF EXISTS `tbl_data`;

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

/*Data for the table `tbl_data` */

insert  into `tbl_data`(`umum_a`,`umum_b`,`kondisi_a`,`kondisi_b`,`kondisi_c`,`kondisi_d`,`orbitas_a`,`orbitas_b`,`orbitas_c`,`pertanahan_a`,`pertanahan_b`,`pertanahan_c`,`kp_jp_laki`,`kp_jp_perempuan`,`kp_jp_kk`,`kp_jp_wni`,`kp_jp_wna`,`kp_jpma_a`,`kp_jpma_b`,`kp_jpma_c`,`kp_jpma_d`,`kp_jpmu_a`,`kp_jpmu_b`,`kp_jpmu_c`,`kp_jpmu_e`,`kp_jpmu_f`,`kp_jpmtp_a`,`kp_jpmtp_b`,`kp_jpmmp_a`,`kp_jpmmp_b`,`kp_jpmmp_c`,`kp_jpmmp_d`,`kp_jpmmp_e`,`kp_jpmmp_f`,`kp_jpmmp_g`,`kp_jpmmp_h`,`kp_jpmmp_i`,`kp_jpd_a`,`kp_jpd_b`,`kp_jpd_c`,`kp_jpd_d`,`kp_jpd_e`,`kp_jpd_f`,`kp_jpd_g`,`kp_prt_a`,`kp_prt_b`,`kp_jpm_a`,`kp_jpm_b`,`kp_jpm_c`,`kp_pmdb_a`,`kp_pmdb_b`,`kp_pmdb_c`,`kp_pmdb_d`,`kp_lmd_a`,`kp_lmd_b`,`kp_kd_a`,`kp_kd_b`,`kp_kkd_a`,`kp_kkd_b`,`kp_kdspd_a`,`kp_kdspd_b`,`kp_kdspd_c`,`kp_kdspd_d`,`kp_kdspd_e`,`kp_bdhp`,`kp_bdhp_a`,`kp_bdhp_b`,`kp_bdhp_c`,`kp_bdhp_d`,`bpd_asp_a`,`bpd_asp_b`,`bpd_asp_c`,`bpd_asp_d`,`bpd_asp_e`,`bpd_p_a`,`bpd_p_b`,`bpd_p_c`,`bpd_p_d`,`bpd_p_e`,`bpd_japc_a`,`bpd_japc_b`,`bpd_japc_c`,`bpd_japc_d`,`bpd_japc_e`,`bpd_jayp_a`,`bpd_jayp_b`,`bpd_pk_a`,`bpd_pk_b`,`bpd_pk_c`,`so_a`,`so_b`,`so_c`,`so_d`,`so_k_a`,`so_k_b`,`so_k_c`,`so_kk_a`,`so_kk_b`,`so_kk_c`,`pp_a`,`pp_b`,`pp_c`,`pp_d`,`pp_e`,`pp_f`,`pp_g`,`k_a`,`k_b`,`i_a`,`i_b`,`p8_a`,`p8_b`,`p9_a`,`p9_b`,`p10_a`,`p10_b`,`p10_c`,`p11_a`,`p11_b`,`p11_c`,`p12_a`,`p12_b`,`p12_c`,`p13_a`,`p13_b`,`p13_c`,`p13_d`,`p13_e`,`p14_a`,`p14_b`,`p14_c`,`p14_d`,`p15_a`,`p15_b`,`p17_a`,`p17_b`,`p17_c`,`p17_d`,`p17_e`,`p17_f`,`p18_a`,`p18_b`,`p19_a`,`p19_b`,`p19_c`,`d20_a`,`d20_c`,`d20_d`,`d20_f`,`d20_g`) values (32423,21313,21312,2312,8,6,6,6,6,66,6,6,66,6,66,6,6,66,6,6,66,6,6,6,66,6,66,6,6,6,66,6,6,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'0',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'','','','');

/*Table structure for table `tbl_download` */

DROP TABLE IF EXISTS `tbl_download`;

CREATE TABLE `tbl_download` (
  `id_file` varchar(15) DEFAULT NULL,
  `nama_file` varchar(150) DEFAULT NULL,
  `ket` varchar(200) DEFAULT NULL,
  `pdf` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_download` */

insert  into `tbl_download`(`id_file`,`nama_file`,`ket`,`pdf`) values ('DL-0001','surat utama','surat','files/PROPOSAL FITMOBILE2018_UNIVERSITAS TEKNOKRAT INDONESIA_UZURE(1).pdf');

/*Table structure for table `tbl_galeri` */

DROP TABLE IF EXISTS `tbl_galeri`;

CREATE TABLE `tbl_galeri` (
  `id_galeri` varchar(15) DEFAULT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `tgl_galeri` date DEFAULT NULL,
  `deskripsi` text,
  `gambar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_galeri` */

insert  into `tbl_galeri`(`id_galeri`,`judul`,`tgl_galeri`,`deskripsi`,`gambar`) values ('GL-0001','Pemuda','2019-02-11','Info Desa â€“ Apa sih sebenarnya maksud dari kategori desa berkembang, desa mandiri, maju dan tertinggal? Walaupun ungkapan ini sering kita dengar, tetapi pengertian aslinya mungkin masih ada yang belum tahu.  Disini hanya untuk mengingatkan kembali agar kita lebih akrab dengan istilah â€“ istilah itu khususnya bagi perangkat desa dan aparatur desa. Coba lihat jenis Klasifikasi Desa Menurut Tingkat Perkembangannya.  Karena sebagaimana kita ketahui istilah Desa Maju, desa berkembang, desa mandiri dan tertinggal itu pengertiannya masih luas. Sehingga mungkin sulit di fahami lebih spesifik.  Bahkan sebagian perangkat desa mungkin masih banyak yang tidak tahu dengan status kategori desanya masing-masing.  Sebab untuk menentukan sebuah desa itu tergolong kategori berkembang, maju, mandiri dan tertinggal ada tolak ukur tersendiri yang di nilai dengan angka-angka atau variable. Ini lah yang di maksud dengan Indeks Desa Membangun (IDM).  Nah sebagaimana juga terlampir dalam Permendesa Nomor 2 Tahun 2016 tentang Indeks Desa Membangun (IDM), disitu juga dijelaskan maksud dari kategori desa tertinggal, desa berkembang, maju dan mandiri.  Jadi disini kita akan sedikit belajar memahami lebih jauh tentang arti dan maksud dari status kategori â€“ kategori desa tersebut.','files/0000454302.jpg');

/*Table structure for table `tbl_hak_akses` */

DROP TABLE IF EXISTS `tbl_hak_akses`;

CREATE TABLE `tbl_hak_akses` (
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_hak_akses` */

insert  into `tbl_hak_akses`(`username`,`password`) values ('a','c4ca4238a0b923820dcc509a6f75849b');

/*Table structure for table `tbl_informasi` */

DROP TABLE IF EXISTS `tbl_informasi`;

CREATE TABLE `tbl_informasi` (
  `nama_file` varchar(150) DEFAULT NULL,
  `pdf` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_informasi` */

insert  into `tbl_informasi`(`nama_file`,`pdf`) values ('Data Perbaikan','files/ms_kj.pdf');

/*Table structure for table `tbl_pengaduan` */

DROP TABLE IF EXISTS `tbl_pengaduan`;

CREATE TABLE `tbl_pengaduan` (
  `id_pengaduan` varchar(15) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `deskrispi` text,
  `gambar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pengaduan` */

insert  into `tbl_pengaduan`(`id_pengaduan`,`tgl`,`nama`,`deskrispi`,`gambar`) values ('PD-0001','2019-11-02','ade surahman','DATA UJI COBA','files/72916e32883250ac55576eccb305bf13.jpg'),('PD-0002','2019-11-02','ade surahman','lowongan untuk menjahit baju','files/6a17071b2b5d2fd5dac2a3d45556112b.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
