-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2018 a las 18:48:51
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wichitrocov`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(10) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `codigoProducto` int(10) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `Valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `descripcion`, `codigoProducto`, `producto`, `cantidad`, `Valor`) VALUES
(1, 'i1', 1, 'pc', 90, 900),
(2, 'no frost', 2, 'nevera', 1, 0),
(4, '', 4, '', 0, 0),
(7, 'ver fox ', 7, 'tv', 2, 0),
(15, 'tablet', 15, 'tablet titan', 59, 488484),
(7777, 'jjhjkbh', 7777, 'pc', 89869, 98698);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` varchar(10) NOT NULL,
  `codigoUsuario` varchar(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `codigoUsuario`, `nombre`, `apellido`, `usuario`, `pass`) VALUES
('0', '2', 'alex', 'jaramillo', 'ajaramillo', '1234'),
('1', '1', 'bryan', 'cardenas', 'bcardenas', '1234'),
('1045741417', '1045741417', 'Loren Dayana', 'Morales Oviedo', 'admin', '1234'),
('3', '3', 'loren', 'loren', 'loren', 'loren'),
('gs', 'gs', 'g', 'g', 'g', 'g'),
('h', 'h', 'h', 'h', 'h', 'h'),
('j767', 'j767', 'ghjghj', 'ghjghjh', 'jhjghj', 'hjj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idVenta` int(10) NOT NULL,
  `codigoProducto` int(11) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `totalVenta` int(100) NOT NULL,
  `producto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idVenta`, `codigoProducto`, `empresa`, `cantidad`, `totalVenta`, `producto`) VALUES
(4, 4, 'tsp', 452, 1234, 'tv'),
(5, 5, '', 5, 1000000, 'pc'),
(6, 6, 'LDSP', 5, 1000000, 'pc'),
(2, 2, 'cul', 2, 2000, 'arroz'),
(123, 12, '', 2, 111111, 'ad'),
(87, 87, 'hhh', 78, 878, 'hg'),
(5676, 7, 'fgh', 6776, 7676, 'gh'),
(788, 788, 'hhhhh', 78798, 67876968, 'hvjvhj');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD UNIQUE KEY `codigoProducto` (`codigoProducto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
