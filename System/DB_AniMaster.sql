--
-- Base de datos: `DB_AniMaster`
--
CREATE DATABASE IF NOT EXISTS `DB_AniMaster` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `DB_AniMaster`;

--
-- TABLE: `Partida`
--
DROP TABLE IF EXISTS `Partida`;
CREATE TABLE IF NOT EXISTS `Partida` (
  `id_partida` int(10) NOT NULL AUTO_INCREMENT,
  `titol` varchar(32) NOT NULL,
  `descripcio` varchar(250) NOT NULL,
  `any_partida` int(10) NOT NULL,
  `nivel_sobrenatural` varchar(32) DEFAULT NULL COMMENT 'Animaster v2.0',
  `joc` varchar(32) DEFAULT NULL COMMENT 'Animaster v2.0',
  PRIMARY KEY (`id_partida`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- TABLE: `Usuari`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `Usuari` (`id_usuari`, `user`, `password`, `email`, `telefon`) VALUES
(1, 'NeoDaark', '256c7f6aa9aeb56d4d08865c163635d0', 'DaarkAssassin@gmail.com', '681254694');

--
-- TABLE: `Usuari_Partida`
--
DROP TABLE IF EXISTS `Usuari_Partida`;
CREATE TABLE IF NOT EXISTS `Usuari_Partida` (
  `id_usuari` int(10) NOT NULL PRIMARY KEY,
  `id_partida` int(10) NOT NULL UNIQUE,
  `master` tinyint(1) NOT NULL,
  FOREIGN KEY (`id_usuari`) REFERENCES `Usuari` (`id_usuari`),
  FOREIGN KEY (`id_partida`) REFERENCES `Partida` (`id_partida`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



  