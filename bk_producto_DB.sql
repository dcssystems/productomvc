-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-05-2015 a las 20:50:00
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `producto`
--
CREATE DATABASE `producto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `producto`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `idproducto` int(11) NOT NULL AUTO_INCREMENT,
  `idtipo` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `precio` float NOT NULL,
  PRIMARY KEY (`idproducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `idtipo`, `nombre`, `precio`) VALUES
(1, 1, 'REGFRIGERADORA COLDEX V1254', 1522.25),
(2, 2, 'IPAD AIR 2', 2500),
(3, 3, 'PHP AVANZADO', 125.42),
(24, 3, 'ORACLE BASICO 15G', 256.99),
(30, 2, 'LAPTOP LENOVO T530 5526', 4999.99),
(31, 1, 'COCINA BOSH 56K', 524.99),
(32, 2, 'MOUSE INALAMBRICO X3', 59.99),
(33, 2, 'PHP AVANZADO', 125.42),
(34, 1, 'ORACLE BASICO 15G', 256.99),
(35, 3, 'E CODIGO DE DAVINCI', 55);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `idtipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  PRIMARY KEY (`idtipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`idtipo`, `nombre`) VALUES
(1, 'ELECTROHOGAR'),
(2, 'COMPUTO'),
(3, 'LIBRO');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
