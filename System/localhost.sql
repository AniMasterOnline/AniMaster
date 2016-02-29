-- Base de datos: `DB_AniMaster`
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
  `password` varchar(32) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefon` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id_usuari`),
  UNIQUE KEY `user` (`user`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `Partida`;

CREATE TABLE IF NOT EXISTS `Partida` (
  `id_partida` int(10) NOT NULL AUTO_INCREMENT,
  `titol` varchar(30) NOT NULL,
  `descripcio` varchar(150) NOT NULL,
  `any_partida` real(5) NOT NULL,
  `nivell_sobrenatural` real(1) DEFAULT NULL,
  `joc` varchar(40) NOT NULL,
  PRIMARY KEY (`id_partida`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `Usuari_Partida`;
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
CREATE TABLE IF NOT EXISTS `Usuari_Partida` (
  `id_usuari` int(10) NOT NULL AUTO_INCREMENT,
  `id_partida` int(10) NOT NULL AUTO_INCREMENT,
  `master` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_usuari`),
  FOREIGN KEY (`id_partida`)

) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
DROP TABLE IF EXISTS `Enemigo`;

CREATE TABLE IF NOT EXISTS `Enemigo` (
  `id_usuari` int(10) NOT NULL AUTO_INCREMENT,
  `id_partida` int(10) NOT NULL AUTO_INCREMENT,
  `master` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_usuari`),
  FOREIGN KEY (`id_partida`)

) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
