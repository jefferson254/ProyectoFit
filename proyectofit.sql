-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2020 a las 01:01:20
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectofit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(4) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `telefono` text NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `edad` text NOT NULL,
  `correo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellidos`, `telefono`, `sexo`, `edad`, `correo`) VALUES
(1, 'Nicole', 'Molina Ruiz', '0994721389', 'femenino', '20', 'slendymolina@gmail.com'),
(5, 'Andres', 'Andino', '0994721389', 'femenino', '10', 'slendymolinaa@gmail.com'),
(6, 'Nicole', 'Molina Ruiz', '0994721389', 'femenino', '34', 'slendymolina@gmail.com'),
(7, 'Nicole', 'Molina Ruiz', '0994721389', 'femenino', '34', 'slendymolina@gmail.com'),
(8, 'Nicole', 'Molina Ruiz', '0994721389', 'femenino', '20', 'slendymolina@gmail.com'),
(9, 'Nicole', 'Molina Ruiz', '0994721389', 'femenino', '20', 'slendymolina@gmail.com'),
(10, 'Nicole', 'Molina Ruiz', '0994721389', 'femenino', '20', 'slendymolina@gmail.com'),
(11, 'Nicole', 'Molina Ruiz', '0994721389', 'femenino', '20', 'slendymolina@gmail.com'),
(12, 'Nicole', 'Molina Ruiz', '0994721389', 'femenino', '20', 'slendymolina@gmail.com'),
(13, 'Nicole', 'MOLINA RUIZ', '0994721389', 'femenino', '10', 'slendymolina@gmail.com'),
(14, 'CARDIO', 'Molina Ruiz', '0994721389', 'femenino', '20', 'slendymolina@gmail.com'),
(15, 'Nicole', 'Molina Ruiz', '0994721389', 'femenino', '20', 'slendymolina@gmail.com'),
(16, 'Nicole', 'Molina Ruiz', '0994721389', 'femenino', '20', 'slendymolina@gmail.com'),
(17, 'Nicole', 'Molina Ruiz', '0994721389', 'femenino', '20', 'slendymolina@gmail.com'),
(18, 'Nicole', 'Molina Ruiz', '0994721389', 'femenino', '20', 'slendymolina@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE `planes` (
  `id` int(10) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  `valor` int(10) NOT NULL,
  `tiempo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`id`, `nombre`, `descripcion`, `valor`, `tiempo`) VALUES
(0, 'CARDIO', 'rzgsr', 19, '1  hora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `cantidad` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(20) NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellido` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Usuario` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Contrasena` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `login_end` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `alta` datetime(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `Nombre`, `Apellido`, `Usuario`, `Contrasena`, `estado`, `login_end`, `alta`) VALUES
(1, 'Nicole', 'Molina', 'admin', '123', 0, '2020-10-27 00:00:53.055797', '0000-00-00 00:00:00.00000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
