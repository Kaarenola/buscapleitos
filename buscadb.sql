-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-04-2015 a las 18:25:25
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `malibuproductos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_imagens`
--

CREATE TABLE IF NOT EXISTS `tabla_imagens` (
  `id_imagen` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla_imagens`
--

INSERT INTO `tabla_imagens` (`id_imagen`, `id_prod`, `imagen`) VALUES
(10, 111101, 'busca1.png'),
(12, 111102, 'busca2.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_productos`
--

CREATE TABLE IF NOT EXISTS `tabla_productos` (
  `id_prod` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla_productos`
--

INSERT INTO `tabla_productos` (`id_prod`, `imagen`) VALUES
(111101, 'busca1.png'),

(111102, 'busca2.png'),

(111103, 'busca3.png'),

(111104, 'busca4.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_imagens`
--
ALTER TABLE `tabla_imagens`
  ADD PRIMARY KEY (`id_imagen`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
