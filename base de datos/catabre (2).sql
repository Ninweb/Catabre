-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2018 a las 20:40:20
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catabre`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenedor`
--

CREATE TABLE `contenedor` (
  `id_contenedor` int(11) NOT NULL,
  `ref` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_contenedor` int(11) NOT NULL,
  `codigo_pedido` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha_salida` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha_llegada` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `nombre_1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombre_2` text NOT NULL,
  `apellido_1` text NOT NULL,
  `apellido_2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dni` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `empresa` varchar(20) NOT NULL,
  `id_usu` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombre_1`, `nombre_2`, `apellido_1`, `apellido_2`, `dni`, `empresa`, `id_usu`) VALUES
(1, 'Johan', 'A', 'Román', 'Pacheco', '', 'NINWEB', 1),
(2, 'Wilmer', '', 'Sanchez', '', '', 'NINWEB', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre_p` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `especie` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `color` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `peso` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tamano` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `master` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `presentacion` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_pedido` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `clave`, `tipo`) VALUES
(1, 'johan@johanmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 1),
(2, 'wilmer@johanmail.com', '0196f6c4f97df3f48d570c23e46501ae', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenedor`
--
ALTER TABLE `contenedor`
  ADD PRIMARY KEY (`id_contenedor`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_persona` (`id_persona`),
  ADD KEY `id_contenedor` (`id_contenedor`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenedor`
--
ALTER TABLE `contenedor`
  MODIFY `id_contenedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
