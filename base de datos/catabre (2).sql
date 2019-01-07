-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2019 a las 21:34:12
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

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
  `nombre_conte` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contenedor`
--

INSERT INTO `contenedor` (`id_contenedor`, `ref`, `nombre_conte`, `status`) VALUES
(2, '234', 'weras', 'ocupado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_contenedor` int(11) NOT NULL,
  `codigo_pedido` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `naviera` text NOT NULL,
  `origen` text NOT NULL,
  `destino` text NOT NULL,
  `fecha_salida` date NOT NULL,
  `fecha_llegada` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `id_persona`, `id_contenedor`, `codigo_pedido`, `naviera`, `origen`, `destino`, `fecha_salida`, `fecha_llegada`) VALUES
(1, 2, 1, '00000', 'sdf', 'Venezuelas', 'sdf', '2018-12-29', '2018-12-31'),
(2, 2, 2, '00001', 'sdf', 'Venezuelas', 'sdf', '2019-02-01', '2019-01-16'),
(3, 2, 2, '00002', 'ccvb', 'Venezuelas', 'cbv', '2019-01-08', '2019-02-13'),
(4, 2, 2, '00003', 'qwerty', 'Venezuelas', 'qwerty', '2019-01-16', '2019-02-21'),
(5, 2, 2, '00004', 'sdf', 'Venezuela', 'sdf', '2019-01-17', '2019-02-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apellido` text NOT NULL,
  `empresa` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `id_usuario`, `nombre`, `apellido`, `empresa`) VALUES
(1, 1, 'PEDRO', 'PEREZ', 'SISTEMCOMPUTER'),
(2, 2, 'MARIA', 'GUTIERREZ', 'NINWEB'),
(3, 3, 'oiu', 'oiuetert', 'oiu78'),
(4, 4, 'bnmnb', 'mnb', 'mnb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `presentacion` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `producto` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `especie` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `color` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `peso` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tamano` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `master` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `id_pedido`, `presentacion`, `producto`, `especie`, `color`, `peso`, `tamano`, `master`, `total`) VALUES
(1, 2, 'sdf', 'sdf', '', 'sdf', 'sdf', 'sdf', 'sdf', 0),
(2, 3, 'dfg', 'dfg', 'dfg', 'fdg', 'dfg', 'dfg', 'dfg', 0),
(3, 4, 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 'qwerty', 0),
(4, 5, 'sdf', 'ssdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `clave` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `clave`, `tipo`) VALUES
(1, 'o@o.com', 'd41d8cd98f00b204e9800998ecf8427e', 'admin'),
(2, 'cliente@ninweb.net', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(3, 'o@o.com', '123', 'user'),
(4, 'm@m.com', '1234', 'user');

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
  ADD KEY `id_contenedor` (`id_contenedor`),
  ADD KEY `id_persona_2` (`id_persona`),
  ADD KEY `id_contenedor_2` (`id_contenedor`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_pedido` (`id_pedido`);

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
  MODIFY `id_contenedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
