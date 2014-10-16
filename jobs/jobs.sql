-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: job
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

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
-- Table structure for table `jobport`
--

DROP TABLE IF EXISTS `jobport`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `Qualification` varchar(50) DEFAULT NULL,
  `employer` varchar(30) DEFAULT NULL,
  `website` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobport`
--

LOCK TABLES `jobport` WRITE;
/*!40000 ALTER TABLE `jobport` DISABLE KEYS */;
INSERT INTO `jobport` VALUES (1,'Job',0,'Software developer','Banglore','Btech','Google','abc@gmail.com'),(2,'job',345566443,'djdfhfg','bonglore','hvhjbjhbjh','google','asd@gmail.com'),(3,'job',345566443,'djdfhfg','bonglore','hvhjbjhbjh','google','asd@gmail.com'),(4,'job',345566443,'djdfhfg','bonglore','hvhjbjhbjh','google','asd@gmail.com'),(5,'job',345566443,'djdfhfg','bonglore','hvhjbjhbjh','google','asd@gmail.com'),(6,'job',345566443,'djdfhfg','bonglore','hvhjbjhbjh','google','asd@gmail.com'),(7,'job',345566443,'djdfhfg','bonglore','hvhjbjhbjh','google','asd@gmail.com'),(17,'e',3,'','rf','v','v','f'),(19,'a',0,'','a','aa','a','a'),(21,'ygy2141',5456,'','hv','hjb','jh','hj'),(22,'ygy2141',5456,'','hv','hjb','jh','hj'),(23,'a',0,'','a','aa','a','a'),(24,'a',0,'','a','aa','a','a'),(25,'a',0,'','a','aa','a','a'),(26,'akshata',0,'','fjfjgkf','nnfffkk','nfngmgm,t,','jfjfjtjtjtjjtjt'),(27,'akshata',0,'','fjfjgkf','nnfffkk','nfngmgm,t,','jfjfjtjtjtjjtjt'),(29,'',0,'','','','',''),(30,'job',345566443,'djdfhfg','bonglore','hvhjbjhbjh','google','asd@gmail.com'),(31,'job',345566443,'djdfhfg','bonglore','hvhjbjhbjh','google','asd@gmail.com'),(32,'job',345566443,'djdfhfg','bonglore','hvhjbjhbjh','google','asd@gmail.com'),(33,'job',345566443,'djdfhfg','bonglore','hvhjbjhbjh','google','asd@gmail.com'),(34,'job',345566443,'djdfhfg','bonglore','hvhjbjhbjh','google','asd@gmail.com'),(35,'',0,'','','','',''),(36,'',0,'','','','',''),(37,'x',0,'x','x','x','x','x'),(38,'p',0,'P','P','P','P','P'),(39,'',0,'','','','',''),(40,'',0,'','','','',''),(41,'Software developer',0,'php,html,css,javascript developer','banglore','sneha06.github.io','1000000','sneha'),(42,'Software developer',0,'php,html,css,javascript developer','banglore','sneha06.github.io','1000000','sneha'),(43,'Software developer',0,'php,html,css,javascript developer','banglore','sneha06.github.io','1000000','sneha'),(44,'Software developer',0,'php,html,css,javascript developer','banglore','sneha06.github.io','1000000','sneha'),(45,'Software developer',0,'php,html,css,javascript developer','banglore','sneha06.github.io','1000000','sneha'),(46,'Software developer',0,'php,html,css,javascript developer','banglore','sneha06.github.io','1000000','sneha'),(47,'Software developer',0,'php,html,css,javascript developer','banglore','sneha06.github.io','1000000','sneha'),(48,'Software developer',0,'php,html,css,javascript developer','banglore','sneha06.github.io','1000000','sneha'),(49,'Software developer',0,'php,html,css,javascript developer','banglore','sneha06.github.io','1000000','sneha'),(50,'Software developer',0,'php,html,css,javascript developer','banglore','sneha06.github.io','1000000','sneha'),(51,'Software developer',0,'php,html,css,javascript developer','banglore','sneha06.github.io','1000000','sneha'),(52,'Software developer',0,'php,html,css,javascript developer','banglore','sneha06.github.io','1000000','sneha'),(53,'Software developer',0,'php,html,css,javascript developer','banglore','sneha06.github.io','1000000','sneha'),(54,'Software developer',0,'php,html,css,javascript developer','banglore','sneha06.github.io','1000000','sneha'),(55,'Software developer',0,'php,html,css,javascript developer','banglore','sneha06.github.io','1000000','sneha'),(56,'dvnjkn',0,'NKJNJK','NKJ','N','8378923','NKJ');
/*!40000 ALTER TABLE `jobport` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `name` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('sneha','sneha',2),('w','w',16),('Arpit','Arpit',17),('Arpit','Arpit',18),('sneha','sneha',19),('','',20),('','',21),('akshata','akshata',22),('aksh','aksh',23),('z','z',24),('k','k',25),('g','g',26),('b','b',27),('arpit','qw',28);
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

-- Dump completed on 2014-10-16 16:38:16
