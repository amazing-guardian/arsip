-- MySQL dump 10.13  Distrib 5.5.31, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: arsip
-- ------------------------------------------------------
-- Server version	5.5.31-0+wheezy1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id_admin` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_pegawai`
--

DROP TABLE IF EXISTS `data_pegawai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_pegawai` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `foto` varchar(200) NOT NULL,
  `nip` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `gelar_depan` varchar(200) NOT NULL,
  `gelar_belakang` varchar(200) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `golongan_darah` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `status_pegawai` varchar(200) NOT NULL,
  `jenis_pegawai` varchar(200) NOT NULL,
  `nik` varchar(200) NOT NULL,
  `bpjs` varchar(200) NOT NULL,
  `npwp` varchar(200) NOT NULL,
  `karpeg` varchar(200) NOT NULL,
  `taspen` varchar(200) NOT NULL,
  `tmt_cpns` varchar(200) NOT NULL,
  `tmp_pns` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `pangkat` varchar(200) NOT NULL,
  `pendidikan` varchar(200) NOT NULL,
  `jurusan` varchar(200) NOT NULL,
  `tahun_lulus` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_pegawai`
--

LOCK TABLES `data_pegawai` WRITE;
/*!40000 ALTER TABLE `data_pegawai` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_pegawai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mou`
--

DROP TABLE IF EXISTS `mou`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mou` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `mou` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mou`
--

LOCK TABLES `mou` WRITE;
/*!40000 ALTER TABLE `mou` DISABLE KEYS */;
INSERT INTO `mou` VALUES (1,'01faa3bb872631140f1358f0e8e65bf4.jpg');
/*!40000 ALTER TABLE `mou` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profil_puskesmas`
--

DROP TABLE IF EXISTS `profil_puskesmas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profil_puskesmas` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `nama_puskesmas` varchar(200) NOT NULL,
  `kode_registrasi_puskesmas` varchar(200) NOT NULL,
  `status_registrasi_puskesmas` varchar(200) NOT NULL,
  `jalan` varchar(200) NOT NULL,
  `desa_kelurahan` varchar(200) NOT NULL,
  `kecamatan` varchar(200) NOT NULL,
  `kabupaten_kota` varchar(200) NOT NULL,
  `provinsi` varchar(200) NOT NULL,
  `kode_pos` varchar(200) NOT NULL,
  `telpon` varchar(200) NOT NULL,
  `fax` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `titik_koordinat` varchar(200) NOT NULL,
  `kategori_wilayah` varchar(200) NOT NULL,
  `kategori_kemampuan` varchar(200) NOT NULL,
  `luas_wilayah` varchar(200) NOT NULL,
  `jumlah_penduduk` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profil_puskesmas`
--

LOCK TABLES `profil_puskesmas` WRITE;
/*!40000 ALTER TABLE `profil_puskesmas` DISABLE KEYS */;
INSERT INTO `profil_puskesmas` VALUES (1,'Puskesmas Sempaja','','','M Yamin','Sempaja Utara','Sempaja','Samarinda','Kalimantan Timur','','','','','','','','','');
/*!40000 ALTER TABLE `profil_puskesmas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quote`
--

DROP TABLE IF EXISTS `quote`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quote` (
  `id_quote` int(50) NOT NULL AUTO_INCREMENT,
  `quote` text NOT NULL,
  PRIMARY KEY (`id_quote`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quote`
--

LOCK TABLES `quote` WRITE;
/*!40000 ALTER TABLE `quote` DISABLE KEYS */;
INSERT INTO `quote` VALUES (5,'Ikuti pendirianmu dan ambil tindakan yang kau anggap benar (Shirai Kuroko, To Aru Kagaku no Railgun)'),(6,'Kalau kau memiliki kemauan untuk terus mengikuti keyakinanmu, maka hasilnya akan datang dengan sendirinya (Shirai Kuroko, To Aru Kagaku no Railgun)'),(7,'Maafkan aku, aku tidak sadar. Kau hanya ingin berjuang keras bukan? Ya. Tapi kau tahu, kenapa tidak mencobanya lebih keras lagi? Jangan hanya merenung di sini. Jangan membohongi dirimu sendiri (Misaka Mikoto, To Aru Kagaku no Railgun)'),(8,'Kalau kau mudah menyerah, maka semua berakhir. Padahal mungkin saja kau memiliki kekuatan yang belum kau sadari (Yomikawa Aiho, To Aru Kagaku no Railgun)'),(9,'Kalau kau memutuskan sendiri batasanmu, maka kau gagal (Yomikawa Aiho, To Aru Kagaku no Railgun)'),(10,'Aku cuma tidak bisa memaafkan orang-orang yang cuma lari dari kenyataan ketimbang mengembangkan potensi mereka (Misaka Mikoto, To Aru Kagaku no Railgun)'),(11,'Seorang guru tidak boleh menyerah pada murid-muridnya (Kiyama Harumi, To Aru Kagaku no Railgun)'),(12,'Aku yang menabur benih maka harus aku lah yang menanggungnya sendiri (Misaka Mikoto, To Aru Kagaku no Railgun)'),(13,'Kau tidak akan pernah tau kalau kau belum mencobanya. Kau hanya perlu memberikan apa yang kau punya (Shirai Kuroko, To Aru Kagaku no Railgun)'),(14,'Teman sejati selalu berbagi, baik di saat duka maupun duka (Kongou Mitsuko)');
/*!40000 ALTER TABLE `quote` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_keluar`
--

DROP TABLE IF EXISTS `surat_keluar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_keluar` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `instansi` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_keluar`
--

LOCK TABLES `surat_keluar` WRITE;
/*!40000 ALTER TABLE `surat_keluar` DISABLE KEYS */;
/*!40000 ALTER TABLE `surat_keluar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_keputusan`
--

DROP TABLE IF EXISTS `surat_keputusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_keputusan` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `surat_keputusan` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_keputusan`
--

LOCK TABLES `surat_keputusan` WRITE;
/*!40000 ALTER TABLE `surat_keputusan` DISABLE KEYS */;
INSERT INTO `surat_keputusan` VALUES (1,'82ea195ca54f93b7482b8a1a51046b21.jpg');
/*!40000 ALTER TABLE `surat_keputusan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_masuk`
--

DROP TABLE IF EXISTS `surat_masuk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(50) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `instansi` varchar(200) NOT NULL,
  PRIMARY KEY (`id_surat_masuk`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_masuk`
--

LOCK TABLES `surat_masuk` WRITE;
/*!40000 ALTER TABLE `surat_masuk` DISABLE KEYS */;
/*!40000 ALTER TABLE `surat_masuk` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-10 17:06:26
