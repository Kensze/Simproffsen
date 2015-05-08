-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: 192.168.10.10    Database: Simprofssen
-- ------------------------------------------------------
-- Server version	5.6.19-1~exp1ubuntu2

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
-- Table structure for table `Kategori`
--

DROP TABLE IF EXISTS `Kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Kategori` (
  `id` int(11) NOT NULL,
  `Namn` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Beskrivning` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Kategori`
--

LOCK TABLES `Kategori` WRITE;
/*!40000 ALTER TABLE `Kategori` DISABLE KEYS */;
INSERT INTO `Kategori` VALUES (1,'Simkläder','Dam'),(2,'Simträning','Dam'),(3,'Simutrustning','Dam'),(4,'Våtdräkter','Dam'),(5,'Triathlonkläder','Dam'),(6,'Simkläder','Herr'),(7,'Simträning','Herr'),(8,'Simutrustning','Herr'),(9,'Våtdräkter','Herr'),(10,'Triathlonkläder','Herr'),(11,'Orca','Storlekstabell'),(12,'Sailfish','Storlekstabell'),(13,'Övrigt','Storlekstabell');
/*!40000 ALTER TABLE `Kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Märke`
--

DROP TABLE IF EXISTS `Märke`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Märke` (
  `id` int(11) NOT NULL,
  `namn` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Märke`
--

LOCK TABLES `Märke` WRITE;
/*!40000 ALTER TABLE `Märke` DISABLE KEYS */;
INSERT INTO `Märke` VALUES (1,'Orca'),(2,'Sailfish');
/*!40000 ALTER TABLE `Märke` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Produkter`
--

DROP TABLE IF EXISTS `Produkter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Produkter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Artikelnummer` int(11) NOT NULL,
  `Storlek` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Pris` double NOT NULL,
  `Lager` int(11) DEFAULT NULL,
  `Beskrivning` longtext COLLATE utf8_unicode_ci,
  `Bild` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Namn` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Show` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Vikt` double NOT NULL,
  `Kategori_id` int(11) NOT NULL,
  `Märke_id` int(11) NOT NULL,
  `Storlekstyp_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_Produkter_Kategori_idx` (`Kategori_id`),
  KEY `fk_Produkter_Märke1_idx` (`Märke_id`),
  KEY `fk_Produkter_Storlekstyp1_idx` (`Storlekstyp_id`),
  CONSTRAINT `fk_Produkter_Kategori` FOREIGN KEY (`Kategori_id`) REFERENCES `Kategori` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Produkter_Märke1` FOREIGN KEY (`Märke_id`) REFERENCES `Märke` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Produkter_Storlekstyp1` FOREIGN KEY (`Storlekstyp_id`) REFERENCES `Storlekstyp` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Produkter`
--

LOCK TABLES `Produkter` WRITE;
/*!40000 ALTER TABLE `Produkter` DISABLE KEYS */;
INSERT INTO `Produkter` VALUES (1,1337,'Small',99.99,10,'Balla Byxor','/img/fisk1.jpg','1337 byxor','1',0.2,5,1,1),(2,1338,'Large',56,2,'XXXXX','/img/sailfish_attack_trans.gif','fisken','1',3,9,1,2),(3,1339,'Small',3676,2,'Mycket dräkt för pengarna!\nSailfish Attack erbjuder den prismässigt bästa kombinationen mellan flytkraft, flexibilitet och kvalitet. Denna dräkt är designad för att hålla jämna steg med dräkterna som håller toppklass fast till ett lägre pris. Denna dräkt är tillverkad av de bästa yttermaterialen – SCS Nano Skin neopren i bröstet minimerar motstånd, medan SCS # 39 neopren som används i andra delar av dräkten gör den extremt robust och elastisk. Dräkten är väldigt bekväm och erbjuder enastående flexibilitet, eftersom den är fodrad med mjukt och väldigt strechigt material så kallat Ultra Soft Stretch i arm- och axelpartierna. I övrigt är dräkten fodrad med hudvänligt så kallat Soft Strech. Nydesignad bröstplatta och nydesignade höftpaneler gör den väldigt stabil i vattnet. Sailfish Attack är en all-round dräkt för alla typer av triathleter, från nybörjaren till Ironman-deltagaren.','/img/sailfish_attack.gif','Sailfish Attack','1',5,9,2,2);
/*!40000 ALTER TABLE `Produkter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Storlekstyp`
--

DROP TABLE IF EXISTS `Storlekstyp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Storlekstyp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Typ` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Storlekstyp`
--

LOCK TABLES `Storlekstyp` WRITE;
/*!40000 ALTER TABLE `Storlekstyp` DISABLE KEYS */;
INSERT INTO `Storlekstyp` VALUES (1,'Dam'),(2,'Herr');
/*!40000 ALTER TABLE `Storlekstyp` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-07 11:52:07
