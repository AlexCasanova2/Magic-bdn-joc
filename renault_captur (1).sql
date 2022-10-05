-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-02-2020 a las 10:17:14
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `renault_captur`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config`
--

CREATE TABLE `config` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros_coche`
--

CREATE TABLE `registros_coche` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicacio_dades` text COLLATE utf8mb4_unicode_ci,
  `q1` text COLLATE utf8mb4_unicode_ci,
  `q2` text COLLATE utf8mb4_unicode_ci,
  `q3` text COLLATE utf8mb4_unicode_ci,
  `q4` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `registros_coche`
--

INSERT INTO `registros_coche` (`id`, `nombre`, `apellidos`, `email`, `dni`, `telefon`, `publicacio_dades`, `q1`, `q2`, `q3`, `q4`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'RAUL', 'SANTOS', 'raubreak@gmail.com', '908765764ee5678', '897965456789', '1', 'Spots televisius', 'Híbrid', 'Seguretat', 'Més d\'un any', NULL, '2020-02-19 08:07:57', '2020-02-19 08:07:57'),
(3, '08924', 'Santos Moreno', 'raubreak@gmail.com', '08924', '675254820', '1', 'Spots televisius', 'Dièsel', 'Motor', 'Més d\'un any', NULL, '2020-02-19 08:13:22', '2020-02-19 08:13:22'),
(4, '08911', 'S.L', 'raul@tandemprojects.cat', '08911', '659689987', '1', 'C.C Màgic Badalona', 'Híbrid', 'Motor', 'no', NULL, '2020-02-19 08:14:00', '2020-02-19 08:14:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registros_coche`
--
ALTER TABLE `registros_coche`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `config`
--
ALTER TABLE `config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registros_coche`
--
ALTER TABLE `registros_coche`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
