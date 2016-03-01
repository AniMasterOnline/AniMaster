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
(1, 'NeoDaark', 'f62aa154f501a57ab7ee985a34d2c17c', 'DaarkAssassin@gmail.com', '681254694'),
(2, 'smusaran', '81dc9bdb52d04dc20036dbd8313ed055', 'marc@mail.com', '111222333'),
(3, 'Jacob', '827ccb0eea8a706c4c34a16891f84e7b', 'jacob@mail.com', '333222111');

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

--
-- TABLE: `Enemigo`
--
DROP TABLE IF EXISTS `Enemigo`;
CREATE TABLE IF NOT EXISTS `Enemigo` (
  `id_enemigo` int(10) NOT NULL PRIMARY KEY,
  `id_equipo` int(10) NOT NULL UNIQUE,
  `vida`  int(10) NOT NULL,
  `ataque` int (3) NULL,
  `defensa` int (3) NULL,
  `turno` int (3) NULL,
  `poderes` varchar(200) NULL,
  FOREIGN KEY (`id_equipo`) REFERENCES `Equipo` (`id_equipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- TABLE: `Partida_Enemigo`
--
DROP TABLE IF EXISTS `Partida_Enemigo`;
CREATE TABLE IF NOT EXISTS `Partida_Enemigo` (
  `id_enemigo` int(10) NOT NULL UNIQUE,
  `id_partida` int(10) NOT NULL PRIMARY KEY,
  FOREIGN KEY (`id_enemigo`) REFERENCES `Enemigo` (`id_enemigo`),
  FOREIGN KEY (`id_partida`) REFERENCES `Partida` (`id_partida`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- TABLE: `Equipo`
--
DROP TABLE IF EXISTS `Equipo`;
CREATE TABLE IF NOT EXISTS `Equipo` (
  `id_equipo` int(10) NOT NULL PRIMARY KEY,
  `armadura1` number(2) NULL,
  `armadura2` number(2) NULL,
  `arma1` number(3) NULL,
  `arma2` number(3) NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Equipo` (`id_equipo`, `armadura1`, `armadura2`, `arma1`, `arma2`) VALUES
(1, 2, NULL, 50, NULL);
INSERT INTO `Equipo` (`id_equipo`, `armadura1`, `armadura2`, `arma1`, `arma2`) VALUES
(2, 1, NULL, 40, NULL);
INSERT INTO `Equipo` (`id_equipo`, `armadura1`, `armadura2`, `arma1`, `arma2`) VALUES
(3, 4, NULL, 45, NULL);

--
-- INSERT INTO: `Enemigo`
--
INSERT INTO `Enemigo` (`id_enemigo`, `armadura1`, `armadura2`, `arma1`, `arma2`) VALUES
(1, 2, NULL, 50, NULL);

--
-- TABLE: `Player`
--
DROP TABLE IF EXISTS `Player`;
CREATE TABLE IF NOT EXISTS `Player` (
  `id_player` int(10) NOT NULL PRIMARY KEY,
  `id_equipo` int(10) NOT NULL UNIQUE,
  `vida`  int(10) NOT NULL,
  `ataque` int (3) NULL,
  `defensa` int (3) NULL,
  `turno` int (3) NULL,
  `poderes` varchar(200) NULL,
  FOREIGN KEY (`id_equipo`) REFERENCES `Equipo` (`id_equipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- TABLE: `Partida_Player`
--
DROP TABLE IF EXISTS `Partida_Player`;
CREATE TABLE IF NOT EXISTS `Partida_Player` (
  `id_partida` int(10) NOT NULL PRIMARY KEY,
  `id_player` int(10) NOT NULL UNIQUE,
  FOREIGN KEY (`id_player`) REFERENCES `Player` (`id_player`),
  FOREIGN KEY (`id_partida`) REFERENCES `Partida` (`id_partida`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Player` (`id_player`, `id_equipo`, `vida`, `ataque`, `defensa`, `turno`, `poderes`) VALUES
(1, 2, NULL, 50, NULL);
