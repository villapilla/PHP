-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2015 a las 23:44:07
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuadros`
--

CREATE TABLE `cuadros` (
  `id_cuadro` int(11) NOT NULL,
  `titulo` varchar(25) NOT NULL,
  `id_pintor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuadros`
--

INSERT INTO `cuadros` (`id_cuadro`, `titulo`, `id_pintor`) VALUES
(1, 'gigante', 1),
(2, 'marcha', 1),
(3, 'mariposas', 1),
(4, 'tiempo', 1),
(5, 'tigres', 1),
(6, 'gigante', 1),
(7, 'marcha', 1),
(8, 'mariposas', 1),
(9, 'tiempo', 1),
(10, 'tigres', 1),
(11, 'autorretrato', 2),
(12, 'cuadro_de_silla', 2),
(13, 'girasoles', 2),
(14, 'habitacion_en_arles', 2),
(15, 'noche_estrellada', 2),
(16, 'autorretrato', 2),
(17, 'cuadro_de_silla', 2),
(18, 'girasoles', 2),
(19, 'habitacion_en_arles', 2),
(20, 'noche_estrellada', 2),
(21, 'admin', 3),
(22, 'carcel', 3),
(23, 'culo', 3),
(24, 'girasoles_1', 3),
(25, 'guernica', 3),
(26, 'admin', 3),
(27, 'carcel', 3),
(28, 'culo', 3),
(29, 'girasoles', 3),
(30, 'guernica', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pintor`
--

CREATE TABLE `pintor` (
  `id_pintor` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pintor`
--

INSERT INTO `pintor` (`id_pintor`, `nombre`) VALUES
(1, 'Dali'),
(2, 'Gogh'),
(3, 'picasso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_pintor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `nombre`, `pass`, `email`, `id_pintor`) VALUES
(3, 'sergio', 'sergio', 'sergfisdogasdugiasduo', 2),
(5, 'dav', 'dav', 'dav@hola.com', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuadros`
--
ALTER TABLE `cuadros`
  ADD PRIMARY KEY (`id_cuadro`),
  ADD KEY `id_pintor` (`id_pintor`),
  ADD KEY `id_pintor_2` (`id_pintor`);

--
-- Indices de la tabla `pintor`
--
ALTER TABLE `pintor`
  ADD PRIMARY KEY (`id_pintor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `id_pintor` (`id_pintor`),
  ADD KEY `id_pintor_2` (`id_pintor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuadros`
--
ALTER TABLE `cuadros`
  MODIFY `id_cuadro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `pintor`
--
ALTER TABLE `pintor`
  MODIFY `id_pintor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_pintor`) REFERENCES `pintor` (`id_pintor`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
