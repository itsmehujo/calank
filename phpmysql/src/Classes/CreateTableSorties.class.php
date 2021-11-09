<?php

class CreateTableSorties extends Dbh
{
    private $connection;
    public function __construct()
    {
        $this->connection = $this->connect();
    }
    public function createTable () {
        $sql = <<<sql
DROP TABLE IF EXISTS `sorties`;
CREATE TABLE `sorties` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lieu` varchar(150) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `cleaner` int DEFAULT NULL,
  `nb_sac` int DEFAULT NULL,
  `kilos` int DEFAULT NULL,
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
  );
INSERT INTO `sorties` VALUES (28,'Calanque de Sugiton','2017-04-09',7,5,32,0,0,0,0,0,0,0,0,0),(29,'Calanque de Callelongue','2017-04-22',8,23,34,0,0,0,0,0,0,0,0,0),(30,'Calanque de Callelongue','2017-06-03',9,18,48,0,0,0,0,0,0,0,0,0),(31,'Calanque de Morgiou','2017-09-09',11,33,42,0,0,0,0,0,0,0,0,0),(32,'Baie des Singes - dition Nol','2017-12-09',40,38,198,0,0,0,0,0,0,0,0,0),(33,'Nettoyage de l\'Estaque','2018-03-03',37,53,2000,0,0,0,0,0,0,0,0,0),(34,'Calanque de Morgiou w/ ASEGA','2018-03-24',45,43,286,0,0,0,0,0,0,0,0,0),(35,'Nettoyage de l\'Escale Borely w/ Scouts','2018-04-14',30,30,148,0,0,0,0,0,0,0,0,0),(36,'Plage de Colombet - dition Kayak','2018-06-19',30,7,40,0,0,0,0,0,0,0,0,0),(37,'Calanque de Callelongue w/ M6','2018-07-21',130,46,262,0,0,0,0,0,0,0,0,0),(38,'Fac de Luminy - Coupe de France VTT','2019-03-23',30,65,299,0,0,0,0,0,0,0,0,0),(39,'Baie des Singes','2019-04-20',60,43,342,0,0,0,0,0,0,0,0,0),(40,'Parc National des calanques - dition Yoga','2019-07-20',15,5,13,0,0,0,0,0,0,0,0,0),(41,'Calanque de Morgiou','2019-07-27',20,17,68,0,0,0,0,0,0,0,0,0),(42,'Calanque de Callelongue w/ l\'U11','2019-08-22',18,28,96,0,0,0,0,0,0,0,0,0),(43,'Plage de Corbire','2019-09-21',17,14,37,0,0,0,0,0,0,0,0,0),(44,'Calanque de Morgiou - Harry Potter','2019-10-06',130,69,1000,0,0,0,0,0,0,0,0,0),(45,'La Plage de la Vieille Chapelle w/ Red Lion','2020-07-11',70,32,650,0,0,0,0,0,0,0,0,0),(46,'Calanque de Callelongue w/ Lucien Maine','2020-07-19',150,73,1500,0,0,0,0,0,0,0,0,0),(47,'Plage des Catalants w/ Maxime Musqua','2020-08-16',130,83,1000,0,0,0,0,0,0,0,0,0),(48,'Le Roucas Blanc','2020-09-06',70,54,426,0,0,0,0,0,0,15,0,0),(49,'Clean my Cassis','2020-09-12',200,120,826,0,0,0,0,0,0,0,0,0),(50,'Le Roucas Blanc (#2)','2020-09-13',60,93,432,0,0,0,0,0,0,0,0,0),(51,'Calanque de Callelongue w/ Sauvage.','2020-09-19',152,100,486,0,0,0,0,0,0,0,0,0),(52,'Buttes Chaumont - Paris','2020-09-26',29,17,30,0,0,0,0,0,0,2.8,0,0),(53,'Calanque de Luminy - MGEN','2020-10-10',60,39,390,0,0,0,0,0,0,0,0,0),(54,'Calanques Blanche / Escalette - Calanques Propres','2020-10-17',72,55,607,0,0,0,0,0,0,5.2,0,0),(55,'dition Confins','2020-11-05',46,67,263,0,0,0,0,263,0,0.53,0,0),(56,'Vieille Chapelle - Bowl','2021-02-28',146,69,483,80,10.2,12.6,228,150,2,0,0,NULL),(57,'Dcharge sauvage de Luminy','2021-03-09',0,0,5,0,0,0,0,0,0,0,0,0),(58,'Digue du Mucem','2021-03-21',180,71,835,260,8,7,10,189,360,1,0,0),(59,'Digue de la pointe rouge w/ Michou','2021-03-26',15,35,191,10,5,0,4,171,0,0.5,0,0),(60,'Dpollution de l\'Huveaune C Jamy','2021-04-27',22,20,45,0,0,0,0,45,0,0,0,0),(61,'Digue de la pointe rouge w/ Enfants d\'Herms','2021-05-02',34,72,1000,100,32,454,9.5,261,143,0.5,0,0),(62,'Vitrolles w/ Graine de Vitrollais','2021-05-09',50,35,145,0,0,0,0,145,0,0,0,0),(63,'Plages de l\'Estaque','2021-05-16',70,95,497,160,45.5,7,15,198,34,3,0,34),(64,'Plage des Sablines-Ramassage avec Sacr Coeur','2021-05-25',80,26,143,0,0,0,0,0,0,0,0,0),(65,'Digue de L\'huveaune w/Enfants d\'Herms','2021-06-06',41,20,115,5.5,2.35,0,1,75,30.8,0.7,0,0),(66,'Plage de Bonneveine w/Dfi Mont Cristo','2021-06-13',92,70,302,95,7.5,14,25,138.5,10,5,0,7),(67,'Le Petit Roucas w/Dfi Mont Cristo','2021-06-27',92,75,101,14,5,6.5,2,66,0,5,0,0),(68,'Callanque de Callelongue w/Enjoy Phoenix','2021-06-28',14,10,145,44,5,3,2.25,23,51,2,0,11),(69,'Plage de la Vieille Chapelle','2021-07-11',72,36,215,58.05,17.95,4.3,5.85,79.2,50,3.4,0,6),(70,'Callelongue feat. Salomon','2021-07-20',100,42,352,95,22,18,15,105,80,4.5,0,12),(71,'Dpollution des Catalans','2021-08-01',112,90,757,99,17,21,18,593,0,5.3,0.55,3),(72,'Dpollutions des Goudes','2021-08-15',32,15,149,30,5,3,4,96.9,0,3.2,0.11,7),(73,'Clean my Delta #3','2021-08-31',70,57,248,26,19,23,7,150,10,15,0.23,0),(74,'Clean my Cassis #2','2021-09-11',147,90,370,0,0,0,0,0,0,5,0,0),(75,'Clean Callelongie w/ BNP Paribas','2021-09-16',8,10,50,14.3,2.3,2.15,1.5,20.5,0.6,0.11,4.3,NULL),(76,'Clean Samena w/ CLM','2021-09-17',8,9,33,13.5,2.35,2.35,1,10,0,0.2,0.05,4),(77,'Escale Borely - Innondations','2021-10-06',550,318,2123,62,97,11,40,1004,700,0,0,0),(78,'Urgence Chemin des Goudes','2021-10-09',377,112,1943,239,17,12.25,34.7,834,787,5,0.42,14);
sql;
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
    }
}