-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.1.65-community - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2013-04-18 21:43:57
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for sobres
CREATE DATABASE IF NOT EXISTS `sobres` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sobres`;


-- Dumping structure for table sobres.listado
CREATE TABLE IF NOT EXISTS `listado` (
  `codigo` int(10) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(50) DEFAULT '0',
  `entrada` float DEFAULT '0',
  `salida` float DEFAULT '0',
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- Dumping data for table sobres.listado: ~12 rows (approximately)
/*!40000 ALTER TABLE `listado` DISABLE KEYS */;
INSERT INTO `listado` (`codigo`, `cliente`, `entrada`, `salida`) VALUES
	(4, 'asdf', 0, 777),
	(5, 'M. Rajoy', 0, 545),
	(6, 'Cospedal', 1234, 0),
	(7, 'BÃ¡rcenas', 6000, 0),
	(8, 'M. Rajoy', 765, 0),
	(9, 'Grom', 5, 0),
	(10, 'hola mundo', 1234, 0),
	(11, 'terminator', 0, 543),
	(14, '', 545, 0),
	(15, 'hola mundo', 34, 0),
	(16, 'prueba', 0, 34),
	(17, 'asdf', 1234, 0);
/*!40000 ALTER TABLE `listado` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
