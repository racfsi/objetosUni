-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2024 a las 05:20:08
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
-- Base de datos: `objetosuni`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetos`
--

CREATE TABLE `objetos` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `url_img` varchar(255) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `objetos`
--

INSERT INTO `objetos` (`id`, `id_user`, `nombre`, `info`, `url_img`, `estado`, `fecha`) VALUES
(1, 2, 'test 1', 'test info 1', 'duke390.jpg', 1, '2024-03-06 03:43:02'),
(2, 3, 'NUEVO 2', 'INFO TEST 2', 'ninja400.jpg', 1, '2024-03-06 03:46:41'),
(3, 2, 'test 3', 'NUEVO TEST 3', 'Hypermotard-950-SP.jpg', 1, '2024-03-06 03:45:49'),
(4, 3, 'NUEVO 4', 'INFO NUEVO 4', 'wp3152141.jpg', 1, '2024-03-06 03:46:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `rol` int(11) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `rol`, `clave`, `fecha`) VALUES
(1, 'admin', 'admin', 1, '1234', '2024-03-06 01:49:48'),
(2, 'Carlos Ruiz', 'ruizmunozc@gmail.com', 2, '123', '2024-03-06 02:52:48'),
(3, 'Alberto Muñoz', 'ruizmunozc2@gmail.com', 2, '123', '2024-03-06 02:52:56');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `objetos`
--
ALTER TABLE `objetos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `objetos`
--
ALTER TABLE `objetos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
