-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2022 a las 16:56:02
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegio_comunitario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `curso_seccion` int(10) NOT NULL,
  `curso_materia` varchar(4) NOT NULL,
  `curso_numero` int(4) NOT NULL,
  `curso_name` varchar(55) NOT NULL,
  `curso_disciplina` varchar(55) NOT NULL,
  `prof_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`curso_seccion`, `curso_materia`, `curso_numero`, `curso_name`, `curso_disciplina`, `prof_id`) VALUES
(11123, 'CNAT', 1000, 'Introducción a la Naturaleza', 'Ciencias Naturales', 9),
(11124, 'CNAT', 2000, 'Manejo de la Naturaleza', 'Ciencias Naturales', NULL),
(11125, 'CNAT', 3000, 'Conservación de la Naturaleza', 'Ciencias Naturales', 9),
(11126, 'CNAT', 4000, 'Rehabilitación de la Naturaleza', 'Ciencias Naturales', NULL),
(22123, 'CSOC', 1000, 'Introducción a la Sociedad', 'Ciencias Sociales', 10),
(22124, 'CSOC', 2000, 'Manejo de emociones en Sociedad', 'Ciencias Sociales', NULL),
(22125, 'CSOC', 3000, 'Conservación de Familia', '', NULL),
(22126, 'CSOC', 4000, 'Práctica y Etica Social', 'Ciencias Sociales', NULL),
(33123, 'COMP', 1000, 'Introducción a las Computadoras', 'Ciencias y Tecnología', NULL),
(33124, 'COMP', 2000, 'Uso y Manejo de la Computadora', 'Ciencias y Tecnología', NULL),
(33125, 'COMP', 3000, 'Conservación de Recursos', 'Ciencias y Tecnología', NULL),
(33126, 'COMP', 4000, 'Ingeniería Computacional', 'Ciencias y Tecnología', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disciplina`
--

CREATE TABLE `disciplina` (
  `disc_id` int(15) NOT NULL,
  `disc_nombre` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `disciplina`
--

INSERT INTO `disciplina` (`disc_id`, `disc_nombre`) VALUES
(13, 'Ciencias Sociales'),
(14, 'Ciencias Naturales'),
(15, 'Ciencias y Tecnología');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `prof_id` int(5) NOT NULL,
  `prof_name` varchar(55) NOT NULL,
  `prof_lname` varchar(55) NOT NULL,
  `prof_availability` varchar(55) NOT NULL,
  `prof_phone` varchar(55) NOT NULL,
  `prof_email` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`prof_id`, `prof_name`, `prof_lname`, `prof_availability`, `prof_phone`, `prof_email`) VALUES
(9, 'Eric', 'Perez', 'Mañana (7am - 11am)', '(787) 111-2222', 'eperez@ejemplo.com'),
(10, 'Pepito', 'Ortega', 'Tarde (12pm - 4pm)', '(787) 111-2222', 'portega@ejemplo.com'),
(11, 'Alfredo', 'Detal', 'Noche (4pm - 8pm)', '(787) 111-1234', 'adetal@ejemplo.com'),
(12, 'Fulano', 'Gonzalez', 'Mañana (7am - 11am)', '(787) 111-4321', 'fgonzalez@ejemplo.com'),
(13, 'Pepito', 'Perez', 'Tarde (12pm - 4pm)', '(787) 111-2222', 'pperez@ejemplo.com'),
(15, 'Pepito', 'Perez', 'Tarde (12pm - 4pm)', '(787) 111-2222', 'pperez@ejemplo.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
(8, 813922186, 'Manuel', '1234', '2021-05-11 01:10:51'),
(9, 5721791615116, 'Cesar', '1234', '2021-05-11 01:14:26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`curso_seccion`),
  ADD KEY `prof_id` (`prof_id`);

--
-- Indices de la tabla `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`disc_id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`prof_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name_2` (`user_name`),
  ADD UNIQUE KEY `user_name_3` (`user_name`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `disc_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `prof_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`prof_id`) REFERENCES `profesores` (`prof_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
