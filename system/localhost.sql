-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-02-2016 a las 19:46:12
-- Versión del servidor: 5.5.46-0ubuntu0.14.04.2
-- Versión de PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `DB_AniMaster`
--
CREATE DATABASE IF NOT EXISTS `DB_AniMaster` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `DB_AniMaster`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuari`
--

DROP TABLE IF EXISTS `Usuari`;
CREATE TABLE IF NOT EXISTS `Usuari` (
  `id_usuari` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefon` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id_usuari`),
  UNIQUE KEY `user` (`user`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
