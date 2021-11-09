-- MySQL dump 10.19  Distrib 10.3.31-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: calanques
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
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sorties`
--

LOCK TABLES `sorties` WRITE;
/*!40000 ALTER TABLE `sorties` DISABLE KEYS */;
INSERT INTO `sorties` VALUES (28,'Calanque de Sugiton','2017-09-04',7,5,32,0,0,0,0,0,0,0,0,0),(29,'Calanque de Callelongue',NULL,8,23,34,0,0,0,0,0,0,0,0,0),(30,'Calanque de Callelongue','2017-03-06',9,18,48,0,0,0,0,0,0,0,0,0),(31,'Calanque de Morgiou','2017-09-09',11,33,42,0,0,0,0,0,0,0,0,0),(32,'Baie des Singes - Édition Noël','2017-09-12',40,38,198,0,0,0,0,0,0,0,0,0),(33,'Nettoyage de l\'Estaque','2018-03-03',37,53,2000,0,0,0,0,0,0,0,0,0),(34,'Calanque de Morgiou w/ ASEGA',NULL,45,43,286,0,0,0,0,0,0,0,0,0),(35,'Nettoyage de l\'Escale Borely w/ Scouts',NULL,30,30,148,0,0,0,0,0,0,0,0,0),(36,'Plage de Colombet - Édition Kayak',NULL,30,7,40,0,0,0,0,0,0,0,0,0),(37,'Calanque de Callelongue w/ M6',NULL,130,46,262,0,0,0,0,0,0,0,0,0),(38,'Fac de Luminy - Coupe de France VTT',NULL,30,65,299,0,0,0,0,0,0,0,0,0),(39,'Baie des Singes',NULL,60,43,342,0,0,0,0,0,0,0,0,0),(40,'Parc National des calanques - Édition Yoga',NULL,15,5,13,0,0,0,0,0,0,0,0,0),(41,'Calanque de Morgiou',NULL,20,17,68,0,0,0,0,0,0,0,0,0),(42,'Calanque de Callelongue w/ l\'U11',NULL,18,28,96,0,0,0,0,0,0,0,0,0),(43,'Plage de Corbière',NULL,17,14,37,0,0,0,0,0,0,0,0,0),(44,'Calanque de Morgiou - Harry Potter','2019-06-10',130,69,1000,0,0,0,0,0,0,0,0,0),(45,'La Plage de la Vieille Chapelle w/ Red Lion','2020-11-07',70,32,650,0,0,0,0,0,0,0,0,0),(46,'Calanque de Callelongue w/ Lucien Maine',NULL,150,73,1500,0,0,0,0,0,0,0,0,0),(47,'Plage des Catalants w/ Maxime Musqua',NULL,130,83,1000,0,0,0,0,0,0,0,0,0),(48,'Le Roucas Blanc','2020-06-09',70,54,426,0,0,0,0,0,0,15,0,0),(49,'Clean my Cassis','2020-12-09',200,120,826,0,0,0,0,0,0,0,0,0),(50,'Le Roucas Blanc (#2)',NULL,60,93,432,0,0,0,0,0,0,0,0,0),(51,'Calanque de Callelongue w/ Sauvage.',NULL,152,100,486,0,0,0,0,0,0,0,0,0),(52,'Buttes Chaumont - Paris',NULL,29,17,30,0,0,0,0,0,0,2.8,0,0),(53,'Calanque de Luminy - MGEN','2020-10-10',60,39,390,0,0,0,0,0,0,0,0,0),(54,'Calanques Blanche / Escalette - Calanques Propres',NULL,72,55,607,0,0,0,0,0,0,5.2,0,0),(55,'Édition Confinés','2020-05-11',46,67,263,0,0,0,0,263,0,0.53,0,0),(56,'Vieille Chapelle - Bowl',NULL,146,69,483,80,10.2,12.6,228,150,2,0,0,NULL),(57,'Décharge sauvage de Luminy','2021-09-03',0,0,5,0,0,0,0,0,0,0,0,0),(58,'Digue du Mucem',NULL,180,71,835,260,8,7,10,189,360,1,0,0),(59,'Digue de la pointe rouge w/ Michou',NULL,15,35,191,10,5,0,4,171,0,0.5,0,0),(60,'Dépollution de l\'Huveaune C Jamy',NULL,22,20,45,0,0,0,0,45,0,0,0,0),(61,'Digue de la pointe rouge w/ Enfants d\'Hermès','2021-02-05',34,72,1000,100,32,454,9.5,261,143,0.5,0,0),(62,'Vitrolles w/ Graine de Vitrollais','2021-09-05',50,35,145,0,0,0,0,145,0,0,0,0),(63,'Plages de l\'Estaque',NULL,70,95,497,160,45.5,7,15,198,34,3,0,34),(64,'Plage des Sablines-Ramassage avec Sacré Coeur',NULL,80,26,143,0,0,0,0,0,0,0,0,0),(65,'Digue de L\'huveaune w/Enfants d\'Hermès','2021-06-06',41,20,115,5.5,2.35,0,1,75,30.8,0.7,0,0),(66,'Plage de Bonneveine w/Défi Monté Cristo',NULL,92,70,302,95,7.5,14,25,138.5,10,5,0,7),(67,'Le Petit Roucas w/Défi Monté Cristo',NULL,92,75,101,14,5,6.5,2,66,0,5,0,0),(68,'Callanque de Callelongue w/Enjoy Phoenix',NULL,14,10,145,44,5,3,2.25,23,51,2,0,11),(69,'Plage de la Vieille Chapelle','2021-11-07',72,36,215,58.05,17.95,4.3,5.85,79.2,50,3.4,0,6),(70,'Callelongue feat. Salomon',NULL,100,42,352,95,22,18,15,105,80,4.5,0,12),(71,'Dépollution des Catalans','2021-01-08',112,90,757,99,17,21,18,593,0,5.3,0.55,3),(72,'Dépollutions des Goudes',NULL,32,15,149,30,5,3,4,96.9,0,3.2,0.11,7),(73,'Clean my Delta #3',NULL,70,57,248,26,19,23,7,150,10,15,0.23,0),(74,'Clean my Cassis #2','2021-11-09',147,90,370,0,0,0,0,0,0,5,0,0),(75,'Clean Callelongie w/ BNP Paribas',NULL,8,10,50,14.3,2.3,2.15,1.5,20.5,0.6,0.11,4.3,NULL),(76,'Clean Samena w/ CLM',NULL,8,9,33,13.5,2.35,2.35,1,10,0,0.2,0.05,4),(77,'Escale Borely - Innondations','2021-06-10',550,318,2123,62,97,11,40,1004,700,0,0,0),(78,'Urgence Chemin des Goudes','2021-09-10',377,112,1943,239,17,12.25,34.7,834,787,5,0.42,14);
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

-- Dump completed on 2021-11-09 10:58:21
