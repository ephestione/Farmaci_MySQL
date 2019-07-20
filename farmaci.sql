SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `farmaci`;
CREATE TABLE `farmaci` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ATC` tinytext NOT NULL,
  `nome` tinytext NOT NULL,
  `principio_attivo` tinytext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome` (`nome`(250)),
  KEY `principio_attivo` (`principio_attivo`(250))
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
