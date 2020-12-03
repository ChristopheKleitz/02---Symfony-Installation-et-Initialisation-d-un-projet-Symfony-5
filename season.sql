-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: wild-series
-- ------------------------------------------------------
-- Server version	8.0.22-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `season`
--

DROP TABLE IF EXISTS `season`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `season` (
  `id` int NOT NULL AUTO_INCREMENT,
  `program_id` int NOT NULL,
  `number` int NOT NULL,
  `year` int NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F0E45BA93EB8070A` (`program_id`),
  CONSTRAINT `FK_F0E45BA93EB8070A` FOREIGN KEY (`program_id`) REFERENCES `program` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `season`
--

LOCK TABLES `season` WRITE;
/*!40000 ALTER TABLE `season` DISABLE KEYS */;
INSERT INTO `season` VALUES (1,2,1,2018,'Durant l’été 1992, Hugh et Olivia Crain s’installent avec leurs cinq enfants dans le manoir de Hill House. Mais des événements paranormaux et des pertes tragiques vont les obliger à quitter la demeure. Vingt-six ans plus tard, alors qu’une tragédie survient, les membres de cette famille éclatée sont à nouveau réunis dans cette maison, et sont contraints de faire face aux souvenirs d’événements terrifiants survenus autrefois.'),(2,4,1,2019,'Un yaourt susceptible, des soldats lycanthropes, des robots déchaînés, des monstres-poubelles, des chasseurs de primes cyborgs, des araignées extraterrestres et des démons de l\'enfer assoiffés de sang : tout ce beau monde est réuni dans 18 courts d\'animation déconseillés aux âmes sensibles.\n'),(3,4,2,2020,'En cours...'),(4,5,1,2014,'Londres, 1891. Vanessa Ives, une jeune femme aux pouvoirs puissants et hypnotiques, s’allie à Ethan Chandler, un homme rebelle et violent, ainsi qu’à Sir Malcolm, un homme riche d’un certain âge aux ressources intarissables. Ensemble, ils combattent une menace quasi invisible qui massacre la population.\n'),(5,5,2,2015,'Alors que les étranges pouvoirs de Vanessa Ives se développent, des forces sournoises lancent des sorts à ses proches. Dans ce monde troublant, où les personnages les plus emblématiques et terrifiants de la littérature errent dans les rues, des alliances improbables se forment pour combattre des tentations inimaginables.\n'),(6,5,3,2016,'Et si le seul moyen de combattre nos démons était de les laisser prendre le dessus ? Confrontés à de nouvelles atrocités dans de nouvelles contrées, Ethan Chandler, Dr. Frankenstein, Dorian Gray, Sir Malcolm, la Créature ainsi que la funeste Lily doivent chacun affronter et ne faire plus qu’un avec la facette la plus monstrueuse de leur personnalité. Mais pour Vanessa Ives, accepter ses démons pourrait lui coûter très cher et plonger le monde dans d’éternelles ténèbres.\n');
/*!40000 ALTER TABLE `season` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-03 11:51:32
