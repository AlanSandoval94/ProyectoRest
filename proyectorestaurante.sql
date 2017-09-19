-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2017 a las 14:50:01
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectorestaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_categorias`
--

CREATE TABLE `item_categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `item_categorias`
--

INSERT INTO `item_categorias` (`id`, `menu_id`, `item_name`, `descripcion`, `precio`, `path`) VALUES
(1, 1, 'Alitas Lemon', 'Deliciosas alitas con limón.', 90, 'images/Platillos/alitas_lemon.jpg'),
(2, 1, 'Ceviche de camarón', 'Un buen cevichito de camarón hecho con camarones del mar caribe', 99, 'images/Platillos/ceviche_de_camaron.jpg'),
(3, 1, 'Pastel de carne', 'Elaborado con la mejor carne de la región de Kanto', 99, 'images/Platillos/pastel_de_carne.jpg'),
(4, 1, 'Spaghetti Carbonara', 'Spaghetti hecho al estilo carbonara, con pastas hechas en la región.', 99, 'images/Platillos/spaghetti_carbonara.jpg'),
(5, 2, 'Frappe de Blueberry', 'Un frappe hecho con moras azules que te dejará helado', 99, 'images/Bebidas/frappe_de_blueberry.jpg'),
(6, 2, 'Jugo de Naranja', 'Ideal para temporada de frio ya que aumenta tus defensas equisde', 99, 'images/Bebidas/jugo_de_naranja.jpg'),
(7, 2, 'Ruso Negro', 'Bebida alcohólica apta para los paladares más exigentes.', 99, 'images/Bebidas/ruso_negro.jpg'),
(8, 2, 'Té Chai', 'De origen Indico pero con un toque diferente', 99, 'images/Bebidas/te_chai.jpg'),
(9, 3, 'Pastel de chocolate', 'Garantizado que este postre te provocará una buena sensación.', 99, 'images/Postres/pastel_de_chocolate.jpg'),
(10, 3, 'Pay de Limón', 'El postre de preferencia para muchos, con un sabor agridulce.', 99, 'images/Postres/pay_de_limon.jpg'),
(11, 3, 'Tiramisú', 'Postre de origen italiano que se prepara con láminas de masa de bizcocho o bizcochuelo empapadas en café con licor y que se alternan con una crema compuesta de claras a punto de nieve mezcladas con un queso suave, azúcar y crema de leche líquida.', 99, 'images/Postres/tiramisu.jpeg'),
(12, 2, 'Pulpo', 'Pulpo licuado con alcohol y awita de coco', 99, 'images/Bebidas/pulpo.jpg'),
(26, 4, 'Entrada 1', 'Lorem ipsun dolor sit amet :v', 99, 'images/Entradas/sadfg.jpg'),
(25, 2, 'asdfg', 'asdfghjklñzxcvbnmqwertyuiop', 56, 'images/Bebidas/sadfg.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_categorias`
--

CREATE TABLE `menu_categorias` (
  `id_categoria` int(10) UNSIGNED NOT NULL,
  `nombre_categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `menu_categorias`
--

INSERT INTO `menu_categorias` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Platillos'),
(2, 'Bebidas'),
(3, 'Postres'),
(4, 'Entradas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2017_09_11_165911_itemCategoria_migration', 1),
(12, '2017_09_11_165816_menuCategoria_migration', 1),
(17, '2017_09_13_180404_create_item_categorias_table', 2),
(18, '2017_09_13_182913_create_menu_categorias_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `item_categorias`
--
ALTER TABLE `item_categorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_categorias_menu_id_foreign` (`menu_id`);

--
-- Indices de la tabla `menu_categorias`
--
ALTER TABLE `menu_categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT de la tabla `item_categorias`
--
ALTER TABLE `item_categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `menu_categorias`
--
ALTER TABLE `menu_categorias`
  MODIFY `id_categoria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
