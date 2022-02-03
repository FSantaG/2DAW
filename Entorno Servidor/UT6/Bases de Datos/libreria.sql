-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-07-2020 a las 18:34:59
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
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escritor`
--

DROP TABLE IF EXISTS `escritor`;
CREATE TABLE IF NOT EXISTS `escritor` (
  `Autor` varchar(45) NOT NULL,
  `f_nacimiento` date DEFAULT NULL,
  `l_nacimiento` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Autor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `escritor`
--

INSERT INTO `escritor` (`Autor`, `f_nacimiento`, `l_nacimiento`) VALUES
('Arturo Pérez Reverte', '1951-11-25', 'Cartagena'),
('César Pérez Gellida', '1974-12-12', 'Valladolid'),
('Dan Brown', '1964-06-22', 'EEUU'),
('Javier Sierra', '1971-08-11', 'Teruel'),
('Julia Navarro', '1953-07-29', 'Madrid'),
('Matilde Asensi', '1962-06-12', 'Alicante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

DROP TABLE IF EXISTS `libro`;
CREATE TABLE IF NOT EXISTS `libro` (
  `Isbn` varchar(17) NOT NULL,
  `Titulo` varchar(45) DEFAULT NULL,
  `Anno_publicacion` year(4) DEFAULT NULL,
  `Genero` varchar(20) DEFAULT NULL,
  `Precio` decimal(5,2) DEFAULT NULL,
  `Autor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Isbn`),
  KEY `fk_libro_escritor` (`Autor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`Isbn`, `Titulo`, `Anno_publicacion`, `Genero`, `Precio`, `Autor`) VALUES
('947-84-233-5288-3', 'Las mil y una noches', NULL, 'fición', '12.95', NULL),
('978-84-081-0041-6', 'Venganza en Sevilla', 2010, 'aventura', '19.00', 'Matilde Asensi'),
('978-84-081-2741-3', 'Inferno', 2013, 'misterio', '19.00', 'Dan Brown'),
('978-84-082-0042-7', 'Tierra firme', 2007, 'aventura', '17.95', 'Matilde Asensi'),
('978-84-1318-386-2', 'Cantar de Mio Cid', NULL, 'poesía', '10.95', NULL),
('978-84-204-3547-3', 'Sidi', 2019, 'ficción_histórica', '20.90', 'Arturo Pérez Reverte'),
('978-84-663-4811-9', 'Todo lo mejor', 2019, 'novela negra', '9.45', 'César Pérez Gellida'),
('978-84-663-5000-6', 'Hombres buenos', 2015, 'aventura', '10.95', 'Arturo Pérez Reverte'),
('978-84-663-5002-0', 'La carta esférica', 2000, 'aventura', '13.95', 'Arturo Pérez Reverte'),
('978-84-663-5003-7', 'La tabla de Flandes', 1990, 'misterio', '13.95', 'Arturo Pérez Reverte'),
('978-84-667-5171-1', 'Lazarillo de Tormes', NULL, 'picaresca', '11.50', NULL),
('978-84-912-9204-3', 'Todo lo peor', 2019, 'novela negra', '17.95', 'César Pérez Gellida'),
('978-84-968-2900-8', 'El código da Vinci', 2003, 'misterio', '13.95', 'Dan Brown');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `fk_libro_escritor` FOREIGN KEY (`Autor`) REFERENCES `escritor` (`Autor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
