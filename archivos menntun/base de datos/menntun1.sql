-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2023 a las 10:04:26
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
-- Base de datos: `menntun1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `cod_actividad` int(11) NOT NULL,
  `actividad` varchar(30) DEFAULT NULL,
  `cod_asignatura` int(11) NOT NULL,
  `id_documento_doc` bigint(11) NOT NULL,
  `id_documento` bigint(11) NOT NULL,
  `cod_nota` int(11) NOT NULL,
  `cod_periodo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`cod_actividad`, `actividad`, `cod_asignatura`, `id_documento_doc`, `id_documento`, `cod_nota`, `cod_periodo`) VALUES
(600, 'Célula animal', 901, 1734576287, 998675340, 516, 1101),
(603, 'Célula animal', 913, 7899677866, 1000727700, 516, 1101),
(604, 'Célula animal', 910, 7899677866, 1016898908, 516, 1101),
(605, 'Célula animal', 905, 1222433744, 111011000, 516, 1101),
(606, 'Célula animal', 903, 9000756565, 998675340, 516, 1101),
(607, 'Célula animal', 902, 7500123874, 875009908, 516, 1101),
(608, 'Célula animal', 907, 1927823928, 1000727700, 516, 1101),
(609, 'Célula animal', 904, 1222433744, 1016898908, 516, 1101),
(610, 'Célula animal', 900, 7899677866, 111011000, 516, 1101),
(611, 'Célula animal', 911, 9000756565, 1000727700, 516, 1101),
(612, 'Célula animal', 914, 1016712019, 110077908, 516, 1101),
(613, 'Célula animal', 912, 1734576287, 1000270912, 516, 1101),
(614, 'Célula animal', 908, 7899677866, 875009908, 516, 1101),
(615, 'Célula animal', 910, 1016712019, 875009908, 516, 1101);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `cod_admin` bigint(11) NOT NULL,
  `primer_nombre_admin` varchar(40) DEFAULT NULL,
  `segundo_nombre_admin` varchar(40) NOT NULL,
  `primer_apellido_admin` varchar(40) NOT NULL,
  `segundo_apellido_admin` varchar(40) NOT NULL,
  `correo_admin` varchar(40) DEFAULT NULL,
  `contraseña_admin` varchar(255) DEFAULT NULL,
  `cod_t_d_` int(11) NOT NULL,
  `cod_rol` int(11) NOT NULL,
  `estado` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`cod_admin`, `primer_nombre_admin`, `segundo_nombre_admin`, `primer_apellido_admin`, `segundo_apellido_admin`, `correo_admin`, `contraseña_admin`, `cod_t_d_`, `cod_rol`, `estado`) VALUES
(1233997101, 'Luis', 'Miguel', 'Rey', 'Sol', 'Luismi@gmail.com', '$2y$10$I626EeEN.hoKa5DRvpmKQu.5Wp8.7JFVvxGP7sDr.VvpGwUw8P.tK', 700, 302, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_documento` bigint(11) NOT NULL,
  `cod_t_d_` int(11) NOT NULL,
  `primer_nombre` varchar(40) DEFAULT NULL,
  `segundo_nombre` varchar(40) NOT NULL,
  `primer_apellido` varchar(40) DEFAULT NULL,
  `segundo_apellido` varchar(40) NOT NULL,
  `tel_cel` bigint(10) DEFAULT NULL,
  `correo` varchar(40) DEFAULT NULL,
  `contraseña_alum` varchar(255) DEFAULT NULL,
  `cod_cursos` int(11) NOT NULL,
  `cod_rol` int(11) DEFAULT NULL,
  `estado` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_documento`, `cod_t_d_`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `tel_cel`, `correo`, `contraseña_alum`, `cod_cursos`, `cod_rol`, `estado`) VALUES
(110077908, 702, 'Danna      ', 'Estefany      ', 'López      ', 'Quiñonez      ', 3142301739, 'sarahmag32@gmail.com', '$2y$10$r0BSVmy77D7f.BvABqM3.ORSUwOW./..LJ8imk3VMk1vSF9R9G27.', 208, 300, 0),
(111011000, 702, 'Maria  ', ' Julia', 'Martínes            ', 'Cácerez   ', 3216549878, 'lucero@gmail.com  ', '$2y$10$8XyepdNotdkoEkvNvyWsPO6mPDQmpDNyriMjtJRdb9Exti3iAf3tS', 200, 300, 1),
(875009908, 700, 'Ana ', 'Monte ', 'Morales ', 'Cardozo', 3112223344, 'anita@gmail.com ', '$2y$10$BOlxS5hz917PoRUsXcgq4OXyNq2QiWagRjejTqbDyoL245RVpdjhW', 205, 300, 1),
(998675340, 700, 'Juan', 'Danilo', 'Lopez', 'Garzón', 3145556765, 'garzon@gmail.com', '$2y$10$Jze1KZaH3WQKTKm5uLok1O9IbWL4GDbx9IWwxO2kSnyVom0B9uO/y', 207, 300, 1),
(1000270912, 700, 'Brandon ', 'Steven', 'Motta ', 'Montealegre ', 3143789217, 'mottita@gmail.com ', '$2y$10$Q8EDDH59vkJTIjXd61G0sOmIkWsASBBq.cXkIJYfbRh8wBBU23Geq', 211, 300, 1),
(1000727700, 702, 'Brandon  ', 'Madiguel  ', 'Motta  ', 'Useche  ', 3012814712, 'bmmotta@gmail.com  ', '123456789', 205, 300, 1),
(1016898908, 701, 'Sarah  ', 'Madiguel    ', 'Useche   ', 'Monteale ', 2142301739, 'sarahmag@gmail.com    ', '1234567890', 211, 300, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `cod_asignatura` int(11) NOT NULL,
  `asignatura` varchar(25) DEFAULT NULL,
  `estado` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`cod_asignatura`, `asignatura`, `estado`) VALUES
(900, 'Inglés', 1),
(901, 'Español', 1),
(902, 'Danzas', 1),
(903, 'Musica', 1),
(904, 'Fisica', 1),
(905, 'Quimica', 0),
(906, 'Tecnologia', 0),
(907, 'Filosofia', 0),
(908, 'Etica', 0),
(909, 'Religión', 0),
(910, 'Biología', 0),
(911, 'Sociales', 0),
(912, 'Ed. Fisica', 0),
(913, 'Matematicas', 0),
(914, 'Democracia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `cod_cursos` int(11) NOT NULL,
  `curso` varchar(20) DEFAULT NULL,
  `cod_grado` int(11) NOT NULL,
  `estado` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`cod_cursos`, `curso`, `cod_grado`, `estado`) VALUES
(200, '601', 100, 1),
(201, '602', 100, 1),
(202, '701', 101, 1),
(203, '702', 101, 1),
(204, '801', 102, 1),
(205, '802', 102, 1),
(206, '901', 103, 0),
(207, '902', 103, 0),
(208, '1001', 104, 0),
(209, '1002', 104, 0),
(210, '1101', 105, 0),
(211, '1102', 105, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id_documento_doc` bigint(11) NOT NULL,
  `cod_t_d_` int(11) NOT NULL,
  `primer_nombre_doc` varchar(40) DEFAULT NULL,
  `segundo_nombre_doc` varchar(40) NOT NULL,
  `primer_apellido_doc` varchar(40) DEFAULT NULL,
  `segundo_apellido_doc` varchar(40) NOT NULL,
  `correo_doc` varchar(40) DEFAULT NULL,
  `contraseña_doc` varchar(255) DEFAULT NULL,
  `cod_asignatura` int(11) NOT NULL,
  `cod_rol` int(11) NOT NULL,
  `estado` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id_documento_doc`, `cod_t_d_`, `primer_nombre_doc`, `segundo_nombre_doc`, `primer_apellido_doc`, `segundo_apellido_doc`, `correo_doc`, `contraseña_doc`, `cod_asignatura`, `cod_rol`, `estado`) VALUES
(122599635, 702, 'Andres', 'Joaquin', 'Perez', 'Sandoval', 'sandi238@hotmail.com', 'joacoo909', 900, 301, 0),
(1016712019, 701, 'Daniel            ', 'Steven            ', 'Casas      ', 'Pulido      ', 'daniel.casas@gmail.com', '$2y$10$XJCIdEePuaJ8buHxRHGAXuheZFdihucBlNREd30U4bmaYXaGDoP2q', 910, 301, 1),
(1036889746, 701, 'Martina', 'Angela', 'Mendoza', 'Ramirez', 'martita33@gmail.com', 'mart2003', 907, 301, 0),
(1222433744, 700, 'Geraldine', 'Nicole', 'Pallarez', 'Guio', 'lagisell2530@gmail.com', '$2y$10$p4fGgP0i1z4cPBhYEB2y/e6YCBmidR4IJprhh1FN8LagjSVNmaGKS', 906, 301, 1),
(1346356331, 702, 'Pedro', 'Samir', 'Pascal', 'Ozuna', 'pedron99@gmail.com', 'pedrinnin1234', 905, 301, 0),
(1734576287, 701, 'Cristian', 'Samuel', 'Montealegre', 'Rivera', 'samunevar555@gmail.com', '$2y$10$3CHmKsuIfY8dRADCJciLPeEst8.5nIhKrsLiWgsg8IX2pxzKYItqy', 910, 301, 1),
(1766549872, 701, 'Darwin', 'Alexander', 'Casillas', 'Gonzales', 'alexii345@gmail.com', 'irwin2389', 914, 301, 0),
(1927823928, 701, 'Diana', 'María', 'Ramírez', 'Rico', 'Dianaramirez@gmail.com', '$2y$10$I5ODePUxjGhKnaq/VNSIsu6KfgEKNg3K7GSIjtmu1sLZjiLGDNW9i', 900, 301, 1),
(7500123874, 701, 'Nataly', 'Giselle', 'Morales', 'Mora', 'naty20narji@gmail.com', '$2y$10$Qol6dxAA7BO72zlDlaDpSO3v9Eth8xfOpne6NKKn8dJ/LhggBCjzi', 913, 301, 0),
(7899677866, 701, 'Laura', 'Sofia', 'Carrillo', 'Pedraza', 'valensoyyo1@gmail.com', '$2y$10$cyS.XR4d4onb8hcTArPc4uUZeuYDf/8qIb.jm4W2u7ZQr6hKNsw0K', 901, 301, 1),
(9000756565, 702, 'Valentine', 'Francis', 'Toledo', 'Gómez', 'francis@gmail.com', '$2y$10$.E9DiJIdzMhoDH5d.zVPXOBzGVkmbuR4ni0qamYmoiveP9zGfWlxS', 903, 301, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `cod_grado` int(11) NOT NULL,
  `grado` varchar(20) DEFAULT NULL,
  `estado` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`cod_grado`, `grado`, `estado`) VALUES
(100, 'Sexto ', 0),
(101, 'Septimo', 0),
(102, 'Octavo ', 0),
(103, 'Noveno', 0),
(104, 'Decimo', 0),
(105, 'Once', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado_asignatura`
--

CREATE TABLE `grado_asignatura` (
  `cod_grado` int(11) NOT NULL,
  `cod_asignatura` int(11) NOT NULL,
  `estado` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grado_asignatura`
--

INSERT INTO `grado_asignatura` (`cod_grado`, `cod_asignatura`, `estado`) VALUES
(100, 900, 0),
(100, 901, 0),
(100, 903, 0),
(100, 906, 0),
(100, 908, 0),
(100, 909, 0),
(100, 910, 0),
(100, 911, 0),
(100, 912, 0),
(100, 913, 0),
(102, 900, 0),
(102, 901, 0),
(102, 902, 0),
(102, 904, 0),
(102, 906, 0),
(102, 908, 0),
(102, 909, 0),
(102, 910, 0),
(102, 911, 0),
(102, 912, 0),
(102, 913, 0),
(103, 900, 0),
(103, 901, 0),
(103, 902, 0),
(103, 904, 0),
(103, 905, 0),
(103, 906, 0),
(103, 908, 0),
(103, 909, 0),
(103, 911, 0),
(103, 912, 0),
(103, 913, 0),
(104, 900, 0),
(104, 901, 0),
(104, 902, 0),
(104, 904, 0),
(104, 905, 0),
(104, 906, 0),
(104, 907, 0),
(104, 909, 0),
(104, 911, 0),
(104, 912, 0),
(104, 913, 0),
(105, 900, 0),
(105, 901, 0),
(105, 902, 0),
(105, 904, 0),
(105, 905, 0),
(105, 906, 0),
(105, 907, 0),
(105, 909, 0),
(105, 911, 0),
(105, 912, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `cod_horario` int(11) NOT NULL,
  `horario_inicial` time DEFAULT NULL,
  `horario_final` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `id_documento_doc` bigint(11) NOT NULL,
  `aula` varchar(10) NOT NULL,
  `cod_cursos` int(11) NOT NULL,
  `estado` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`cod_horario`, `horario_inicial`, `horario_final`, `fecha`, `id_documento_doc`, `aula`, `cod_cursos`, `estado`) VALUES
(419, '10:00:00', '12:00:00', '2023-03-14', 1016712019, 'A-01', 200, 0),
(420, '01:00:00', '02:00:00', '2023-03-14', 1016712019, 'A-01', 202, 0),
(421, '02:00:00', '04:00:00', '2023-03-14', 1016712019, 'A-01', 204, 0),
(423, '01:00:00', '02:00:00', '2023-03-14', 1927823928, 'A-02', 203, 0),
(424, '02:00:00', '04:00:00', '2023-03-14', 1927823928, 'A-02', 205, 0),
(425, '01:00:00', '02:00:00', '2023-03-16', 1016712019, 'A-01', 200, 0),
(428, '15:34:00', '16:34:00', '2023-03-15', 1016712019, 'A-01', 211, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `cod_nota` int(11) NOT NULL,
  `nota` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nota`
--

INSERT INTO `nota` (`cod_nota`, `nota`) VALUES
(500, '10'),
(501, '11'),
(502, '12'),
(503, '13'),
(504, '14'),
(505, '15'),
(506, '16'),
(507, '17'),
(509, '18'),
(510, '19'),
(511, '20'),
(512, '21'),
(513, '22'),
(514, '23'),
(515, '24'),
(516, '25'),
(517, '26'),
(518, '27'),
(519, '28'),
(520, '29'),
(521, '30'),
(522, '31'),
(523, '32'),
(524, '33'),
(525, '34'),
(526, '35'),
(527, '36'),
(528, '37'),
(529, '38'),
(530, '39'),
(531, '40'),
(532, '41'),
(533, '42'),
(534, '43'),
(535, '44'),
(536, '45'),
(537, '46'),
(538, '47'),
(539, '48'),
(540, '49'),
(541, '50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `cod_periodo` int(11) NOT NULL,
  `periodo` varchar(15) DEFAULT NULL,
  `estado` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`cod_periodo`, `periodo`, `estado`) VALUES
(1100, 'Primer periodo', 1),
(1101, 'Segundo periodo', 1),
(1102, 'Tercer Periodo ', 1),
(1103, 'Cuarto Periodo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promedio`
--

CREATE TABLE `promedio` (
  `id_promedio` int(11) NOT NULL,
  `id_documento` bigint(11) NOT NULL,
  `cod_asignatura` int(11) NOT NULL,
  `cod_periodo` int(11) NOT NULL,
  `promedio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `cod_rol` int(11) NOT NULL,
  `rol` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`cod_rol`, `rol`) VALUES
(300, 'Alumno'),
(301, 'Docente'),
(302, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `cod_t_d_` int(11) NOT NULL,
  `tipo_documento` varchar(30) NOT NULL,
  `estado` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`cod_t_d_`, `tipo_documento`, `estado`) VALUES
(700, 'Tarjeta de Identidad', 1),
(701, 'Cédula de Ciudadanía', 1),
(702, 'Cédula de Extranjería', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`cod_actividad`),
  ADD KEY `cod_asignatura` (`cod_asignatura`),
  ADD KEY `cod_periodo` (`cod_periodo`) USING BTREE,
  ADD KEY `id_documento` (`id_documento`) USING BTREE,
  ADD KEY `id_documento_doc` (`id_documento_doc`),
  ADD KEY `cod_nota` (`cod_nota`);

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`cod_admin`),
  ADD KEY `cod_rol` (`cod_rol`),
  ADD KEY `cod_t_d_` (`cod_t_d_`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `cod_cursos` (`cod_cursos`),
  ADD KEY `rol` (`cod_rol`),
  ADD KEY `cod_t_d_` (`cod_t_d_`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`cod_asignatura`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`cod_cursos`),
  ADD KEY `cod_grado` (`cod_grado`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id_documento_doc`),
  ADD KEY `cod_asignatura` (`cod_asignatura`),
  ADD KEY `cod_rol` (`cod_rol`),
  ADD KEY `cod_t_d_` (`cod_t_d_`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`cod_grado`);

--
-- Indices de la tabla `grado_asignatura`
--
ALTER TABLE `grado_asignatura`
  ADD KEY `gradoasig_ibfk_1` (`cod_grado`),
  ADD KEY `gradoasig_ibfk_2` (`cod_asignatura`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`cod_horario`),
  ADD UNIQUE KEY `uk_horario` (`fecha`,`horario_inicial`,`horario_final`,`aula`,`cod_cursos`),
  ADD KEY `id_documento_doc` (`id_documento_doc`),
  ADD KEY `cursos_ibfk_2` (`cod_cursos`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`cod_nota`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`cod_periodo`);

--
-- Indices de la tabla `promedio`
--
ALTER TABLE `promedio`
  ADD PRIMARY KEY (`id_promedio`),
  ADD KEY `id_documento` (`id_documento`),
  ADD KEY `cod_asignatura` (`cod_asignatura`),
  ADD KEY `cod_periodo` (`cod_periodo`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`cod_rol`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`cod_t_d_`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `cod_actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1044;

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `cod_admin` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1233997102;

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `cod_asignatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=917;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `cod_cursos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `cod_grado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `cod_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=432;

--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
  MODIFY `cod_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=553;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `cod_periodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1106;

--
-- AUTO_INCREMENT de la tabla `promedio`
--
ALTER TABLE `promedio`
  MODIFY `id_promedio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `cod_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=303;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `cod_t_d_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=703;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `actividad_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `alumno` (`id_documento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `actividad_ibfk_2` FOREIGN KEY (`cod_periodo`) REFERENCES `periodo` (`cod_periodo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `actividad_ibfk_3` FOREIGN KEY (`cod_asignatura`) REFERENCES `asignatura` (`cod_asignatura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `actividad_ibfk_4` FOREIGN KEY (`id_documento_doc`) REFERENCES `docente` (`id_documento_doc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `actividad_ibfk_5` FOREIGN KEY (`cod_nota`) REFERENCES `nota` (`cod_nota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`cod_rol`) REFERENCES `rol` (`cod_rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `administrador_ibfk_2` FOREIGN KEY (`cod_t_d_`) REFERENCES `tipo_documento` (`cod_t_d_`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`cod_cursos`) REFERENCES `cursos` (`cod_cursos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`cod_rol`) REFERENCES `rol` (`cod_rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_ibfk_3` FOREIGN KEY (`cod_t_d_`) REFERENCES `tipo_documento` (`cod_t_d_`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`cod_grado`) REFERENCES `grado` (`cod_grado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `docente_ibfk_2` FOREIGN KEY (`cod_asignatura`) REFERENCES `asignatura` (`cod_asignatura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `docente_ibfk_3` FOREIGN KEY (`cod_rol`) REFERENCES `rol` (`cod_rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `docente_ibfk_4` FOREIGN KEY (`cod_t_d_`) REFERENCES `tipo_documento` (`cod_t_d_`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grado_asignatura`
--
ALTER TABLE `grado_asignatura`
  ADD CONSTRAINT `grado_asignatura_ibfk_1` FOREIGN KEY (`cod_grado`) REFERENCES `grado` (`cod_grado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grado_asignatura_ibfk_2` FOREIGN KEY (`cod_asignatura`) REFERENCES `asignatura` (`cod_asignatura`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_2` FOREIGN KEY (`id_documento_doc`) REFERENCES `docente` (`id_documento_doc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horario_ibfk_3` FOREIGN KEY (`cod_cursos`) REFERENCES `cursos` (`cod_cursos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `promedio`
--
ALTER TABLE `promedio`
  ADD CONSTRAINT `promedio_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `alumno` (`id_documento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `promedio_ibfk_2` FOREIGN KEY (`cod_asignatura`) REFERENCES `actividad` (`cod_asignatura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `promedio_ibfk_3` FOREIGN KEY (`cod_periodo`) REFERENCES `periodo` (`cod_periodo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
