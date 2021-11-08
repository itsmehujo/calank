
-- MySQL dump 10.19  Distrib 10.3.31-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: CleanMyCalanque
-- ------------------------------------------------------
-- Server version	10.3.31-MariaDB-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `sorties`
--

DROP TABLE IF EXISTS `sorties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sorties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lieu` varchar(150) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `cleaner` int(11) DEFAULT NULL,
  `nb_sac` int(11) DEFAULT NULL,
  `kilos` int(11) DEFAULT NULL,
  `verre` float DEFAULT NULL,
  `plastique` float DEFAULT NULL,
  `carton` float DEFAULT NULL,
  `canette` float DEFAULT NULL,
  `tout_venant` float DEFAULT NULL,
  `encombrant` float DEFAULT NULL,
  `megots` float DEFAULT NULL,
  `bouchon` float DEFAULT NULL,
  `proto` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sorties`
--

LOCK TABLES `sorties` WRITE;
/*!40000 ALTER TABLE `sorties` DISABLE KEYS */;
INSERT INTO `sorties` VALUES (4,'Calanque de Sugiton','2017-04-09',7,5,32,0,0,0,0,0,0,0,0,0),(5,'Canalque de Callelongue','2017-04-22',8,23,48,0,0,0,0,0,0,0,0,0),(6,'Calanque de Morgiou','2017-09-09',11,33,42,0,0,0,0,0,0,0,0,0),(7,'Calanque de Callelongue','2017-06-03',8,23,34,0,0,0,0,0,0,0,0,0),(8,'Baie des Singes - Edition Noël','2017-12-09',40,38,198,0,0,0,0,0,0,0,0,0),(9,'Nettoyage de l\'Estaque','2018-03-03',37,53,2000,0,0,0,0,0,0,0,0,0),(10,'Calanque de Morgiou w/ ASEGA','2018-03-24',45,43,286,0,0,0,0,0,0,0,0,0),(11,'Nettoyage de l\'Escale Borely w/ Scouts','2018-04-14',30,30,148,0,0,0,0,0,0,0,0,0),(12,'Plage de Colombet - Edition Kayak','2018-06-19',30,7,40,0,0,0,0,0,0,0,0,0),(13,'Calanque de Callelongue w/ M6','2018-07-21',130,46,262,0,0,0,0,0,0,0,0,0),(14,'Fac de Luminy - Coupe de France VTT','2019-03-23',30,65,299,0,0,0,0,0,0,0,0,0),(15,'Baie des Singes','2019-04-20',60,43,342,0,0,0,0,0,0,0,0,0),(16,'Parc national des calanques - Edition Yoga','2019-07-20',15,5,13,0,0,0,0,0,0,0,0,0),(17,'Calanque de Morgiou','2019-07-27',20,17,68,0,0,0,0,0,0,0,0,0),(18,'Calanque de Callelongue w/l\'U11','2019-08-22',18,28,96,0,0,0,0,0,0,0,0,0),(19,'Plage de la Corbiere','2019-09-21',17,14,37,0,0,0,0,0,0,0,0,0),(20,'Calanque de Morgiou - Harry Potter','2019-09-06',130,69,1000,0,0,0,0,0,0,0,0,0),(21,'Plage de la Vieille Chapelle w/ Red Lion','2020-07-11',70,32,650,0,0,0,0,0,0,0,0,0),(22,'Calanque de Callelongue w/ Lucien Maine','2020-07-19',150,73,1500,0,0,0,0,0,0,0,0,0),(24,'Plage des Catalants w/ Maxime Musqua','2020-08-16',130,83,1000,0,0,0,0,0,0,0,0,0),(25,'Le Roucas Blanc','2020-09-06',70,54,426,0,0,0,0,0,0,0,0,0),(26,'Clean my Cassis','2020-09-12',200,120,826,0,0,0,0,0,0,0,0,0),(27,'Le Roucas Blanc (#2)','2020-09-13',60,93,432,0,0,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `sorties` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-08 20:58:53
