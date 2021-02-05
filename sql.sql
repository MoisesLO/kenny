-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-02-2021 a las 01:47:21
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kenny`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `numero` varchar(11) DEFAULT NULL,
  `serie` varchar(11) DEFAULT NULL,
  `fecha` varchar(20) DEFAULT NULL,
  `cliente_razon` varchar(150) DEFAULT NULL,
  `cliente_documento` varchar(100) DEFAULT NULL,
  `cliente_direccion` varchar(150) DEFAULT NULL,
  `empresa_razon` varchar(150) DEFAULT NULL,
  `empresa_documento` varchar(100) DEFAULT NULL,
  `empresa_direccion` varchar(150) DEFAULT NULL,
  `items_id` int(15) DEFAULT NULL,
  `gravadas` varchar(11) DEFAULT NULL,
  `igv` varchar(11) DEFAULT NULL,
  `total` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id`, `numero`, `serie`, `fecha`, `cliente_razon`, `cliente_documento`, `cliente_direccion`, `empresa_razon`, `empresa_documento`, `empresa_direccion`, `items_id`, `gravadas`, `igv`, `total`) VALUES
(11, '12345', 'F001', 'Sat Jan 30 2021', 'Empresa del Cliente o Nombre', '98634576238', 'Avenida Circunvalacion 234 calle 76', 'MI EMPRESA SOCIEDAD ANONIMA', '10425162531', 'Ciudad Nueva Comite 40 Lote 15 Mz 213', NULL, '82.00', '18.00', '100.00'),
(12, '12346', 'F001', 'Sun Jan 31 2021', 'Abraham Moises Linares Oscco', '1238764566', 'Cm 40 Lt 15 Mz 213 Ciudad Nueva', 'MI EMPRESA SOCIEDAD ANONIMA', '10425162531', 'Ciudad Nueva Comite 40 Lote 15 Mz 213', NULL, '385.93', '84.72', '470.65'),
(15, '12345', 'F001', 'Sun Jan 31 2021', 'Empresa del Cliente o Nombre', '98634576238', 'Avenida Circunvalacion 234 calle 76', 'MI EMPRESA SOCIEDAD ANONIMA', '10425162531', 'Ciudad Nueva Comite 40 Lote 15 Mz 213', NULL, '82.00', '18.00', '100.00'),
(16, '12347', 'F001', 'Sun Jan 31 2021', 'Empresa del Cliente o Nombre', '98634576238', 'Avenida Circunvalacion 234 calle 76', 'MI EMPRESA SOCIEDAD ANONIMA', '10425162531', 'Ciudad Nueva Comite 40 Lote 15 Mz 213', NULL, '201.72', '44.28', '246.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `razon` varchar(150) DEFAULT NULL,
  `documento` varchar(25) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `ubigeo` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombres` varchar(150) DEFAULT NULL,
  `apellidos` varchar(150) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombres`, `apellidos`, `correo`, `password`) VALUES
(11, 'a', 'a', 'elnaufrago2009@gmail.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
