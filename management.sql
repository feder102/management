-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-02-2017 a las 16:55:44
-- Versión del servidor: 5.7.17-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `management`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acount_sales`
--

CREATE TABLE `acount_sales` (
  `id` int(50) NOT NULL,
  `client_dni` int(15) NOT NULL,
  `sale_id` int(15) NOT NULL,
  `date` date NOT NULL,
  `hour` time NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `acount_sales`
--

INSERT INTO `acount_sales` (`id`, `client_dni`, `sale_id`, `date`, `hour`, `amount`) VALUES
(1, 32693346, 1, '2016-08-26', '11:31:25', 34.59),
(2, 32693346, 1, '2016-08-26', '11:31:57', 1.6),
(3, 32693346, 1, '2016-08-26', '11:33:34', 13.6),
(4, 32693346, 1, '2016-08-26', '11:33:56', 34.59),
(5, 32693346, 1, '2016-08-26', '11:35:06', 12),
(6, 32693346, 1, '2016-08-26', '11:36:34', 1.6),
(7, 32693346, 1, '2016-08-26', '11:39:20', 1.6),
(8, 32693346, 1, '2016-08-26', '11:39:46', 34.59),
(9, 32693346, 1, '2016-08-26', '11:40:03', 12),
(10, 32693346, 1, '2016-08-26', '11:40:30', 51.39),
(11, 32693346, 1, '2016-08-26', '17:53:41', 77.18),
(12, 32693346, 1, '2016-08-27', '21:03:06', 12),
(13, 32693346, 1, '2016-08-27', '21:08:33', 13.6),
(14, 32693346, 1, '2016-08-27', '22:05:21', 34.59),
(15, 32693346, 1, '2016-08-27', '22:39:13', 13.6),
(16, 32693346, 1, '2016-08-27', '13:12:47', 46.59),
(17, 31692147, 1, '2016-08-27', '13:13:23', 52.99),
(18, 31692147, 1, '2016-08-27', '18:44:23', 81.18),
(19, 32693346, 1, '2016-08-28', '19:44:33', 1.6),
(20, 32693346, 1, '2016-08-29', '18:19:02', 12),
(21, 32693346, 1, '2016-10-07', '12:48:15', 34.59),
(22, 32693346, 1, '2016-10-07', '17:48:54', 69.18),
(23, 32693346, 1, '2016-10-07', '17:51:10', 36.19),
(24, 32693346, 1, '2016-10-16', '14:06:25', 82.78),
(25, 32693346, 1, '2016-10-16', '14:18:05', 36.19),
(26, 0, 1, '2016-10-16', '14:19:49', 0),
(27, 32693346, 1, '2016-10-27', '17:42:14', 1.6),
(28, 32693346, 1, '2016-12-08', '19:25:44', 113.37),
(29, 32693346, 1, '2016-12-28', '12:15:35', 77.18),
(30, 32693346, 1, '2016-12-28', '17:09:55', 3.2),
(31, 32693346, 1, '2016-12-28', '17:20:12', 172.95);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `billings`
--

CREATE TABLE `billings` (
  `number` int(10) UNSIGNED ZEROFILL NOT NULL,
  `Date_issued` date NOT NULL,
  `amount_total` float NOT NULL,
  `sale_number` int(10) UNSIGNED NOT NULL,
  `seller_id` int(5) NOT NULL,
  `cuil` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `billings`
--

INSERT INTO `billings` (`number`, `Date_issued`, `amount_total`, `sale_number`, `seller_id`, `cuil`) VALUES
(0000000062, '2016-11-02', 40.99, 0, 1, ''),
(0000000063, '2016-11-02', 1.6, 0, 1, ''),
(0000000064, '2016-11-02', 1.6, 0, 1, ''),
(0000000066, '2016-11-02', 36.19, 5353637, 1, ''),
(0000000067, '2016-11-02', 34.59, 5353637, 1, ''),
(0000000068, '2016-11-02', 113.37, 5353637, 1, ''),
(0000000069, '2016-11-02', 1.6, 69, 1, '5353637'),
(0000000070, '2016-12-08', 174.55, 70, 1, '30-2365749-0'),
(0000000071, '2016-12-28', 69.18, 71, 1, '30-2365749-0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Almacen'),
(2, 'Fiambrería'),
(3, 'Panadería'),
(4, 'Kiosco'),
(5, 'Cigarrillos'),
(6, 'Bebidas'),
(7, 'Lacteos'),
(8, 'Limpieza'),
(9, 'Farmacia'),
(10, 'Libreria'),
(11, 'Descartables');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `dni` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`dni`, `name`, `lastname`, `address`, `phone`) VALUES
(30920287, 'ciendy', 'carrizo', '', 0),
(31692147, 'cintia', 'munoz', 'asd', 1234567890),
(32693346, 'gise', 'carrizo', 'laprida', 1234);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companies`
--

CREATE TABLE `companies` (
  `cuil` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `address` text COLLATE utf8_spanish_ci NOT NULL,
  `phone` text COLLATE utf8_spanish_ci NOT NULL,
  `logo` varchar(266) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `debts`
--

CREATE TABLE `debts` (
  `amount_total` float NOT NULL,
  `subscriber_amount` float NOT NULL,
  `should_amount` float NOT NULL,
  `client_dni` int(10) NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `debts`
--

INSERT INTO `debts` (`amount_total`, `subscriber_amount`, `should_amount`, `client_dni`, `payment_date`) VALUES
(0, 0, 0, 0, '0000-00-00'),
(0, 111.17, 0, 31692147, '2016-08-30'),
(632.57, 50, 632.57, 32693346, '2016-10-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `garments`
--

CREATE TABLE `garments` (
  `id` varchar(50) NOT NULL,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `amount_cost` float NOT NULL,
  `amount_unit` float NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_acounts`
--

CREATE TABLE `item_acounts` (
  `acount_sale_id` int(50) NOT NULL,
  `number` int(50) UNSIGNED NOT NULL,
  `garment_id` int(50) NOT NULL,
  `cant` int(50) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `item_acounts`
--

INSERT INTO `item_acounts` (`acount_sale_id`, `number`, `garment_id`, `cant`, `amount`) VALUES
(1, 1, 1, 1, 34.59),
(2, 2, 2, 1, 1.6),
(3, 3, 2, 1, 1.6),
(3, 3, 3, 1, 12),
(4, 4, 1, 1, 34.59),
(5, 5, 3, 1, 12),
(6, 6, 2, 1, 1.6),
(7, 7, 2, 1, 1.6),
(8, 8, 1, 1, 34.59),
(9, 9, 3, 1, 12),
(10, 10, 1, 1, 34.59),
(10, 10, 2, 3, 1.6),
(10, 10, 3, 1, 12),
(11, 11, 1, 2, 34.59),
(11, 11, 2, 5, 1.6),
(12, 12, 3, 1, 12),
(13, 13, 2, 1, 1.6),
(13, 13, 3, 1, 12),
(14, 14, 1, 1, 34.59),
(15, 15, 2, 1, 1.6),
(15, 15, 3, 1, 12),
(16, 16, 1, 1, 34.59),
(16, 16, 3, 1, 12),
(17, 17, 1, 1, 34.59),
(17, 17, 2, 4, 1.6),
(17, 17, 3, 1, 12),
(18, 18, 1, 2, 34.59),
(18, 18, 3, 1, 12),
(19, 19, 2, 1, 1.6),
(20, 20, 3, 1, 12),
(21, 21, 1, 1, 34.59),
(22, 22, 1, 2, 34.59),
(23, 23, 1, 1, 34.59),
(23, 23, 2, 1, 1.6),
(24, 24, 1, 2, 34.59),
(24, 24, 2, 1, 1.6),
(24, 24, 3, 1, 12),
(25, 25, 1, 1, 34.59),
(25, 25, 2, 1, 1.6),
(27, 27, 2, 1, 1.6),
(28, 28, 1, 3, 34.59),
(28, 28, 2, 6, 1.6),
(29, 29, 1, 2, 34.59),
(29, 29, 2, 5, 1.6),
(30, 30, 2, 2, 1.6),
(31, 31, 1, 5, 34.59);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_providers`
--

CREATE TABLE `item_providers` (
  `provider_id` int(11) NOT NULL,
  `cuit` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `payment_date` date NOT NULL,
  `sale_id` int(11) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `item_providers`
--

INSERT INTO `item_providers` (`provider_id`, `cuit`, `payment_date`, `sale_id`, `amount`) VALUES
(3, '123456', '2016-08-17', 1, 345.89),
(4, '654321', '2016-08-17', 1, 230),
(5, '123456', '2016-08-17', 2, 345),
(6, '123456', '2016-08-18', 1, 123),
(7, '123456', '2016-08-20', 1, 45),
(8, '654321', '2016-08-20', 1, 654),
(9, '123456', '2016-08-20', 1, 435),
(10, '654321', '2016-08-20', 1, 76),
(11, '123456', '2016-08-27', 1, 300),
(12, '654321', '2016-10-06', 1, 900);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_sales`
--

CREATE TABLE `item_sales` (
  `id_garment` varchar(50) NOT NULL,
  `id_color` int(11) NOT NULL,
  `id_size` int(11) NOT NULL,
  `cant` int(11) NOT NULL,
  `amount` float NOT NULL,
  `sale_number` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `providers`
--

CREATE TABLE `providers` (
  `cuit` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `providers`
--

INSERT INTO `providers` (`cuit`, `name`, `address`, `phone`) VALUES
('32019281', 'mango', 'funes', '1234'),
('654321', 'La colonial', 'La Medialuna', '0987');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales`
--

CREATE TABLE `sales` (
  `number` int(50) NOT NULL,
  `amoun` float NOT NULL,
  `date` date NOT NULL,
  `hour` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `sales`
--

INSERT INTO `sales` (`number`, `amoun`, `date`, `hour`) VALUES
(1, 34.59, '2016-08-20', '17:31:58'),
(2, 36.19, '2016-08-20', '17:32:23'),
(3, 34.59, '2016-08-20', '17:35:23'),
(4, 34.59, '2016-08-20', '17:35:31'),
(5, 34.59, '2016-08-20', '17:37:13'),
(6, 34.59, '2016-08-20', '17:42:27'),
(7, 34.59, '2016-08-20', '17:47:51'),
(8, 34.59, '2016-08-20', '17:49:28'),
(9, 34.59, '2016-08-20', '17:50:15'),
(10, 34.59, '2016-08-20', '17:53:11'),
(11, 34.59, '2016-08-20', '18:09:16'),
(12, 34.59, '2016-08-20', '18:12:14'),
(13, 0, '2016-08-20', '00:00:00'),
(14, 0, '2016-08-20', '00:00:00'),
(15, 34.59, '2016-08-20', '18:14:14'),
(16, 0, '2016-08-20', '00:00:00'),
(17, 34.59, '2016-08-20', '18:17:39'),
(18, 37.79, '2016-08-20', '18:18:14'),
(19, 34.59, '2016-08-21', '20:09:46'),
(20, 1.6, '2016-08-22', '21:20:40'),
(21, 1.6, '2016-08-22', '21:28:26'),
(22, 1.6, '2016-08-22', '00:01:14'),
(23, 1.6, '2016-08-22', '00:05:24'),
(24, 0, '2016-08-22', '12:25:49'),
(25, 1.6, '2016-08-22', '12:27:05'),
(26, 1.6, '2016-08-22', '12:36:42'),
(27, 1.6, '2016-08-22', '12:42:11'),
(28, 1.6, '2016-08-22', '12:50:25'),
(29, 1.6, '2016-08-22', '12:52:44'),
(30, 1.6, '2016-08-23', '23:51:08'),
(31, 25.6, '2016-08-23', '23:53:03'),
(32, 25.6, '2016-08-23', '00:00:07'),
(33, 13.6, '2016-08-23', '00:13:28'),
(34, 1.6, '2016-08-27', '21:08:17'),
(35, 12, '2016-08-28', '19:44:04'),
(36, 34.59, '2016-08-28', '19:49:31'),
(37, 36.19, '2016-08-29', '12:38:24'),
(38, 12, '2016-08-29', '12:45:39'),
(39, 103.77, '2016-08-29', '13:09:39'),
(40, 30, '2016-08-30', '00:01:06'),
(41, 5, '2016-08-30', '00:03:27'),
(42, 30, '2016-08-30', '00:10:04'),
(43, 40, '2016-08-30', '00:21:46'),
(44, 0, '2016-08-30', '00:00:00'),
(45, 20, '2016-08-30', '00:30:39'),
(46, 66.59, '2016-08-30', '00:31:57'),
(47, 204.95, '2016-08-30', '00:36:50'),
(48, 0, '2016-08-30', '00:00:00'),
(49, 0, '2016-08-30', '00:00:00'),
(50, 0, '2016-08-30', '00:00:00'),
(51, 0, '2016-08-30', '00:00:00'),
(52, 104.18, '2016-08-30', '00:42:18'),
(53, 228.36, '2016-08-30', '00:46:07'),
(54, 87.58, '2016-08-30', '00:47:54'),
(55, 37.59, '2016-09-01', '11:39:13'),
(56, 1.6, '2016-10-07', '12:49:26'),
(57, 207.54, '2016-10-07', '17:47:08'),
(58, 0, '2016-10-07', '00:00:00'),
(59, 1.6, '2016-10-07', '17:50:53'),
(60, 37.79, '2016-10-07', '17:51:27'),
(61, 70.78, '2016-10-13', '02:12:09'),
(62, 40.99, '2016-11-02', '20:18:18'),
(63, 1.6, '2016-11-02', '20:20:15'),
(64, 1.6, '2016-11-02', '20:20:51'),
(65, 34.59, '2016-11-02', '20:21:52'),
(66, 36.19, '2016-11-02', '20:23:59'),
(67, 34.59, '2016-11-02', '20:25:53'),
(68, 113.37, '2016-11-02', '20:28:50'),
(69, 1.6, '2016-11-02', '20:30:12'),
(70, 174.55, '2016-12-08', '18:06:54'),
(71, 69.18, '2016-12-28', '16:41:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sellers`
--

CREATE TABLE `sellers` (
  `id` int(50) NOT NULL,
  `cant` int(11) NOT NULL COMMENT 'cantidad vendidas'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `id` int(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `profile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`username`, `id`, `pass`, `profile`) VALUES
('Admin', 1, '202cb962ac59075b964b07152d234b70', 'admin'),
('Invitado', 2, 'caf1a3dfb505ffed0d024130f58c5cfa', 'invitado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acount_sales`
--
ALTER TABLE `acount_sales`
  ADD PRIMARY KEY (`id`,`client_dni`,`sale_id`);

--
-- Indices de la tabla `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`number`,`sale_number`),
  ADD KEY `empresa` (`cuil`) USING BTREE;

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`cuil`) USING BTREE;

--
-- Indices de la tabla `debts`
--
ALTER TABLE `debts`
  ADD PRIMARY KEY (`client_dni`);

--
-- Indices de la tabla `garments`
--
ALTER TABLE `garments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `item_acounts`
--
ALTER TABLE `item_acounts`
  ADD PRIMARY KEY (`acount_sale_id`,`number`,`garment_id`);

--
-- Indices de la tabla `item_providers`
--
ALTER TABLE `item_providers`
  ADD PRIMARY KEY (`provider_id`),
  ADD KEY `cuit` (`cuit`);

--
-- Indices de la tabla `item_sales`
--
ALTER TABLE `item_sales`
  ADD PRIMARY KEY (`id_garment`);

--
-- Indices de la tabla `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`cuit`);

--
-- Indices de la tabla `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`number`,`date`) USING BTREE;

--
-- Indices de la tabla `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sizes`
--
ALTER TABLE `sizes`
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
-- AUTO_INCREMENT de la tabla `acount_sales`
--
ALTER TABLE `acount_sales`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `item_providers`
--
ALTER TABLE `item_providers`
  MODIFY `provider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `sales`
--
ALTER TABLE `sales`
  MODIFY `number` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT de la tabla `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
