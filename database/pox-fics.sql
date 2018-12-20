CREATE DATABASE  IF NOT EXISTS `poc-fics` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `poc-fics`;
-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: poc-fics
-- ------------------------------------------------------
-- Server version	5.6.38

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
-- Table structure for table `EGNE_OPGAVER`
--

DROP TABLE IF EXISTS `EGNE_OPGAVER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EGNE_OPGAVER` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `GODKENDT` bit(1) DEFAULT NULL,
  `TYPE` varchar(45) DEFAULT NULL,
  `MEDARBEJDER` varchar(45) NOT NULL,
  `AKVTIVITETSDATO` datetime DEFAULT NULL,
  `FORVENTET_RETUR` datetime DEFAULT NULL,
  `EMNE` varchar(100) NOT NULL,
  `BESKRIVELSE` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EGNE_OPGAVER`
--

LOCK TABLES `EGNE_OPGAVER` WRITE;
/*!40000 ALTER TABLE `EGNE_OPGAVER` DISABLE KEYS */;
INSERT INTO `EGNE_OPGAVER` VALUES (1,'','Brev','NEA','2018-02-05 00:00:00',NULL,'Omjournalisering',NULL),(2,'','Brev','SLBP','2018-06-11 00:00:00','2019-02-03 00:00:00','Sagsbehandling',NULL);
/*!40000 ALTER TABLE `EGNE_OPGAVER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SAGER`
--

DROP TABLE IF EXISTS `SAGER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SAGER` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `OPRETDATO` datetime NOT NULL,
  `AFSLUTDATO` datetime DEFAULT NULL,
  `MEDARBEJDER` varchar(45) NOT NULL,
  `SAGSNAVN 1` varchar(100) DEFAULT NULL,
  `SAGSNAVN 2` varchar(100) DEFAULT NULL,
  `SAGSNAVN 3` varchar(100) DEFAULT NULL,
  `SAGSNAVN 4` varchar(100) DEFAULT NULL,
  `JOURNALPLAN` varchar(255) DEFAULT NULL,
  `SAGSAFDELING` varchar(150) DEFAULT NULL,
  `SAGSGRUPPE` varchar(100) DEFAULT NULL,
  `UNDERNR` int(11) DEFAULT NULL,
  `ADVAR` bit(1) NOT NULL,
  `SAGSTYPE` varchar(80) DEFAULT NULL,
  `SAGSID` int(11) NOT NULL,
  `KLASSIFIKATION` varchar(45) DEFAULT NULL,
  `WORKFLOW` bit(1) NOT NULL,
  `AFDELING` varchar(45) DEFAULT NULL,
  `STATUS` varchar(45) NOT NULL,
  `SAGSANSVARLIG` varchar(100) NOT NULL,
  `ADRESSE` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SAGER`
--

LOCK TABLES `SAGER` WRITE;
/*!40000 ALTER TABLE `SAGER` DISABLE KEYS */;
INSERT INTO `SAGER` VALUES (1,'2018-12-12 00:00:00','2019-02-02 00:00:00','Nadia Elida Aamand','Sagsbehandling','København H',NULL,NULL,NULL,'FICS',NULL,NULL,'\0','Behandling',1,NULL,'\0',NULL,'','Nadia Elida Aamand',NULL),(2,'2018-12-20 00:00:00',NULL,'Simone Petersen','Testsag','Glostrup',NULL,NULL,NULL,'Consit',NULL,NULL,'','Test',2,'Ikke klassificeret','\0',NULL,'','Nadia Elida Aamand',NULL);
/*!40000 ALTER TABLE `SAGER` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-20 12:56:13