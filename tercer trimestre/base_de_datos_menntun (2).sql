-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2022 a las 23:48:57
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base de datos menntun`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_y_asignatura`
--

CREATE TABLE `alumno_y_asignatura` (
  `alumno_alum_cod_info` tinyint(4) NOT NULL,
  `alumno_p_cod_persona` tinyint(4) NOT NULL,
  `asignatura_cod_asignatura` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_y_clases`
--

CREATE TABLE `alumno_y_clases` (
  `alumno_alum_cod_info` tinyint(4) NOT NULL,
  `alumno_p_cod_persona` tinyint(4) NOT NULL,
  `clases_cod_info_clase` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_y_notas`
--

CREATE TABLE `alumno_y_notas` (
  `alumno_alum_cod_info` tinyint(4) NOT NULL,
  `alumno_p_cod_persona` tinyint(4) NOT NULL,
  `notas_cod_nota` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `cod_asignatura` tinyint(4) NOT NULL,
  `asignatura` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `cod_nota` tinyint(4) NOT NULL,
  `calificacion` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `cod_info_clase` tinyint(4) NOT NULL,
  `curso` varchar(10) NOT NULL,
  `jornada` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `cod_gradoi` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada`
--

CREATE TABLE `jornada` (
  `cod_info_jorn_` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo de documento`
--

CREATE TABLE `tipo de documento` (
  `cod_t_d` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` tinyint(4) NOT NULL,
  `p_nombre_usuario` varchar(20) DEFAULT NULL,
  `s_nombre_usuario` varchar(20) DEFAULT NULL,
  `p_apellido_usuario` varchar(25) DEFAULT NULL,
  `s_apellido_usuario` varchar(25) DEFAULT NULL,
  `telefono` bigint(11) NOT NULL,
  `email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno_y_asignatura`
--
ALTER TABLE `alumno_y_asignatura`
  ADD PRIMARY KEY (`alumno_alum_cod_info`),
  ADD KEY `alumno_p_cod_persona` (`alumno_p_cod_persona`,`asignatura_cod_asignatura`);

--
-- Indices de la tabla `alumno_y_clases`
--
ALTER TABLE `alumno_y_clases`
  ADD PRIMARY KEY (`alumno_alum_cod_info`),
  ADD KEY `alumno_p_cod_persona` (`alumno_p_cod_persona`,`clases_cod_info_clase`);

--
-- Indices de la tabla `alumno_y_notas`
--
ALTER TABLE `alumno_y_notas`
  ADD PRIMARY KEY (`alumno_alum_cod_info`),
  ADD KEY `alumno_p_cod_persona` (`alumno_p_cod_persona`,`notas_cod_nota`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`cod_asignatura`),
  ADD UNIQUE KEY `asignatura_4` (`asignatura`),
  ADD KEY `asignatura` (`asignatura`),
  ADD KEY `asignatura_2` (`asignatura`),
  ADD KEY `asignatura_3` (`asignatura`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`cod_nota`);

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`cod_info_clase`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`cod_gradoi`);

--
-- Indices de la tabla `jornada`
--
ALTER TABLE `jornada`
  ADD PRIMARY KEY (`cod_info_jorn_`);

--
-- Indices de la tabla `tipo de documento`
--
ALTER TABLE `tipo de documento`
  ADD PRIMARY KEY (`cod_t_d`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `cod_info_clase` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `cod_gradoi` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo de documento`
--
ALTER TABLE `tipo de documento`
  MODIFY `cod_t_d` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno_y_asignatura`
--
ALTER TABLE `alumno_y_asignatura`
  ADD CONSTRAINT `alumno_y_asignatura_ibfk_1` FOREIGN KEY (`alumno_alum_cod_info`) REFERENCES `usuario` (`cod_usuario`);

--
-- Filtros para la tabla `alumno_y_clases`
--
ALTER TABLE `alumno_y_clases`
  ADD CONSTRAINT `alumno_y_clases_ibfk_1` FOREIGN KEY (`alumno_alum_cod_info`) REFERENCES `usuario` (`cod_usuario`);

--
-- Filtros para la tabla `alumno_y_notas`
--
ALTER TABLE `alumno_y_notas`
  ADD CONSTRAINT `alumno_y_notas_ibfk_1` FOREIGN KEY (`alumno_alum_cod_info`) REFERENCES `usuario` (`cod_usuario`);

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `asignatura_ibfk_1` FOREIGN KEY (`cod_asignatura`) REFERENCES `alumno_y_asignatura` (`alumno_alum_cod_info`);

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_ibfk_1` FOREIGN KEY (`cod_nota`) REFERENCES `usuario` (`cod_usuario`);

--
-- Filtros para la tabla `clases`
--
ALTER TABLE `clases`
  ADD CONSTRAINT `clases_ibfk_1` FOREIGN KEY (`cod_info_clase`) REFERENCES `alumno_y_clases` (`alumno_alum_cod_info`);

--
-- Filtros para la tabla `grado`
--
ALTER TABLE `grado`
  ADD CONSTRAINT `grado_ibfk_1` FOREIGN KEY (`cod_gradoi`) REFERENCES `usuario` (`cod_usuario`);

--
-- Filtros para la tabla `jornada`
--
ALTER TABLE `jornada`
  ADD CONSTRAINT `jornada_ibfk_1` FOREIGN KEY (`cod_info_jorn_`) REFERENCES `usuario` (`cod_usuario`);

--
-- Filtros para la tabla `tipo de documento`
--
ALTER TABLE `tipo de documento`
  ADD CONSTRAINT `tipo de documento_ibfk_1` FOREIGN KEY (`cod_t_d`) REFERENCES `usuario` (`cod_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
