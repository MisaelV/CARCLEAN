-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2018 a las 18:27:24
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carclean`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto`
--

CREATE TABLE `auto` (
  `id_auto` int(11) NOT NULL,
  `marca` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `modelo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `color` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `placas` int(20) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `auto`
--

INSERT INTO `auto` (`id_auto`, `marca`, `modelo`, `color`, `tipo`, `placas`, `id_cliente`) VALUES
(1, 'nissan', 'Frontier 2018', 'Rojo', 'Camioneta', 16512135, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `email`, `password`, `estado`, `telefono`, `fecha_alta`) VALUES
(3, 'victor misael ', 'viktor_misa1996@hotmail.com', '', '', '2383908619', '2018-06-04 05:00:00'),
(7, 'FIRULAIS', 'okpoapdkoas@sndjkan', 'hola', 'Puebla', '23845645', '2018-07-31 15:24:43'),
(8, 'Alexis Mendez Bautista', 'xs1938@hotmail.com', 'qwerty', '1', '2381501', '2018-07-31 16:07:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id_direccion` int(11) NOT NULL,
  `calleNum` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `colonia` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `cp` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lavadores`
--

CREATE TABLE `lavadores` (
  `id_lavador` int(11) NOT NULL,
  `nombreProducto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_producto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `modo_empleo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `proveedor` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombreProducto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_producto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `modo_empleo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `proveedor` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `img` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombreProducto`, `tipo_producto`, `modo_empleo`, `proveedor`, `img`) VALUES
(1, '0', '', '', 'Romancio', 'http://localhost/CARCLEAN/vista/-administracion/assets/img/354b27ca1af4886f20ec601c968129dc.jpg'),
(2, '0', 'pz,pa', 'las,dlkas', 's,kasmkdlm', 'http://localhost/CARCLEAN/assets/images/administracion/img-inventario/1dsp-20151221-backgroung007.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `cliente` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `automovil` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_lavado` text COLLATE utf8_spanish2_ci NOT NULL,
  `lavador` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `cliente`, `automovil`, `direccion`, `tipo_lavado`, `lavador`, `precio`) VALUES
(1, 'jkkjh', 'jkh', 'jkh', 'klj', 'lj', 'kj'),
(2, 'pkje l', 'alkkl', 'aopskda', 'aslkjdalk', 'aklsjd', 'laksd'),
(3, 'kd', 'alkms', 'kas', 'lkas', 'lasmd', 'kalsjd'),
(4, 'Alexis Mendez Bautista', 'jetta', '18 msaomoasoasmo', 'limpiado', 'Weska ', '20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id_auto`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direccion`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `lavadores`
--
ALTER TABLE `lavadores`
  ADD PRIMARY KEY (`id_lavador`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auto`
--
ALTER TABLE `auto`
  MODIFY `id_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `lavadores`
--
ALTER TABLE `lavadores`
  MODIFY `id_lavador` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `auto_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `direccion_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
