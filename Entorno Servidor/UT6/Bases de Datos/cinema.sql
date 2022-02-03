-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-07-2020 a las 18:32:14
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cinema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor`
--

DROP TABLE IF EXISTS `actor`;
CREATE TABLE IF NOT EXISTS `actor` (
  `id_actor` varchar(5) NOT NULL,
  `nacionalidad` varchar(15) DEFAULT NULL,
  `nombre_apellidos` varchar(45) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_actor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actor`
--

INSERT INTO `actor` (`id_actor`, `nacionalidad`, `nombre_apellidos`, `sexo`) VALUES
('00001', 'francés', 'Jacqueline Bisset', 'f'),
('00002', 'española', 'Antonio Banderas', 'm'),
('00003', 'española', 'Belén Rueda', 'f'),
('00004', 'estadounidense', 'Brad Pitt', 'm'),
('00005', 'estadounidense', 'Laura Dern', 'f');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cine`
--

DROP TABLE IF EXISTS `cine`;
CREATE TABLE IF NOT EXISTS `cine` (
  `id_cine` varchar(5) NOT NULL,
  `nombre_c` varchar(15) DEFAULT NULL,
  `ciudad_c` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_cine`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cine`
--

INSERT INTO `cine` (`id_cine`, `nombre_c`, `ciudad_c`) VALUES
('CINE1', 'Odeón', 'Burgos'),
('CINE2', 'Van Golem', 'Burgos'),
('CINE3', 'CineSur', 'Sevilla'),
('CINE4', 'Capitol', 'Madrid'),
('CINE5', 'Conde Duque', 'Madrid');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intervenir`
--

DROP TABLE IF EXISTS `intervenir`;
CREATE TABLE IF NOT EXISTS `intervenir` (
  `id_actor` varchar(5) NOT NULL DEFAULT '',
  `titulo` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_actor`,`titulo`),
  KEY `fk_intervenir_pelicula` (`titulo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `intervenir`
--

INSERT INTO `intervenir` (`id_actor`, `titulo`) VALUES
('00002', 'Dolor y gloria'),
('00004', 'Erase una vez...Hollywood'),
('00005', 'Historia de un matrimonio'),
('00002', 'La piel que habito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

DROP TABLE IF EXISTS `pelicula`;
CREATE TABLE IF NOT EXISTS `pelicula` (
  `titulo` varchar(50) NOT NULL,
  `genero` varchar(15) DEFAULT NULL,
  `anno_prod` smallint(5) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`titulo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`titulo`, `genero`, `anno_prod`) VALUES
('Dolor y gloria', 'drama', 2019),
('Erase una vez...Hollywood', 'comedia', 2019),
('Historia de un matrimonio', 'drama', 2019),
('La piel que habito', 'thriller', 2011);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectar`
--

DROP TABLE IF EXISTS `proyectar`;
CREATE TABLE IF NOT EXISTS `proyectar` (
  `titulo` varchar(50) NOT NULL DEFAULT '',
  `id_cine` varchar(5) NOT NULL DEFAULT '',
  `fecha_proy` date DEFAULT NULL,
  PRIMARY KEY (`titulo`,`id_cine`),
  KEY `fk_proyectar_cine` (`id_cine`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectar`
--

INSERT INTO `proyectar` (`titulo`, `id_cine`, `fecha_proy`) VALUES
('Dolor y gloria', 'CINE1', '2019-11-15'),
('Dolor y gloria', 'CINE2', '2019-11-15'),
('Dolor y gloria', 'CINE3', '2019-11-15'),
('Dolor y gloria', 'CINE4', '2019-11-15'),
('Dolor y gloria', 'CINE5', '2019-11-15'),
('Erase una vez...Hollywood', 'CINE1', '2019-11-01'),
('Erase una vez...Hollywood', 'CINE3', '2019-11-01'),
('Erase una vez...Hollywood', 'CINE4', '2019-11-01'),
('Historia de un matrimonio', 'CINE3', '2019-10-15'),
('Historia de un matrimonio', 'CINE4', '2019-10-15'),
('La piel que habito', 'CINE1', '2010-10-01'),
('La piel que habito', 'CINE2', '2010-10-01'),
('La piel que habito', 'CINE3', '2010-10-01'),
('La piel que habito', 'CINE4', '2010-10-01'),
('La piel que habito', 'CINE5', '2010-10-01');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `intervenir`
--
ALTER TABLE `intervenir`
  ADD CONSTRAINT `fk_intervenir_actor` FOREIGN KEY (`id_actor`) REFERENCES `actor` (`id_actor`),
  ADD CONSTRAINT `fk_intervenir_pelicula` FOREIGN KEY (`titulo`) REFERENCES `pelicula` (`titulo`);

--
-- Filtros para la tabla `proyectar`
--
ALTER TABLE `proyectar`
  ADD CONSTRAINT `fk_proyectar_cine` FOREIGN KEY (`id_cine`) REFERENCES `cine` (`id_cine`),
  ADD CONSTRAINT `fk_proyectar_pelicula` FOREIGN KEY (`titulo`) REFERENCES `pelicula` (`titulo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
