-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2022 a las 13:38:19
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_sintesi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `correo_admin` varchar(50) NOT NULL,
  `contraseña_admin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `correo_admin`, `contraseña_admin`) VALUES
(1, 'admin@gmail.com', '2b12e1a2252d642c09f640b63ed35dcc5690464a'),
(2, 'admin2@gmail.com', '2b12e1a2252d642c09f640b63ed35dcc5690464a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_alumnos`
--

CREATE TABLE `tbl_alumnos` (
  `id` int(11) NOT NULL,
  `nombre_alu` varchar(20) NOT NULL,
  `primer_apellido_alu` varchar(20) NOT NULL,
  `segundo_apellido_alu` varchar(20) NOT NULL,
  `correo_alu` varchar(30) NOT NULL,
  `contraseña_alu` varchar(200) NOT NULL,
  `dni_alu` char(9) NOT NULL,
  `telefono_alu` int(9) NOT NULL,
  `img_alu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_alumnos`
--

INSERT INTO `tbl_alumnos` (`id`, `nombre_alu`, `primer_apellido_alu`, `segundo_apellido_alu`, `correo_alu`, `contraseña_alu`, `dni_alu`, `telefono_alu`, `img_alu`) VALUES
(1, 'Víctor', 'Malaret', 'Malaret', 'victor@gmail.com', '9c8361f5b5cb0aa2d73d569df16c76281c1a3f93', '36786543E', 653789886, '07-23-55-30-10-22-Foto_usuario.png'),
(17, 'Ricardo', 'Durán', 'Gallego', 'riki@gmail.com', 'ef3ea4929ca50e11aea68f290ddeffe1ad6ea6de', '49813243G', 64415150, '07-25-46-30-10-22-Foto_usuario.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_notas`
--

CREATE TABLE `tbl_notas` (
  `id` int(11) NOT NULL,
  `nombre_modulo` varchar(50) NOT NULL,
  `nombre_uf` varchar(5) NOT NULL,
  `nombre_nota` varchar(30) NOT NULL,
  `nota` varchar(5) NOT NULL,
  `id_alumnos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_profesores`
--

CREATE TABLE `tbl_profesores` (
  `id` int(11) NOT NULL,
  `nombre_profe` varchar(20) NOT NULL,
  `primer_apellido_profe` varchar(20) NOT NULL,
  `segundo_apellido_profe` varchar(20) NOT NULL,
  `correo_profe` varchar(50) NOT NULL,
  `contraseña_profe` varchar(200) NOT NULL,
  `dni_profe` char(9) NOT NULL,
  `telefono_profe` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_profesores`
--

INSERT INTO `tbl_profesores` (`id`, `nombre_profe`, `primer_apellido_profe`, `segundo_apellido_profe`, `correo_profe`, `contraseña_profe`, `dni_profe`, `telefono_profe`) VALUES
(1, 'Ricardo', 'Durán', 'Gallego', 'ricardo@gmail.com', 'de5fb129ccea4c05e91c74318b1c3e4f2f207288', '49813243G', '644151350');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_alumnos`
--
ALTER TABLE `tbl_alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_notas`
--
ALTER TABLE `tbl_notas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alumnos` (`id_alumnos`);

--
-- Indices de la tabla `tbl_profesores`
--
ALTER TABLE `tbl_profesores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_alumnos`
--
ALTER TABLE `tbl_alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tbl_notas`
--
ALTER TABLE `tbl_notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_profesores`
--
ALTER TABLE `tbl_profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_notas`
--
ALTER TABLE `tbl_notas`
  ADD CONSTRAINT `tbl_notas_ibfk_1` FOREIGN KEY (`id_alumnos`) REFERENCES `tbl_alumnos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
