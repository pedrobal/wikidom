-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2024 a las 20:10:49
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wikidom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `email`, `phone`) VALUES
(15, 'Andres', 'Peñaloza', 'pedro.balcazar@gmail.com', '3204956645');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `value` float NOT NULL,
  `type` varchar(20) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `value`, `type`, `image`) VALUES
(1, 'Mario Bros tenis corte bajo', 'Tenis corte bajo Mario Bros rojo con azul, de alta calidad fabricados en lona y sintético 100% diseñados, su suela es antideslizante vulcanizada y cosida para mejor agarre con lengüeta impermeable.\r\n', 145000, 'Tenis', 'image/products/mariobros.jpg'),
(2, 'Flash gorra 3D', 'Gorra logo flash 3D de acrílico color negra, tipo camionera, ajustable.', 35000, 'Gorras', 'image/products/flash.jpg'),
(3, 'Beettle Juice Tenis tipo Bota', 'Tenis tipo bota de Beettle Juice de la serie(negro, blanco y morado), doble par de cordones, de alta calidad fabricados en lona y sintético 100% diseñados, su suela es antideslizante vulcanizada y cosida para mejor agarre con lengüeta impermeable.', 150000, 'Tenis', 'image/products/beetlejuice.jpg'),
(4, 'Gorra 3d y tenis Capitan America', 'Combo escudo Capitán América tenis y gorra:\r\n\r\n-Tenis: Tipo bota (azul y café), doble par de cordones, de alta calidad fabricados en lona y sintético 100% diseñados, su suela es antideslizante vulcanizada y cosida para mejor agarre con lengüeta impermeable.\r\n\r\n-Gorra: 3D en vinil Textil, azul, en tela, ajuste metálico. ', 170000, 'Combo', 'image/products/captainamerica.jpg'),
(5, 'Sheng Long Gorra 3D DBZ', 'Gorra dragón Shen Long Dragon Ball Z, efecto 3D acrílica color negra con blanco, tipo camionera, ajustable.', 35000, 'Gorras', 'image/products/dbz.jpg'),
(6, 'Donkey Kong tipo Bota', 'Tenis bota o corte alto de Donkey Kong \r\nvideojuego(café con piel), de alta calidad fabricados en lona y sintético 100% diseñados, su suela es antideslizante vulcanizada y cosida para mejor agarre con lengüeta impermeable.', 150000, 'Tenis', 'image/products/donkey.jpg'),
(7, 'Princesa Peach 3D', 'Gorra princesa Peach vinil textil, efecto 3D, rosada, tipo camionera, ajustable.', 35000, 'Gorras', 'image/products/peach.jpg'),
(8, 'Cartoon Network Tipo bota', 'Tenis tipo bota de las series clásicas de Cartoon Network multicolot, doble par de cordones, de alta calidad fabricados en lona y sintético 100% diseñados, su suela es antideslizante vulcanizada y cosida para mejor agarre con lengüeta impermeable.', 150000, 'Tenis', 'image/products/cartoon.jpg'),
(9, 'Literna Verde gorra Dc', 'Gorra logo linterna verde DC comics, efecto 3D acrílica color verde oscrura con blanco, tipo camionera, ajustable.', 35000, 'Gorras', 'image/products/greenlantern.jpg'),
(10, 'Mickey Mouse gorra 3D', 'Gorra Mickey Mouse logo 3D en acrílico color fucsia con blanco, tipo camionera, ajustable.', 35000, 'Gorras', 'image/products/mickey.jpg'),
(11, 'Yankees New York gorra 3D', 'Gorra logo equipo de beisbol Yankees New York, efecto 3D acrílica color azul oscura, de tela, ajuste metálico.', 35000, 'Gorras', 'image/products/newyork.jpg'),
(12, 'Street Fighter gorra 3D', 'Gorra logo Street Figther videojuego 3D de acrílico color gris con negra, tipo camionera, ajustable.', 35000, 'Gorras', 'image/products/street.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `password`) VALUES
(1, 'admin', 'Clave1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT de la tabla `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
