-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2022 a las 20:46:06
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_sis_biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ci` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cargo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(11) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nombres`, `apellidos`, `ci`, `celular`, `cargo`, `email`, `password`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'Freddy', 'hilari', '12345678', '75657007', 'ADMINISTRADOR', 'hilariweb@gmail.com', '$2y$10$FldujWE3P8q9A7bSr8sDJeT5.pOR.TsZUKb/1vaROG1feybAJnWL.', '2022-06-12 22:12:00', '2022-08-02 19:48:08', '2022-06-12 22:12:00', '1'),
(6, 'Yesica', 'Navarro', '2222222222222', '33333333333', 'DOCENTE', 'yesica@gmail.com', '$2y$10$OBcEy6yOPl1Mui81iO6O4.CBWNrdCXom6OHxuMbf.K/hJ2LtzPW1O', '2022-06-18 08:57:03', NULL, '2022-08-02 18:58:04', '0'),
(8, 'MARIO', 'MENDOZA', '847474774', '377363663', 'PUBLICO', 'marriobros@gmail.com', '$2y$10$z2UVXNo/lO8zWtIHUeN.OOAQqEsLN5NqRJu5usvvWMsK52/2/xD2u', '2022-06-18 09:06:58', NULL, NULL, '0'),
(9, 'MARCOS', 'JIMENEZ', '83837373', '74746646', 'ESTUDIANTE', 'marcos@gmail.com', '$2y$10$B6aQSqdSDV75DrCc45wBYOdH4u2vW0/zLH3bLA1UU4YHFuuiSZPvO', '2022-06-18 09:07:49', '2022-08-02 19:43:12', NULL, '1'),
(10, 'BENJAMIN MATIAS', 'ILARI', '12345678', '1232333333332', 'PUBLICO', 'benjamin.matias@gmail.com', '$2y$10$lw08giiCYV19tBlsfLwsD.69jwZQYQlPMxtqfBREuLGUIDrHqQJ/S', '2022-06-18 18:36:57', '2022-08-02 19:45:45', NULL, '1'),
(12, 'Henry', 'Mamani', '84774884', '73664774', 'DOCENTE', 'henry.mamani@gmail.com', '$2y$10$wnlUIG0GqgvqyaklAegDpu9PJhbjQDQhIvxmqBV1uOWLvjL2sAGUW', '2022-08-02 20:01:50', '2022-08-03 13:50:54', NULL, '1'),
(13, 'Nelcy', 'Mendoza', '7748847', '7746647', 'DOCENTE', 'nelcy@gmail.com', '$2y$10$K2zn48FswoWEQhfEUqqQPOPdixU8LruDhHUZ8WBiBIxHQFEIHiEfG', '2022-08-02 20:02:37', '2022-08-03 13:53:34', NULL, '1'),
(14, 'hgj', 'ghg', '667', '7676', 'ADMINISTRADOR', '767@gmail.com', '$2y$10$TpP0W9r0VfF737KJW1ID0e4MLSpnkbL5HKjmwcX5LgV8XY/kqVKHC', '2022-08-02 20:04:21', NULL, '2022-08-03 13:53:11', '0'),
(15, '38jhdkjhkj', 'jhkjhkjhkj', '763763763', '73672637267367', 'ADMINISTRADOR', 'jhdrhefjhjr@gmail.com', '$2y$10$mnnguZNq3NHHCKnAfXmZb.rpqVJuKJimaLVjqMObdTKaRFBJL3iGG', '2022-08-02 20:07:53', NULL, NULL, '1'),
(16, 'sfg', 'asdf', '4343434', '343434', 'ADMINISTRADOR', 'asdfasdf@gmail.com', '$2y$10$DcvJt1EC33/zv0J7OL93G.iPpLzv1P6BQ2snClLpNi4R2/6HWq25.', '2022-08-02 20:09:26', NULL, '2022-08-03 13:53:40', '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
