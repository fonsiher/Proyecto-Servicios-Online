-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2021 a las 22:02:49
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecontrato`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `ID_PERSONA` int(5) NOT NULL,
  `CALIFICACION` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `calificacion`
--

INSERT INTO `calificacion` (`ID_PERSONA`, `CALIFICACION`) VALUES
(1, 4),
(1, 5),
(10, 4),
(14, 3),
(10, 3),
(14, 5),
(4, 5),
(11, 4),
(2, 4),
(17, 4),
(13, 4),
(15, 5),
(12, 3),
(16, 4),
(20, 3),
(21, 5),
(19, 4),
(18, 4),
(23, 3),
(22, 5),
(24, 3),
(1, 5),
(21, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formacion`
--

CREATE TABLE `formacion` (
  `ID_FORMACION` int(5) NOT NULL,
  `DESCRIPCION` varchar(150) NOT NULL,
  `FOTO1` varchar(100) NOT NULL,
  `FOTO2` varchar(100) NOT NULL,
  `ID_PERSONA` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `ID_LUGAR` int(5) NOT NULL,
  `nombre_lugar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lugar`
--

INSERT INTO `lugar` (`ID_LUGAR`, `nombre_lugar`) VALUES
(1, 'Quito'),
(2, 'Guayaquil'),
(3, 'Cuenca'),
(4, 'Ambato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `ID_SERVICIOS` int(5) NOT NULL,
  `NOMBRE_SERVICIO` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`ID_SERVICIOS`, `NOMBRE_SERVICIO`) VALUES
(1, 'Albañilería'),
(2, 'Carpintería'),
(3, 'Plomería'),
(4, 'Transportación'),
(5, 'Cuidado de Niños'),
(6, 'Soporte Técnico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `ID_TIPO` int(2) NOT NULL,
  `TIPO_USUARIO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`ID_TIPO`, `TIPO_USUARIO`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajos`
--

CREATE TABLE `trabajos` (
  `ID_TRABAJO` int(11) NOT NULL,
  `NOMBRE_TRABAJO` varchar(50) NOT NULL,
  `DESCRIPCION` varchar(300) NOT NULL,
  `FOTO1` varchar(100) NOT NULL,
  `FOTO2` varchar(100) NOT NULL,
  `FOTO3` varchar(100) NOT NULL,
  `ID_PERSONA` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_PERSONA` int(5) NOT NULL,
  `ID_TIPO` int(2) NOT NULL,
  `ID_SERVICIOS` int(5) NOT NULL,
  `ID_LUGAR` int(5) NOT NULL,
  `NOMBRE` varchar(40) NOT NULL,
  `EDAD` int(2) NOT NULL,
  `CORREO` varchar(30) NOT NULL,
  `PSWD` varchar(20) NOT NULL,
  `DESCRIPCION` text DEFAULT NULL,
  `TELEFONO` int(10) DEFAULT NULL,
  `CELULAR` bigint(15) DEFAULT NULL,
  `AN_EXPERIENCIA` int(2) DEFAULT NULL,
  `FOTO` text DEFAULT NULL,
  `FACEBOOK` varchar(60) DEFAULT NULL,
  `INSTAGRAM` varchar(60) DEFAULT NULL,
  `NUM_VISITAS` int(5) DEFAULT 0,
  `NUM_REDES` int(5) NOT NULL DEFAULT 0,
  `NUM_SMS` int(5) NOT NULL DEFAULT 0,
  `NUM_COR` int(5) NOT NULL DEFAULT 0,
  `ESTATUS` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_PERSONA`, `ID_TIPO`, `ID_SERVICIOS`, `ID_LUGAR`, `NOMBRE`, `EDAD`, `CORREO`, `PSWD`, `DESCRIPCION`, `TELEFONO`, `CELULAR`, `AN_EXPERIENCIA`, `FOTO`, `FACEBOOK`, `INSTAGRAM`, `NUM_VISITAS`, `NUM_REDES`, `NUM_SMS`, `NUM_COR`, `ESTATUS`) VALUES
(1, 2, 6, 1, 'Edwin Hernandez', 21, 'fonsihernandez8@gmail.com', 'holacomoestas', 'Experto en chequeo y reparación de computadores personales', 3194977, 593996434838, 3, 'imagenes/fotos_perfil/Edwin.jpg', 'https://www.facebook.com/profile.php?id=100001976085138', 'https://www.instagram.com/fonsiher99/', 14, 2, 2, 0, 1),
(2, 2, 4, 2, 'Pepe Perez', 28, 'pepeperez@gmail.com', '12345', 'Conductor Profesional, con experiencia en camiones grandes. ', 0, NULL, 4, NULL, NULL, NULL, 7, 0, 0, 0, 1),
(4, 2, 5, 4, 'Martha Kent', 18, 'martak@gmail.com', 'superman', ' Cuidadosa con sus hijos y experta en juegos lúdicos para la memoria. ', 3194409, 593593985519588, 2, 'imagenes//fotos_perfil//martha.jpg', NULL, NULL, 11, 4, 1, 0, 1),
(7, 1, 1, 1, 'Administrador del Sistema', 21, 'admin@tecontrato.com', 'admin123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 1),
(8, 2, 3, 2, 'Amarilis Cueva', 21, 'ama21@yahoo.com', 'ama123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0),
(10, 2, 2, 1, 'Luis Moya', 50, 'luism@hotmail.com', 'lucho2406', NULL, NULL, NULL, 18, NULL, NULL, NULL, 5, 0, 0, 1, 1),
(11, 2, 4, 2, 'Victoria Diaz', 26, 'vickyd@yahoo.com', 'vicky123', NULL, NULL, NULL, 5, NULL, NULL, NULL, 2, 0, 0, 0, 1),
(12, 2, 6, 4, 'Jaime Lopez', 29, 'jaimito44@gmail.com', 'jaime44', '', 3194409, 5930984667732, 8, NULL, NULL, NULL, 3, 0, 1, 0, 1),
(13, 2, 1, 3, 'Carlos Jarrín', 35, 'carlosj@hotmail.com', 'carlitos123', NULL, NULL, NULL, 10, NULL, NULL, NULL, 1, 0, 0, 0, 1),
(14, 2, 4, 1, 'Israel Medina', 42, 'isramed@gmail.com', 'israel123', NULL, NULL, NULL, 3, NULL, NULL, NULL, 3, 0, 0, 0, 1),
(15, 2, 2, 3, 'Gonzalo Pozo', 33, 'gozalitop@outlook.com', 'gonzalo123', NULL, NULL, NULL, 9, NULL, NULL, NULL, 1, 0, 0, 0, 1),
(16, 2, 1, 1, 'Hugo Rivas', 40, 'hugorivas1@hotmail.com', 'hugo2406', NULL, NULL, NULL, 20, NULL, NULL, NULL, 2, 0, 0, 0, 1),
(17, 2, 5, 2, 'María Aguirre', 22, 'maryagui@gmail.com', 'mary123', NULL, NULL, NULL, 3, NULL, NULL, NULL, 1, 0, 0, 0, 1),
(18, 2, 3, 2, 'Rodrigo Juárez', 36, 'rodijj@gmail.com', 'rodri123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 1),
(19, 2, 3, 4, 'Mario Vivanco', 41, 'mvivanco@hotmail.com', 'mario123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 1),
(20, 2, 3, 1, 'Luis Obando', 24, 'luiso@yahoo.com', 'luiso123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 1),
(21, 2, 5, 1, 'Yadira Diaz', 30, 'yadidiaz@gmail.com', 'yadi123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 1),
(22, 2, 1, 4, 'Vinicio Vinueza', 38, 'viniciov33@outlook.com', 'vinicio123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 1),
(23, 2, 2, 2, 'William Robles', 25, 'willyrobles@yahoo.com', 'willy123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 1),
(24, 2, 6, 3, 'Valentina Gallardo ', 27, 'valegallardo@gmail.com', 'valeg123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formacion`
--
ALTER TABLE `formacion`
  ADD PRIMARY KEY (`ID_FORMACION`);

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`ID_LUGAR`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`ID_SERVICIOS`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`ID_TIPO`);

--
-- Indices de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  ADD PRIMARY KEY (`ID_TRABAJO`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_PERSONA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formacion`
--
ALTER TABLE `formacion`
  MODIFY `ID_FORMACION` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `ID_LUGAR` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `ID_SERVICIOS` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `ID_TIPO` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  MODIFY `ID_TRABAJO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_PERSONA` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
