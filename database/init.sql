-- Host: 127.0.0.1    Database: app_db
-- ------------------------------------------------------

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
-- Table structure for table `desa`
--

DROP TABLE IF EXISTS `desa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `desa` (
  `desa_id` int(11) unsigned NOT NULL,
  `desa_kecamatan_id` int(11) DEFAULT NULL,
  `desa_nama` varchar(64) DEFAULT NULL,
  `desa_kode` varchar(64) DEFAULT NULL,
  `desa_datasosial` int(11) DEFAULT NULL,
  `desa_bltdd` int(11) DEFAULT NULL,
  `desa_kemenpar` int(11) DEFAULT NULL,
  `desa_semb_bup` int(11) DEFAULT NULL,
  `desa_semb_prov` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `desa`
--

LOCK TABLES `desa` WRITE;
/*!40000 ALTER TABLE `desa` DISABLE KEYS */;
INSERT INTO `desa` VALUES (1,1,'Batubulan','5104010001',106,92,0,963,0),(2,1,'Ketewel','5104010003',254,92,0,1534,0),(1,2,'Saba','5104020001',24,148,0,858,0),(2,2,'Pering','5104020002',50,293,0,795,0),(3,2,'Keramas','5104020003',167,276,50,802,14),(1,4,'Pejeng','5104040002',46,0,0,467,0),(2,4,'Sanding','5104040006',227,241,0,264,0),(1,5,'Lodtunduh','5104050002',179,0,0,503,0),(2,5,'Mas','5104050003',210,141,0,832,10),(3,5,'Singakerta','5104050001',185,156,0,587,14),(1,6,'Keliki','5104060001',24,177,0,177,0),(2,6,'Tegallalang','5104060002',280,183,0,621,0),(1,7,'Melinggih','5104070002',113,130,0,232,0),(2,7,'Kelusa','5104070003',25,163,0,287,0);
/*!40000 ALTER TABLE `desa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jenis_bantuan`
--

DROP TABLE IF EXISTS `jenis_bantuan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenis_bantuan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(64) DEFAULT NULL,
  `tabel_kode` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis_bantuan`
--

LOCK TABLES `jenis_bantuan` WRITE;
/*!40000 ALTER TABLE `jenis_bantuan` DISABLE KEYS */;
INSERT INTO `jenis_bantuan` VALUES (1,'Dana Desa','bltdd'),(2,'Sembako Bupati','semb_bup'),(3,'Sembako Provinsi','semb_prov'),(4,'Kemenpar','kemenpar'),(5,'KK Miskin','datasosial');
/*!40000 ALTER TABLE `jenis_bantuan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kecamatan`
--

DROP TABLE IF EXISTS `kecamatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kecamatan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) DEFAULT NULL,
  `kode` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kecamatan`
--

LOCK TABLES `kecamatan` WRITE;
/*!40000 ALTER TABLE `kecamatan` DISABLE KEYS */;
INSERT INTO `kecamatan` VALUES (1,'Sukawati','5104010000'),(2,'Blahbatuh','5104020000'),(3,'Gianyar','5104030000'),(4,'Tampaksiring','5104040000'),(5,'Ubud','5104050000'),(6,'Tegallalang','5104060000'),(7,'Payangan','5104070000');
/*!40000 ALTER TABLE `kecamatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penerima_bantuan`
--

DROP TABLE IF EXISTS `penerima_bantuan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penerima_bantuan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `alamat` varchar(128) DEFAULT NULL,
  `desa_id` int(11) DEFAULT NULL,
  `kecamatan_id` int(11) DEFAULT NULL,
  `nama_penerima` varchar(128) DEFAULT NULL,
  `nomor_ktp` varchar(128) DEFAULT NULL,
  `nomor_kk` varchar(128) DEFAULT NULL,
  `jenis_bantuan_id` int(11) DEFAULT NULL,
  `lintang` double DEFAULT NULL,
  `bujur` double DEFAULT NULL,
  `keterangan` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penerima_bantuan`
--

LOCK TABLES `penerima_bantuan` WRITE;
/*!40000 ALTER TABLE `penerima_bantuan` DISABLE KEYS */;
/*!40000 ALTER TABLE `penerima_bantuan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `username` varchar(16) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('',''),('user','5f4dcc3b5aa765d61d8327deb882cf99');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;