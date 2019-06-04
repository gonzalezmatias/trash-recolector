-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2019 a las 12:24:26
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trash_recolector`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id_reporte` int(11) NOT NULL,
  `detalle` varchar(225) NOT NULL,
  `latitud` float NOT NULL,
  `longitud` float NOT NULL,
  `imagen` varchar(256) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_usuario` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`id_reporte`, `detalle`, `latitud`, `longitud`, `imagen`, `fecha`, `id_usuario`, `status`) VALUES
(13, 'asdasd', -37.3293, -59.1438, 'images/5cf4f0e913a70.jpg', '2019-06-03 10:05:29', 4, 0),
(14, 'asdasd', -37.3293, -59.1438, 'images/5cf4f108ed923.jpg', '2019-06-03 10:06:00', 4, 0),
(15, 'asdasd', -37.3293, -59.1438, 'images/5cf4f1399fb8d.jpg', '2019-06-03 10:06:49', 4, 0),
(16, 'asdasd', -37.3293, -59.1438, 'images/5cf4f1bfca872.jpg', '2019-06-03 10:09:03', 4, 0),
(17, 'asdasd', -37.3293, -59.1438, 'images/5cf4f1e733ee5.jpg', '2019-06-03 10:09:43', 4, 1),
(18, 'Denuncia xD', -37.3293, -59.1438, 'images/5cf4f331ade31.jpg', '2019-06-03 10:15:13', 7, 0),
(19, 'asdasd', -37.3293, -59.1438, 'images/5cf4f4dae2692.jpg', '2019-06-03 10:22:18', 5, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(90) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `user`, `pass`, `admin`) VALUES
(4, 'facu', '$2y$10$unCWZViESpL7.dLzsM1Rje4UgVZL8MFJ5iTyFu/SieMUomT09jw9q', 0),
(5, 'admin', '$2y$10$rq1ixmr5QLSqEBCxqeQ08u35oR7v87RkANd/qjkcGVzTrExLqyup2', 1),
(7, 'Nuevo', '$2y$10$JXWrh4rch3sBuquZNiMcAu5LugNQeA.Id440WgSJwiVPJ6iqIpXtO', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id_reporte`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id_reporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `reportes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
