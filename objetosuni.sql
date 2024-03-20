-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2024 a las 03:07:15
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
(1, 2, 'Duke 390 NG V2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue lobortis tellus in egestas. Cras nec tortor eget ligula malesuada congue et id felis. Nulla faucibus a mauris vitae lobortis. Nunc tempor laoreet lacus. Suspendisse vel risus nulla. Al', 'duke200.jpg', 1, '2024-03-20 01:09:16'),
(2, 3, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue lobortis tellus in egestas. Cras nec tortor eget ligula malesuada congue et id felis. Nulla faucibus a mauris vitae lobortis. Nunc tempor laoreet lacus. Suspendisse vel risus nulla. Al', 'ninja400.jpg', 1, '2024-03-15 03:09:17'),
(3, 2, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue lobortis tellus in egestas. Cras nec tortor eget ligula malesuada congue et id felis. Nulla faucibus a mauris vitae lobortis. Nunc tempor laoreet lacus. Suspendisse vel risus nulla. Al', 'Hypermotard-950-SP.jpg', 0, '2024-03-15 03:09:17'),
(4, 3, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue lobortis tellus in egestas. Cras nec tortor eget ligula malesuada congue et id felis. Nulla faucibus a mauris vitae lobortis. Nunc tempor laoreet lacus. Suspendisse vel risus nulla. Al', 'wp3152141.jpg', 0, '2024-03-15 03:09:17'),
(5, 1, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at elit tristique, placerat nibh eu, imperdiet metus. In sed quam enim. Cras et lectus nibh. Fusce id nibh eget neque congue suscipit. Ut urna dui, euismod sit amet luctus quis, convallis at nequ', 'duke200.jpg', 1, '2024-03-17 16:34:36'),
(6, 1, 'Iphone 13 Pro Max', '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas condimentum ante non turpis efficitur, vel pretium mi viverra. Maecenas elementum consectetur arcu vehicula facilisis. Nunc placerat orci eget lorem eleifend, quis porttitor magna pharetr', 'descarga.jpg', 1, '2024-03-19 02:39:13'),
(7, 2, 'Air Pro 3 Generación Blancos', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue lobortis tellus in egestas. Cras nec tortor eget ligula malesuada congue et id felis. Nulla faucibus a mauris vitae lobortis. Nunc tempor laoreet lacus. Suspendisse vel risus nulla. Al', 'AIRPODS.jpg', 1, '2024-03-19 03:18:47');

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
(3, 'Alberto Muñoz', 'ruizmunozc2@gmail.com', 2, '123', '2024-03-06 02:52:56'),
(4, 'Carlos A Ruiz', 'carlosruiz@amigo.edu.co', 2, '1234', '2024-03-20 01:54:18'),
(5, 'Alberto Muñoz', 'albertomunoz@amigo.edu.co', 2, '1234', '2024-03-20 02:00:30'),
(6, 'Jesus David Sanchez', 'jesusdavid@amigo.edu.co', 2, '1234', '2024-03-20 02:03:34');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
