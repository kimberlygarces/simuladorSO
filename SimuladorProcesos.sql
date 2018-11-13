-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-11-2018 a las 20:11:20
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `SimuladorProcesos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Proceso`
--

CREATE TABLE `Proceso` (
  `Pid` int(1) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Prioridad` varchar(1) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `caracteres` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Proceso`
--

INSERT INTO `Proceso` (`Pid`, `Nombre`, `Prioridad`, `caracteres`) VALUES
(29, 'A', '2', 'KAJFLKAJSFLKSSSKSJKDSSS'),
(30, 'B', '0', 'SKFJKASKJDFSHFUSDFYIS'),
(31, 'C', '0', 'ASDFASDFSAF'),
(32, 'D', '1', 'ssssssasdfasssaffsssd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Proceso`
--
ALTER TABLE `Proceso`
  ADD PRIMARY KEY (`Pid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Proceso`
--
ALTER TABLE `Proceso`
  MODIFY `Pid` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
