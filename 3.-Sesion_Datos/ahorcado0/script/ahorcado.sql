-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2015 a las 11:53:02
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ahorcado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugada`
--

CREATE TABLE `jugada` (
  `id_jugada` int(11) NOT NULL,
  `id_partida` int(11) NOT NULL,
  `letra` varchar(2) NOT NULL,
  `palabraDescubierta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jugada`
--

INSERT INTO `jugada` (`id_jugada`, `id_partida`, `letra`, `palabraDescubierta`) VALUES
(1, 38, 'v', 'v___'),
(1, 39, 'a', '_a_a'),
(1, 40, 'p', 'p____'),
(1, 41, 'r', '__rr_'),
(1, 42, 'd', '_______'),
(1, 43, 'a', '_a_____'),
(1, 44, 'd', '_____'),
(2, 38, 'a', 'va_a'),
(2, 39, 'v', 'va_a'),
(2, 40, 'e', 'pe___'),
(2, 41, 'e', '_err_'),
(2, 42, 'c', 'c______'),
(2, 43, 'd', '_a_____'),
(2, 44, 'd', '_____'),
(3, 38, 'c', 'vaca'),
(3, 39, 'v', 'va_a'),
(3, 40, 'r', 'perr_'),
(3, 41, 'p', 'perr_'),
(3, 42, 'a', 'ca_____'),
(3, 43, 'b', '_a_____'),
(3, 44, 'd', '_____'),
(4, 39, 'c', 'vaca'),
(4, 40, 'o', 'perro'),
(4, 41, 'o', 'perro'),
(4, 42, 'n', 'can____'),
(4, 44, 'd', '_____'),
(5, 42, 'g', 'cang___'),
(5, 44, 'd', '_____'),
(6, 42, 'u', 'cangu__'),
(6, 44, 'd', '_____'),
(7, 42, 'r', 'cangur_'),
(7, 44, 'd', '_____'),
(8, 42, 'o', 'canguro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partida`
--

CREATE TABLE `partida` (
  `id_partida` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `intentos` int(11) NOT NULL,
  `letrasUsadas` varchar(40) NOT NULL,
  `palabraDescubierta` varchar(20) NOT NULL,
  `palabraSecreta` varchar(20) NOT NULL,
  `fallos` int(11) NOT NULL,
  `finalizada` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partida`
--

INSERT INTO `partida` (`id_partida`, `id_user`, `intentos`, `letrasUsadas`, `palabraDescubierta`, `palabraSecreta`, `fallos`, `finalizada`) VALUES
(38, 6, 3, ' v a c', 'vaca', 'vaca', 0, 'yes'),
(39, 6, 4, ' a v v c', 'vaca', 'vaca', 0, 'yes'),
(40, 6, 4, ' p e r o', 'perro', 'perro', 0, 'yes'),
(41, 6, 4, ' r e p o', 'perro', 'perro', 0, 'yes'),
(42, 9, 8, ' d c a n g u r o', 'canguro', 'canguro', 1, 'yes'),
(43, 9, 0, '', '_______', 'canguro', 0, 'no'),
(44, 9, 7, ' d d d d d d d', '_____', 'perro', 7, 'yes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `admin` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `nombre`, `pass`, `admin`) VALUES
(1, 'david', '1234', 'true'),
(2, 'ahorcado', '1234', 'true'),
(3, 'ivan', 'ivan', 'false'),
(4, 'sergio', 'sergio', 'false'),
(6, 'dav', 'dav', 'false'),
(7, 'joao', 'joao', 'false'),
(8, 'javi', 'javi', 'false'),
(9, 'yo', 'yomismo', 'false');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jugada`
--
ALTER TABLE `jugada`
  ADD PRIMARY KEY (`id_jugada`,`id_partida`);

--
-- Indices de la tabla `partida`
--
ALTER TABLE `partida`
  ADD PRIMARY KEY (`id_partida`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `partida`
--
ALTER TABLE `partida`
  MODIFY `id_partida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `partida`
--
ALTER TABLE `partida`
  ADD CONSTRAINT `partida_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
