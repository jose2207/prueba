-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2024 a las 17:56:05
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
-- Base de datos: `bd_ofertas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(3) NOT NULL,
  `razon_social` varchar(128) NOT NULL DEFAULT '',
  `ruc` varchar(11) NOT NULL DEFAULT '',
  `correo` varchar(64) NOT NULL DEFAULT '',
  `direccion` varchar(128) NOT NULL DEFAULT '',
  `telefono` varchar(10) NOT NULL DEFAULT '',
  `descripcion` varchar(500) NOT NULL DEFAULT '',
  `rubro` varchar(64) NOT NULL DEFAULT '',
  `id_usuario` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `razon_social`, `ruc`, `correo`, `direccion`, `telefono`, `descripcion`, `rubro`, `id_usuario`) VALUES
(2, 'Clinica Americana - Juliaca', '78657278278', 'clinica.americana@gmail.com', 'plaza de armas julaica', '987451236', '', 'Salud', 0),
(4, 'Mia Market', '5874596212', 'mia.market123@gmail.com', 'Jr.Union', '987652314', '', 'Venta de cosas', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observaciones`
--

CREATE TABLE `observaciones` (
  `id` int(4) NOT NULL,
  `user` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `rol` int(1) NOT NULL DEFAULT 0,
  `observaciones` varchar(128) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `id` int(5) NOT NULL,
  `titulo` varchar(128) DEFAULT '',
  `id_empresa` int(3) DEFAULT NULL,
  `pago` float DEFAULT NULL,
  `horario` datetime DEFAULT NULL,
  `especialidad` varchar(128) DEFAULT '',
  `modalidad` varchar(256) NOT NULL DEFAULT '',
  `fecha_publicacion` datetime DEFAULT NULL,
  `fecha_cierre` datetime DEFAULT NULL,
  `maximo_postulantes` int(11) DEFAULT NULL,
  `cantidad_postulantes` int(11) DEFAULT NULL,
  `estado` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulaciones`
--

CREATE TABLE `postulaciones` (
  `id` int(3) NOT NULL,
  `id_postulante` int(3) DEFAULT NULL,
  `id_oferta` int(5) DEFAULT NULL,
  `fecha_postulacion` datetime NOT NULL,
  `estado` varchar(128) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulantes`
--

CREATE TABLE `postulantes` (
  `id` int(3) NOT NULL,
  `dni` varchar(10) NOT NULL DEFAULT '',
  `nombres` varchar(128) NOT NULL DEFAULT '',
  `apellidos` varchar(128) NOT NULL DEFAULT '',
  `edad` int(11) DEFAULT NULL,
  `correo` varchar(256) NOT NULL DEFAULT '',
  `telefono` varchar(10) DEFAULT '',
  `direccion` varchar(128) NOT NULL DEFAULT '',
  `estado_civil` varchar(64) NOT NULL DEFAULT '',
  `especialidad` varchar(256) NOT NULL DEFAULT '',
  `archivo_cv` blob NOT NULL,
  `autorizado` tinyint(1) NOT NULL DEFAULT 0,
  `id_usuario` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `postulantes`
--

INSERT INTO `postulantes` (`id`, `dni`, `nombres`, `apellidos`, `edad`, `correo`, `telefono`, `direccion`, `estado_civil`, `especialidad`, `archivo_cv`, `autorizado`, `id_usuario`) VALUES
(1, '71734782', 'Jose', 'mamani chaiña', 22, 'josemamani@gmail.com', '978451285', 'Jr. huascar 123', 'soltero', 'asd', '', 0, 0),
(2, '78451296', 'Beronica', 'castro quispe', 18, 'beronica.castro@gmail.com', '986524713', 'salida Puno', 'soltera', 'asd', '', 0, 0),
(5, '01512748', 'Juan', 'Mamani', 58, 'juan.mamani@gmail.com', '951100858', 'Jr.Pierola', '', '', '', 1, 0),
(10, '12345654', 'Maria ', 'Chavez ', 24, 'mariag@gmail.com', '950784512', 'JR. jimenez ', '', '', '', 0, 0),
(11, '74851296', 'Leonardo', 'Huaman', 20, 'LeonardoH@gmail.com', '985632147', 'JR. lima 25', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(4) NOT NULL,
  `user` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `rol` int(1) NOT NULL DEFAULT 0,
  `observaciones` varchar(128) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `password`, `rol`, `observaciones`) VALUES
(1, 'jose', '123456', 3, 'Este es un usuario de pruebas'),
(2, 'admin', 'admin', 2, 'Este es el administrador general del sistema'),
(3, 'cocacola', 'cocacola', 1, 'Empresa de pruebas'),
(6, 'Juan', '01512748', 3, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `postulantes`
--
ALTER TABLE `postulantes`
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
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `postulantes`
--
ALTER TABLE `postulantes`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
