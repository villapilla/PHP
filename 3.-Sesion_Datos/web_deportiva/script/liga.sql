-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2015 a las 19:29:03
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `liga`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo` int(11) NOT NULL,
  `nombre` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_equipo`, `nombre`) VALUES
(1, 'Toledo'),
(2, 'Cadiz'),
(3, 'Malaga'),
(4, 'Almeria'),
(5, 'Cadiz'),
(6, 'Toledo'),
(7, 'Oviedo'),
(8, 'Osasuna'),
(9, 'Joao'),
(10, 'Sergio'),
(11, 'Javi'),
(12, 'David'),
(13, 'Alvaro'),
(14, 'Alejandro'),
(15, 'Tamara'),
(16, 'Gonzalo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada`
--

CREATE TABLE `jornada` (
  `id_jornada` int(11) NOT NULL,
  `id_liga` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estado` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jornada`
--

INSERT INTO `jornada` (`id_jornada`, `id_liga`, `fecha`, `estado`) VALUES
(1, 2, '2014-11-02', 'true'),
(2, 2, '2014-11-09', 'true'),
(3, 2, '2014-11-16', 'true'),
(4, 2, '2014-11-23', 'true'),
(5, 2, '2014-11-30', 'false'),
(6, 2, '2014-12-07', 'true'),
(7, 3, '2014-11-02', 'true'),
(8, 3, '2014-11-09', 'false'),
(9, 3, '2014-11-16', 'false'),
(10, 3, '2014-11-23', 'false'),
(11, 3, '2014-11-30', 'false'),
(12, 3, '2014-12-07', 'false'),
(13, 3, '2014-12-14', 'false'),
(14, 3, '2014-12-21', 'false'),
(15, 3, '2014-12-28', 'false'),
(16, 3, '2015-01-04', 'false'),
(17, 3, '2015-01-11', 'false'),
(18, 3, '2015-01-18', 'false'),
(19, 3, '2015-01-25', 'false'),
(20, 3, '2015-02-01', 'false');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liga`
--

CREATE TABLE `liga` (
  `id_liga` int(11) NOT NULL,
  `nombre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `liga`
--

INSERT INTO `liga` (`id_liga`, `nombre`) VALUES
(1, 'DAW'),
(2, 'BBVA'),
(3, 'DAWERS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partido`
--

CREATE TABLE `partido` (
  `id_partido` int(11) NOT NULL,
  `id_jornada` int(11) NOT NULL,
  `eqLocal` int(11) NOT NULL,
  `eqVisitante` int(11) NOT NULL,
  `golesLocal` int(11) NOT NULL,
  `golesVisitante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partido`
--

INSERT INTO `partido` (`id_partido`, `id_jornada`, `eqLocal`, `eqVisitante`, `golesLocal`, `golesVisitante`) VALUES
(1, 1, 7, 5, 4, 3),
(2, 1, 6, 8, 4, 3),
(3, 2, 8, 5, 0, 4),
(4, 2, 7, 6, 1, 1),
(5, 3, 6, 5, 1, 5),
(6, 3, 8, 7, 6, 7),
(7, 4, 5, 7, 0, 1),
(8, 4, 8, 6, 3, 2),
(9, 5, 5, 8, -1, -1),
(10, 5, 6, 7, -1, -1),
(11, 6, 5, 6, 7, 8),
(12, 6, 7, 8, 9, 7),
(13, 7, 12, 11, 1, 2),
(14, 7, 16, 10, 3, 4),
(15, 7, 9, 14, 8, 9),
(16, 7, 15, 13, 1, 2),
(17, 8, 13, 11, -1, -1),
(18, 8, 14, 15, -1, -1),
(19, 8, 10, 9, -1, -1),
(20, 8, 12, 16, -1, -1),
(21, 9, 16, 11, -1, -1),
(22, 9, 9, 12, -1, -1),
(23, 9, 15, 10, -1, -1),
(24, 9, 13, 14, -1, -1),
(25, 10, 14, 11, -1, -1),
(26, 10, 10, 13, -1, -1),
(27, 10, 12, 15, -1, -1),
(28, 10, 16, 9, -1, -1),
(29, 11, 9, 11, -1, -1),
(30, 11, 15, 16, -1, -1),
(31, 11, 13, 12, -1, -1),
(32, 11, 14, 10, -1, -1),
(33, 12, 10, 11, -1, -1),
(34, 12, 12, 14, -1, -1),
(35, 12, 16, 13, -1, -1),
(36, 12, 9, 15, -1, -1),
(37, 13, 15, 11, -1, -1),
(38, 13, 13, 9, -1, -1),
(39, 13, 14, 16, -1, -1),
(40, 13, 10, 12, -1, -1),
(41, 14, 11, 12, -1, -1),
(42, 14, 10, 16, -1, -1),
(43, 14, 14, 9, -1, -1),
(44, 14, 13, 15, -1, -1),
(45, 15, 11, 13, -1, -1),
(46, 15, 15, 14, -1, -1),
(47, 15, 9, 10, -1, -1),
(48, 15, 16, 12, -1, -1),
(49, 16, 11, 16, -1, -1),
(50, 16, 12, 9, -1, -1),
(51, 16, 10, 15, -1, -1),
(52, 16, 14, 13, -1, -1),
(53, 17, 11, 14, -1, -1),
(54, 17, 13, 10, -1, -1),
(55, 17, 15, 12, -1, -1),
(56, 17, 9, 16, -1, -1),
(57, 18, 11, 9, -1, -1),
(58, 18, 16, 15, -1, -1),
(59, 18, 12, 13, -1, -1),
(60, 18, 10, 14, -1, -1),
(61, 19, 11, 10, -1, -1),
(62, 19, 14, 12, -1, -1),
(63, 19, 13, 16, -1, -1),
(64, 19, 15, 9, -1, -1),
(65, 20, 11, 15, -1, -1),
(66, 20, 9, 13, -1, -1),
(67, 20, 16, 14, -1, -1),
(68, 20, 12, 10, -1, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `id_liga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `nombre`, `password`, `id_liga`) VALUES
(1, 'dav', 'dav', 2),
(2, 'javi', 'javi', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `jornada`
--
ALTER TABLE `jornada`
  ADD PRIMARY KEY (`id_jornada`);

--
-- Indices de la tabla `liga`
--
ALTER TABLE `liga`
  ADD PRIMARY KEY (`id_liga`);

--
-- Indices de la tabla `partido`
--
ALTER TABLE `partido`
  ADD PRIMARY KEY (`id_partido`),
  ADD KEY `id_jornada` (`id_jornada`),
  ADD KEY `id_equipoLocal` (`eqLocal`),
  ADD KEY `id_equipoVisitante` (`eqVisitante`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `jornada`
--
ALTER TABLE `jornada`
  MODIFY `id_jornada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `liga`
--
ALTER TABLE `liga`
  MODIFY `id_liga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `partido`
--
ALTER TABLE `partido`
  MODIFY `id_partido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `partido`
--
ALTER TABLE `partido`
  ADD CONSTRAINT `partido_ibfk_1` FOREIGN KEY (`id_jornada`) REFERENCES `jornada` (`id_jornada`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
