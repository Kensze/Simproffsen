-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: 192.168.10.10    Database: mydb
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
-- Table structure for table `Farger`
--

DROP TABLE IF EXISTS `Farger`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Farger` (
  `Farg_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Farg` varchar(45) NOT NULL,
  PRIMARY KEY (`Farg_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Farger`
--

LOCK TABLES `Farger` WRITE;
/*!40000 ALTER TABLE `Farger` DISABLE KEYS */;
INSERT INTO `Farger` VALUES (1,'Gul'),(2,'Lila'),(3,'Röd'),(4,'Orange'),(5,'Svart');
/*!40000 ALTER TABLE `Farger` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FinnsI`
--

DROP TABLE IF EXISTS `FinnsI`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FinnsI` (
  `Produkter_Produkt_ID` int(11) NOT NULL,
  `Storlekar_Storlek_ID` int(11) NOT NULL,
  `Farger_Farg_ID` int(11) NOT NULL,
  `Produkter_Marken_Marke_ID` int(11) NOT NULL,
  `Produkter_Kategorier_Kategori_ID` int(11) NOT NULL,
  `Antal` int(11) DEFAULT NULL,
  KEY `fk_FinnsI_Storlekar1_idx` (`Storlekar_Storlek_ID`),
  KEY `fk_FinnsI_Farger1_idx` (`Farger_Farg_ID`),
  KEY `fk_FinnsI_Produkter1_idx` (`Produkter_Produkt_ID`,`Produkter_Marken_Marke_ID`,`Produkter_Kategorier_Kategori_ID`),
  CONSTRAINT `fk_FinnsI_Farger1` FOREIGN KEY (`Farger_Farg_ID`) REFERENCES `Farger` (`Farg_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_FinnsI_Produkter1` FOREIGN KEY (`Produkter_Produkt_ID`, `Produkter_Marken_Marke_ID`, `Produkter_Kategorier_Kategori_ID`) REFERENCES `Produkter` (`Produkt_ID`, `Marken_Marke_ID`, `Kategorier_Kategori_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_FinnsI_Storlekar1` FOREIGN KEY (`Storlekar_Storlek_ID`) REFERENCES `Storlekar` (`Storlek_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FinnsI`
--

LOCK TABLES `FinnsI` WRITE;
/*!40000 ALTER TABLE `FinnsI` DISABLE KEYS */;
INSERT INTO `FinnsI` VALUES (1,1,2,1,4,3),(1,2,2,1,4,2),(2,3,4,1,4,5),(1,3,3,1,4,3),(1,4,1,1,4,5);
/*!40000 ALTER TABLE `FinnsI` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Kategorier`
--

DROP TABLE IF EXISTS `Kategorier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Kategorier` (
  `Kategori_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Namn` varchar(45) NOT NULL,
  PRIMARY KEY (`Kategori_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Kategorier`
--

LOCK TABLES `Kategorier` WRITE;
/*!40000 ALTER TABLE `Kategorier` DISABLE KEYS */;
INSERT INTO `Kategorier` VALUES (1,'Simkläder'),(2,'Simträning'),(3,'Simutrustning'),(4,'Våtdräkter'),(5,'Triathlonkläder'),(6,'Övrigt');
/*!40000 ALTER TABLE `Kategorier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Marken`
--

DROP TABLE IF EXISTS `Marken`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Marken` (
  `Marke_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Namn` varchar(45) NOT NULL,
  PRIMARY KEY (`Marke_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Marken`
--

LOCK TABLES `Marken` WRITE;
/*!40000 ALTER TABLE `Marken` DISABLE KEYS */;
INSERT INTO `Marken` VALUES (1,'Orca');
/*!40000 ALTER TABLE `Marken` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Produkter`
--

DROP TABLE IF EXISTS `Produkter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Produkter` (
  `Produkt_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Namn` varchar(45) NOT NULL,
  `Storlekstyp` varchar(45) NOT NULL,
  `Marken_Marke_ID` int(11) NOT NULL,
  `Kategorier_Kategori_ID` int(11) NOT NULL,
  `ArtNr` varchar(45) NOT NULL,
  `Pris` varchar(45) NOT NULL,
  `Beskrivning` varchar(300) NOT NULL,
  `Bild` varchar(45) NOT NULL,
  `Vikt` varchar(45) DEFAULT NULL,
  `Show` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Produkt_ID`,`Marken_Marke_ID`,`Kategorier_Kategori_ID`),
  KEY `fk_Produkter_Marken_idx` (`Marken_Marke_ID`),
  KEY `fk_Produkter_Kategorier1_idx` (`Kategorier_Kategori_ID`),
  CONSTRAINT `fk_Produkter_Kategorier1` FOREIGN KEY (`Kategorier_Kategori_ID`) REFERENCES `Kategorier` (`Kategori_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Produkter_Marken` FOREIGN KEY (`Marken_Marke_ID`) REFERENCES `Marken` (`Marke_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Produkter`
--

LOCK TABLES `Produkter` WRITE;
/*!40000 ALTER TABLE `Produkter` DISABLE KEYS */;
INSERT INTO `Produkter` VALUES (1,'1337 byxor','Herr',1,4,'1337','600','dffgshshgsfgadgadfgdfgadfgadfgagffa','/img/sailfish_attack_trans.gif','8',1),(2,'Sailfish Attack','Dam',1,4,'1338','900','Mycket dräkt för pengarna! Sailfish Attack erbjuder den prismässigt bästa kombinationen mellan flytkraft, flexibilitet och kvalitet. Denna dräkt är designad för att hålla jämna steg med dräkterna som håller toppklass fast till ett lägre pris. Denna dräkt är tillverkad av de bästa yttermaterialen – S','/img/sailfish_attack_trans.gif','7',1);
/*!40000 ALTER TABLE `Produkter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Storlekar`
--

DROP TABLE IF EXISTS `Storlekar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Storlekar` (
  `Storlek_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Storlek` varchar(45) NOT NULL,
  PRIMARY KEY (`Storlek_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Storlekar`
--

LOCK TABLES `Storlekar` WRITE;
/*!40000 ALTER TABLE `Storlekar` DISABLE KEYS */;
INSERT INTO `Storlekar` VALUES (1,'XS'),(2,'S'),(3,'M'),(4,'L'),(5,'XL');
/*!40000 ALTER TABLE `Storlekar` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-22 16:02:47
