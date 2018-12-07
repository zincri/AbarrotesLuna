SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `abarrotes_luna` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `abarrotes_luna`;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(29, '2014_10_12_000000_create_users_table', 1),
(30, '2014_10_12_100000_create_password_resets_table', 1),
(31, '2018_11_26_015925_create_productos_table', 1),
(32, '2018_11_27_032935_create_tipo_productos_table', 1),
(33, '2018_11_27_033036_create_proveedors_table', 1),
(34, '2018_11_27_034043_create_ventas_table', 1),
(35, '2018_11_27_034128_create_producto_por_ventas_table', 1);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `activo` int(11) NOT NULL,
  `costo` decimal(8,2) NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `existencia` int(11) NOT NULL,
  `fecha_caducidad` date NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `proveedor` int(11) NOT NULL,
  `tipo_producto` int(11) NOT NULL,
  `usuario_ins` int(11) NOT NULL,
  `usuario_upd` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `productos` (`activo`, `costo`, `descripcion`, `existencia`, `fecha_caducidad`, `id`, `imagen`, `nombre`, `precio`, `proveedor`, `tipo_producto`, `usuario_ins`, `usuario_upd`, `created_at`, `updated_at`) VALUES
(1, '12.12', 'Descripción producto 1', 44, '2018-12-07', 1, 'http://127.0.0.1:8000/imageupload/productos/principales/3iAXuaaSWFWq2EXQwBtMVpB7qguaNeOtp307mr5S.jpeg', 'Producto 1', '12.77', 1, 1, 1, 1, '2018-12-07 16:12:23', '2018-12-07 16:12:23'),
(1, '12.12', 'Descripción producto 1', 44, '2018-12-07', 2, 'http://127.0.0.1:8000/imageupload/productos/principales/nqOtfvYmKQmgq5lEG3RW9IRjOQlkW27iXd19CHXp.jpeg', 'Producto 1', '12.77', 1, 1, 1, 1, '2018-12-07 16:12:48', '2018-12-07 16:12:48'),
(1, '334.30', 'Descripción del producto 3', 55, '2018-12-07', 3, 'http://127.0.0.1:8000/imageupload/productos/principales/534nMTQoSfC99CpLL2xKNuQyqLn9v5mGf6L6S9oS.jpeg', 'Producto 3', '666.50', 1, 1, 1, 1, '2018-12-07 16:21:53', '2018-12-07 16:21:53'),
(1, '44.44', 'Descripción producto 4', 77, '2018-12-07', 4, 'http://127.0.0.1:8000/imageupload/productos/principales/LE6tdc2i4X4HoBWegCwChByqcjYNsyEMgBbwV9Fa.jpeg', 'Producto 4', '66.66', 1, 1, 1, 1, '2018-12-07 16:35:03', '2018-12-07 16:35:03');

DROP TABLE IF EXISTS `producto_por_ventas`;
CREATE TABLE `producto_por_ventas` (
  `activo` int(11) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `producto` int(11) NOT NULL,
  `venta` int(11) NOT NULL,
  `usuario_ins` int(11) NOT NULL,
  `usuario_upd` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `proveedors`;
CREATE TABLE `proveedors` (
  `activo` int(11) NOT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_ins` int(11) NOT NULL,
  `usuario_upd` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `proveedors` (`activo`, `direccion`, `id`, `nombre`, `telefono`, `usuario_ins`, `usuario_upd`, `created_at`, `updated_at`) VALUES
(1, 'Av. costa rica m.1 l.39', 1, 'Proveedor', '9611509663', 1, 1, '2018-12-05 10:28:58', '2018-12-05 10:28:58');

DROP TABLE IF EXISTS `tipo_productos`;
CREATE TABLE `tipo_productos` (
  `activo` int(11) NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_ins` int(11) NOT NULL,
  `usuario_upd` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tipo_productos` (`activo`, `descripcion`, `id`, `nombre`, `usuario_ins`, `usuario_upd`, `created_at`, `updated_at`) VALUES
(1, 'Descripción tipo 1', 1, 'Tipo 1-2', 1, 1, '2018-12-05 08:42:50', '2018-12-05 08:43:19');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `activo` int(11) NOT NULL,
  `apellido_paterno` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido_materno` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datos_control` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`activo`, `apellido_paterno`, `apellido_materno`, `datos_control`, `email`, `id`, `nombre`, `password`, `telefono`, `usuario`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 'zincri@gmail.com', 1, 'zincri', '$2y$10$H/vqudNzD3l6bZEdMYspteFBnvjfnfUoWX6FWq4fXM/dZ2eNl9t5W', NULL, 'zincribla', NULL, '2018-12-05 08:12:46', '2018-12-05 08:12:46');

DROP TABLE IF EXISTS `ventas`;
CREATE TABLE `ventas` (
  `activo` int(11) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `usuario_ins` int(11) NOT NULL,
  `usuario_upd` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_tipo_producto_foreign` (`tipo_producto`),
  ADD KEY `productos_proveedor_foreign` (`proveedor`),
  ADD KEY `productos_usuario_ins_foreign` (`usuario_ins`),
  ADD KEY `productos_usuario_upd_foreign` (`usuario_upd`);

ALTER TABLE `producto_por_ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_por_ventas_producto_foreign` (`producto`),
  ADD KEY `producto_por_ventas_venta_foreign` (`venta`),
  ADD KEY `producto_por_ventas_usuario_ins_foreign` (`usuario_ins`),
  ADD KEY `producto_por_ventas_usuario_upd_foreign` (`usuario_upd`);

ALTER TABLE `proveedors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proveedors_usuario_ins_foreign` (`usuario_ins`),
  ADD KEY `proveedors_usuario_upd_foreign` (`usuario_upd`);

ALTER TABLE `tipo_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo_productos_usuario_ins_foreign` (`usuario_ins`),
  ADD KEY `tipo_productos_usuario_upd_foreign` (`usuario_upd`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ventas_usuario_ins_foreign` (`usuario_ins`),
  ADD KEY `ventas_usuario_upd_foreign` (`usuario_upd`);


ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `producto_por_ventas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `proveedors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `tipo_productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `ventas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
