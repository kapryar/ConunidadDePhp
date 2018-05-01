-- phpMyAdmin SQL Dump
-- version 4.0.10.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-05-2018 a las 04:51:28
-- Versión del servidor: 5.1.73
-- Versión de PHP: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mi_base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mi_tabla`
--

DROP TABLE IF EXISTS `mi_tabla`;
CREATE TABLE IF NOT EXISTS `mi_tabla` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=13 ;

--
-- Truncar tablas antes de insertar `mi_tabla`
--

TRUNCATE TABLE `mi_tabla`;
--
-- Volcado de datos para la tabla `mi_tabla`
--

INSERT INTO `mi_tabla` (`id`, `nombre`) VALUES(1, 'Walter');
INSERT INTO `mi_tabla` (`id`, `nombre`) VALUES(2, 'Fernando');
INSERT INTO `mi_tabla` (`id`, `nombre`) VALUES(3, 'Txema ');
INSERT INTO `mi_tabla` (`id`, `nombre`) VALUES(4, 'Antuan');
INSERT INTO `mi_tabla` (`id`, `nombre`) VALUES(5, 'Carlos ');
INSERT INTO `mi_tabla` (`id`, `nombre`) VALUES(6, 'Ernesto ');
INSERT INTO `mi_tabla` (`id`, `nombre`) VALUES(7, 'Juan ');
INSERT INTO `mi_tabla` (`id`, `nombre`) VALUES(8, 'Chrismart ');
INSERT INTO `mi_tabla` (`id`, `nombre`) VALUES(9, 'Claudio');
INSERT INTO `mi_tabla` (`id`, `nombre`) VALUES(10, 'Chrismart ');
INSERT INTO `mi_tabla` (`id`, `nombre`) VALUES(11, 'Jony');
INSERT INTO `mi_tabla` (`id`, `nombre`) VALUES(12, 'Karen ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
