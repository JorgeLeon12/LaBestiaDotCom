-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-11-2013 a las 21:50:31
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `emigrantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emigrantes_mexico`
--

CREATE TABLE IF NOT EXISTS `emigrantes_mexico` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` text CHARACTER SET latin1 COLLATE latin1_spanish_ci,
  `Cuidad_O` text CHARACTER SET latin1 COLLATE latin1_spanish_ci,
  `Cuidad_D` text CHARACTER SET latin1 COLLATE latin1_spanish_ci,
  `Edad` int(11) DEFAULT NULL,
  `Referencia` text CHARACTER SET latin1 COLLATE latin1_spanish_ci,
  `Fecha` date DEFAULT NULL,
  `Ubicacion_albergue` text CHARACTER SET latin1 COLLATE latin1_spanish_ci,
  `Tiempo_viajando` text CHARACTER SET latin1 COLLATE latin1_spanish_ci,
  `Acompañantes` int(11) DEFAULT NULL COMMENT 'SOLO NUMEROS',
  `Identificador` varchar(6) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcado de datos para la tabla `emigrantes_mexico`
--

INSERT INTO `emigrantes_mexico` (`Nombre`, `Cuidad_O`, `Cuidad_D`, `Edad`, `Referencia`, `Fecha`, `Ubicacion_albergue`, `Tiempo_viajando`, `ID`, `Acompañantes`) VALUES
('Guillermo García Contreras', 'Zapopan', 'texas', 19, 'Hermano Chiquillo', '2013-11-02', 'Albergue feliz', '11 meses', 0, 2),
('Guillermo García Contreras', 'Zapopan', 'texas', 19, 'Hermano Chiquillo', '2013-11-02', 'Albergue feliz', '11 meses', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
