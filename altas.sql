-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2023 a las 20:32:24
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laboratorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `altas`
--

CREATE TABLE `altas` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL,
  `PRIMER APELLIDO` varchar(20) NOT NULL,
  `SEGUNDO APELLIDO` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `LOGIN` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `altas`
--

INSERT INTO `altas` (`ID`, `NOMBRE`, `PRIMER APELLIDO`, `SEGUNDO APELLIDO`, `EMAIL`, `LOGIN`, `PASSWORD`) VALUES
(1, 'Juan', 'Pérez', 'Prieto', 'juanperez@gmail.com', 'JPerez', 'contraseñaJuan'),
(2, 'Rosa', 'Navas', 'Márquez', 'rosaprieto@gmail.com', 'RNavas', 'contraseñaRosa'),
(3, 'Dina', 'Vázquez', 'Serrano', 'dinavazquez@gmail.com', 'DVázquez', 'contraseñaDina'),
(4, 'Lourdes', 'Manzano', 'Rodríguez', 'lourdesmanzano@gmail.com', 'LManzano', 'contraseñaLourdes'),
(5, 'Rocío', 'Guzmán', 'Encina', 'rocioguzman@gmail.com', 'RGuzmán', 'contraseñaRocío');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `altas`
--
ALTER TABLE `altas`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
