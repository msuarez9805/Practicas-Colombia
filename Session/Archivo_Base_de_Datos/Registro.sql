-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-06-2019 a las 00:27:32
-- Versión del servidor: 5.7.25-0ubuntu0.18.04.2
-- Versión de PHP: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empresa`
--

CREATE TABLE `Empresa` (
  `id` int(20) NOT NULL,
  `empresa` varchar(30) CHARACTER SET utf8 NOT NULL,
  `telefono` int(10) NOT NULL,
  `correo` varchar(30) CHARACTER SET utf8 NOT NULL,
  `clave` varchar(20) CHARACTER SET utf8 NOT NULL,
  `direccion` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Empresa`
--

INSERT INTO `Empresa` (`id`, `empresa`, `telefono`, `correo`, `clave`, `direccion`) VALUES
(1, 'NestlÃ©', 186486, 'nestle@nestle.nestle', 'nestle', 'Calle 22 # 31-24'),
(2, 'Avianca', 182375, 'avianca@avianca.avianca', 'avianca', 'Calle 34 # 54-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `id` int(20) NOT NULL,
  `nombres` varchar(50) CHARACTER SET utf8 NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `correo` varchar(40) CHARACTER SET utf8 NOT NULL,
  `clave` varchar(20) CHARACTER SET utf8 NOT NULL,
  `repetir` varchar(20) CHARACTER SET utf8 NOT NULL,
  `documento` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`id`, `nombres`, `apellidos`, `correo`, `clave`, `repetir`, `documento`) VALUES
(7, 'Andres', 'Molina', 'andres@andres.andres', 'andres', 'andres', 12345),
(8, 'Juan', 'Perez', 'juan@juan.juan', 'juan', 'juan', 3663473),
(9, 'Michelle', 'Rodriguez', 'michelle@michelle.michelle', 'michelle', 'michelle', 1644179);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Empresa`
--
ALTER TABLE `Empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Empresa`
--
ALTER TABLE `Empresa`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
