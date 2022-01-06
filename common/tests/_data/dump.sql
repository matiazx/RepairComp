-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: localhost    Database: repaircomp
-- ------------------------------------------------------
-- Server version	5.7.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `auth_assignment`
--

DROP TABLE IF EXISTS `auth_assignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `idx-auth_assignment-user_id` (`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_assignment`
--

LOCK TABLES `auth_assignment` WRITE;
/*!40000 ALTER TABLE `auth_assignment` DISABLE KEYS */;
INSERT INTO `auth_assignment` VALUES ('admin','3',1641311818),('cliente','21',1641312052),('gestor','4',1641311818);
/*!40000 ALTER TABLE `auth_assignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_item`
--

DROP TABLE IF EXISTS `auth_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_item`
--

LOCK TABLES `auth_item` WRITE;
/*!40000 ALTER TABLE `auth_item` DISABLE KEYS */;
INSERT INTO `auth_item` VALUES ('admin',1,NULL,NULL,NULL,1641311818,1641311818),('cliente',1,NULL,NULL,NULL,1641311818,1641311818),('createDispositivo',2,'Create dispositivo',NULL,NULL,1641311818,1641311818),('createServico',2,'Create servico',NULL,NULL,1641311818,1641311818),('createUser',2,'Criar user',NULL,NULL,1641311818,1641311818),('gestor',1,NULL,NULL,NULL,1641311818,1641311818),('tecnico',1,NULL,NULL,NULL,1641311818,1641311818),('updateDispositivo',2,'Update dispositivo',NULL,NULL,1641311818,1641311818),('updateServico',2,'Update servico',NULL,NULL,1641311818,1641311818),('updateUser',2,'Update post',NULL,NULL,1641311818,1641311818);
/*!40000 ALTER TABLE `auth_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_item_child`
--

DROP TABLE IF EXISTS `auth_item_child`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_item_child`
--

LOCK TABLES `auth_item_child` WRITE;
/*!40000 ALTER TABLE `auth_item_child` DISABLE KEYS */;
INSERT INTO `auth_item_child` VALUES ('cliente','createServico'),('admin','createUser'),('admin','gestor'),('cliente','updateServico'),('admin','updateUser');
/*!40000 ALTER TABLE `auth_item_child` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_rule`
--

DROP TABLE IF EXISTS `auth_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_rule`
--

LOCK TABLES `auth_rule` WRITE;
/*!40000 ALTER TABLE `auth_rule` DISABLE KEYS */;
INSERT INTO `auth_rule` VALUES ('isAuthor',_binary 'O:25:\"backend\\models\\AuthorRule\":3:{s:4:\"name\";s:8:\"isAuthor\";s:9:\"createdAt\";i:1609190194;s:9:\"updatedAt\";i:1609190194;}',1609190194,1609190194);
/*!40000 ALTER TABLE `auth_rule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dispositivo`
--

DROP TABLE IF EXISTS `dispositivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dispositivo` (
  `idDispositivo` int(11) NOT NULL AUTO_INCREMENT,
  `dataCompra` date NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `referencia` varchar(70) NOT NULL,
  PRIMARY KEY (`idDispositivo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dispositivo`
--

LOCK TABLES `dispositivo` WRITE;
/*!40000 ALTER TABLE `dispositivo` DISABLE KEYS */;
INSERT INTO `dispositivo` VALUES (1,'2019-10-03','PC','Asus123'),(2,'2021-01-21','PC','PC0221323'),(3,'2012-02-29','computador','pc123'),(4,'2012-07-23','Máquina','Maquina123');
/*!40000 ALTER TABLE `dispositivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('m000000_000000_base',1638529364),('m140506_102106_rbac_init',1638529862),('m170907_052038_rbac_add_index_on_auth_assignment_user_id',1638529862),('m180523_151638_rbac_updates_indexes_without_prefix',1638529863),('m200409_110543_rbac_update_mssql_trigger',1638529863);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peca`
--

DROP TABLE IF EXISTS `peca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `peca` (
  `idPeca` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`idPeca`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peca`
--

LOCK TABLES `peca` WRITE;
/*!40000 ALTER TABLE `peca` DISABLE KEYS */;
INSERT INTO `peca` VALUES (1,'Motherboard'),(2,'Graphics Card'),(3,'CPU'),(4,'RAM'),(5,'Fonte de Alimentação');
/*!40000 ALTER TABLE `peca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relatorio`
--

DROP TABLE IF EXISTS `relatorio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `relatorio` (
  `idRelatorio` int(11) NOT NULL AUTO_INCREMENT,
  `idServico` int(11) NOT NULL,
  `idDispositivo` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `idPeca` int(11) NOT NULL,
  PRIMARY KEY (`idRelatorio`),
  KEY `idDispositivo` (`idDispositivo`),
  KEY `idServico` (`idServico`),
  KEY `id` (`id`),
  KEY `idPeca` (`idPeca`),
  CONSTRAINT `relatorio_ibfk_1` FOREIGN KEY (`idServico`) REFERENCES `servico` (`idservico`),
  CONSTRAINT `relatorio_ibfk_2` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  CONSTRAINT `relatorio_ibfk_3` FOREIGN KEY (`idPeca`) REFERENCES `peca` (`idPeca`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relatorio`
--

LOCK TABLES `relatorio` WRITE;
/*!40000 ALTER TABLE `relatorio` DISABLE KEYS */;
INSERT INTO `relatorio` VALUES (1,2,1,2,'',1),(2,3,1,2,'Serviço concluido',4),(3,10,1,3,'sd',2),(4,10,1,3,'1',2),(5,11,1,3,'Sucesso',2),(6,7,4,3,'7',1);
/*!40000 ALTER TABLE `relatorio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servico`
--

DROP TABLE IF EXISTS `servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servico` (
  `idservico` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) NOT NULL,
  `tipo` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `gravidade` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `idDispositivo` int(11) NOT NULL,
  `idRelatorio` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`idservico`),
  KEY `idRelatorio` (`idRelatorio`),
  KEY `idDispositivo` (`idDispositivo`),
  KEY `FK_id` (`id`),
  CONSTRAINT `FK_id` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  CONSTRAINT `servico_ibfk_1` FOREIGN KEY (`idDispositivo`) REFERENCES `dispositivo` (`idDispositivo`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servico`
--

LOCK TABLES `servico` WRITE;
/*!40000 ALTER TABLE `servico` DISABLE KEYS */;
INSERT INTO `servico` VALUES (1,'nao funciona',0,2,0,'2021-11-11 17:00:41',1,NULL,3),(2,'teste',1,2,1,'2021-11-11 17:01:14',1,1,3),(3,'teste',0,2,0,'2021-11-22 15:07:47',1,2,3),(4,'teste2213',0,2,1,'2021-11-23 17:08:13',2,NULL,2),(7,'Avaria',0,2,0,'2022-01-06 03:46:03',4,NULL,3),(8,'avaria1234',0,2,0,'2022-01-06 03:46:36',1,NULL,3),(9,'Não Funciona',0,0,0,'2022-01-06 03:47:57',2,NULL,21),(10,'Final',0,2,1,'2022-01-06 04:50:45',1,NULL,3),(11,'Teste',0,2,0,'2022-01-06 05:55:29',1,NULL,3);
/*!40000 ALTER TABLE `servico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'cliente',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'gsc13slb','GOiH39Pqx-sL45UnE0caeDqQkOE5VExp','$2y$13$IocUeBDPP6qP.GeDgEeB3uhaCs2MsY4CgVswX7JP//ujeSwFtYZCG',NULL,'gui.carolino@hotmail.com','cliente',10,1638532110,1639140502,'xB-zKvEm78ta8i3dUd_UPcOhWbZG9Ede_1638532110'),(3,'admin','xkZvurBhLqBhgevx08dDLngb2kcGyQUM','$2y$13$nNlpINDt.lMGHJnFWFLHhOFS8/FpHn/mtmuQ4lDPGlqnJ3NJHgR2S',NULL,'admin@gmail.com','administrador',10,1638535268,1638535268,'5yTxfaCnIljGauHaHBXvKBXfNliEf1bj_1638535268'),(4,'gestor','cEXOZAsp4KNhUBqrmvQrH0Q52KD4Q0El','$2y$13$I4SbMEV9iHCW.GOjcwWeYusNtgnxoEMl4uk52gdh2nk0J4360uLPe',NULL,'gestor@gmail.com','cliente',10,1638536727,1638536727,'uDNagDVmiQewIWjZGNR-GDFD_AbpT5vY_1638536727'),(5,'francisco','cwXyIxn_QzwMPmEGeBEVNPX-vagWBxa8','$2y$13$zNDaKjVz26KxRkdk85yVguvAsjhnINgXayhL/um0kbSi1gBaHX/46',NULL,'francisco@gmail.com','cliente',10,1639143082,1639143082,'CFuiNJHpi2sb_CqcTnzgHwpYH0FugWbT_1639143082'),(6,'joao','3sHPMlesb2w1TD1mv5ISruaO5rfQKn8n','$2y$13$OU6jwCvRcdpdB7SCA8JKjO1qmBroDUZGdpqQY98k4NZb2C4RynBn.',NULL,'joni@gmail.com','cliente',10,1639503316,1639503316,'ux02OqahtsD9u0awGiihWPtEH_tP_-yF_1639503316'),(20,'tecnico','xMa5sKiW-cTaT2UE-0SMcFozOdCL0Oqw','$2y$13$JAqT4hpbx8499v054aB8aeq/YFbeWLkRAZ..TT3240oGf.SVl5182',NULL,'tecnico@gmai.com','cliente',9,1641311890,1641311890,NULL),(21,'cliente','OdqWDDie7eROabvHSLnwGimKCkPATPcZ','$2y$13$UmoCs3E7EkHWye/HNoovwuIa3WNGIgv7Nvp.N2J6OcEZKjvavkCUG',NULL,'cliente@gmail.com','cliente',10,1641312052,1641312052,NULL);
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

-- Dump completed on 2022-01-06  6:53:59
