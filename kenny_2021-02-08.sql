# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.5.8-MariaDB)
# Database: kenny
# Generation Time: 2021-02-09 00:57:14 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table clientes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `razon` varchar(150) DEFAULT NULL,
  `documento` varchar(50) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;

INSERT INTO `clientes` (`id`, `razon`, `documento`, `direccion`, `correo`, `telefono`, `estado`)
VALUES
	(1,'moises','2345','Ct 40 Lt 15','elnaufrago','87665','1'),
	(2,'Moises',NULL,NULL,NULL,NULL,NULL),
	(3,'Moises','4567','Cm 40','elnaufrago2009@gmail.com','324324234',''),
	(4,'Moises','4567','Cm 40','elnaufrago2009@gmail.com','324324234','');

/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table documentos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `documentos`;

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(11) DEFAULT NULL,
  `serie` varchar(11) DEFAULT NULL,
  `fecha` varchar(20) DEFAULT NULL,
  `cliente_razon` varchar(150) DEFAULT NULL,
  `cliente_documento` varchar(100) DEFAULT NULL,
  `cliente_direccion` varchar(150) DEFAULT NULL,
  `empresa_razon` varchar(150) DEFAULT NULL,
  `empresa_documento` varchar(100) DEFAULT NULL,
  `empresa_direccion` varchar(150) DEFAULT NULL,
  `items_id` int(15) DEFAULT NULL,
  `gravadas` varchar(11) DEFAULT NULL,
  `igv` varchar(11) DEFAULT NULL,
  `total` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

LOCK TABLES `documentos` WRITE;
/*!40000 ALTER TABLE `documentos` DISABLE KEYS */;

INSERT INTO `documentos` (`id`, `numero`, `serie`, `fecha`, `cliente_razon`, `cliente_documento`, `cliente_direccion`, `empresa_razon`, `empresa_documento`, `empresa_direccion`, `items_id`, `gravadas`, `igv`, `total`)
VALUES
	(11,'12345','F001','Sat Jan 30 2021','Empresa del Cliente o Nombre','98634576238','Avenida Circunvalacion 234 calle 76','MI EMPRESA SOCIEDAD ANONIMA','10425162531','Ciudad Nueva Comite 40 Lote 15 Mz 213',NULL,'82.00','18.00','100.00'),
	(12,'12346','F001','Sun Jan 31 2021','Abraham Moises Linares Oscco','1238764566','Cm 40 Lt 15 Mz 213 Ciudad Nueva','MI EMPRESA SOCIEDAD ANONIMA','10425162531','Ciudad Nueva Comite 40 Lote 15 Mz 213',NULL,'385.93','84.72','470.65'),
	(15,'12345','F001','Sun Jan 31 2021','Empresa del Cliente o Nombre','98634576238','Avenida Circunvalacion 234 calle 76','MI EMPRESA SOCIEDAD ANONIMA','10425162531','Ciudad Nueva Comite 40 Lote 15 Mz 213',NULL,'82.00','18.00','100.00'),
	(16,'12347','F001','Sun Jan 31 2021','Empresa del Cliente o Nombre','98634576238','Avenida Circunvalacion 234 calle 76','MI EMPRESA SOCIEDAD ANONIMA','10425162531','Ciudad Nueva Comite 40 Lote 15 Mz 213',NULL,'201.72','44.28','246.00');

/*!40000 ALTER TABLE `documentos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table empresas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `empresas`;

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `razon` varchar(150) DEFAULT NULL,
  `documento` varchar(25) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `telefono` varchar(25) DEFAULT NULL,
  `estado` varchar(5) DEFAULT NULL,
  `ubigeo` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;

INSERT INTO `empresas` (`id`, `razon`, `documento`, `direccion`, `correo`, `telefono`, `estado`, `ubigeo`)
VALUES
	(2,'Esther Linares','237675239872','Ct 40 Lt 15 Mz 213 Ciudad Nueva','elnaufrago2009@gmail.com','95264876','2',NULL),
	(3,'Esther Linares','237675239872','Ct 40 Lt 15 Mz 213 Ciudad Nueva','elnaufrago2009@gmail.com','95264876','2',NULL),
	(4,'Esther Linares','237675239872','Ct 40 Lt 15 Mz 213 Ciudad Nueva','elnaufrago2009@gmail.com','95264876','2',NULL);

/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(150) DEFAULT NULL,
  `apellidos` varchar(150) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `nombres`, `apellidos`, `correo`, `password`)
VALUES
	(11,'a','a','elnaufrago2009@gmail.com','1234');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
