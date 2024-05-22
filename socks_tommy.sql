-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2023 a las 21:44:42
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `socks_tommy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `cod_categoria` int(20) NOT NULL,
  `cantidad_categoria` varchar(100) NOT NULL,
  `precio_categoria` int(60) NOT NULL,
  `nom_categoria` varchar(50) NOT NULL,
  `año_categoria` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`cod_categoria`, `cantidad_categoria`, `precio_categoria`, `nom_categoria`, `año_categoria`) VALUES
(3, '7', 20000, 'jklhuhuloo', '2023-08-10'),
(4, '32', 2000, 'cajas', '2023-10-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(15) NOT NULL,
  `nom_cliente` varchar(20) NOT NULL,
  `contra_cliente` varchar(20) NOT NULL,
  `tel_cliente` bigint(13) NOT NULL,
  `dir_cliente` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nom_cliente`, `contra_cliente`, `tel_cliente`, `dir_cliente`) VALUES
(8, 'gods Love Love', '23423dwwwa', 3123213123, 'Calarca/Quindio'),
(9, 'Liliana Maria', 'lilianamaria123', 3209182932, 'venida 25 cristo rey'),
(10, 'franco', 'franco123', 3201829112, 'mz F2 barrio la maria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_producto`
--

CREATE TABLE `cliente_producto` (
  `id_cliente` int(15) DEFAULT NULL,
  `cod_prod` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `cod_prod` int(15) NOT NULL,
  `nom_prod` varchar(20) NOT NULL,
  `prec_prod` bigint(30) NOT NULL,
  `desc_prod` varchar(300) NOT NULL,
  `descuento_prod` bigint(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod_prod`, `nom_prod`, `prec_prod`, `desc_prod`, `descuento_prod`) VALUES
(4, 'Soock tommy', 30000, 'la mejor que tenemos en nuestra tienda', 2),
(9, 'medias soocks tommy', 25000, '', 1),
(10, 'Medias Deportivas', 16000, 'par de medias comodas para hacer tus deportes', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_proveedor`
--

CREATE TABLE `producto_proveedor` (
  `id_prov` int(15) NOT NULL,
  `cod_Prod` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provedor`
--

CREATE TABLE `provedor` (
  `id_prov` int(15) NOT NULL,
  `nom_prov` varchar(20) NOT NULL,
  `dir_prov` varchar(30) NOT NULL,
  `tel_prov` bigint(15) NOT NULL,
  `sumi_prov` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_prov` int(15) NOT NULL,
  `nom_prov` varchar(20) NOT NULL,
  `dir_prov` varchar(30) NOT NULL,
  `tel_prov` bigint(15) NOT NULL,
  `sumi_prov` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_prov`, `nom_prov`, `dir_prov`, `tel_prov`, `sumi_prov`) VALUES
(1, 'yorsh', 'manizales ', 329287635, '34'),
(2, 'los capos', 'pereira/antioquia', 3129019283, '15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_usuario` int(100) NOT NULL,
  `name_usuario` varchar(20) NOT NULL,
  `email_usuario` varchar(50) NOT NULL,
  `password_usuario` varchar(50) NOT NULL,
  `tel_usuario` bigint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_usuario`, `name_usuario`, `email_usuario`, `password_usuario`, `tel_usuario`) VALUES
(34, 'sebastian', 'sebaspro7767@aternos.co', 'lolito1234', 3209819284),
(37, 'mayas', 'samuray7767@gmaill.com', 'mayas123', 3201782936),
(38, 'santiago', 'santiago123@aternos.co', 'santiago123', 3230989190),
(39, 'samuel', 'samuel123@gmail.com', 'samuel123', 3012345321),
(40, 'diana', 'diana123@gmail.com', 'diana123', 3201239872);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `cliente_producto`
--
ALTER TABLE `cliente_producto`
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `cod_prod` (`cod_prod`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`cod_prod`);

--
-- Indices de la tabla `producto_proveedor`
--
ALTER TABLE `producto_proveedor`
  ADD KEY `id_prov` (`id_prov`),
  ADD KEY `cod_Prod` (`cod_Prod`);

--
-- Indices de la tabla `provedor`
--
ALTER TABLE `provedor`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `name` (`name_usuario`),
  ADD KEY `email` (`email_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cod_categoria` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `cod_prod` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `provedor`
--
ALTER TABLE `provedor`
  MODIFY `id_prov` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_prov` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente_producto`
--
ALTER TABLE `cliente_producto`
  ADD CONSTRAINT `cliente_producto_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `cliente_producto_ibfk_2` FOREIGN KEY (`cod_prod`) REFERENCES `producto` (`cod_prod`);

--
-- Filtros para la tabla `producto_proveedor`
--
ALTER TABLE `producto_proveedor`
  ADD CONSTRAINT `producto_proveedor_ibfk_1` FOREIGN KEY (`id_prov`) REFERENCES `proveedor` (`id_prov`),
  ADD CONSTRAINT `producto_proveedor_ibfk_2` FOREIGN KEY (`cod_Prod`) REFERENCES `producto` (`cod_prod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
